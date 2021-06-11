<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Cart;
use PaytmWallet;

class PaytmController extends Controller {
  /**
   * Redirect the user to the Payment Gateway.
   *
   * @return Response
   */
  // public function getData(){

  // }


  public function paytmPayment(Request $req) {
  // dd(session('orderId'));
    $data = Order::where('id', session('orderId'))->first();

    // dd($data);

    $payment = PaytmWallet::with('receive');
    // **********Actual***********
    $payment->prepare([
      'order'         => $data->order_number,
      'user'          => $data->user_id,
      'mobile_number' => $data->phone,
      'email'         => $data->email,
      'amount'        => $data->total_amount,
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
    $data = Order::where('id', session('orderId'))->first();

    $transaction = PaytmWallet::with('receive');
    $response = $transaction->response(); // To get raw response as array
    //Check out response parameters sent by paytm here -> http://paywithpaytm.com/developer/paytm_api_doc?target=interpreting-response-sent-by-paytm
    $transaction->getResponseMessage(); //Get Response Message If Available
    //get important parameters via public methods
    $transaction->getOrderId(); // Get order id
    $transaction->getTransactionId(); // Get transaction id

    if ($transaction->isSuccessful()) {
      //Transaction Successful
      // dd('transaction sucess');
      request()->session()->flash('success','Your order has been placed.');
      $cart = Cart::where('user_id', $data->user_id)->get();
      foreach ($cart as $item) {
        $item->delete();
      }
      $data = new \stdClass();
      $data->payment_status = 'paid';
      return redirect('user/');
    } else if ($transaction->isFailed()) {
      //Transaction Failed
      $data = new \stdClass();
      $data->payment_status = 'Unpaid';
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
