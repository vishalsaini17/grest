@extends('frontend.layouts.master')

@section('title',' Privacy Policy')

@section('main-content')
		<section class="all-policy">
			<div class="container my-5">
				<x-policy-navbar-comp />

				<div class="cancel">
					<h3 class="mt-4">Cancellation Policy</h3>
					<div class="row">
						<div class=" col-10 mx-auto text-justify">
							<div class="content">
								<p>Grest ensures that your order is safely delivered to you within the promised delivery timeline. However, if
									you have ordered a wrong product you may cancel the order through your Grest Account.</p>
								<p><strong>ORDER CANCELLATION BY GREST</strong></p>
								<p>Under some rare situations, Grest can also raise an order cancellation request.</p>
								<p><strong>These situations could be</strong></p>
								<ul>
									<li>Product out of stock</li>
									<li>Restrictions on the number of products you can order, as per Terms &amp; Conditions of any
										Offer/Discount</li>
									<li>Incorrect pricing or description of the product</li>
									<li>Payment fraud suspicion by our Credit &amp; Fraud Avoidance Department</li>
									<li>Incorrect or Incomplete Buyer's Address</li>
									<li>Non serviceability of Buyer&rsquo;s address by our courier partners.</li>
								</ul>
								<p><strong>Frequently Asked Questions</strong></p>
								 <p><strong>Ques: How can I cancel my order?</strong></p>
								<p>Ans: You can cancel your order if it is not shipped (COD Order Only). Please login to your Grest account
									for initiating the cancellation &amp; follow the given process:</p>
									&nbsp; &nbsp;	<p><strong>Sign-In &gt; My Account &gt; Order History &gt; Cancellation Request.</strong></p><br>
								<p><strong>Ques: Can I modify my order?</strong></p>
								<p>Ans: Yes, you can modify your order as long as it has not been shipped &amp; available with the same price.
									Kindly contact us at <a href="{{route('contact')}}" class="red-link">Grest.in/Contact</a> for any modification.</p><br>
								<p><strong>Ques: Can I change the quantity of my order?</strong></p>
								<p>Ans: You may request to modify your order before it has been shipped. You can track your order status at
									Grest.in/track order</p><br>
								<p><strong>Ques: COD Orders:</strong></p>
								<p>Ans: It is relatively simple to change the quantity of COD orders as the payment will be collected at the
									time of delivery.</p><br>
								<p><strong>Ques: Prepaid Orders:</strong></p>
								<p>Ans: If you wish to reduce the quantity of a prepaid order, contact us at <a href="{{route('contact')}}" class="red-link">Grest.in/Contact</a>.</p><br>
								<p><strong>Please Note:</strong></p>
								<ul>
									<li>If it is Prepaid Order, the amount will be refunded to you within 10 working days, in accordance with
										our Policy. A cancellation request cannot be made for Prepaid.</li>
								</ul>
							</div>
						</div>
					</div>
				</div>


		</div>
		</section>
@endsection