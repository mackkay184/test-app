<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Shopping Checkout - Bayya Bitcoin Crypto Currency Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.png">

    <!-- Template CSS Files -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/select2.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/skins/orange.css">

    <!-- Live Style Switcher - demo only -->
    <link rel="alternate stylesheet" type="text/css" title="orange" href="css/skins/orange.css" />
    <link rel="alternate stylesheet" type="text/css" title="green" href="css/skins/green.css" />
    <link rel="alternate stylesheet" type="text/css" title="blue" href="css/skins/blue.css" />
    <link rel="stylesheet" type="text/css" href="css/styleswitcher.css" />

    <!-- Template JS Files -->
    <script src="js/modernizr.js"></script>

</head>

<body>
    <!-- SVG Preloader Starts -->
    <div id="preloader">
        <div id="preloader-content">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="150px" height="150px" viewBox="100 100 400 400" xml:space="preserve">
                <filter id="dropshadow" height="130%">
                <feGaussianBlur in="SourceAlpha" stdDeviation="5"/>
                <feOffset dx="0" dy="0" result="offsetblur"/>
                <feFlood flood-color="red"/>
                <feComposite in2="offsetblur" operator="in"/>
                <feMerge>
                <feMergeNode/>
                <feMergeNode in="SourceGraphic"/>
                </feMerge>
                </filter>          
                <path class="path" fill="#000000" d="M446.089,261.45c6.135-41.001-25.084-63.033-67.769-77.735l13.844-55.532l-33.801-8.424l-13.48,54.068
                    c-8.896-2.217-18.015-4.304-27.091-6.371l13.568-54.429l-33.776-8.424l-13.861,55.521c-7.354-1.676-14.575-3.328-21.587-5.073
                    l0.034-0.171l-46.617-11.64l-8.993,36.102c0,0,25.08,5.746,24.549,6.105c13.689,3.42,16.159,12.478,15.75,19.658L208.93,357.23
                    c-1.675,4.158-5.925,10.401-15.494,8.031c0.338,0.485-24.579-6.134-24.579-6.134l-9.631,40.468l36.843,9.188
                    c8.178,2.051,16.209,4.19,24.098,6.217l-13.978,56.17l33.764,8.424l13.852-55.571c9.235,2.499,18.186,4.813,26.948,6.995
                    l-13.802,55.309l33.801,8.424l13.994-56.061c57.648,10.902,100.998,6.502,119.237-45.627c14.705-41.979-0.731-66.193-31.06-81.984
                    C425.008,305.984,441.655,291.455,446.089,261.45z M368.859,369.754c-10.455,41.983-81.128,19.285-104.052,13.589l18.562-74.404
                    C306.28,314.65,379.774,325.975,368.859,369.754z M379.302,260.846c-9.527,38.187-68.358,18.781-87.442,14.023l16.828-67.489
                    C327.767,212.14,389.234,221.02,379.302,260.846z"/>       
            </svg>
        </div>
    </div>
    <!-- SVG Preloader Ends -->
    <!-- Live Style Switcher Starts - demo only -->
    <div id="switcher" class="">
        <div class="content-switcher">
            <h4>STYLE SWITCHER</h4>
            <ul>
                <li>
                    <a id="orange-css" href="shopping-checkout.html#" title="orange" class="color"><img src="images/styleswitcher/colors/orange.png" alt="" width="30" height="30" /></a>
                </li>
                <li>
                    <a id="green-css" href="shopping-checkout.html#" title="green" class="color"><img src="images/styleswitcher/colors/green.png" alt="" width="30" height="30" /></a>
                </li>
                <li>
                    <a id="blue-css" href="shopping-checkout.html#" title="blue" class="color"><img src="images/styleswitcher/colors/blue.png" alt="" width="30" height="30" /></a>
                </li>
            </ul>

            <p>BODY SKIN</p>

            <label><input class="dark_switch" type="radio" name="color_style" id="is_dark" value="dark" checked="checked" /> Dark</label>
            <label><input class="dark_switch" type="radio" name="color_style" id="is_light" value="light" /> Light</label>

            <hr />

            <p>LAYOUT STYLE</p>
            <label><input class="boxed_switch" type="radio" name="layout_style" id="is_wide" value="wide" checked="checked" /> Wide</label>
            <label><input class="boxed_switch" type="radio" name="layout_style" id="is_boxed" value="boxed" /> Boxed</label>

            <hr />

            <a href="shopping-checkout.html#" class="custom-button purchase">Purchase</a>
            <div id="hideSwitcher">&times;</div>

        </div>
    </div>
    <div id="showSwitcher" class="styleSecondColor"><i class="fa fa-cog fa-spin"></i></div>
    <!-- Live Style Switcher Ends - demo only -->
    <!-- Wrapper Starts -->
    <div class="wrapper">
        <!-- Header Starts -->
        <header class="header">
            <div class="container">
                <div class="row">
                    <!-- Logo Starts -->
                    <div class="main-logo col-xs-12 col-md-3 col-md-2 col-lg-2 hidden-xs">
                        <a href="index.html">
							<img id="logo" class="img-responsive" src="images/logo-dark.png" alt="logo">
						</a>
                    </div>
                    <!-- Logo Ends -->
                    <!-- Statistics Starts -->
                    <div class="col-md-7 col-lg-7">
                        <ul class="unstyled bitcoin-stats text-center">
                            <li>
                                <h6>9,450 USD</h6><span>Last trade price</span></li>
                            <li>
                                <h6>+5.26%</h6><span>24 hour price</span></li>
                            <li>
                                <h6>12.820 BTC</h6><span>24 hour volume</span></li>
                            <li>
                                <h6>2,231,775</h6><span>active traders</span></li>
                            <li>
                                <div class="btcwdgt-price" data-bw-theme="light" data-bw-cur="usd"></div>
                                <span>Live Bitcoin price</span>
                            </li>
                        </ul>
                    </div>
                    <!-- Statistics Ends -->
                    <!-- User Sign In/Sign Up Starts -->
                    <div class="col-md-3 col-lg-3">
                        <ul class="unstyled user">
                            <li class="sign-in"><a href="login.html" class="btn btn-primary"><i class="fa fa-user"></i> sign in</a></li>
                            <li class="sign-up"><a href="register.html" class="btn btn-primary"><i class="fa fa-user-plus"></i> register</a></li>
                        </ul>
                    </div>
                    <!-- User Sign In/Sign Up Ends -->
                </div>
            </div>
            <!-- Navigation Menu Starts -->
            <nav class="site-navigation navigation" id="site-navigation">
                <div class="container">
                    <div class="site-nav-inner">
                        <!-- Logo For ONLY Mobile display Starts -->
                        <a class="logo-mobile" href="index.html">
							<img id="logo-mobile" class="img-responsive" src="images/logo-dark.png" alt="">
						</a>
                        <!-- Logo For ONLY Mobile display Ends -->
                        <!-- Toggle Icon for Mobile Starts -->
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
                        <!-- Toggle Icon for Mobile Ends -->
                        <div class="collapse navbar-collapse navbar-responsive-collapse">
                            <!-- Main Menu Starts -->
                            <ul class="nav navbar-nav">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="services.html">Services</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                                <li class="dropdown">
                                    <a href="shopping-checkout.html#" class="dropdown-toggle" data-toggle="dropdown">Blog <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="blog-right-sidebar.html">Right Sidebar</a></li>
                                        <li><a href="blog-left-sidebar.html">Left Sidebar</a></li>
                                        <li><a href="blog-grid-no-sidebar.html">Grid No Sidebar</a></li>
                                        <li><a href="blog-post.html">Single Post</a></li>
                                    </ul>
                                </li>
                                <li class="active dropdown">
                                    <a href="shopping-checkout.html#" class="dropdown-toggle" data-toggle="dropdown">pages <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="register.html">Register page</a></li>
                                        <li><a href="login.html">Login page</a></li>
										<li><a href="shopping-cart.html">Shopping cart</a></li>
                                        <li class="active"><a href="shopping-checkout.html">shopping checkout</a></li>
                                        <li><a href="faq.html">FAQ page</a></li>
                                        <li><a href="404.html">404 Page</a></li>
                                        <li><a href="503.html">Server Error Page</a></li>
                                        <li><a href="terms-of-services.html">Terms of Services</a></li>
                                        <li><a href="coming-soon.html">Coming Soon</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact</a></li>
								<!-- Cart Icon Starts -->
								<li class="cart"><a href="shopping-cart.html"><i class="fa fa-shopping-cart"></i></a></li>
								<!-- Cart Icon Starts -->
                                <!-- Search Icon Starts -->
                                <li class="search"><button class="fa fa-search"></button></li>
                                <!-- Search Icon Ends -->
                            </ul>
                            <!-- Main Menu Ends -->
                        </div>
                    </div>
                </div>
                <!-- Search Input Starts -->
                <div class="site-search">
                    <div class="container">
                        <input type="text" placeholder="type your keyword and hit enter ...">
                        <span class="close">×</span>
                    </div>
                </div>
                <!-- Search Input Ends -->
            </nav>
            <!-- Navigation Menu Ends -->
        </header>
        <!-- Header Ends -->
        <!-- Banner Area Starts -->
        <section class="banner-area">
            <div class="banner-overlay">
                <div class="banner-text text-center">
                    <div class="container">
                        <!-- Section Title Starts -->
                        <div class="row text-center">
                            <div class="col-xs-12">
                                <!-- Title Starts -->
                                <h2 class="title-head">Shopping <span>Checkout</span></h2>
                                <!-- Title Ends -->
                                <hr>
                                <!-- Breadcrumb Starts -->
                                <ul class="breadcrumb">
                                    <li><a href="index.html"> home</a></li>
                                    <li>Shopping Checkout</li>
                                </ul>
                                <!-- Breadcrumb Ends -->
                            </div>
                        </div>
                        <!-- Section Title Ends -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Banner Area Starts -->
        <!-- Shopping Checkout Section Starts -->
        <section class="shop-checkout">
			<!-- Billing Details Starts -->
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <p>Returning Customer ? <a href="login.html">Click here to login</a></p>
                        <h3>Billing Details</h3>
                        <form class="row">
                            <!-- Input Field Starts -->
                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                    <input type="text" placeholder="FIRST NAME" class="form-control">
                                </div>
                            </div>
							<!-- Input Field Ends -->
                            <!-- Input Field Starts -->
                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                    <input type="text" placeholder="LAST NAME" class="form-control">
                                </div>
                            </div>
							<!-- Input Field Ends -->
                            <!-- Input Field Starts -->
                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                    <input type="text" placeholder="COMPANY" class="form-control">
                                </div>
                            </div>
							<!-- Input Field Ends -->
                            <!-- Input Field Starts -->
                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                    <input type="email" placeholder="EMAIL" class="form-control">
                                </div>
                            </div>
							<!-- Input Field Ends -->
                            <!-- Input Field Starts -->
                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                    <input type="text" placeholder="PHONE" class="form-control">
                                </div>
                            </div>
							<!-- Input Field Ends -->
                            <!-- Input Field Starts -->
                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                    <select class="form-control">
										<option value="AF" selected>Afghanistan</option>
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
										<option value="BO">Bolivia, Plurinational State of</option>
										<option value="BQ">Bonaire, Sint Eustatius and Saba</option>
										<option value="BA">Bosnia and Herzegovina</option>
										<option value="BW">Botswana</option>
										<option value="BV">Bouvet Island</option>
										<option value="BR">Brazil</option>
										<option value="IO">British Indian Ocean Territory</option>
										<option value="BN">Brunei Darussalam</option>
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
										<option value="CC">Cocos (Keeling) Islands</option>
										<option value="CO">Colombia</option>
										<option value="KM">Comoros</option>
										<option value="CG">Congo</option>
										<option value="CD">Congo, the Democratic Republic of the</option>
										<option value="CK">Cook Islands</option>
										<option value="CR">Costa Rica</option>
										<option value="CI">Côte d'Ivoire</option>
										<option value="HR">Croatia</option>
										<option value="CU">Cuba</option>
										<option value="CW">Curaçao</option>
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
										<option value="FK">Falkland Islands (Malvinas)</option>
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
										<option value="VA">Holy See (Vatican City State)</option>
										<option value="HN">Honduras</option>
										<option value="HK">Hong Kong</option>
										<option value="HU">Hungary</option>
										<option value="IS">Iceland</option>
										<option value="IN">India</option>
										<option value="ID">Indonesia</option>
										<option value="IR">Iran, Islamic Republic of</option>
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
										<option value="KP">Korea, Democratic People's Republic of</option>
										<option value="KR">Korea, Republic of</option>
										<option value="KW">Kuwait</option>
										<option value="KG">Kyrgyzstan</option>
										<option value="LA">Lao People's Democratic Republic</option>
										<option value="LV">Latvia</option>
										<option value="LB">Lebanon</option>
										<option value="LS">Lesotho</option>
										<option value="LR">Liberia</option>
										<option value="LY">Libya</option>
										<option value="LI">Liechtenstein</option>
										<option value="LT">Lithuania</option>
										<option value="LU">Luxembourg</option>
										<option value="MO">Macao</option>
										<option value="MK">Macedonia, the former Yugoslav Republic of</option>
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
										<option value="FM">Micronesia, Federated States of</option>
										<option value="MD">Moldova, Republic of</option>
										<option value="MC">Monaco</option>
										<option value="MN">Mongolia</option>
										<option value="ME">Montenegro</option>
										<option value="MS">Montserrat</option>
										<option value="MA">Morocco</option>
										<option value="MZ">Mozambique</option>
										<option value="MM">Myanmar</option>
										<option value="NA">Namibia</option>
										<option value="NR">Nauru</option>
										<option value="NP">Nepal</option>
										<option value="NL">Netherlands</option>
										<option value="NC">New Caledonia</option>
										<option value="NZ">New Zealand</option>
										<option value="NI">Nicaragua</option>
										<option value="NE">Niger</option>
										<option value="NG">Nigeria</option>
										<option value="NU">Niue</option>
										<option value="NF">Norfolk Island</option>
										<option value="MP">Northern Mariana Islands</option>
										<option value="NO">Norway</option>
										<option value="OM">Oman</option>
										<option value="PK">Pakistan</option>
										<option value="PW">Palau</option>
										<option value="PS">Palestinian Territory, Occupied</option>
										<option value="PA">Panama</option>
										<option value="PG">Papua New Guinea</option>
										<option value="PY">Paraguay</option>
										<option value="PE">Peru</option>
										<option value="PH">Philippines</option>
										<option value="PN">Pitcairn</option>
										<option value="PL">Poland</option>
										<option value="PT">Portugal</option>
										<option value="PR">Puerto Rico</option>
										<option value="QA">Qatar</option>
										<option value="RE">Réunion</option>
										<option value="RO">Romania</option>
										<option value="RU">Russian Federation</option>
										<option value="RW">Rwanda</option>
										<option value="BL">Saint Barthélemy</option>
										<option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
										<option value="KN">Saint Kitts and Nevis</option>
										<option value="LC">Saint Lucia</option>
										<option value="MF">Saint Martin (French part)</option>
										<option value="PM">Saint Pierre and Miquelon</option>
										<option value="VC">Saint Vincent and the Grenadines</option>
										<option value="WS">Samoa</option>
										<option value="SM">San Marino</option>
										<option value="ST">Sao Tome and Principe</option>
										<option value="SA">Saudi Arabia</option>
										<option value="SN">Senegal</option>
										<option value="RS">Serbia</option>
										<option value="SC">Seychelles</option>
										<option value="SL">Sierra Leone</option>
										<option value="SG">Singapore</option>
										<option value="SX">Sint Maarten (Dutch part)</option>
										<option value="SK">Slovakia</option>
										<option value="SI">Slovenia</option>
										<option value="SB">Solomon Islands</option>
										<option value="SO">Somalia</option>
										<option value="ZA">South Africa</option>
										<option value="GS">South Georgia and the South Sandwich Islands</option>
										<option value="SS">South Sudan</option>
										<option value="ES">Spain</option>
										<option value="LK">Sri Lanka</option>
										<option value="SD">Sudan</option>
										<option value="SR">Suriname</option>
										<option value="SJ">Svalbard and Jan Mayen</option>
										<option value="SZ">Swaziland</option>
										<option value="SE">Sweden</option>
										<option value="CH">Switzerland</option>
										<option value="SY">Syrian Arab Republic</option>
										<option value="TW">Taiwan, Province of China</option>
										<option value="TJ">Tajikistan</option>
										<option value="TZ">Tanzania, United Republic of</option>
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
										<option value="GB">United Kingdom</option>
										<option value="US">United States</option>
										<option value="UM">United States Minor Outlying Islands</option>
										<option value="UY">Uruguay</option>
										<option value="UZ">Uzbekistan</option>
										<option value="VU">Vanuatu</option>
										<option value="VE">Venezuela, Bolivarian Republic of</option>
										<option value="VN">Viet Nam</option>
										<option value="VG">Virgin Islands, British</option>
										<option value="VI">Virgin Islands, U.S.</option>
										<option value="WF">Wallis and Futuna</option>
										<option value="EH">Western Sahara</option>
										<option value="YE">Yemen</option>
										<option value="ZM">Zambia</option>
										<option value="ZW">Zimbabwe</option>
									</select>
                                </div>
                            </div>
							<!-- Input Field Ends -->
                            <!-- Input Field Starts -->
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <textarea placeholder="STREET ADDRESS" class="form-control"></textarea>
                                </div>
                            </div>
							<!-- Input Field Ends -->
                            <!-- Input Field Starts -->
                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                    <input type="text" placeholder="APARTMENT, SUITE , UNIT ETC. (OPTIONAL)" class="form-control">
                                </div>
                            </div>
							<!-- Input Field Ends -->
                            <!-- Input Field Starts -->
                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                    <input type="text" placeholder="TOWN / CITY" class="form-control">
                                </div>
                            </div>
							<!-- Input Field Ends -->
                            <!-- Input Field Starts -->
                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                    <input type="text" placeholder="POSTCODE" class="form-control">
                                </div>
                            </div>
							<!-- Input Field Ends -->
                            <!-- Input Field Starts -->
                            <div class="col-xs-12">
                                <div class="checkbox">
                                    <label>
										<input type="checkbox" value="" />
										<span class="checkbox-field"></span>
										<span>Create an account?</span>
									</label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Billing Details Ends -->
			<!-- Checkout Starts -->
            <div class="checkout">
                <div class="container">
                    <h3>Your order</h3>
                    <div class="row">
						<!-- Purchased Products Starts -->
                        <div class="col-sm-12 col-md-6">
                            <table class="table products">
                                <colgroup>
                                    <col class="col-xs-6">
                                    <col class="col-xs-6">
                                </colgroup>
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>0.179 BTC</td>
                                        <td class="text-price">$589.31</td>
                                    </tr>
                                    <tr>
                                        <th class="with-bg">SUBTOTAL</th>
                                        <td class="text-price">$589.31</td>
                                    </tr>
									<tr>
                                        <th class="with-bg">PRICE WITHOUT TAX</th>
                                        <td class="text-price">$589.31</td>
                                    </tr>
                                    <tr>
                                        <th class="with-bg">TOTAL</th>
                                        <td class="text-price big-price">$607.31</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
						<!-- Purchased Products Ends -->
						<!-- Payment Methods Starts -->
                        <div class="col-sm-12 col-md-6 text-right">
                            <form class="payment text-left">
								<!-- Payment Cheque Starts -->
                                <div class="cheque">
                                    <div class="radio">
                                        <label>
											<input type="radio" name="payment-method" value="option1"/>
											<span>Cheque Payment</span>
										</label>
                                    </div>
                                    <p class="text-dark">Please send us your cheque by Post to : <strong>123 Disney Street Slim Av. Brooklyn Bridge, NY, New York PO BOX 152</strong></p>
                                </div>
								<!-- Payment Cheque Ends -->
								<!-- Payment Paypal Starts -->
                                <div class="paypal">
                                    <div class="radio">
                                        <label>
											<input type="radio" name="payment-method" value="option2"/> 
											<span>PayPal</span>
										</label>
                                    </div>
									<!-- Paypal Tooltip Starts -->
									<span class="tooltip-text" data-toggle="tooltip" data-placement="top" title="PayPal is a service that enables you to pay, send money, and accept payments. Register your credit card or debit card with your PayPal account. You can pay by simply choosing PayPal at checkout">What is PayPal?</span>
									<!-- Paypal Tooltip Ends -->
									<!-- Payment Cards Starts -->
                                    <div class="payment-cards">
                                        <img src="images/icons/payment/american-express.png" alt="american-express">
                                        <img src="images/icons/payment/mastercard.png" alt="mastercard">
                                        <img src="images/icons/payment/visa.png" alt="visa">
                                        <img src="images/icons/payment/paypal.png" alt="paypal">
                                        <img class="last" src="images/icons/payment/maestro.png" alt="maestro">
                                    </div>
									<!-- Payment Cards Ends -->
                                </div>
								<!-- Payment Paypal Ends -->
                                <button type="submit" class="btn btn-primary btn-order pull-right">Place order</button>
                            </form>
                        </div>
						<!-- Payment Methods Ends -->
                    </div>
                </div>
            </div>
			<!-- Checkout Ends -->
        </section>
        <!-- Shopping Checkout Section Ends -->
        <!-- Call To Action Section Starts -->
        <section class="call-action-all">
			<div class="call-action-all-overlay">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<!-- Call To Action Text Starts -->
							<div class="action-text">
								<h2>Get Started Today With Bitcoin</h2>
								<p class="lead">Open account for free and start trading Bitcoins!</p>
							</div>
							<!-- Call To Action Text Ends -->
							<!-- Call To Action Button Starts -->
							<p class="action-btn"><a class="btn btn-primary" href="register.html">Register Now</a></p>
							<!-- Call To Action Button Ends -->
						</div>
					</div>
				</div>
			</div>
        </section>
        <!-- Call To Action Section Ends -->
        <!-- Footer Starts -->
        <footer class="footer">
            <!-- Footer Top Area Starts -->
            <div class="top-footer">
                <div class="container">
                    <div class="row">
                        <!-- Footer Widget Starts -->
                        <div class="col-sm-4 col-md-2">
                            <h4>Our Company</h4>
                            <div class="menu">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="services.html">Services</a></li>
                                    <li><a href="pricing.html">Pricing</a></li>
                                    <li><a href="blog-right-sidebar.html">Blog</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Footer Widget Ends -->
                        <!-- Footer Widget Starts -->
                        <div class="col-sm-4 col-md-2">
                            <h4>Help & Support</h4>
                            <div class="menu">
                                <ul>
                                    <li><a href="faq.html">FAQ</a></li>
                                    <li><a href="terms-of-services.html">Terms of Services</a></li>
                                    <li><a href="404.html">404</a></li>
                                    <li><a href="register.html">Register</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="coming-soon.html">Coming Soon</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Footer Widget Ends -->
                        <!-- Footer Widget Starts -->
                        <div class="col-sm-4 col-md-3">
                            <h4>Contact Us </h4>
                            <div class="contacts">
                                <div>
                                    <span>contact@website.com</span>
                                </div>
                                <div>
                                    <span>00216 21 184 010</span>
                                </div>
                                <div>
                                    <span>London, England</span>
                                </div>
                                <div>
                                    <span>mon-sat 08am &#x21FE; 05pm</span>
                                </div>
                            </div>
                            <!-- Social Media Profiles Starts -->
                            <div class="social-footer">
                                <ul>
                                    <li><a href="shopping-checkout.html#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="shopping-checkout.html#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="shopping-checkout.html#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="shopping-checkout.html#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                            <!-- Social Media Profiles Ends -->
                        </div>
                        <!-- Footer Widget Ends -->
                        <!-- Footer Widget Starts -->
                        <div class="col-sm-12 col-md-5">
                            <!-- Facts Starts -->
                            <div class="facts-footer">
                                <div>
                                    <h5>$198.76B</h5>
                                    <span>Market cap</span>
                                </div>
                                <div>
                                    <h5>243K</h5>
                                    <span>daily transactions</span>
                                </div>
                                <div>
                                    <h5>369K</h5>
                                    <span>active accounts</span>
                                </div>
                                <div>
                                    <h5>127</h5>
                                    <span>supported countries</span>
                                </div>
                            </div>
                            <!-- Facts Ends -->
                            <hr>
                            <!-- Supported Payment Cards Logo Starts -->
                            <div class="payment-logos">
                                <h4 class="payment-title">supported payment methods</h4>
                                <img src="images/icons/payment/american-express.png" alt="american-express">
                                <img src="images/icons/payment/mastercard.png" alt="mastercard">
                                <img src="images/icons/payment/visa.png" alt="visa">
                                <img src="images/icons/payment/paypal.png" alt="paypal">
                                <img class="last" src="images/icons/payment/maestro.png" alt="maestro">
                            </div>
                            <!-- Supported Payment Cards Logo Ends -->
                        </div>
                        <!-- Footer Widget Ends -->
                    </div>
                </div>
            </div>
            <!-- Footer Top Area Ends -->
            <!-- Footer Bottom Area Starts -->
            <div class="bottom-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <!-- Copyright Text Starts -->
                            <p class="text-center">Copyright © 2018 Bayya All Rights Reserved | Created with Love by <a href="https://themeforest.net/user/celtano" target="_blank">celtano</a></p>
                            <!-- Copyright Text Ends -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Bottom Area Ends -->
        </footer>
        <!-- Footer Ends -->
        <!-- Back To Top Starts  -->
        <a href="shopping-checkout.html#" id="back-to-top" class="back-to-top fa fa-arrow-up"></a>
        <!-- Back To Top Ends  -->

        <!-- Template JS Files -->
        <script src="js/jquery-2.2.4.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/select2.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/custom.js"></script>

        <!-- Live Style Switcher JS File - only demo -->
        <script src="js/styleswitcher.js"></script>

    </div>
    <!-- Wrapper Ends -->
</body>

</html>