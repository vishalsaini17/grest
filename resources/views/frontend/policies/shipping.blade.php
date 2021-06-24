@extends('frontend.layouts.master')

@section('title',' Privacy Policy')

@section('main-content')
		<section class="all-policy">
			<div class="container my-5">
				<x-policy-navbar-comp />

				<div class="shipping">
					<h3 class="mt-4">Shipping Policy</h3>
					<div class="row">
						<div class=" col-10 mx-auto text-justify">
							<div class="content">
								<p>Grest promises 'No Anxiety Shipping' for all the products that you order. We ensure this by bringing
									together critical elements of shipment such as Packaging, Timely Delivery, Order Status Updates and Support
									from our trusted Logistics Partners.</p>
								<p>So once you have placed an order, rest assured as we will look after everything. Also, timely delivery of
									the order is our utmost priority however, actual delivery depends upon availability of the product, your
									shipping address etc. We have collaborated with top Courier and Logistics Partners to make sure that you
									receive your order on time. Each order is usually processed within 48 hours and we update you at every step,
									i.e. when the order is placed, processed, shipped and delivered. If you have any query related to shipping
									process, feel free to reach our customer support.</p>
								<h4 class="mt-4">Frequently Asked Questions</h4>
								<p><strong>Ques: How can I cancel my order?</strong></p>
								<p><strong>Ans: </strong>You can check the status of your order at Grest <a
										href='{{route('order.track')}}'>click here to track order</a>. We share timely updates about your
									order status via Email / SMS. The updates will apprise you of order confirmation / processing / shipping /
									delivery.</p><br>
								<p><strong>Ques: How long does it take to deliver the product after it has been dispatched?</strong></p>
								<p><strong>Ans: </strong>It usually takes between 3 to 5 Business days to deliver the order after it has been
									dispatched. We will notify you on your registered contact details via Email / SMS about the tracking number
									and will also share courier/delivery partner details, once the order has been dispatched.</p>
								<p>If the order is not confirmed by you over the phone, the same will be cancelled.</p><br>
								<p><strong>Ques: How much do you charge for COD Orders?</strong></p>
								<p><strong>Ans: </strong>The COD charges are mentioned on the product page. The final amount that you see
									while placing the order at Grest.in would include the product and COD charges.</p>
								<p>For Cash on Delivery (COD) orders, the amount to be paid is mentioned on the package. It is the same price
									that is displayed while placing the order. You are not required to pay any extra amount at the time of
									receiving the COD order.</p><br>
								<p><strong>Ques: My order is out for delivery, but has not reached?</strong></p>
								<p><strong>Ans: </strong>If the status is marked as &ldquo;OUT FOR DELIVERY&rdquo; and is not delivered to you
									in next 24 hours, kindly check with the courier company or contact us at <a href="{{route('contact')}}" class="red-link">Grest.in/Contact</a>. We will follow
									up with the courier partner until your order is delivered.</p><br>
								<p><strong>Ques: What do I do if my product is delivered to the wrong address?</strong></p>
								<p><strong>Ans: </strong>In case, you discover that the Courier Company has delivered your package to the
									wrong address, you should immediately contact us at <a href="{{route('contact')}}" class="red-link">Grest.in/Contact</a>. We will follow up with the courier
									partner and notify you at the earliest possible.</p><br>
								<p><strong>Ques: Why is my order not delivered within the expected delivery date?</strong></p>
								<p><strong>Ans: </strong>There could be a delay depending upon your shipping address, courier services and
									unfavorable climatic conditions. You can track your shipment at the courier company&rsquo;s website, using
									the tracking number sent to you on your registered Email/Contact number.</p>
								<p>If there's no update in shipment, please wait for 48 hours. Else, get in touch with the customer support
									team.</p><br>
								<p><strong>Ques: Can I schedule the delivery as per my availability?</strong></p>
								<p><strong>Ans: </strong>Schedule the day of delivery: If your order is not shipped, we can schedule the
									shipment of your order as per your convenience.</p>
								<p>Schedule the time of delivery: If your order is shipped, you can track the status at the courier
									partner&rsquo;s website and contact them for scheduling the time of delivery.</p><br>
								<p><strong>Ques: Can I change the Shipping Address?</strong></p>
								<p><strong>Ans: </strong>You may request for change of address as long as the order has not been handed over
									to our courier partner. You can track the status of your order from Grest 'My Account' section or <a
										href='{{route('order.track')}}'>click here to track order</a>.</p>
								<p>If the order has not reached the shipment stage, you can change your shipping address from 'My Account'
									section or contact us at <a href="{{route('contact')}}" class="red-link">Grest.in/Contact</a>. If your current order has already been shipped, you can still
									update the address in your Grest Address Book for future orders. To edit an existing address that is saved
									in your Grest Account, kindly visit the 'Address Book' page and click on 'Edit'. After you have made the
									required changes in the Address, click on 'Save'.</p>
							</div>
						</div>
					</div>
				</div>

		</div>
		</section>
@endsection