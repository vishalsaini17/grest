<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Cart;
use PaytmWallet;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderPlaced;
use Auth;


class PaytmController extends Controller {
  /**
   * Redirect the user to the Payment Gateway.
   *
   * @return Response
   */
  // public function getorder(){

  // }


  public function paytmPayment(Request $req) {
  // dd(session('orderId'));
    $order = Order::where('id', session('orderId'))->first();

    // dd($order);

    $payment = PaytmWallet::with('receive');
    // **********Actual***********
    $payment->prepare([
      'order'         => $order->order_number,
      'user'          => $order->user_id,
      'mobile_number' => $order->phone,
      'email'         => $order->email,
      'amount'        => round($order->total_amount),
      'callback_url'  => route('paytm.callback'),
    ]);

    // ************For testing***********
    // $payment->prepare([
    //   'order'         => 'abcxeztesting',
    //   'user'          => 1,
    //   'mobile_number' => 1234567890,
    //   'email'         => 'abc@xyz.com',
    //   'amount'        => 2,
    //   'callback_url'  => route('paytm.callback'),
    // ]);
    
    // dd($payment);

    return $payment->receive();
  }

  /**
   * Obtain the payment information.
   *
   * @return Object
   */
  public function paytmCallback() {
    $order = Order::where('id', session('orderId'))->first();
    // dd($order);
    $transaction = PaytmWallet::with('receive');
    $response = $transaction->response(); // To get raw response as array
    //Check out response parameters sent by paytm here -> http://paywithpaytm.com/developer/paytm_api_doc?target=interpreting-response-sent-by-paytm
    $transaction->getResponseMessage(); //Get Response Message If Available
    //get important parameters via public methods
    $transaction->getOrderId(); // Get order id
    $transaction->getTransactionId(); // Get transaction id

    if ($transaction->isSuccessful()) {
      //Transaction Successful
      request()->session()->flash('success','Your order has been placed.');
      Cart::where('user_id', $order->user_id)->where('order_id', null)->update(['order_id' => $order->id]);
      Mail::to($order->email)->send(new OrderPlaced($order));
      $order = new \stdClass();
      $order->payment_status = 'paid';
      session()->forget('coupon');
      return redirect('user/');
    } else if ($transaction->isFailed()) {
      //Transaction Failed
      $order = new \stdClass();
      $order->payment_status = 'Unpaid';
      request()->session()->flash('error','Payment filed, please try again.');
      return redirect('checkout');
    } else if ($transaction->isOpen()) {
      //Transaction Open/Processing
      return view('payment.payment-fail');
    }

  }

  /**
   * Paytm Payment Page
   *
   * @return Object
   */
  public function purchasePage() {
    return view('payment.payment-page');
  }
}
