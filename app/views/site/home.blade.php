@extends('layouts.default')

@section('content')
<!-- Heading Row -->
        <div class="row">
            <video autoplay loop poster="{{URL::to('public/images')}}/logo.png" id="bgvid">
                <source src="{{$video_url}}" type="video/mp4" />
            </video>
            <button id="vidpause" class="btn-floating btn-large waves-effect waves-light blue"><i class="material-icons">pause</i></button>
        </div>
        <div class="row center" style="margin-bottom: 28%;">
            <p class="center-align"><h2 class="white-text"> Make payments or send money accross the world.</h2></p>
            <p><h5 class="white-text">You now possess the power to pay freelancers more conviniently than ever before.</h5></p>
            <p></p>
            <br />
            <br />
            <a href="#signup" class="sup center-align waves-effect waves-blue btn-flat btn-large  white-text"><i class="material-icons left">person_pin</i>&nbsp;Signup freely </a>
            <form action="{{URL::to('sandbox/api/merchantapi')}}" method="post" name="merchant_form">
                        <input type="hidden" name="apikey" value="28ba9d34654575596871e94e99b4d511d6a8665a"/>
                        <input type="hidden" name="currency" value="USD"/>
                        <input type="hidden" name="amount" value="20"/>
                        <input type="hidden" name="return_url" value="https://iceteck.com" />
                        <input type="hidden" name="cdata1" value="xxxxx"/>
                        <input type="hidden" name="cdata2" value="xxxxx"/>
                        <input type="image" src="{{URL::to('public/images/hybopay_checkout.png')}}" width="150" height="80"/>
            </form>
        </div>
        <div class="row">
            <div class="col s12 m8 l8"> 
                <div class="card-panel responsive">
                    <h5 class="center-align">Money transfer/payments made simple in Africa and the world at large.</h5>                   
                </div>
                <div class="row">
                    <div class="col s12 m4">
                      <div class="icon-block">
                        <h2 class="center green-text"><i class="material-icons large">flash_on</i></h2>
                        <h5 class="center">Speed</h5>
                        <p class="center-align">Transactions are effectuated with speed and accuracy once properly authenticated.</p>
                      </div>
                    </div>
            
                    <div class="col s12 m4">
                      <div class="icon-block">
                        <h2 class="center blue-text"><i class="material-icons large">trending_up</i></h2>
                        <h5 class="center">Efficiency</h5>
            
                        <p class="center-align">Your transactions are handled efficiently by our various giant providers and partners.</p>
                      </div>
                    </div>
            
                    <div class="col s12 m4">
                      <div class="icon-block">
                        <h2 class="center red-text lighten-5"><i class="material-icons large">dashboard</i></h2>
                        <h5 class="center">Robustness</h5>
            
                        <p class="center-align">We run on the very best web engines to provide and ensure a consistent experience.</p>
                      </div>
                    </div>
              </div>
                <div class="row">
                    <div class="col s12 m4">
                      <div class="icon-block">
                        <h2 class="center green-text"><i class="material-icons large">call_split</i></h2>
                        <h5 class="center">Opportunity & Potential</h5>
                        <p class="center-align">Conviniently pay freelancers worldwide. No need for new payment accounts. We do the heavy lifting.</p>
                      </div>
                    </div>
            
                    <div class="col s12 m4">
                      <div class="icon-block">
                        <h2 class="center blue-text"><i class="material-icons large">extension</i></h2>
                        <h5 class="center">Smart Experience</h5>
            
                        <p class="center-align">Send money to users of different payment systems (Paypal, Skrill, Mobile Money etc) from your single account.</p>
                      </div>
                    </div>
            
                    <div class="col s12 m4">
                      <div class="icon-block">
                        <h2 class="center red-text lighten-5"><i class="material-icons large">developer_mode</i></h2>
                        <h5 class="center">Developer zone</h5>
            
                        <p class="center-align">Extend your e-commerce target market in simple steps by integrating our services.</p>
                      </div>
                    </div>
              </div>
                <div>
                </div>    
            </div>
            <!-- /.col-md-8 -->
            <div class="col well s12 m4 l4" id="signup">
                <h3 id="pad">Create Account</h3>
                {{Form::open(array('url'=>'register', 'class'=>'form-horizontal', 'role'=>'form'))}}
                
                    <div class="input-field col s12">
                        <i class="material-icons prefix blue-text lighten-4">account_circle</i>
                        <input id="icon_prefix" name="username" type="text" class="validate" required/>
                        <label for="icon_prefix">Username</label>
                         <span class="badge alert-danger">{{ $errors->first('username') }}</span>
                    </div>
                    <div class="input-field col s12">
                        <i class="material-icons prefix blue-text lighten-5">email</i>
                        <input id="icon_prefix" name="email" type="email" class="validate" required/>
                        <label for="icon_prefix">Email</label>
                         <span class="badge alert-danger">{{ $errors->first('email') }}</span>
                    </div>
                    <div class="input-field col s12">
                        <i class="material-icons prefix blue-text lighten-5">phone</i>
                        <input id="number" name="number" type="number" min="600000000"class="validate" required/>
                        <label for="number">Phone number</label>
                         <span class="badge alert-danger">{{ $errors->first('number') }}</span>
                    </div>
                    <div class="input-field col s12">
                        <i class="material-icons prefix blue-text lighten-4">lock_open</i>
                        <input id="password" name="password" type="password" class="validate" required/>
                        <label for="password">Password</label>
                         <span class="badge alert-danger">{{ $errors->first('password') }}</span>
                    </div>
                    <div class="input-field col s12">
                        <i class="material-icons prefix blue-text lighten-4">lock</i>
                        <input id="confirm_password" name="confirm_password" type="password" class="validate" onchange="ver_pass()" required/>
                        <label for="confirm_password">Confirm Password</label>
                         <span class="badge alert-danger">{{ $errors->first('confirm_password') }}</span>
                    </div>
                
                    <div class="input-field col s12">
                            <select name="country" id="country" required>
                                <option value="" disabled selected> Country</option>
                                <option value="Cameroon" >Cameroon</option>
                                <option value="Nigeria" >Nigeria</option>
                                <option value="South Africa">South Africa</option>
                                <option value="Ivory Coast" >Ivory Coast</option>
                                <option value="Senegal" >Senegal</option>
