@extends('layout')
@section('css')

@stop
@section('content')

<script src='../www.google.com/recaptcha/api.js'></script>
<link rel="stylesheet" type="text/css" href="{{url('/')}}/asset/clone/stylesheet/contact.css">

<main>
    <section>
        <div class="contact">
            <div class="contact__bg bg-img">
                <div class="overlay_dark contact__bg--gradient"></div>
                <div class="contact__text container hundper">
                    <div class="widthper mt80">
                        <div class="row justify-content-center">
                            <div class="col-lg-7 text-center">
                                <h4 class="mb50">Contact Our Support Team </h4>
                                <p>All messages to our customer support are responded to within 4 hours. We have a 99% customer
                                Satisfaction rate as a result. Remember, we are only here for you, our clients.

                                </p>
                                <div id="abt-btn-first" >
                                    <div data-aos-duration="2000" data-aos-once="false" data-aos="fade-right" data-aos-delay="1000">
                                        <a href="javascript:void(0)" id="contact-rol" class="btn__normal coloured roll--text mt15" data-text="contact us">
                                            contact us
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </section>

    <section class="mt80 mb60 reg-mag">
        <div class="contact-main">
            <div class="container">
                <div class="contact-main__heading text-center">
                    <h4>Get in touch with us</h4>
                </div>

                <div class="contact-main__main pt60">
                    <div class="row">
                        <div class="col-lg-6 col-md-5 last-order">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="basic">
                                        <div class="basic__icon">
                                            <span class="ti-comments"></span>
                                        </div>
                                        <div class="basic__text">
                                            <h5>Contact Us</h5>
                                            <div class="basic__break"></div>
                                            <p>
                                                Dear valued customer, in order to help us understand your issues and answer your questions we ask that you be as specific as possible when explaining your issues. 
                                            </p> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="basic">
                                        <div class="basic__icon">
                                            <span class="ti-mobile"></span>
                                        </div>
                                        <div class="basic__text">
                                            <h5>Give us a call</h5>
                                            <div class="basic__break"></div>
                                            <p>
                                                Don???t worry ??? you???re not going to get a ridiculously long phone menu when you call us. At
                                                Velmolt you always talk to a human! Note that waiting times may vary. Give us a call and be patient, we will be with you as soon as we can.

                                            </p> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="basic">
                                        <div class="basic__icon">
                                            <span class="ti-location-pin"></span>
                                        </div>
                                        <div class="basic__text">
                                            <h5>Location</h5>
                                            <div class="basic__break"></div>
                                            <p>
                                                Our team is scattered across the globe ??? primarily between the USA and Europe. We also have stakes in multiple bitcoin and Ethereum mining farms around the world which are open to visits from investors on appointment only. If you are one of our clients then you can contact us and we can schedule a visit to the location of your choice.
                                            </p> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-7">
                            <form action="{{route('contact-submit')}}" id="contactSubmit" method="post" autocomplete="off" spellcheck="false" autocorrect="off">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" required class="form-control" placeholder="Your Names*">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" required class="form-control" id="email" placeholder="Email address*">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="mobile">Phone</label>
                                        <input type="text" name="mobile" required class="form-control" id="mobile" placeholder="Phone Number*">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="country">Country</label>
                                        <select type="text" name="country" style="height: 5rem" class="form-control" id="country" required>
                                            <option value="" disabled="" selected="">Select your country</option>
                                            <option value="Afghanistan" title="Afghanistan">Afghanistan</option>
                                            <option value="??land Islands" title="??land Islands">??land Islands</option>
                                            <option value="Albania" title="Albania">Albania</option>
                                            <option value="Algeria" title="Algeria">Algeria</option>
                                            <option value="American Samoa" title="American Samoa">American Samoa</option>
                                            <option value="Andorra" title="Andorra">Andorra</option>
                                            <option value="Angola" title="Angola">Angola</option>
                                            <option value="Anguilla" title="Anguilla">Anguilla</option>
                                            <option value="Antarctica" title="Antarctica">Antarctica</option>
                                            <option value="Antigua and Barbuda" title="Antigua and Barbuda">Antigua and Barbuda</option>
                                            <option value="Argentina" title="Argentina">Argentina</option>
                                            <option value="Armenia" title="Armenia">Armenia</option>
                                            <option value="Aruba" title="Aruba">Aruba</option>
                                            <option value="Australia" title="Australia">Australia</option>
                                            <option value="Austria" title="Austria">Austria</option>
                                            <option value="Azerbaijan" title="Azerbaijan">Azerbaijan</option>
                                            <option value="Bahamas" title="Bahamas">Bahamas</option>
                                            <option value="Bahrain" title="Bahrain">Bahrain</option>
                                            <option value="Bangladesh" title="Bangladesh">Bangladesh</option>
                                            <option value="Barbados" title="Barbados">Barbados</option>
                                            <option value="Belarus" title="Belarus">Belarus</option>
                                            <option value="Belgium" title="Belgium">Belgium</option>
                                            <option value="Belize" title="Belize">Belize</option>
                                            <option value="Benin" title="Benin">Benin</option>
                                            <option value="Bermuda" title="Bermuda">Bermuda</option>
                                            <option value="Bhutan" title="Bhutan">Bhutan</option>
                                            <option value="Bolivia, Plurinational State of" title="Bolivia, Plurinational State of">Bolivia, Plurinational State of</option>
                                            <option value="Bonaire, Sint Eustatius and Saba" title="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
                                            <option value="Bosnia and Herzegovina" title="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                            <option value="Botswana" title="Botswana">Botswana</option>
                                            <option value="Bouvet Island" title="Bouvet Island">Bouvet Island</option>
                                            <option value="Brazil" title="Brazil">Brazil</option>
                                            <option value="British Indian Ocean Territory" title="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                            <option value="Brunei Darussalam" title="Brunei Darussalam">Brunei Darussalam</option>
                                            <option value="Bulgaria" title="Bulgaria">Bulgaria</option>
                                            <option value="Burkina Faso" title="Burkina Faso">Burkina Faso</option>
                                            <option value="Burundi" title="Burundi">Burundi</option>
                                            <option value="Cambodia" title="Cambodia">Cambodia</option>
                                            <option value="Cameroon" title="Cameroon">Cameroon</option>
                                            <option value="Canada" title="Canada">Canada</option>
                                            <option value="Cape Verde" title="Cape Verde">Cape Verde</option>
                                            <option value="Cayman Islands" title="Cayman Islands">Cayman Islands</option>
                                            <option value="Central African Republic" title="Central African Republic">Central African Republic</option>
                                            <option value="Chad" title="Chad">Chad</option>
                                            <option value="Chile" title="Chile">Chile</option>
                                            <option value="China" title="China">China</option>
                                            <option value="Christmas Island" title="Christmas Island">Christmas Island</option>
                                            <option value="Cocos (Keeling) Islands" title="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                            <option value="Colombia" title="Colombia">Colombia</option>
                                            <option value="Comoros" title="Comoros">Comoros</option>
                                            <option value="Congo" title="Congo">Congo</option>
                                            <option value="Congo, the Democratic Republic of the" title="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option>
                                            <option value="Cook Islands" title="Cook Islands">Cook Islands</option>
                                            <option value="Costa Rica" title="Costa Rica">Costa Rica</option>
                                            <option value="C??te d'Ivoire" title="C??te d'Ivoire">C??te d'Ivoire</option>
                                            <option value="Croatia" title="Croatia">Croatia</option>
                                            <option value="Cuba" title="Cuba">Cuba</option>
                                            <option value="Cura??ao" title="Cura??ao">Cura??ao</option>
                                            <option value="Cyprus" title="Cyprus">Cyprus</option>
                                            <option value="Czech Republic" title="Czech Republic">Czech Republic</option>
                                            <option value="Denmark" title="Denmark">Denmark</option>
                                            <option value="Djibouti" title="Djibouti">Djibouti</option>
                                            <option value="Dominica" title="Dominica">Dominica</option>
                                            <option value="Dominican Republic" title="Dominican Republic">Dominican Republic</option>
                                            <option value="Ecuador" title="Ecuador">Ecuador</option>
                                            <option value="Egypt" title="Egypt">Egypt</option>
                                            <option value="El Salvador" title="El Salvador">El Salvador</option>
                                            <option value="Equatorial Guinea" title="Equatorial Guinea">Equatorial Guinea</option>
                                            <option value="Eritrea" title="Eritrea">Eritrea</option>
                                            <option value="Estonia" title="Estonia">Estonia</option>
                                            <option value="Ethiopia" title="Ethiopia">Ethiopia</option>
                                            <option value="Falkland Islands (Malvinas)" title="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                            <option value="Faroe Islands" title="Faroe Islands">Faroe Islands</option>
                                            <option value="Fiji" title="Fiji">Fiji</option>
                                            <option value="Finland" title="Finland">Finland</option>
                                            <option value="France" title="France">France</option>
                                            <option value="French Guiana" title="French Guiana">French Guiana</option>
                                            <option value="French Polynesia" title="French Polynesia">French Polynesia</option>
                                            <option value="French Southern Territories" title="French Southern Territories">French Southern Territories</option>
                                            <option value="Gabon" title="Gabon">Gabon</option>
                                            <option value="Gambia" title="Gambia">Gambia</option>
                                            <option value="Georgia" title="Georgia">Georgia</option>
                                            <option value="Germany" title="Germany">Germany</option>
                                            <option value="Ghana" title="Ghana">Ghana</option>
                                            <option value="Gibraltar" title="Gibraltar">Gibraltar</option>
                                            <option value="Greece" title="Greece">Greece</option>
                                            <option value="Greenland" title="Greenland">Greenland</option>
                                            <option value="Grenada" title="Grenada">Grenada</option>
                                            <option value="Guadeloupe" title="Guadeloupe">Guadeloupe</option>
                                            <option value="Guam" title="Guam">Guam</option>
                                            <option value="Guatemala" title="Guatemala">Guatemala</option>
                                            <option value="Guernsey" title="Guernsey">Guernsey</option>
                                            <option value="Guinea" title="Guinea">Guinea</option>
                                            <option value="Guinea-Bissau" title="Guinea-Bissau">Guinea-Bissau</option>
                                            <option value="Guyana" title="Guyana">Guyana</option>
                                            <option value="Haiti" title="Haiti">Haiti</option>
                                            <option value="Heard Island and McDonald Islands" title="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
                                            <option value="Holy See (Vatican City State)" title="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                            <option value="Honduras" title="Honduras">Honduras</option>
                                            <option value="Hong Kong" title="Hong Kong">Hong Kong</option>
                                            <option value="Hungary" title="Hungary">Hungary</option>
                                            <option value="Iceland" title="Iceland">Iceland</option>
                                            <option value="India" title="India">India</option>
                                            <option value="Indonesia" title="Indonesia">Indonesia</option>
                                            <option value="Iran, Islamic Republic of" title="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                            <option value="Iraq" title="Iraq">Iraq</option>
                                            <option value="Ireland" title="Ireland">Ireland</option>
                                            <option value="Isle of Man" title="Isle of Man">Isle of Man</option>
                                            <option value="Israel" title="Israel">Israel</option>
                                            <option value="Italy" title="Italy">Italy</option>
                                            <option value="Jamaica" title="Jamaica">Jamaica</option>
                                            <option value="Japan" title="Japan">Japan</option>
                                            <option value="Jersey" title="Jersey">Jersey</option>
                                            <option value="Jordan" title="Jordan">Jordan</option>
                                            <option value="Kazakhstan" title="Kazakhstan">Kazakhstan</option>
                                            <option value="Kenya" title="Kenya">Kenya</option>
                                            <option value="Kiribati" title="Kiribati">Kiribati</option>
                                            <option value="Korea, Democratic People's Republic of" title="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                            <option value="Korea, Republic of" title="Korea, Republic of">Korea, Republic of</option>
                                            <option value="Kuwait" title="Kuwait">Kuwait</option>
                                            <option value="Kyrgyzstan" title="Kyrgyzstan">Kyrgyzstan</option>
                                            <option value="Lao People's Democratic Republic" title="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                            <option value="Latvia" title="Latvia">Latvia</option>
                                            <option value="Lebanon" title="Lebanon">Lebanon</option>
                                            <option value="Lesotho" title="Lesotho">Lesotho</option>
                                            <option value="Liberia" title="Liberia">Liberia</option>
                                            <option value="Libya" title="Libya">Libya</option>
                                            <option value="Liechtenstein" title="Liechtenstein">Liechtenstein</option>
                                            <option value="Lithuania" title="Lithuania">Lithuania</option>
                                            <option value="Luxembourg" title="Luxembourg">Luxembourg</option>
                                            <option value="Macao" title="Macao">Macao</option>
                                            <option value="Macedonia, the former Yugoslav Republic of" title="Macedonia, the former Yugoslav Republic of">Macedonia, the former Yugoslav Republic of</option>
                                            <option value="Madagascar" title="Madagascar">Madagascar</option>
                                            <option value="Malawi" title="Malawi">Malawi</option>
                                            <option value="Malaysia" title="Malaysia">Malaysia</option>
                                            <option value="Maldives" title="Maldives">Maldives</option>
                                            <option value="Mali" title="Mali">Mali</option>
                                            <option value="Malta" title="Malta">Malta</option>
                                            <option value="Marshall Islands" title="Marshall Islands">Marshall Islands</option>
                                            <option value="Martinique" title="Martinique">Martinique</option>
                                            <option value="Mauritania" title="Mauritania">Mauritania</option>
                                            <option value="Mauritius" title="Mauritius">Mauritius</option>
                                            <option value="Mayotte" title="Mayotte">Mayotte</option>
                                            <option value="Mexico" title="Mexico">Mexico</option>
                                            <option value="Micronesia, Federated States of" title="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                            <option value="Moldova, Republic of" title="Moldova, Republic of">Moldova, Republic of</option>
                                            <option value="Monaco" title="Monaco">Monaco</option>
                                            <option value="Mongolia" title="Mongolia">Mongolia</option>
                                            <option value="Montenegro" title="Montenegro">Montenegro</option>
                                            <option value="Montserrat" title="Montserrat">Montserrat</option>
                                            <option value="Morocco" title="Morocco">Morocco</option>
                                            <option value="Mozambique" title="Mozambique">Mozambique</option>
                                            <option value="Myanmar" title="Myanmar">Myanmar</option>
                                            <option value="Namibia" title="Namibia">Namibia</option>
                                            <option value="Nauru" title="Nauru">Nauru</option>
                                            <option value="Nepal" title="Nepal">Nepal</option>
                                            <option value="Netherlands" title="Netherlands">Netherlands</option>
                                            <option value="New Caledonia" title="New Caledonia">New Caledonia</option>
                                            <option value="New Zealand" title="New Zealand">New Zealand</option>
                                            <option value="Nicaragua" title="Nicaragua">Nicaragua</option>
                                            <option value="Niger" title="Niger">Niger</option>
                                            <option value="Nigeria" title="Nigeria">Nigeria</option>
                                            <option value="Niue" title="Niue">Niue</option>
                                            <option value="Norfolk Island" title="Norfolk Island">Norfolk Island</option>
                                            <option value="Northern Mariana Islands" title="Northern Mariana Islands">Northern Mariana Islands</option>
                                            <option value="Norway" title="Norway">Norway</option>
                                            <option value="Oman" title="Oman">Oman</option>
                                            <option value="Pakistan" title="Pakistan">Pakistan</option>
                                            <option value="Palau" title="Palau">Palau</option>
                                            <option value="Palestinian Territory, Occupied" title="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                            <option value="Panama" title="Panama">Panama</option>
                                            <option value="Papua New Guinea" title="Papua New Guinea">Papua New Guinea</option>
                                            <option value="Paraguay" title="Paraguay">Paraguay</option>
                                            <option value="Peru" title="Peru">Peru</option>
                                            <option value="Philippines" title="Philippines">Philippines</option>
                                            <option value="Pitcairn" title="Pitcairn">Pitcairn</option>
                                            <option value="Poland" title="Poland">Poland</option>
                                            <option value="Portugal" title="Portugal">Portugal</option>
                                            <option value="Puerto Rico" title="Puerto Rico">Puerto Rico</option>
                                            <option value="Qatar" title="Qatar">Qatar</option>
                                            <option value="R??union" title="R??union">R??union</option>
                                            <option value="Romania" title="Romania">Romania</option>
                                            <option value="Russian Federation" title="Russian Federation">Russian Federation</option>
                                            <option value="Rwanda" title="Rwanda">Rwanda</option>
                                            <option value="Saint Barth??lemy" title="Saint Barth??lemy">Saint Barth??lemy</option>
                                            <option value="Saint Helena, Ascension and Tristan da Cunha" title="Saint Helena, Ascension and Tristan da Cunha">Saint Helena, Ascension and Tristan da Cunha</option>
                                            <option value="Saint Kitts and Nevis" title="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                            <option value="Saint Lucia" title="Saint Lucia">Saint Lucia</option>
                                            <option value="Saint Martin (French part)" title="Saint Martin (French part)">Saint Martin (French part)</option>
                                            <option value="Saint Pierre and Miquelon" title="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                            <option value="Saint Vincent and the Grenadines" title="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                            <option value="Samoa" title="Samoa">Samoa</option>
                                            <option value="San Marino" title="San Marino">San Marino</option>
                                            <option value="Sao Tome and Principe" title="Sao Tome and Principe">Sao Tome and Principe</option>
                                            <option value="Saudi Arabia" title="Saudi Arabia">Saudi Arabia</option>
                                            <option value="Senegal" title="Senegal">Senegal</option>
                                            <option value="Serbia" title="Serbia">Serbia</option>
                                            <option value="Seychelles" title="Seychelles">Seychelles</option>
                                            <option value="Sierra Leone" title="Sierra Leone">Sierra Leone</option>
                                            <option value="Singapore" title="Singapore">Singapore</option>
                                            <option value="Sint Maarten (Dutch part)" title="Sint Maarten (Dutch part)">Sint Maarten (Dutch part)</option>
                                            <option value="Slovakia" title="Slovakia">Slovakia</option>
                                            <option value="Slovenia" title="Slovenia">Slovenia</option>
                                            <option value="Solomon Islands" title="Solomon Islands">Solomon Islands</option>
                                            <option value="Somalia" title="Somalia">Somalia</option>
                                            <option value="South Africa" title="South Africa">South Africa</option>
                                            <option value="South Georgia and the South Sandwich Islands" title="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                                            <option value="South Sudan" title="South Sudan">South Sudan</option>
                                            <option value="Spain" title="Spain">Spain</option>
                                            <option value="Sri Lanka" title="Sri Lanka">Sri Lanka</option>
                                            <option value="Sudan" title="Sudan">Sudan</option>
                                            <option value="Suriname" title="Suriname">Suriname</option>
                                            <option value="Svalbard and Jan Mayen" title="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                            <option value="Swaziland" title="Swaziland">Swaziland</option>
                                            <option value="Sweden" title="Sweden">Sweden</option>
                                            <option value="Switzerland" title="Switzerland">Switzerland</option>
                                            <option value="Syrian Arab Republic" title="Syrian Arab Republic">Syrian Arab Republic</option>
                                            <option value="Taiwan, Province of China" title="Taiwan, Province of China">Taiwan, Province of China</option>
                                            <option value="Tajikistan" title="Tajikistan">Tajikistan</option>
                                            <option value="Tanzania, United Republic of" title="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                            <option value="Thailand" title="Thailand">Thailand</option>
                                            <option value="Timor-Leste" title="Timor-Leste">Timor-Leste</option>
                                            <option value="Togo" title="Togo">Togo</option>
                                            <option value="Tokelau" title="Tokelau">Tokelau</option>
                                            <option value="Tonga" title="Tonga">Tonga</option>
                                            <option value="Trinidad and Tobago" title="Trinidad and Tobago">Trinidad and Tobago</option>
                                            <option value="Tunisia" title="Tunisia">Tunisia</option>
                                            <option value="Turkey" title="Turkey">Turkey</option>
                                            <option value="Turkmenistan" title="Turkmenistan">Turkmenistan</option>
                                            <option value="Turks and Caicos Islands" title="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                            <option value="Tuvalu" title="Tuvalu">Tuvalu</option>
                                            <option value="Uganda" title="Uganda">Uganda</option>
                                            <option value="Ukraine" title="Ukraine">Ukraine</option>
                                            <option value="United Arab Emirates" title="United Arab Emirates">United Arab Emirates</option>
                                            <option value="United Kingdom" title="United Kingdom">United Kingdom</option>
                                            <option value="United States" title="United States">United States</option>
                                            <option value="United States Minor Outlying Islands" title="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                            <option value="Uruguay" title="Uruguay">Uruguay</option>
                                            <option value="Uzbekistan" title="Uzbekistan">Uzbekistan</option>
                                            <option value="Vanuatu" title="Vanuatu">Vanuatu</option>
                                            <option value="Venezuela, Bolivarian Republic of" title="Venezuela, Bolivarian Republic of">Venezuela, Bolivarian Republic of</option>
                                            <option value="Viet Nam" title="Viet Nam">Viet Nam</option>
                                            <option value="Virgin Islands, British" title="Virgin Islands, British">Virgin Islands, British</option>
                                            <option value="Virgin Islands, U.S." title="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                            <option value="Wallis and Futuna" title="Wallis and Futuna">Wallis and Futuna</option>
                                            <option value="Western Sahara" title="Western Sahara">Western Sahara</option>
                                            <option value="Yemen" title="Yemen">Yemen</option>
                                            <option value="Zambia" title="Zambia">Zambia</option>
                                            <option value="Zimbabwe" title="Zimbabwe">Zimbabwe</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="message">Message</label>
                                        <textarea name="message" required placeholder="Your message*" class="form-control text-area" id="message"></textarea>
                                    </div>
                                    
                                    <div class="form-group col-md-12">
                                        <div class="g-recaptcha" data-sitekey="6LesJ6MZAAAAAKR8KvWa-a_1WaFZF4kfSJPNw9VG"></div>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <button class="btn__normal coloured btn-block roll--text" data-text="send message">send message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt50">
        <div class="row">
            <div class="col-md-6 p0">
                <div class="pt100 pb100 locate" data-aos="fade-right" data-aos-duration="1900">
                    <div class="mx-auto">
                        <div class="locate__heading text-center">
                            <h1 class="mb70">How to Find & Contact Us</h1>
                        </div>
                        <div class="mb80">
                            <div class="row">
                                    <div class="col-6">
                                        <p>
                                            <span style="color: #292929"> <strong>Working-Days</strong></span>
                                        </p>
                                    </div>
                                    <div class="col-6">
                                        <p class="text-right">
                                            <span>Mon - Fri.</span>
                                        </p>
                                    </div>
                                </div>
                            <div class="locate__divider pt25"></div>
                        </div>

                        <div class="locate__text text-center">
                            <p>company address</p>
                            
                            <p>{{$set->address}}</p>
                            <!--<p>56 Elizabeth St belgravia, London. United kingdom</p>-->
                        </div>

                        <div class="locate__text text-center">
                            <p>support email</p>
                            <p>{{$set->email}}</p>
                        </div>

                        <div class="locate__text text-center">
                            <p>company phone</p>
                            <p>{{$set->mobile}}</p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-6 p0">
                <div class="map" style="height: 100%" data-aos="fade-left" data-aos-duration="1500">
                    <div class="mapouter"><div class="gmap_canvas"><iframe width="500" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=1166%206th%20Ave%2C%20New%20York%2C%20NY%2010036%2C%20United%20States&amp;t=k&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net/google-map-generator/">google map generator</a></div><style>.mapouter{position:relative;text-align:right;height:400px;width:500px;}.gmap_canvas {overflow:hidden;background:none!important;height:400px;width:500px;}</style></div>
                    <!--<div class="map-main"></div>-->
                </div>
            </div>
        </div>
    </section>
</main>

@stop