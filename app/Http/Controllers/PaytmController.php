<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PaytmWallet;

class PaytmController extends Controller {
  /**
   * Redirect the user to the Payment Gateway.
   *
   * @return Response
   */
  public function paytmPayment(Request $req) {
    $payment = PaytmWallet::with('receive');
    $orderId = time() .$req->order_id . mt_rand() ;
    // dd($orderId);
    $payment->prepare([
      'order'         => $orderId,
      'user'          => $req->user_id,
      'mobile_number' => $req->phone,
      'email'         => auth()->user()->email,
      'amount'        => $req->amount,
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
      return view('payment.payment-success');
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
  public function paytmPurchase() {
    return view('payment.payment-page');
  }
}