<!--                                <option value="Kenya" >Kenya</option>
                                <option value="Uganda" >Uganda</option>
                                <option value="Ghana">Ghana</option>
-->                                
                                <option value="USA" >USA</option>
                                <option value="UK" >UK</option>
                                <option value="France" >France</option>
                                <option value="Germany">Germany</option>
                                <option value="Canada" >Canada</option>
                                <option value="South Korea" >South Korea</option>
                            </select>
                            <label for="country"><i class="material-icons blue-text lighten-4 left" style="margin-right: 15px;">place</i>Select your country</label>
                            <span class="badge alert-danger">{{ $errors->first('country') }}</span>
                    </div>
                    
                    <div class="input-field col s12">
                            <input type="checkbox" id="nletter" name="newsletter"/>
                            <label for="nletter" class="text-primary">Receive offers and newsletters</label>
                            
                            <input type="checkbox" id="terms" name="terms"/>
                            <label for="terms" class="text-primary">Agree to terms and Conditions</label><br />
                            <span class="badge alert-danger">{{ $errors->first('terms') }}</span>
                    </div>
                    <div class="input-field col s12">
                        <p class="center-align">
                            <button class="sup waves-effect waves-light btn-flat blue white-text" type="submit" name="action">Create My Account
                                <i class="material-icons right">send</i>
                            </button>
                        </p>
                    </div>
                    {{Form::token()}}
                    
                {{Form::close()}}

            </div>
            <!-- /.col-md-4 -->
        </div>
        <div class="row">
            <div class="col s12 center" id="contact">
                <i class="large material-icons blue-text">perm_phone_msg</i>
                <h4>Contact Us</h4>
                <p><i class="material-icons prefix blue-text darken-3">location_on</i> &nbsp;Cameroon, Buea. FakoShip Plaza,<span> <b>Iceteck </b></span> @ &nbsp;ActivSpaces</p>
                <p><i class="material-icons prefix blue-text darken-3">phone</i> (+237) 678656032 | (+237) 677247206 </p>
                <p><i class="material-icons prefix blue-text darken-3">email</i> <a href="mailto:larryakah@gmail.com" >service@iceteck.com</a> </p>
            </div>
        </div>
        <!-- /.row -->
      
@stop