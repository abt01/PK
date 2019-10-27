@extends('layouts.layout')

@section('content')
    <ul class="header-main ">
        <li class="home"><a href="#">Home   </a><i class="fa fa-angle-right" aria-hidden="true"></i></li>
        <li> Shopping Cart</li>
    </ul>
    <div class="row">
        <!--Middle Part Start-->
        <div id="content" class="col-sm-12">
            <h2 class="title">Shopping Cart</h2>
            <div class="table-responsive form-group">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <td class="text-center">Image</td>
                        <td class="text-left">Product Name</td>
                        <td class="text-left">Model</td>
                        <td class="text-left">Quantity</td>
                        <td class="text-right">Unit Price</td>
                        <td class="text-right">Total</td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="text-center"><a href="{{route('product')}}"><img width="70px" src="{{asset('user/img/demo/cms/i11.jpg')}}" alt="Brown Kheri" title="Brown Kheri" class="img-thumbnail" /></a></td>
                        <td class="text-left"><a href="{{route('product')}}">Brown Kheri</a><br />
                        </td>
                        <td class="text-left">Pt 001</td>
                        <td class="text-left" width="200px"><div class="input-group btn-block quantity">
                                <input type="text" name="quantity" value="1" size="1" class="form-control" />
                                <span class="input-group-btn">
											<button type="submit" data-toggle="tooltip" title="Update" class="btn btn-primary"><i class="fa fa-clone"></i></button>
											<button type="button" data-toggle="tooltip" title="Remove" class="btn btn-danger" onClick=""><i class="fa fa-times-circle"></i></button>
										</span></div></td>
                        <td class="text-right">RS 3000.00</td>
                        <td class="text-right">RS 3000.00</td>
                    </tr>
                    <tr>
                        <td class="text-center"><a href="{{route('product')}}"><img width="70px" src="{{asset('user/img/demo/cms/image2.jpg')}}" alt="Kohati Smile" title="Kohati Smile" class="img-thumbnail" /></a></td>
                        <td class="text-left"><a href="{{route('product')}}">Kohati Smile</a></td>
                        <td class="text-left">Pt 002</td>
                        <td class="text-left" width="200px"><div class="input-group btn-block quantity">
                                <input type="text" name="quantity" value="1" size="1" class="form-control" />
                                <span class="input-group-btn">
												<button type="submit" data-toggle="tooltip" title="Update" class="btn btn-primary"><i class="fa fa-clone"></i></button>
												<button type="button" data-toggle="tooltip" title="Remove" class="btn btn-danger" onClick=""><i class="fa fa-times-circle"></i></button>
											</span></div></td>
                        <td class="text-right">RS 2500.00</td>
                        <td class="text-right">RS 2500.00</td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div class="panel-group" id="accordion">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a href="#collapse-shipping" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" aria-expanded="false">Estimate Shipping &amp; Taxes

                                <i class="fa fa-caret-down"></i>
                            </a>
                        </h4>
                    </div>
                    <div id="collapse-shipping" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                        <div class="panel-body">
                            <p>Enter your destination to get a shipping estimate.</p>
                            <div class="form-horizontal">
                                <div class="form-group required">
                                    <label class="col-sm-2 control-label" for="input-country">Country</label>
                                    <div class="col-sm-10">
                                        <select name="country_id" id="input-country" class="form-control">
                                            <option value=""> --- Please Select --- </option>
                                            <option value="244">Aaland Islands</option>
                                            <option value="1">Afghanistan</option>
                                            <option value="AL">Albania</option>
                                            <option value="DZ">Algeria</option>
                                            <option value="AS">American Samoa</option>
                                            <option value="AD">Andorra</option>
                                            <option value="AG">Angola</option>
                                            <option value="AI">Anguilla</option>
                                            <option value="AG">Antigua &amp; Barbuda</option>
                                            <option value="AR">Argentina</option>
                                            <option value="AA">Armenia</option>
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
                                            <option value="BL">Bonaire</option>
                                            <option value="BA">Bosnia &amp; Herzegovina</option>
                                            <option value="BW">Botswana</option>
                                            <option value="BR">Brazil</option>
                                            <option value="BC">British Indian Ocean Ter</option>
                                            <option value="BN">Brunei</option>
                                            <option value="BG">Bulgaria</option>
                                            <option value="BF">Burkina Faso</option>
                                            <option value="BI">Burundi</option>
                                            <option value="KH">Cambodia</option>
                                            <option value="CM">Cameroon</option>
                                            <option value="CA">Canada</option>
                                            <option value="IC">Canary Islands</option>
                                            <option value="CV">Cape Verde</option>
                                            <option value="KY">Cayman Islands</option>
                                            <option value="CF">Central African Republic</option>
                                            <option value="TD">Chad</option>
                                            <option value="CD">Channel Islands</option>
                                            <option value="CL">Chile</option>
                                            <option value="CN">China</option>
                                            <option value="CI">Christmas Island</option>
                                            <option value="CS">Cocos Island</option>
                                            <option value="CO">Colombia</option>
                                            <option value="CC">Comoros</option>
                                            <option value="CG">Congo</option>
                                            <option value="CK">Cook Islands</option>
                                            <option value="CR">Costa Rica</option>
                                            <option value="CT">Cote D'Ivoire</option>
                                            <option value="HR">Croatia</option>
                                            <option value="CU">Cuba</option>
                                            <option value="CB">Curacao</option>
                                            <option value="CY">Cyprus</option>
                                            <option value="CZ">Czech Republic</option>
                                            <option value="DK">Denmark</option>
                                            <option value="DJ">Djibouti</option>
                                            <option value="DM">Dominica</option>
                                            <option value="DO">Dominican Republic</option>
                                            <option value="TM">East Timor</option>
                                            <option value="EC">Ecuador</option>
                                            <option value="EG">Egypt</option>
                                            <option value="SV">El Salvador</option>
                                            <option value="GQ">Equatorial Guinea</option>
                                            <option value="ER">Eritrea</option>
                                            <option value="EE">Estonia</option>
                                            <option value="ET">Ethiopia</option>
                                            <option value="FA">Falkland Islands</option>
                                            <option value="FO">Faroe Islands</option>
                                            <option value="FJ">Fiji</option>
                                            <option value="FI">Finland</option>
                                            <option value="FR">France</option>
                                            <option value="GF">French Guiana</option>
                                            <option value="PF">French Polynesia</option>
                                            <option value="FS">French Southern Ter</option>
                                            <option value="GA">Gabon</option>
                                            <option value="GM">Gambia</option>
                                            <option value="GE">Georgia</option>
                                            <option value="DE">Germany</option>
                                            <option value="GH">Ghana</option>
                                            <option value="GI">Gibraltar</option>
                                            <option value="GB">Great Britain</option>
                                            <option value="GR">Greece</option>
                                            <option value="GL">Greenland</option>
                                            <option value="GD">Grenada</option>
                                            <option value="GP">Guadeloupe</option>
                                            <option value="GU">Guam</option>
                                            <option value="GT">Guatemala</option>
                                            <option value="GN">Guinea</option>
                                            <option value="GY">Guyana</option>
                                            <option value="HT">Haiti</option>
                                            <option value="HW">Hawaii</option>
                                            <option value="HN">Honduras</option>
                                            <option value="HK">Hong Kong</option>
                                            <option value="HU">Hungary</option>
                                            <option value="IS">Iceland</option>
                                            <option value="IN">India</option>
                                            <option value="ID">Indonesia</option>
                                            <option value="IA">Iran</option>
                                            <option value="IQ">Iraq</option>
                                            <option value="IR">Ireland</option>
                                            <option value="IM">Isle of Man</option>
                                            <option value="IL">Israel</option>
                                            <option value="IT">Italy</option>
                                            <option value="JM">Jamaica</option>
                                            <option value="JP">Japan</option>
                                            <option value="JO">Jordan</option>
                                            <option value="KZ">Kazakhstan</option>
                                            <option value="KE">Kenya</option>
                                            <option value="KI">Kiribati</option>
                                            <option value="NK">Korea North</option>
                                            <option value="KS">Korea South</option>
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
                                            <option value="MO">Macau</option>
                                            <option value="MK">Macedonia</option>
                                            <option value="MG">Madagascar</option>
                                            <option value="MY">Malaysia</option>
                                            <option value="MW">Malawi</option>
                                            <option value="MV">Maldives</option>
                                            <option value="ML">Mali</option>
                                            <option value="MT">Malta</option>
                                            <option value="MH">Marshall Islands</option>
                                            <option value="MQ">Martinique</option>
                                            <option value="MR">Mauritania</option>
                                            <option value="MU">Mauritius</option>
                                            <option value="ME">Mayotte</option>
                                            <option value="MX">Mexico</option>
                                            <option value="MI">Midway Islands</option>
                                            <option value="MD">Moldova</option>
                                            <option value="MC">Monaco</option>
                                            <option value="MN">Mongolia</option>
                                            <option value="MS">Montserrat</option>
                                            <option value="MA">Morocco</option>
                                            <option value="MZ">Mozambique</option>
                                            <option value="MM">Myanmar</option>
                                            <option value="NA">Nambia</option>
                                            <option value="NU">Nauru</option>
                                            <option value="NP">Nepal</option>
                                            <option value="AN">Netherland Antilles</option>
                                            <option value="NL">Netherlands (Holland, Europe)</option>
                                            <option value="NV">Nevis</option>
                                            <option value="NC">New Caledonia</option>
                                            <option value="NZ">New Zealand</option>
                                            <option value="NI">Nicaragua</option>
                                            <option value="NE">Niger</option>
                                            <option value="NG">Nigeria</option>
                                            <option value="NW">Niue</option>
                                            <option value="NF">Norfolk Island</option>
                                            <option value="NO">Norway</option>
                                            <option value="OM">Oman</option>
                                            <option value="PK">Pakistan</option>
                                            <option value="PW">Palau Island</option>
                                            <option value="PS">Palestine</option>
                                            <option value="PA">Panama</option>
                                            <option value="PG">Papua New Guinea</option>
                                            <option value="PY">Paraguay</option>
                                            <option value="PE">Peru</option>
                                            <option value="PH">Philippines</option>
                                            <option value="PO">Pitcairn Island</option>
                                            <option value="PL">Poland</option>
                                            <option value="PT">Portugal</option>
                                            <option value="PR">Puerto Rico</option>
                                            <option value="QA">Qatar</option>
                                            <option value="ME">Republic of Montenegro</option>
                                            <option value="RS">Republic of Serbia</option>
                                            <option value="RE">Reunion</option>
                                            <option value="RO">Romania</option>
                                            <option value="RU">Russia</option>
                                            <option value="RW">Rwanda</option>
                                            <option value="NT">St Barthelemy</option>
                                            <option value="EU">St Eustatius</option>
                                            <option value="HE">St Helena</option>
                                            <option value="KN">St Kitts-Nevis</option>
                                            <option value="LC">St Lucia</option>
                                            <option value="MB">St Maarten</option>
                                            <option value="PM">St Pierre &amp; Miquelon</option>
                                            <option value="VC">St Vincent &amp; Grenadines</option>
                                            <option value="SP">Saipan</option>
                                            <option value="SO">Samoa</option>
                                            <option value="AS">Samoa American</option>
                                            <option value="SM">San Marino</option>
                                            <option value="ST">Sao Tome &amp; Principe</option>
                                            <option value="SA">Saudi Arabia</option>
                                            <option value="SN">Senegal</option>
                                            <option value="RS">Serbia</option>
                                            <option value="SC">Seychelles</option>
                                            <option value="SL">Sierra Leone</option>
                                            <option value="SG">Singapore</option>
                                            <option value="SK">Slovakia</option>
                                            <option value="SI">Slovenia</option>
                                            <option value="SB">Solomon Islands</option>
                                            <option value="OI">Somalia</option>
                                            <option value="ZA">South Africa</option>
                                            <option value="ES">Spain</option>
                                            <option value="LK">Sri Lanka</option>
                                            <option value="SD">Sudan</option>
                                            <option value="SR">Suriname</option>
                                            <option value="SZ">Swaziland</option>
                                            <option value="SE">Sweden</option>
                                            <option value="CH">Switzerland</option>
                                            <option value="SY">Syria</option>
                                            <option value="TA">Tahiti</option>
                                            <option value="TW">Taiwan</option>
                                            <option value="TJ">Tajikistan</option>
                                            <option value="TZ">Tanzania</option>
                                            <option value="TH">Thailand</option>
                                            <option value="TG">Togo</option>
                                            <option value="TK">Tokelau</option>
                                            <option value="TO">Tonga</option>
                                            <option value="TT">Trinidad &amp; Tobago</option>
                                            <option value="TN">Tunisia</option>
                                            <option value="TR">Turkey</option>
                                            <option value="TU">Turkmenistan</option>
                                            <option value="TC">Turks &amp; Caicos Is</option>
                                            <option value="TV">Tuvalu</option>
                                            <option value="UG">Uganda</option>
                                            <option value="UA">Ukraine</option>
                                            <option value="AE">United Arab Emirates</option>
                                            <option value="GB">United Kingdom</option>
                                            <option value="US">United States of America</option>
                                            <option value="UY">Uruguay</option>
                                            <option value="UZ">Uzbekistan</option>
                                            <option value="VU">Vanuatu</option>
                                            <option value="VS">Vatican City State</option>
                                            <option value="VE">Venezuela</option>
                                            <option value="VN">Vietnam</option>
                                            <option value="VB">Virgin Islands (Brit)</option>
                                            <option value="VA">Virgin Islands (USA)</option>
                                            <option value="WK">Wake Island</option>
                                            <option value="WF">Wallis &amp; Futana Is</option>
                                            <option value="YE">Yemen</option>
                                            <option value="ZR">Zaire</option>
                                            <option value="ZM">Zambia</option>
                                            <option value="ZW">Zimbabwe</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group required">
                                    <label class="col-sm-2 control-label" for="input-zone">Region / State</label>
                                    <div class="col-sm-10">
                                        <select name="zone_id" id="input-zone" class="form-control">

                                            <option value=""> --- Please Select --- </option>
                                            <option value="1">Bahawalpur</option>
                                            <option value="2">Dera Ghazi Khan</option>
                                            <option value="3">Faisalabad</option>
                                            <option value="4">Gujranwala</option>
                                            <option value="5">Gujraat</option>
                                            <option value="6">Hyderabad</option>
                                            <option value="7">Islamabad</option>
                                            <option value="8">Karachi</option>
                                            <option value="9">Khanewal</option>
                                            <option value="10">Lahore</option>
                                            <option value="11">Layyah</option>
                                            <option value="12">Multan</option>
                                            <option value="13">Peshawar</option>
                                            <option value="14">Rajanpur</option>
                                            <option value="15">Rawalpindi</option>
                                            <option value="16">Sahiwal</option>
                                            <option value="17">Sialkot</option>
                                            <option value="18">Taunsa Shareef</option>

                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">


                </div>
            </div>

            <div class="row">
                <div class="col-sm-4 col-sm-offset-8">
                    <table class="table table-bordered">
                        <tbody>
                        <tr>
                            <td class="text-right">
                                <strong>Sub-Total:</strong>
                            </td>
                            <td class="text-right">RS 5500</td>
                        </tr>
                        <tr>
                            <td class="text-right">
                                <strong>Flat Shipping Rate:</strong>
                            </td>
                            <td class="text-right">RS 100</td>
                        </tr>
                        <tr>
                            <td class="text-right">
                                <strong>Eco Tax (16%.00):</strong>
                            </td>
                            <td class="text-right">RS 400</td>
                        </tr>

                        <tr>
                            <td class="text-right">
                                <strong>Total:</strong>
                            </td>
                            <td class="text-right">RS 6000</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="buttons">
                <div class="pull-left"><a href="index.html" class="btn btn-primary">Continue Shopping</a></div>
                <div class="pull-right"><a href="{{route('checkout')}}" class="btn btn-primary">Checkout</a></div>
            </div>
        </div>
        <!--Middle Part End -->

    </div>
@endsection
