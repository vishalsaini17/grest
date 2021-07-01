@extends('frontend.layouts.master')

@section('title', 'Checkout page')

@section('main-content')

  <!-- Breadcrumbs -->
  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="bread-inner">
            <ul class="bread-list">
              <li><a href="{{ route('home') }}">Home<i class="ti-arrow-right"></i></a></li>
              <li class="active"><a href="javascript:void(0)">Checkout</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Breadcrumbs -->

  <!-- Start Checkout -->
  <section class="shop checkout section">
    <div class="container">
      {{-- <form class="form" method="POST" action="{{ route('cart.order') }}" id="checkout-payment"> --}}
        <div class="row">
          <div class="col-lg-8 col-12">
            <div class="checkout-form">
              <h2>Make Your Checkout Here</h2>
              {{-- ***********Blade Componant************ --}}
                    @error('last_name')
                      <span class='text-danger'>{{ $message }}</span>
                    @enderror
                    @error('post_code')
                      <span class='text-danger'>{{ $message }}</span>
                    @enderror
                    @error('email')
                      <span class='text-danger'>{{ $message }}</span>
                    @enderror
                    @error('address1')
                      <span class='text-danger'>{{ $message }}</span>
                    @enderror
              <x-addresses title="Select Address" type="selectAdd" />
              {{-- <p>Please register in order to checkout more quickly</p> --}}
              <!-- Form -->
              {{-- <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                  <div class="form-group">
                    <label>First Name<span>*</span></label>
                    <input type="text" name="first_name" placeholder="" value="{{ old('first_name') }}" value="{{ old('first_name') }}">
                    @error('first_name')
                      <span class='text-danger'>{{ $message }}</span>
                    @enderror
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                  <div class="form-group">
                    <label>Last Name<span>*</span></label>
                    <input type="text" name="last_name" placeholder="" value="{{ old('lat_name') }}">
                    @error('last_name')
                      <span class='text-danger'>{{ $message }}</span>
                    @enderror
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                  <div class="form-group">
                    <label>Email Address<span>*</span></label>
                    <input type="email" name="email" placeholder="" value="{{ old('email') }}">
                    @error('email')
                      <span class='text-danger'>{{ $message }}</span>
                    @enderror
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                  <div class="form-group">
                    <label>Phone Number <span>*</span></label>
                    <input type="number" name="phone" placeholder="" required value="{{ old('phone') }}">
                    @error('phone')
                      <span class='text-danger'>{{ $message }}</span>
                    @enderror
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                  <div class="form-group">
                    <label>Country<span>*</span></label>
                    <select name="country" id="country">
                      <option value="AF">Afghanistan</option>
                      <option value="AX">Åland Islands</option>
                      <option value="AL">Albania</option>
                      <option value="DZ">Algeria</option>
                      <option value="AS">American Samoa</option>
                      <option value="AD">Andorra</option>
                      <option value="AO">Angola</option>
                      <option value="AI">Anguilla</option>
                      <option value="AQ">Antarctica</option>
                      <option value="AG">Antigua and Barbuda</option>
                      <option value="AR">Argentina</option>
                      <option value="AM">Armenia</option>
                      <option value="AW">Aruba</option>
                      <option value="AU">Australia</option>
                      <option value="AT">Austria</option>
                      <option value="AZ">Azerbaijan</option>
                      <option value="BS">Bahamas</option>
                      <option value="BH">Bahrain</option>
                      <option value="BD">Bangladesh</option>
                      <option value="BB">Barbados</option>
                      <option value="BY">Belarus</option>
                      <option value="BE">Belgium</option>
                      <option value="BZ">Belize</option>
                      <option value="BJ">Benin</option>
                      <option value="BM">Bermuda</option>
                      <option value="BT">Bhutan</option>
                      <option value="BO">Bolivia</option>
                      <option value="BA">Bosnia and Herzegovina</option>
                      <option value="BW">Botswana</option>
                      <option value="BV">Bouvet Island</option>
                      <option value="BR">Brazil</option>
                      <option value="IO">British Indian Ocean Territory</option>
                      <option value="VG">British Virgin Islands</option>
                      <option value="BN">Brunei</option>
                      <option value="BG">Bulgaria</option>
                      <option value="BF">Burkina Faso</option>
                      <option value="BI">Burundi</option>
                      <option value="KH">Cambodia</option>
                      <option value="CM">Cameroon</option>
                      <option value="CA">Canada</option>
                      <option value="CV">Cape Verde</option>
                      <option value="KY">Cayman Islands</option>
                      <option value="CF">Central African Republic</option>
                      <option value="TD">Chad</option>
                      <option value="CL">Chile</option>
                      <option value="CN">China</option>
                      <option value="CX">Christmas Island</option>
                      <option value="CC">Cocos [Keeling] Islands</option>
                      <option value="CO">Colombia</option>
                      <option value="KM">Comoros</option>
                      <option value="CG">Congo - Brazzaville</option>
                      <option value="CD">Congo - Kinshasa</option>
                      <option value="CK">Cook Islands</option>
                      <option value="CR">Costa Rica</option>
                      <option value="CI">Côte d’Ivoire</option>
                      <option value="HR">Croatia</option>
                      <option value="CU">Cuba</option>
                      <option value="CY">Cyprus</option>
                      <option value="CZ">Czech Republic</option>
                      <option value="DK">Denmark</option>
                      <option value="DJ">Djibouti</option>
                      <option value="DM">Dominica</option>
                      <option value="DO">Dominican Republic</option>
                      <option value="EC">Ecuador</option>
                      <option value="EG">Egypt</option>
                      <option value="SV">El Salvador</option>
                      <option value="GQ">Equatorial Guinea</option>
                      <option value="ER">Eritrea</option>
                      <option value="EE">Estonia</option>
                      <option value="ET">Ethiopia</option>
                      <option value="FK">Falkland Islands</option>
                      <option value="FO">Faroe Islands</option>
                      <option value="FJ">Fiji</option>
                      <option value="FI">Finland</option>
                      <option value="FR">France</option>
                      <option value="GF">French Guiana</option>
                      <option value="PF">French Polynesia</option>
                      <option value="TF">French Southern Territories</option>
                      <option value="GA">Gabon</option>
                      <option value="GM">Gambia</option>
                      <option value="GE">Georgia</option>
                      <option value="DE">Germany</option>
                      <option value="GH">Ghana</option>
                      <option value="GI">Gibraltar</option>
                      <option value="GR">Greece</option>
                      <option value="GL">Greenland</option>
                      <option value="GD">Grenada</option>
                      <option value="GP">Guadeloupe</option>
                      <option value="GU">Guam</option>
                      <option value="GT">Guatemala</option>
                      <option value="GG">Guernsey</option>
                      <option value="GN">Guinea</option>
                      <option value="GW">Guinea-Bissau</option>
                      <option value="GY">Guyana</option>
                      <option value="HT">Haiti</option>
                      <option value="HM">Heard Island and McDonald Islands</option>
                      <option value="HN">Honduras</option>
                      <option value="HK">Hong Kong SAR China</option>
                      <option value="HU">Hungary</option>
                      <option value="IS">Iceland</option>
                      <option value="IN">India</option>
                      <option value="ID">Indonesia</option>
                      <option value="IR">Iran</option>
                      <option value="IQ">Iraq</option>
                      <option value="IE">Ireland</option>
                      <option value="IM">Isle of Man</option>
                      <option value="IL">Israel</option>
                      <option value="IT">Italy</option>
                      <option value="JM">Jamaica</option>
                      <option value="JP">Japan</option>
                      <option value="JE">Jersey</option>
                      <option value="JO">Jordan</option>
                      <option value="KZ">Kazakhstan</option>
                      <option value="KE">Kenya</option>
                      <option value="KI">Kiribati</option>
                      <option value="KW">Kuwait</option>
                      <option value="KG">Kyrgyzstan</option>
                      <option value="LA">Laos</option>
                      <option value="LV">Latvia</option>
                      <option value="LB">Lebanon</option>
                      <option value="LS">Lesotho</option>
                      <option value="LR">Liberia</option>
                      <option value="LY">Libya</option>
                      <option value="LI">Liechtenstein</option>
                      <option value="LT">Lithuania</option>
                      <option value="LU">Luxembourg</option>
                      <option value="MO">Macau SAR China</option>
                      <option value="MK">Macedonia</option>
                      <option value="MG">Madagascar</option>
                      <option value="MW">Malawi</option>
                      <option value="MY">Malaysia</option>
                      <option value="MV">Maldives</option>
                      <option value="ML">Mali</option>
                      <option value="MT">Malta</option>
                      <option value="MH">Marshall Islands</option>
                      <option value="MQ">Martinique</option>
                      <option value="MR">Mauritania</option>
                      <option value="MU">Mauritius</option>
                      <option value="YT">Mayotte</option>
                      <option value="MX">Mexico</option>
                      <option value="FM">Micronesia</option>
                      <option value="MD">Moldova</option>
                      <option value="MC">Monaco</option>
                      <option value="MN">Mongolia</option>
                      <option value="ME">Montenegro</option>
                      <option value="MS">Montserrat</option>
                      <option value="MA">Morocco</option>
                      <option value="MZ">Mozambique</option>
                      <option value="MM">Myanmar [Burma]</option>
                      <option value="NA">Namibia</option>
                      <option value="NR">Nauru</option>
                      <option value="NP" selected="selected">Nepal</option>
                      <option value="NL">Netherlands</option>
                      <option value="AN">Netherlands Antilles</option>
                      <option value="NC">New Caledonia</option>
                      <option value="NZ">New Zealand</option>
                      <option value="NI">Nicaragua</option>
                      <option value="NE">Niger</option>
                      <option value="NG">Nigeria</option>
                      <option value="NU">Niue</option>
                      <option value="NF">Norfolk Island</option>
                      <option value="MP">Northern Mariana Islands</option>
                      <option value="KP">North Korea</option>
                      <option value="NO">Norway</option>
                      <option value="OM">Oman</option>
                      <option value="PK">Pakistan</option>
                      <option value="PW">Palau</option>
                      <option value="PS">Palestinian Territories</option>
                      <option value="PA">Panama</option>
                      <option value="PG">Papua New Guinea</option>
                      <option value="PY">Paraguay</option>
                      <option value="PE">Peru</option>
                      <option value="PH">Philippines</option>
                      <option value="PN">Pitcairn Islands</option>
                      <option value="PL">Poland</option>
                      <option value="PT">Portugal</option>
                      <option value="PR">Puerto Rico</option>
                      <option value="QA">Qatar</option>
                      <option value="RE">Réunion</option>
                      <option value="RO">Romania</option>
                      <option value="RU">Russia</option>
                      <option value="RW">Rwanda</option>
                      <option value="BL">Saint Barthélemy</option>
                      <option value="SH">Saint Helena</option>
                      <option value="KN">Saint Kitts and Nevis</option>
                      <option value="LC">Saint Lucia</option>
                      <option value="MF">Saint Martin</option>
                      <option value="PM">Saint Pierre and Miquelon</option>
                      <option value="VC">Saint Vincent and the Grenadines</option>
                      <option value="WS">Samoa</option>
                      <option value="SM">San Marino</option>
                      <option value="ST">São Tomé and Príncipe</option>
                      <option value="SA">Saudi Arabia</option>
                      <option value="SN">Senegal</option>
                      <option value="RS">Serbia</option>
                      <option value="SC">Seychelles</option>
                      <option value="SL">Sierra Leone</option>
                      <option value="SG">Singapore</option>
                      <option value="SK">Slovakia</option>
                      <option value="SI">Slovenia</option>
                      <option value="SB">Solomon Islands</option>
                      <option value="SO">Somalia</option>
                      <option value="ZA">South Africa</option>
                      <option value="GS">South Georgia</option>
                      <option value="KR">South Korea</option>
                      <option value="ES">Spain</option>
                      <option value="LK">Sri Lanka</option>
                      <option value="SD">Sudan</option>
                      <option value="SR">Suriname</option>
                      <option value="SJ">Svalbard and Jan Mayen</option>
                      <option value="SZ">Swaziland</option>
                      <option value="SE">Sweden</option>
                      <option value="CH">Switzerland</option>
                      <option value="SY">Syria</option>
                      <option value="TW">Taiwan</option>
                      <option value="TJ">Tajikistan</option>
                      <option value="TZ">Tanzania</option>
                      <option value="TH">Thailand</option>
                      <option value="TL">Timor-Leste</option>
                      <option value="TG">Togo</option>
                      <option value="TK">Tokelau</option>
                      <option value="TO">Tonga</option>
                      <option value="TT">Trinidad and Tobago</option>
                      <option value="TN">Tunisia</option>
                      <option value="TR">Turkey</option>
                      <option value="TM">Turkmenistan</option>
                      <option value="TC">Turks and Caicos Islands</option>
                      <option value="TV">Tuvalu</option>
                      <option value="UG">Uganda</option>
                      <option value="UA">Ukraine</option>
                      <option value="AE">United Arab Emirates</option>
                      <option value="Uk">United Kingdom</option>
                      <option value="UY">Uruguay</option>
                      <option value="UM">U.S. Minor Outlying Islands</option>
                      <option value="VI">U.S. Virgin Islands</option>
                      <option value="UZ">Uzbekistan</option>
                      <option value="VU">Vanuatu</option>
                      <option value="VA">Vatican City</option>
                      <option value="VE">Venezuela</option>
                      <option value="VN">Vietnam</option>
                      <option value="WF">Wallis and Futuna</option>
                      <option value="EH">Western Sahara</option>
                      <option value="YE">Yemen</option>
                      <option value="ZM">Zambia</option>
                      <option value="ZW">Zimbabwe</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                  <div class="form-group">
                    <label>Address Line 1<span>*</span></label>
                    <input type="text" name="address1" placeholder="" value="{{ old('address1') }}">
                    @error('address1')
                      <span class='text-danger'>{{ $message }}</span>
                    @enderror
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                  <div class="form-group">
                    <label>Address Line 2</label>
                    <input type="text" name="address2" placeholder="" value="{{ old('address2') }}">
                    @error('address2')
                      <span class='text-danger'>{{ $message }}</span>
                    @enderror
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                  <div class="form-group">
                    <label>Postal Code</label>
                    <input type="text" name="post_code" placeholder="" value="{{ old('post_code') }}">
                    @error('post_code')
                      <span class='text-danger'>{{ $message }}</span>
                    @enderror
                  </div>
                </div>

              </div> --}}
              <!--/ End Form -->
            </div>
          </div>

          
          <div class="col-lg-4 col-12">
            <form class="form" method="POST" action="{{ route('cart.order') }}" id="checkout-payment">
              @csrf
            <div class="order-details">
              <!-- Order Widget -->
              <div class="single-widget">
                <h2>CART TOTALS</h2>
                <div class="content">
                  <ul>
                    <li class="order_subtotal" data-price="{{ Helper::totalCartPrice() }}">Cart Subtotal<span>Rs. {{ number_format(Helper::totalCartPrice()) }}</span></li>
                    {{-- <li class="shipping">
                      Shipping Cost
                      @if (count(Helper::shipping()) > 0 && Helper::cartCount() > 0)
                        <select name="shipping" class="nice-select">
                          <option value="">Select your address</option>
                          @foreach (Helper::shipping() as $shipping)
                            <option value="{{ $shipping->id }}" class="shippingOption" data-price="{{ $shipping->price }}">{{ $shipping->type }}: ₹ {{ $shipping->price }}</option>
                          @endforeach
                        </select>
                      @else
                        <span>Free</span>
                      @endif
                    </li> --}}

                    {{-- @dd(Helper::totalCartPrice()); --}}

                    @if (session('coupon'))
                      <li class="coupon_price" data-price="{{ session('coupon')['value'] }}">You Save<span>Rs. {{ number_format(session('coupon')['value']) }}</span></li>
                    @endif
                    @php
                      $total_amount = Helper::totalCartPrice();
                      if (session('coupon')) {
                          $total_amount = $total_amount - session('coupon')['value'];
                      }
                    @endphp
                    {{-- <input type="hidden" name="amount" value="{{round($total_amount)}}"> --}}
                    @if (session('coupon'))
                      <li class="last" id="order_total_price">Total<span>Rs. {{ number_format($total_amount) }}</span></li>
                    @else
                      <li class="last" id="order_total_price">Total<span>Rs. {{ number_format($total_amount) }}</span></li>
                    @endif
                  </ul>
                </div>
              </div>
              <!--/ End Order Widget -->
              <!-- Order Widget -->
              <div class="single-widget">
                <h2>Payments</h2>
                <div class="content">
                  <div class="checkbox">
                    {{-- <label class="checkbox-inline" for="1"><input name="updates" id="1" type="checkbox"> Check Payments</label> --}}
                    <form-group>
                       <label><input name="payment_method" type="radio" value="paytm" data-url="/paytm-payment" checked> Pay Online (PayTm)</label><br>
                       <label><input name="payment_method" type="radio" disabled value="cod" data-url="" > <span class="text-muted">Cash On Delivery (cooming soon!)</span></label>
                    </form-group>

                  </div>
                </div>
              </div>
              <!--/ End Order Widget -->
              <!-- Payment Method Widget -->
              {{-- <div class="single-widget payement">
                <div class="content">
                  <img src="{{ 'backend/img/payment-method.png' }}" alt="#">
                </div>
              </div> --}}
              <!--/ End Payment Method Widget -->
              <!-- Button Widget -->
              <div class="single-widget get-button">
                <div class="content">
                  <div class="button proceedToCheckoutBtn">
                    <input type="hidden" name="first_name" value="" class="fname">
                    <input type="hidden" name="last_name" value="" class="lname">
                    <input type="hidden" name="address1" value="" class="address">
                    <input type="hidden" name="phone" value="" class="phone">
                    <input type="hidden" name="post_code" value="" class="post_code">
                    <input type="hidden" name="address_id" value="" class="address_id">
                    <input type="hidden" name="email" value="{{auth()->user()->email}}" class="email">
                    <button type="submit" onclick="setChckoutValues()" class="btn btn-primary">proceed to checkout</button>
                  </div>
                </div>
              </div>
              <!--/ End Button Widget -->
            </div>
          </div>
        </div>
      </form>
    </div>
  </section>
  <!--/ End Checkout -->

  <x-shop-service-comp />

  <!-- Start Shop Newsletter  -->
  <section class="shop-newsletter section">
    <div class="container">
      <div class="inner-top">
        <div class="row">
          <div class="col-lg-8 offset-lg-2 col-12">
            <!-- Start Newsletter Inner -->
            <div class="inner">
              <h4>Newsletter</h4>
              <p> Subscribe to our newsletter and get <span>10%</span> off your first purchase</p>
              <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
                <input name="EMAIL" placeholder="Your email address" required="" type="email">
                <button class="btn btn-primary">Subscribe</button>
              </form>
            </div>
            <!-- End Newsletter Inner -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Shop Newsletter -->
