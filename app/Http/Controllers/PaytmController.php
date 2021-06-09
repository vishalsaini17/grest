<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
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
    // $orderId = time() .$req->order_id . mt_rand() ;
    // $payment->prepare([
    //   'order'         => $data->order_number,
    //   'user'          => $data->user_id,
    //   'mobile_number' => $data->phone,
    //   'email'         => $data->email,
    //   'amount'        => $data->total_amount,
    //   'callback_url'  => route('paytm.callback'),
    // ]);

    $payment->prepare([
      'order'         => 'abcxeztesting',
      'user'          => 1,
      'mobile_number' => 1234567890,
      'email'         => 'abc@xyz.com',
      'amount'        => 2,
      'callback_url'  => route('paytm.callback'),
    ]);
    // dd($payment);

    return $payment->receive();
  }

  /**
   * Obtain the payment information.
   *
   * @return Object
   */
  public function paytmCallback() {
    $transaction = PaytmWallet::with('receive');
    $response = $transaction->response(); // To get raw response as array
    //Check out response parameters sent by paytm here -> http://paywithpaytm.com/developer/paytm_api_doc?target=interpreting-response-sent-by-paytm
    $transaction->getResponseMessage(); //Get Response Message If Available
    //get important parameters via public methods
    $transaction->getOrderId(); // Get order id
    $transaction->getTransactionId(); // Get transaction id

    if ($transaction->isSuccessful()) {
      //Transaction Successful
      request()->session()->flash('success','Your order has been placed. please wait.');
      return view('cart');
    } else if ($transaction->isFailed()) {
      //Transaction Failed
      return view('payment.payment-fail');
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
