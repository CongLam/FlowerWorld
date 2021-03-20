@extends('frontend/layout')
@section('title', 'Checkout')
@section('content')

		<div class="checkout_accrodion_area">
			<div class="container">
				<div class="row">
					<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
						<div class="accordion" id="accordion2">
							<div class="panel accordion-group">
								<div class="accordion-heading" id="headingOne">
								  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									 <span>1</span>Checkout Method
								  </a>
								</div>
								<div id="collapseOne" class="panel-collapse collapse in" aria-labelledby="headingOne">
								  <div class="accordion-inner">
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
											<div class="guest_register">
												<h2>CHECKOUT AS A GUEST OR REGISTER</h2>
												<h3>Register with us for future convenience:</h3>
												<div class="radio_button">
													<input type="radio" name="ratings[1]" id="Quality_1" value="1" class="radio">
													<h4>Checkout as Guest</h4>
												</div>
												<div class="radio_button">
													<input type="radio" name="ratings[1]" id="Quality_2" value="1" class="radio">
													<h4>Register</h4>
												</div>
												<h5>Register and save time!</h5>
												<h6>Register with us for future convenience:</h6>
												<ul id="order_history">
													<li>Fast and easy check out</li>
													<li>Easy access to your order history and status</li>
												</ul>
												<div class="Continue_button">
													<button type="submit" title="Submit Review" class="button">Continue</button>
												</div>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
											<div class="login_area">
												<h2>LOGIN</h2>
												<h3>Already registered?</h3>
												<h4>Please log in below:</h4>
												<ul id="login_panel">
													<li>Email Address<span>*</span></li>
													<li><input type="text" class="input-text required-entry validate-email" name="login[username]" value=""></li>
													<li>Password<span>*</span></li>
													<li><input type="text" class="input-text required-entry validate-email" name="login[username]" value=""></li>
												</ul>
												<div class="Continue_button continue_top">
													<h2><a href="#">Forgot your password?</a></h2>
													<button type="submit" title="Submit Review" class="button">Login</button>
												</div>
											</div>
										</div>
									</div>
								  </div>
								</div>
							</div>
							<div class="panel accordion-group">
								<div class="accordion-heading" id="headingTwo">
								  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									<span>2</span>Billing Information
								  </a>
								</div>
								<div id="collapseTwo" class="panel-collapse collapse" aria-labelledby="headingTwo">
                                    @include('errors.note')
                                    <form method="POST">
                                        @csrf
								        <div class="accordion-inner">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="billing_info">
                                                        <ul class="billing_in">
                                                            <li>First Name<span>*</span></li>
                                                            <li>
                                                            <input required type="text" id="billing:firstname" name="firstname" value="" title="First Name" maxlength="255" class="input-text required-entry"></li>
                                                            <li>Middle Name/Initial</li>
                                                            <li><input type="text" id="billing:middlename" name="middlename" value="" title="Middle Name/Initial" class="input-text"></li>
                                                            <li>Last Name<span>*</span></li>
                                                            <li><input required type="text" id="billing:lastname" name="lastname" value="" title="Last Name" maxlength="255" class="input-text required-entry"></li>
                                                            <li>Company</li>
                                                            <li><input type="text" id="billing:company" name="company" value="" title="Company" class="input-text"></li>
                                                            <li>Email Address<span>*</span></li>
                                                            <li><input required type="text" name="email" id="billing:email" value="" title="Email Address" class="input-text validate-email required-entry"></li>
                                                            <li>Address<span>*</span></li>
                                                            <li><input required type="text" title="Street Address 2" name="street" id="billing:street2" value="" class="input-text"></li>
                                                            <li>City<span>*</span></li>
                                                            <li><input required type="text" title="City" name="city" value="" class="input-text  required-entry" id="billing:city"></li>
                                                            <li>Telephone<span>*</span></li>
                                                            <li><input required type="text" name="telephone" value="" title="Telephone" class="input-text  required-entry" id="billing:telephone"></li>
                                                            <li>Fax</li>
                                                            {{--<li><input type="text" name="fax" value="" title="Fax" class="input-text" id="billing:fax"></li>
                                                            <li><input type="radio" name="use_for_shipping" value="1" checked="checked" title="Ship to this address" class="radio">
                                                            <label>Ship to this address</label>
                                                            </li>
                                                            <li><input type="radio" name="use_for_shipping" value="0" title="Ship to different address" class="radio">
                                                            <label>Ship to different address</label>--}}
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="Continue_button">
{{--                                                        <button type="submit" title="Submit Review" class="button">Continue</button>--}}
                                                        <button type="submit" title="Submit Review" class="button" onclick="return confirm('Do you want to confirm your order?')">Confirm</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
							</div>
							<div class="panel accordion-group">
								<div class="accordion-heading" id="headingThree">
								  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									<span>3</span>Shipping Method
								  </a>
								</div>
								<div id="collapseThree" class="panel-collapse collapse" aria-labelledby="headingThree">
								  <div class="accordion-inner">
										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<div class="flat_rate">
													<h2>Flat Rate</h2>
													<h3>Fixed $5.00</h3>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="Continue_button continue_top continue_another">
													<h2><a href="#"><i class="fa fa-angle-double-left"></i>Back</a></h2>
													<button type="submit" title="Submit Review" class="button">Continue</button>
												</div>
											</div>
										</div>
								  </div>
								</div>
							</div>
							<div class="panel accordion-group">
								<div class="accordion-heading" id="headingFour">
								  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
									<span>4</span>Payment Information
								  </a>
								</div>
								<div id="collapseFour" class="panel-collapse collapse" aria-labelledby="headingFour">
								  <div class="accordion-inner">
										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<ul class="billing_in">
													<li><input type="radio" name="billing[use_for_shipping]" value="1" checked="checked" title="Ship to this address" class="radio">
													<label>Check / Money order</label>
													</li>
													<li><input type="radio" name="billing[use_for_shipping]" value="0" title="Ship to different address" class="radio">
													<label>Credit Card (saved)</label>
													</li>
													<li>Name on Card<span>*</span></li>
													<li><input type="text" title="Name on Card" class="input-text required-entry" id="ccsave_cc_owner" name="payment[cc_owner]" value=""></li>
													<li>Credit Card Type<span>*</span></li>
													<li>
														<select id="ccsave_cc_type" name="payment[cc_type]" title="Credit Card Type" class="required-entry validate-cc-type-select">
														<option value="">--Please Select--</option>
														<option value="AE">American Express</option>
														<option value="VI">Visa</option>
														<option value="MC">MasterCard</option>
														<option value="DI">Discover</option>
													</select>
													</li>
													<li>Expiration Date<span>*</span></li>
													<li>
														<select id="ccsave_expiration" name="payment[cc_exp_month]" class="month validate-cc-exp required-entry">
															<option value="" selected="selected">Month</option>
															<option value="1">01 - January</option>
															<option value="2">02 - February</option>
															<option value="3">03 - March</option>
															<option value="4">04 - April</option>
															<option value="5">05 - May</option>
															<option value="6">06 - June</option>
															<option value="7">07 - July</option>
															<option value="8">08 - August</option>
															<option value="9">09 - September</option>
															<option value="10">10 - October</option>
															<option value="11">11 - November</option>
															<option value="12">12 - December</option>
														</select>
														<select id="ccsave_expiration_yr" name="payment[cc_exp_year]" class="year required-entry">
															<option value="" selected="selected">Year</option>
															<option value="2015">2015</option>
															<option value="2016">2016</option>
															<option value="2017">2017</option>
															<option value="2018">2018</option>
															<option value="2019">2019</option>
															<option value="2020">2020</option>
															<option value="2021">2021</option>
															<option value="2022">2022</option>
															<option value="2023">2023</option>
															<option value="2024">2024</option>
															<option value="2025">2025</option>
														</select>
													</li>
													<li>Card Verification Number<span>*</span></li>
													<li>
														<div class="v-fix">
															<input type="text" title="Card Verification Number" class="input-text cvv required-entry validate-cc-cvn" id="ccsave_cc_cid" name="payment[cc_cid]" value="">
															<a href="#" class="cvv-what-is-this">What is this?</a>
														</div>
													</li>
												</ul>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="Continue_button continue_top continue_another">
													<h2><a href="#"><i class="fa fa-angle-double-left"></i>Back</a></h2>
													<button type="submit" title="Submit Review" class="button">Continue</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="panel accordion-group">
								<div class="accordion-heading" id="headingFive">
								  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
									<span>5</span>Order Review
								  </a>
								</div>
								<div id="collapseFive" class="panel-collapse collapse" aria-labelledby="headingFive">
								  <div class="accordion-inner">
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="accordion_total_pricing">
													<table id="product_details_price">
														<tr>
															<th>Product Name</th>
															<th>Price</th>
															<th>Qty</th>
															<th>Subtotal</th>
														</tr>
														<tr>
															<td><h2>Pellentesque hendrerit</h2></td>
															<td>$800.00</td>
															<td>1</td>
															<td>$800.00</td>
														</tr>
														<tr>
															<td><h2>Vivamus eu imper</h2></td>
															<td>$999.00</td>
															<td>1</td>
															<td>$999.00</td>
														</tr>
													</table>
													<table id="product_details_rate">
														<tr>
															<td>Subtotal</td>
															<td>$1,799.00</td>
														</tr>
														<tr>
															<td>Shipping & Handling (Flat Rate - Fixed)</td>
															<td>$10.00</td>
														</tr>
														<tr>
															<th>Grand Total</th>
															<th>$1,809.00</th>
														</tr>
													</table>
												</div>
												<div class="Continue_button continue_top place_order">
													<h2>Forgot an Item? <a href="#">Forgot your password?</a></h2>
													<button type="submit" title="Submit Review" class="button">Place Order</button>
												</div>
											</div>
										</div>
								  </div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
						<div class="check_progress">
							<h2>YOUR CHECKOUT PROGRESS</h2>
							<ul id="progress_btn">
								<li><i class="fa fa-minus"></i>Billing Address</li>
								<li><i class="fa fa-minus"></i>Shipping Address</li>
								<li><i class="fa fa-minus"></i>Shipping Method</li>
								<li><i class="fa fa-minus"></i>Payment Method</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>


@endsection
