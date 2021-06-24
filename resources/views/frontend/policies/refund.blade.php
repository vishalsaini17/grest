@extends('frontend.layouts.master')

@section('title',' Privacy Policy')

@section('main-content')
		<section class="all-policy">
			<div class="container my-5">
				<x-policy-navbar-comp />

				<div class="refund">
					<h3 class="mt-4">Refund Policy</h3>
					<div class="row">
						<div class=" col-10 mx-auto text-justify">
							<div class="content">
								<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:normal;font-size:15px;,sans-serif;'><span style='font-size:13px;font-family:Roboto;'>We offer you easy and streamlined replacement process</span></p>
								<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:normal;font-size:15px;,sans-serif;'><strong><span style='font-size:13px;font-family:Roboto;'>1. How do I file a Replacement request?</span></strong></p>
								<ol style='list-style-type: decimal;'>
										<li><span style='font-family:Roboto;font-size:10.0pt;'>You can initiate the return making a call PHONE NO. or drop a mail info@Grest.in. Our support executive will raise a tick against your complaint.</span></li>
										<li><span style='font-family:Roboto;font-size:10.0pt;'>You can place a Replacement request within 7 days of order delivery. However, in case of Damaged/Missing Product, the Return request should be filed within 48 hours of delivery.</span></li>
										<li><span style='font-family:Roboto;font-size:10.0pt;'>Replacement request will be reviewed by Grest.</span></li>
										<li><span style='font-family:Roboto;font-size:10.0pt;'>After approval, pickup of the product will be arranged through our courier partners.</span></li>
										<li><span style='font-family:Roboto;font-size:10.0pt;'>If our reverse pickup service is not available on your address, we will ask you to dispatch the product. The courier charges will be reimbursed by Grest up to Rs 150.</span></li>
										<li><span style='font-family:Roboto;font-size:10.0pt;'>After the product is received, it is verified against your claim and accordingly, Replacement is initiated. Please note that Replacement would depend upon the stock availability.</span></li>
								</ol>
								<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:normal;font-size:15px;,sans-serif;'><strong><span style='font-size:13px;font-family:Roboto;'>2. Under what conditions can I return/ replace my product?</span></strong></p>
								<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:normal;font-size:15px;,sans-serif;'><span style='font-size:13px;font-family:Roboto;'>Returns/Replacement are accepted under the following cases -</span></p>
								<ol style='list-style-type: decimal;'>
										<li><span style='font-family:Roboto;font-size:10.0pt;'>Wrong Product &ndash; Wrong color/ size/ style</span></li>
										<li><span style='font-family:Roboto;font-size:10.0pt;'>Wrong item ordered/ delivered</span></li>
										<li><span style='font-family:Roboto;font-size:10.0pt;'>Defective Product - Manufacturing defect/ Non-functioning</span></li>
										<li><span style='font-family:Roboto;font-size:10.0pt;'>Damaged Product &ndash; Physical damage/ Tampered product or packaging</span></li>
										<li><span style='font-family:Roboto;font-size:10.0pt;'>Wrong Quantity &ndash; Missing Products/ Parts</span></li>
								</ol>
								<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:normal;font-size:15px;,sans-serif;'><strong><span style='font-size:13px;font-family:Roboto;'>3. Under what conditions Return / Replacement request will not be accepted?</span></strong></p>
								<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:normal;font-size:15px;,sans-serif;'><span style='font-size:13px;font-family:Roboto;'>Return/ Replacement requests will not be accepted under following cases &ndash;</span></p>
								<ol style='list-style-type: decimal;'>
										<li><span style='font-family:Roboto;font-size:10.0pt;'>If Products are Altered/ Used.</span></li>
										<li><span style='font-family:Roboto;font-size:10.0pt;'>If Product is returned without Original Packaging (price tags, labels &amp; accessories).</span></li>
										<li><span style='font-family:Roboto;font-size:10.0pt;'>If Serial Number is tampered.</span></li>
										<li><span style='font-family:Roboto;font-size:10.0pt;'>For a Defective product that is covered under Grest&rsquo;s Warranty or Reported after 7 days of the Delivery.</span></li>
										<li><span style='font-family:Roboto;font-size:10.0pt;'>For Damaged/Missing product that is reported after 48 hours of the delivery.</span></li>
								</ol>
								<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:normal;font-size:15px;,sans-serif;'><strong><span style='font-size:13px;font-family:Roboto;'>4. What is the best time to place Return/ Replacement request?</span></strong></p>
								<ol style='list-style-type: decimal;'>
										<li><span style='font-family:Roboto;font-size:10.0pt;'>Return/Replace request of the Product(s) should be initiated within 7 days of Order Delivery for Wrong/ Unsatisfactory product.</span></li>
										<li><span style='font-family:Roboto;font-size:10.0pt;'>However, under the following conditions, Return Request should be filed within 48 hours of Delivery with the images of the parcel or product</span></li>
										<li><span style='font-family:Roboto;font-size:10.0pt;'>Damaged Product.</span></li>
										<li><span style='font-family:Roboto;font-size:10.0pt;'>Empty Parcel.</span></li>
										<li><span style='font-family:Roboto;font-size:10.0pt;'>Missing Item.</span></li>
										<li><span style='font-family:Roboto;font-size:10.0pt;'>To file a return/replacement request, please reach out to Grest&rsquo;s Customer Support.</span></li>
								</ol>
								<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:normal;font-size:15px;,sans-serif;'><strong><span style='font-size:13px;font-family:Roboto;'>5. When do you initiate Pickup for Returns?</span></strong></p>
								<ol style='list-style-type: decimal;'>
										<li><span style='font-family:Roboto;font-size:10.0pt;'>Once your request to replacement an order is approved, a pickup will be initiated. You will receive an email from us, with information on the packaging, return address and required documentation.</span></li>
										<li><span style='font-family:Roboto;font-size:10.0pt;'>Please keep the product ready with all tags &amp; accessories. Kindly ensure proper packaging to avoid any damage during transit.</span></li>
								</ol>
								<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:normal;font-size:15px;,sans-serif;'><strong><span style='font-size:12px;font-family:Roboto;'>Please take care of the following points, while packing your product for Pickup:</span></strong></p>
								<ol style='list-style-type: decimal;'>
										<li><span style='font-family:Roboto;font-size:10.0pt;'>The product should not be used/altered/ tampered.</span></li>
										<li><span style='font-family:Roboto;font-size:10.0pt;'>Keep original price tag &amp; packing slip intact.</span></li>
										<li><span style='font-family:Roboto;font-size:10.0pt;'>Mention Order Number on the box.</span></li>
										<li><span style='font-family:Roboto;font-size:10.0pt;'>Do not seal the box.</span></li>
										<li><span style='font-family:Roboto;font-size:10.0pt;'>Mention the Order Number/Delivery Address on the package, before handing over the packet to our Pickup executive.</span></li>
										<li><span style='font-family:Roboto;font-size:10.0pt;'>Keep the Courier Company&apos;s receipt for tracking purposes.</span></li>
								</ol>
								<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:normal;font-size:15px;,sans-serif;'><strong><span style='font-size:9px;font-family:Roboto;'>Please Note - Grest shall not be liable for any incidental defect/damage and mishandling etc.</span></strong></p>
								<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:normal;font-size:15px;,sans-serif;'><strong><span style='font-size:13px;font-family:Roboto;'>5. What do I do if my area does not have a reverse pick up service?</span></strong></p>
								<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:normal;font-size:15px;,sans-serif;'><span style='font-size:13px;font-family:Roboto;'>If our reverse pickup service is not available at your address, we will ask you to dispatch the product. Return address will be notified to you in a separate email, along with the packaging instructions and required documents.</span></p>
								<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:normal;font-size:15px;,sans-serif;'><span style='font-size:13px;font-family:Roboto;'>In case of Self-Shipment, Grest will reimburse your courier charges (up to Rs.150).</span></p>
								<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:normal;font-size:15px;,sans-serif;'><span style='font-size:13px;font-family:Roboto;'>In case of Self-Shipment, Customer has to share the image of Courier Bill at our email address : info@Grest.in</span></p>
								<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:normal;font-size:15px;,sans-serif;'><strong><span style='font-size:12px;font-family:Roboto;'>Please take care of the following-</span></strong></p>
								<ol start='1' style='margin-bottom:0cm;' type='1'>
										<li style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:normal;font-size:15px;,sans-serif;'><span style='font-size:13px;font-family:Roboto;'>Mention the Order number/Delivery Address on the package, before handing it over to the Courier Representative.</span></li>
										<li style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:normal;font-size:15px;,sans-serif;'><span style='font-size:13px;font-family:Roboto;'>Send a scanned copy of the courier receipt to our address.</span></li>
										<li style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:normal;font-size:15px;,sans-serif;'><span style='font-size:13px;font-family:Roboto;'>Track your Return Shipment on the Courier Company&apos;s Website.</span></li>
								</ol>
								<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:normal;font-size:15px;,sans-serif;'><strong><span style='font-size:13px;font-family:Roboto;'>7. How do I track the status of my Replacement request?</span></strong></p>
								<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:normal;font-size:15px;,sans-serif;'><span style='font-size:13px;font-family:Roboto;'>Every request received at Grest is assigned a ticket number, for which an acknowledgment mail is sent to your registered email address. Please use your registered email ID and phone number for any further communication.</span></p>
								<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:normal;font-size:15px;,sans-serif;'><span style='font-size:13px;font-family:Roboto;'>After receiving your Replacement Request, we will update you on the status i.e. Acceptance/Rejection of Reverse Pickup, Reshipment &amp; Replacement.</span></p>
								<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:normal;font-size:15px;,sans-serif;'><strong><span style='font-size:13px;font-family:Roboto;'>8. Can I track the status of Reverse Pickup?</span></strong></p>
								<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:normal;font-size:15px;,sans-serif;'><span style='font-size:13px;font-family:Roboto;'>You will receive an email from us, within 24-48 Hours of Pickup, with the tracking details.</span></p>
								<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:normal;font-size:15px;,sans-serif;'><strong><span style='font-size:13px;font-family:Roboto;'>9. How to claim Return/ Replacement for products under Grest&rsquo;s Warranty?</span></strong></p>
								<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:normal;font-size:15px;,sans-serif;'><span style='font-size:13px;font-family:Roboto;'>Please contact us at Grest.in/ Customer support.</span></p>
								<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:normal;font-size:15px;,sans-serif;'><strong><span style='font-size:13px;font-family:Roboto;'>10. Do I need to pay the courier company to send my product back?</span></strong></p>
								<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:normal;font-size:15px;,sans-serif;'><span style='font-size:13px;font-family:Roboto;'>No, you don&apos;t need to pay anything to the courier representative if we arrange the pickup of your product. If you are using a courier service to ship your product back to our given address, you need to bear the courier cost at that time. However, the same will be reimbursed by us. The courier charges eligible for reimbursement are up to Rs.150.</span></p>
								<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:normal;font-size:15px;,sans-serif;'><strong><span style='font-size:13px;font-family:Roboto;'>11. Which documents do I need to attach for the return/ replacement process?&nbsp;</span></strong></p>
								<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:normal;font-size:15px;,sans-serif;'><span style='font-size:13px;font-family:Roboto;'>Documents are required during the Reverse Pickup of any product, after placing a return/replacement request.</span></p>
								<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:normal;font-size:15px;,sans-serif;'><strong><span style='font-size:13px;font-family:Roboto;'>Reverse Pickup by Grest:</span></strong></p>
								<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:normal;font-size:15px;,sans-serif;'><span style='font-size:13px;font-family:Roboto;'>Mention the Order Number on the package before handing over the packet to the Pickup executive. The receipt from the courier company must be kept as a proof for tracking purposes. Grest shall not be liable for any incidental defect/damage by the customer.</span></p>
								<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:normal;font-size:15px;,sans-serif;'><strong><span style='font-size:13px;font-family:Roboto;'>Self-Shipment:</span></strong></p>
								<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:normal;font-size:15px;,sans-serif;'><span style='font-size:13px;font-family:Roboto;'>Mention the Order Number on the packet along with the Address (as mentioned in the email by us) before handing over the packet to the Courier Company. Share a scanned copy of the courier receipt with us, as a proof for dispatching the parcel, addressed to us. In case, you do not get a confirmation from us on receipt of the returned product, please track the shipment with the courier service provider.</span></p>
								<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:normal;font-size:15px;,sans-serif;'><strong><span style='font-size:13px;font-family:Roboto;'>12. How will I know that my Returned product has reached you?</span></strong></p>
								<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:normal;font-size:15px;,sans-serif;'><span style='font-size:13px;font-family:Roboto;'>You will receive an email from us within 24-48 Hours of Pickup, along with the Tracking details. You can track the package on Courier Company&apos;s website.</span></p>
								<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:normal;font-size:15px;,sans-serif;'><strong><span style='font-size:13px;font-family:Roboto;'>How much time does it take to replace an order?</span></strong></p>
								<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:normal;font-size:15px;,sans-serif;'><span style='font-size:13px;font-family:Roboto;'>We initiate the replacement within 2 working days of receiving the product at our center. The replacement may get delayed or declined if the product received by us is not as per your claim or in case of missing Order ID on the package.</span></p>
								<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:107%;font-size:15px;,sans-serif;'><span style='font-size:12px;line-height:107%;font-family:Roboto;'>&nbsp;</span></p>
							</div>
						</div>
					</div>
				</div>

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