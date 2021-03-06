<div id="body">
	<div class="content">
		<h2 align="center"><br>Registration </h2>
		<div style="margin:30px"> <b>
		<h3>Payment</h3> 
		<p>
			Registration fee for international regular is USD 100 and for domestic regular is IDR 1.000.000. The latest registration for general participant is October 8th, 2016. It should be transferred to:
			<div class="col-sm-2 col-md-2 col-xs-2">Bank</div>
			<div class="col-sm-6">: BNI</div>
			<div class="clearfix"></div>
			<div class="col-sm-2 col-md-2 col-xs-2">Branch</div>
			<div class="col-sm-6">: Bogor</div>
			<div class="clearfix"></div>
			<div class="col-sm-2 col-md-2 col-xs-2">Address</div>
			<div class="col-sm-6">: Kampus IPB, Jl. Raya Bogor, Jasinga, Darmaga</div>
			<div class="clearfix"></div>
			<div class="col-sm-2 col-md-2 col-xs-2">On behalf of</div>
			<div class="col-sm-6">: Rektor IPB c/q SBRC</div>
			<div class="clearfix"></div>
			<div class="col-sm-2 col-md-2 col-xs-2">Account No.</div>
			<div class="col-sm-6">: 0166732560</div>
			<div class="clearfix"></div>
			<div class="col-sm-2 col-md-2 col-xs-2">Swift Code</div>
			<div class="col-sm-6">: BNINIDJABGR</div>
			<div class="clearfix"></div>
			<br>Please confirm your payment on <a href="mailto:icbbogor2016@gmail.com">icbbogor2016@gmail.com</a>.
		</p></b>
		</div>
		<?php if($this->session->flashdata('sukses')){ ?>
				<div class="alert alert-success" role="alert"><span class="sr-only">Success:</span>&nbsp;<?php echo $this->session->flashdata('sukses'); ?><button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>
		<?php } ?>
		<form action="<?php echo site_url('Registration/regis/participant') ?>" method="POST">
			<div class="col-sm-12 ">
				<div class="mark_title">
					<span class="note">* </span> Marked field are required
				</div>
			</div>
			<div class="col-sm-12 form_abstract">
				<div class="form-group">
					<div class="col-sm-4">
						<label>Title <span class="note">*</span></label>
					</div>
					<div class="col-sm-2 col-md-2 col-xs-2">
						<select name="title" class="form-control" required>
							<option value="">Select Title</option>
							<option value="Mr">Mr</option>
							<option value="Ms">Ms</option>
							<option value="Mrs">Mrs</option>
							<option value="Prof">Prof</option>
							<option value="Dr">Dr</option>
							<option value="Assist Prof Dr">Assist Prof Dr</option>
							<option value="Assoc Prof Dr">Assoc Prof Dr</option>
						</select>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="col-sm-12 form_abstract">
				<div class="form-group">
					<div class="col-sm-4">
				    	<label for="inputFirstName">Full Name</label>
				    </div>
				    <div class="col-sm-4">
				    	<input type="text" class="form-control" name="fName" id="fName" placeholder="First Name" required>
				    </div>
				    <div class="col-sm-4">
				    	<input type="text" class="form-control" name="lName" id="lName" placeholder="Last Name" required>
				    </div>
				</div>
			</div>
			<div class="col-sm-12 form_abstract">
				<div class="form-group">
					<div class="col-sm-4">
						<label for="inputLastName">Company Name</label>
				    </div>
				    <div class="col-sm-8">
				    	<input type="text" class="form-control" name="company" id="company" placeholder="Company/University Name" required>
				    </div>
				 </div>
			</div>
			<div class="col-sm-12 form_abstract">
				 <div class="form-group">
				 	<div class="col-sm-4">
				 		<label for="inputLastName">City</label>
				    </div>
				    <div class="col-sm-3 col-md-3 col-xs-3">
				    	<input type="text" class="form-control" name="city" id="city" placeholder="City" required>
				    </div>
				 </div>
			</div>
			<div class="clearfix"></div>
			<div class="col-sm-12 form_abstract">
				<div class="form-group">
					<div class="col-sm-4">
				 		<label for="inputLastName">State</label>
				   	</div>
				    <div class="col-sm-3 col-md-3 col-xs-3">
				    	<input type="text" class="form-control" name="state" id="state" placeholder="State" required>
				    </div>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="col-sm-12 form_abstract">
				<div class="form-group">
					<div class="col-sm-4">
						<label for="selectCountry" >Country <span class="note">*</span></label>
					</div>
				    <div class="col-sm-3 col-md-3 col-xs-3">
				    	<select class="form-control" name="country" id="country" required>
				        	<option selected="selected" value="">Select country</option>
				            <option value="United States">United States</option>
				            <option value="United Kingdom">United Kingdom</option>
				            <option value="Afghanistan">Afghanistan</option>
				            <option value="Albania">Albania</option>
				            <option value="Algeria">Algeria</option>
				            <option value="American Samoa">American Samoa</option>
				            <option value="Andorra">Andorra</option>
				            <option value="Angola">Angola</option>
				            <option value="Anguilla">Anguilla</option>
				            <option value="Antarctica">Antarctica</option>
				            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
				            <option value="Argentina">Argentina</option>
				            <option value="Armenia">Armenia</option>
				            <option value="Aruba">Aruba</option>
				            <option value="Australia">Australia</option>
				            <option value="Austria">Austria</option>
				            <option value="Azerbaijan">Azerbaijan</option>
				            <option value="Bahamas">Bahamas</option>
				            <option value="Bahrain">Bahrain</option>
				            <option value="Bangladesh">Bangladesh</option>
				            <option value="Barbados">Barbados</option>
				            <option value="Belarus">Belarus</option>
				            <option value="Belgium">Belgium</option>
				            <option value="Belize">Belize</option>
				            <option value="Benin">Benin</option>
				            <option value="Bermuda">Bermuda</option>
				            <option value="Bhutan">Bhutan</option>
				            <option value="Bolivia">Bolivia</option>
				            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
				            <option value="Botswana">Botswana</option>
				            <option value="Bouvet Island">Bouvet Island</option>
				            <option value="Brazil">Brazil</option>
				            <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
				            <option value="Brunei Darussalam">Brunei Darussalam</option>
				            <option value="Bulgaria">Bulgaria</option>
				            <option value="Burkina Faso">Burkina Faso</option>
				            <option value="Burundi">Burundi</option>
				            <option value="Cambodia">Cambodia</option>
				            <option value="Cameroon">Cameroon</option>
				            <option value="Canada">Canada</option>
				            <option value="Canadian Nunavut Territory">Canadian Nunavut Territory</option>
				            <option value="Cape Verde">Cape Verde</option>
				            <option value="Cayman Islands">Cayman Islands</option>
				            <option value="Central African Republic">Central African Republic</option>
				            <option value="Chad">Chad</option>
				            <option value="Chile">Chile</option>
				            <option value="China">China</option>
				            <option value="Christmas Island">Christmas Island</option>
				            <option value="Cocos (Keeling Islands)">Cocos (Keeling Islands)</option>
				            <option value="Colombia">Colombia</option>
				            <option value="Comoros">Comoros</option>
				            <option value="Congo">Congo</option>
				            <option value="Cook Islands">Cook Islands</option>
				            <option value="Costa Rica">Costa Rica</option>
				            <option value="Cote D'Ivoire (Ivory Coast)">Cote D'Ivoire (Ivory Coast)</option>
				            <option value="Croatia (Hrvatska)">Croatia (Hrvatska)</option>
				            <option value="Cuba">Cuba</option>
							<option value="Cyprus">Cyprus</option>
							<option value="Czech Republic">Czech Republic</option>
							<option value="Denmark">Denmark</option>
							<option value="Djibouti">Djibouti</option>
							<option value="Dominica">Dominica</option>
							<option value="Dominican Republic">Dominican Republic</option>
							<option value="East Timor">East Timor</option>
							<option value="Ecuador">Ecuador</option>
							<option value="Egypt">Egypt</option>
							<option value="El Salvador">El Salvador</option>
							<option value="Equatorial Guinea">Equatorial Guinea</option>
							<option value="Eritrea">Eritrea</option>
							<option value="Estonia">Estonia</option>
							<option value="Ethiopia">Ethiopia</option>
							<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
							<option value="Faroe Islands">Faroe Islands</option>
							<option value="Fiji">Fiji</option>
							<option value="Finland">Finland</option>
							<option value="France">France</option>
							<option value="France, Metropolitan">France, Metropolitan</option>
							<option value="French Guiana">French Guiana</option>
							<option value="French Polynesia">French Polynesia</option>
							<option value="French Southern Territories">French Southern Territories</option>
							<option value="Gabon">Gabon</option>
							<option value="Gambia">Gambia</option>
							<option value="Georgia">Georgia</option>
							<option value="Germany">Germany</option>
							<option value="Ghana">Ghana</option>
							<option value="Gibraltar">Gibraltar</option>
							<option value="Greece">Greece</option>
							<option value="Greenland">Greenland</option>
							<option value="Grenada">Grenada</option>
							<option value="Guadeloupe">Guadeloupe</option>
							<option value="Guam">Guam</option>
							<option value="Guatemala">Guatemala</option>
							<option value="Guinea">Guinea</option>
							<option value="Guinea-Bissau">Guinea-Bissau</option>
							<option value="Guyana">Guyana</option>
							<option value="Haiti">Haiti</option>
							<option value="Heard and McDonald Islands">Heard and McDonald Islands</option>
							<option value="Honduras">Honduras</option>
							<option value="Hong Kong">Hong Kong</option>
							<option value="Hungary">Hungary</option>
							<option value="Iceland">Iceland</option>
							<option value="India">India</option>
							<option value="Indonesia">Indonesia</option>
							<option value="Iran">Iran</option>
							<option value="Iraq">Iraq</option>
							<option value="Ireland">Ireland</option>
							<option value="Israel">Israel</option>
							<option value="Italy">Italy</option>
							<option value="Jamaica">Jamaica</option>
							<option value="Japan">Japan</option>
							<option value="Jordan">Jordan</option>
							<option value="Kazakhstan">Kazakhstan</option>
							<option value="Kenya">Kenya</option>
							<option value="Kiribati">Kiribati</option>
							<option value="Korea (North)">Korea (North)</option>
							<option value="Korea (South)">Korea (South)</option>
							<option value="Kuwait">Kuwait</option>
							<option value="Kyrgyzstan">Kyrgyzstan</option>
							<option value="Laos">Laos</option>
							<option value="Latvia">Latvia</option>
							<option value="Lebanon">Lebanon</option>
							<option value="Lesotho">Lesotho</option>
							<option value="Liberia">Liberia</option>
							<option value="Libya">Libya</option>
							<option value="Liechtenstein">Liechtenstein</option>
							<option value="Lithuania">Lithuania</option>
							<option value="Luxembourg">Luxembourg</option>
							<option value="Macau">Macau</option>
							<option value="Macedonia">Macedonia</option>
							<option value="Madagascar">Madagascar</option>
							<option value="Malawi">Malawi</option>
							<option value="Malaysia">Malaysia</option>
							<option value="Maldives">Maldives</option>
							<option value="Mali">Mali</option>
							<option value="Malta<">Malta</option>
							<option value="Marshall Islands">Marshall Islands</option>
							<option value="Martinique">Martinique</option>
							<option value="Mauritania">Mauritania</option>
							<option value="Mauritius">Mauritius</option>
							<option value="Mayotte">Mayotte</option>
							<option value="Mexico">Mexico</option>
							<option value="Micronesia">Micronesia</option>
							<option value="Moldova">Moldova</option>
							<option value="Monaco">Monaco</option>
							<option value="Mongolia">Mongolia</option>
							<option value="Montserrat">Montserrat</option>
							<option value="Morocco">Morocco</option>
							<option value="Mozambique">Mozambique</option>
							<option value="Myanmar">Myanmar</option>
							<option value="Namibia">Namibia</option>
							<option value="Nauru">Nauru</option>
							<option value="Nepal">Nepal</option>
							<option value="Netherlands">Netherlands</option>
							<option value="Netherlands Antilles">Netherlands Antilles</option>
							<option value="New Caledonia">New Caledonia</option>
							<option value="New Zealand">New Zealand</option>
							<option value="Nicaragua">Nicaragua</option>
							<option value="Niger">Niger</option>
							<option value="Nigeria">Nigeria</option>
							<option value="Niue">Niue</option>
							<option value="Norfolk Island">Norfolk Island</option>
							<option value="Northern Mariana Islands">Northern Mariana Islands</option>
							<option value="Norway">Norway</option>
							<option value="Oman">Oman</option>
							<option value="Pakistan">Pakistan</option>
							<option value="Palau">Palau</option>
							<option value="Palestine">Palestine</option>
							<option value="Panama">Panama</option>
							<option value="Papua New Guinea">Papua New Guinea</option>
							<option value="Paraguay">Paraguay</option>
							<option value="Peru">Peru</option>
							<option value="Philippines">Philippines</option>
							<option value="Pitcairn">Pitcairn</option>
							<option value="Poland">Poland</option>
							<option value="Portugal">Portugal</option>
							<option value="Qatar">Qatar</option>
							<option value="Reunion">Reunion</option>
							<option value="Romania">Romania</option>
							<option value="Russian Federation">Russian Federation</option>
							<option value="Rwanda">Rwanda</option>
							<option value="S. Georgia and S. Sandwich Isls.">S. Georgia and S. Sandwich Isls.</option>
							<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
							<option value="Saint Lucia">Saint Lucia</option>
							<option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
							<option value="Samoa">Samoa</option>
							<option value="San Marino">San Marino</option>
							<option value="Sao Tome and Principe">Sao Tome and Principe</option>
							<option value="Saudi Arabia">Saudi Arabia</option>
							<option value="Senegal">Senegal</option>
							<option value="Serbia">Serbia</option>
							<option value="Seychelles">Seychelles</option>
							<option value="Sierra Leone">Sierra Leone</option>
							<option value="Singapore">Singapore</option>
							<option value="Slovak Republic">Slovak Republic</option>
							<option value="Slovenia">Slovenia</option>
							<option value="Solomon Islands">Solomon Islands</option>
							<option value="Somalia">Somalia</option>
							<option value="South Africa">South Africa</option>
							<option value="Spain">Spain</option>
							<option value="Sri Lanka">Sri Lanka</option>
							<option value="St. Helena">St. Helena</option>
							<option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>
							<option value="Sudan">Sudan</option>
							<option value="Suriname">Suriname</option>
							<option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>
							<option value="Swaziland">Swaziland</option>
							<option value="Sweden">Sweden</option>
							<option value="Switzerland">Switzerland</option>
							<option value="Syria">Syria</option>
							<option value="Taiwan">Taiwan</option>
							<option value="Tajikistan">Tajikistan</option>
							<option value="Tanzania">Tanzania</option>
							<option value="Thailand">Thailand</option>
							<option value="Togo">Togo</option>
							<option value="Tokelau">Tokelau</option>
							<option value="Tonga">Tonga</option>
							<option value="Trinidad and Tobago">Trinidad and Tobago</option>
							<option value="Tunisia">Tunisia</option>
							<option value="Turkey">Turkey</option>
							<option value="Turkmenistan">Turkmenistan</option>
							<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
							<option value="Tuvalu">Tuvalu</option>
							<option value="US Minor Outlying Islands">US Minor Outlying Islands</option>
							<option value="Uganda">Uganda</option>
							<option value="Ukraine">Ukraine</option>
							<option value="United Arab Emirates">United Arab Emirates</option>
							<option value="United Kingdom">United Kingdom</option>
							<option value="United States">United States</option>
							<option value="Uruguay">Uruguay</option>
							<option value="Uzbekistan">Uzbekistan</option>
							<option value="Vanuatu">Vanuatu</option>
							<option value="Vatican City State (Holy See)">Vatican City State (Holy See)</option>
							<option value="Venezuela">Venezuela</option>
							<option value="Viet Nam">Viet Nam</option>
							<option value="Virgin Islands (British)">Virgin Islands (British)</option>
							<option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
							<option value="Western Sahara">Western Sahara</option>
							<option value="Yemen">Yemen</option>
							<option value="Yugoslavia">Yugoslavia</option>
							<option value="Zaire">Zaire</option>
							<option value="Zambia">Zambia</option>
							<option value="Zimbabwe">Zimbabwe</option>
						</select>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="col-sm-12 form_abstract">
				<div class="form-group">
					<div class="col-sm-4">
						<label for="inputEmail" >Email <span class="note">*</span></label>
					</div>
					<div class="col-sm-3 col-md-3 col-xs-3">
						<input type="email" class="form-control" name="email" id="email" placeholder="Your email" required>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="col-sm-12 form_abstract">
				<div class="form-group">
					<div  class="col-sm-4">
						<label for="inputPhoneNumber">Phone Number <span class="note">*</span></label>
					</div>
					<div class="col-sm-3 col-md-3 col-xs-3">
						<input type="tel" class="form-control" name="phone" id="phone" placeholder="Phone Number" maxlength="20" required pattern="^([\+][0-9]{1,3}[\ \.\-])?([\(]{1}[0-9]{2,6}[\)])?([0-9\ \.\-\/]{3,20})((x|ext|extension)[\ ]?[0-9]{1,4})?$">
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="col-sm-12 form_abstract">
				<div class="form-group">
					<div class="col-sm-4">
						<label for="address" >Address</label>
					</div>
					<div class="col-sm-8">
						<textarea name="address" rows="3" class="form-control" id="address" maxlength="150"></textarea>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="col-sm-12 form_abstract">
				<div class="form-group">
					<div class="col-sm-4"></div>
					<div class="col-sm-2 col-md-2 col-xs-2">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>