@endsection
@push('styles')
  <style>
    li.shipping {
      display: inline-flex;
      width: 100%;
      font-size: 14px;
    }

    li.shipping .input-group-icon {
      width: 100%;
      margin-left: 10px;
    }

    .input-group-icon .icon {
      position: absolute;
      left: 20px;
      top: 0;
      line-height: 40px;
      z-index: 3;
    }

    .form-select {
      height: 30px;
      width: 100%;
    }

    .form-select .nice-select {
      border: none;
      border-radius: 0px;
      height: 40px;
      background: #f6f6f6 !important;
      padding-left: 45px;
      padding-right: 40px;
      width: 100%;
    }

    .list li {
      margin-bottom: 0 !important;
    }

    .list li:hover {
      background: #F7941D !important;
      color: white !important;
    }

    .form-select .nice-select::after {
      top: 14px;
    }

  </style>
@endpush
@push('scripts')
  <script src="{{ asset('frontend/js/nice-select/js/jquery.nice-select.min.js') }}"></script>
  <script src="{{ asset('frontend/js/select2/js/select2.min.js') }}"></script>
  <script>
    $(document).ready(function() {
      $("select.select2").select2();
    });
    $('select.nice-select').niceSelect();


    function showMe(box) {
      var checkbox = document.getElementById('shipping').style.display;
      // alert(checkbox);
      var vis = 'none';
      if (checkbox == "none") {
        vis = 'block';
      }
      if (checkbox == "block") {
        vis = "none";
      }
      document.getElementById(box).style.display = vis;
    }


    $(document).ready(function() {
      $('.shipping select[name=shipping]').change(function() {
        let cost = parseFloat($(this).find('option:selected').data('price')) || 0;
        let subtotal = parseFloat($('.order_subtotal').data('price'));
        let coupon = parseFloat($('.coupon_price').data('price')) || 0;
        // alert(coupon);
        $('#order_total_price span').text('$' + (subtotal + cost - coupon).toFixed(2));
      });

      // Change Post Address on CHange of Payment method
      // $('input[name="payment_method"]').change(function(){
      //   let paymentMethod = $(this).val();
      //   $("#checkout-payment").attr('action', $(this).data('url'))
      // });

      //Set Address Values for Checkout proceedToCheckoutBtn
      $.fn.ignore = function (sel) {
        return this.clone().find(sel || ">*").remove().end()
      }

      $(':checkbox').click( function(){
        var name = $(this).parents('li').siblings('.aName').find('p').html()
        var fname = name.split(' ')[0]
        var lname = (name.split(' ')[1] == undefined)? ' ': name.split(' ')[1]
        var phone = $(this).parents('li').siblings('.aPhone').find('p').ignore('span').html()
        var address = $(this).parents('li').siblings('.aAddress').find('span').ignore('p').text()
        var pincode = $(this).parents('li').siblings('.aAddress').find('p').html()
        var addressID = $(this).siblings('input[name="address_id"]').val()

        var Btn = $('.proceedToCheckoutBtn')
        Btn.find('input[name="first_name"]').val(fname)
        Btn.find('input[name="last_name"]').val(lname)
        Btn.find('input[name="phone"]').val(phone)
        Btn.find('input[name="address1"]').val(address)
        Btn.find('input[name="post_code"]').val(pincode)
        Btn.find('input[name="address_id"]').val(addressID)
      })
    });

      function setChckoutValues(){
        var checked = $('[name=is_default]:checked')
        var name = checked.parents('li').siblings('.aName').find('p').html()
        var fname = name.split(' ')[0]
        var lname = (name.split(' ')[1] == undefined)? ' ': name.split(' ')[1]
        var phone = checked.parents('li').siblings('.aPhone').find('p').ignore('span').html()
        var address = checked.parents('li').siblings('.aAddress').find('span').ignore('p').text()
        var pincode = checked.parents('li').siblings('.aAddress').find('p').html()
        var addressID = checked.siblings('input[name="address_id"]').val()
        
        var Btn = $('.proceedToCheckoutBtn')
        Btn.find('input[name="first_name"]').val(fname)
        Btn.find('input[name="last_name"]').val(lname)
        Btn.find('input[name="phone"]').val(phone)
        Btn.find('input[name="address1"]').val(address)
        Btn.find('input[name="post_code"]').val(pincode)
        Btn.find('input[name="address_id"]').val(addressID)
         
      }

  </script>

@endpush
