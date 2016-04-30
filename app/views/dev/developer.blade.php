@extends('layouts.default')

@section('content')
        <!-- Heading Row -->
        
        <div class="row">
            <div class="col-md-8">
                <div class="col s12 m3 ">
                    <div class="collection">
                        <a class="collection-item blue-text" href="{{URL::route('home')}}">
                            <i class="material-icons left blue-text">home</i>Home
                        </a>
                        <a class="collection-item blue-text modal-trigger" href="#modal1" >
                            <i class="material-icons left blue-text darken-5">payment</i>Make payment
                        </a>
                        <a href="{{URL::route('dashboard.transaction')}}" class="collection-item blue-text">
                            <i class="material-icons left blue-text lighten-1">assignment</i>History
                        </a>
                        <a href="#" class="collection-item blue-text" >
                            <i class="material-icons left blue-text lighten-1">flash_on</i>Invoices
                        </a>
                        <a href="#" class="collection-item blue-text" >
                            <i class="material-icons left blue-text lighten-1">settings</i>Settings
                        </a>
                        <a class="active collection-item blue" href="{{URL::route('developer')}}">
                            <i class="material-icons left">business</i> Merchant
                        </a>
                        <a href="{{URL::route('apidocs')}}" class="collection-item blue-text">
                            <i class="material-icons left">library_books</i>API Docs
                        </a>
                    
                    </div>
                </div>
                <div class="col s12 m9">
                    Accounts <span><a class="modal-trigger" href="#merchantaccount"><i class="material-icons">add_circle</i> New Account</a></span>
                    
                    <table class="table table-condensed table-hover">
                                <th>Username</th>
                                <th>Payment Provider</th>
                                <!-- <th>API_KEY</th> -->
                                <th>Status</th>
                                <th>Action</th>
                        @foreach($developers as $developer)
                              <tr>
                                
                                  <td>{{ $developer->dev_username }}</td>
                                  <td>{{ $developer->dev_paymentprovider }}</td>
                                  <!-- <td>{{ $developer->dev_key }}</td>-->
                                  <td>{{ $developer->status == 0? 'sandbox':'live' }}</td>
                                  <td>
                                    <a href="{{ URL::route('developer').'?ac=rm&id='.$developer->dev_key }}" class="red-text" title="Delete account"><i class="material-icons">delete</i></a>
                                    <a href="{{ URL::route('developer').'?ac=st&id='.$developer->dev_key }}" class="green-text" title="Activate or Deactivate account" ><i class="material-icons">swap_horiz</i></a>
                                    <a href="#!" onclick="javascript:$('#{{$developer->dev_id}}').dialog({minWidth: 600})" class="blue-text" title="Generate Payment Button"><i class="material-icons">autorenew</i></a>
                                  </td>
                                </tr>
                                <div id="{{$developer->dev_id}}" title="Payment Button" class="modal">
                                    Copy the following code and use as your payment button.
                                    <p>API KEY: <u>{{ $developer->dev_key }}</u></p>
                                    <p>
                                        <pre>
                                                {{htmlspecialchars('
                                                <form action="https://Enzympay.iceteck.com/app/sandbox/api/merchantapi" method="post" name="merchant_form">
                                                    <input type="hidden" name="apikey" value="YOUR_API_KEY"/>
                                                    <input type="hidden" name="currency" value="USD"/>
                                                    <input type="hidden" name="amount" value="AMOUNT HERE"/>
                                                    <input type="hidden" name="return_url" value="YOUR RETURN/RESULTS URL" />
                                                    <input type="hidden" name="cdata1" value="EXTRA PARAMETER VALUE"/>
                                                    <input type="hidden" name="cdata2" value="EXTRA PARAMETER VALUE"/>
                                                    <input type="image" src="https://Enzympay.iceteck.com/public/images/hybopay_checkout.png)" width="150" height="80"/>
                                                </form>
                                                ')}}
                                        </pre>
                                    </p>
                                    <br />    
                                </div>
                                
                        @endforeach
                    </table>
                </div>
            </div>
            <!-- /.col-md-8 -->
            <div class="col-md-4">
                <!-- user profile display -->
                @include('site.userModule')

                 <div id="currencyconvert" >
                    <p class="align-center"><h4>Currency Converter</h4></p>
                    <div class="input-field col s6">
                            <select class="" name="from" id="from">
                                <option selected="selected" value="USD">USD - US Dollars</option>
                                <option value="EUR">EUR - Euros</option>
                                <option value="GBP">GBP - Bristish Pounds</option>
                                <option value="XAF">FCFA - Franc CFA</option>
                                <option value="ZAR">South African Rand</option>
                                <option value="AUD">AUD - Australlian </option> <!-- CAD  and JPY conversions coming soon! -->
                            </select>
                            <label for="from">FROM</label>
                      </div>
                      <div class="input-field col s6">
                            <select class="" name="to" id="to">
                                <option selected="selected" value="USD">USD - US Dollars</option>
                                <option value="EUR">EUR - Euros</option>
                                <option value="GBP">GBP - Bristish Pounds</option>
                                <option value="XAF">FCFA - Franc CFA</option>
                                <option value="ZAR">South African Rand</option>
                                <option value="AUD">AUD - Australlian </option>
                                <option value="CAD">CAD - Canadian </option>
                                <option value="JPY">Japanese Yen</option>
                            </select>
                            <label for="to">TO</label>
                      </div>
                      <span class="result blue-text"></span>
                      <div class="preloader-wrapper small cloader hide">
                        <div class="spinner-layer spinner-green-only">
                          <div class="circle-clipper left">
                            <div class="circle"></div>
                          </div><div class="gap-patch">
                            <div class="circle"></div>
                          </div><div class="circle-clipper right">
                            <div class="circle"></div>
                          </div>
                        </div>
                      </div>
                      <div class="input-field col s12">
                        <i class="material-icons prefix blue-text">attach_money</i>
                        <input type="number" name="amountc" id="amountc" onkeyup="convert()" min="1"/>
                        <label for="amountc">Amount to Convert</label>
                      </div>
                 </div>
                 <div class="card col s12">
                    
                    <table class="table table-bordered">
                        <thead><h4>Transfer Limits</h4></thead>
                        <th>
                            <td>FROM</td>
                            <td>TO</td>
                            <td>AMOUNT</td>
                        </th>
                        <tr>
                            <td></td>
                            <td>*</td>
                            <td>Mobile Money</td>
                            <td>500000 FCFA</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>*</td>
                            <td>PayPal</td>
                            <td>$ 5000</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>*</td>
                            <td>Skrill</td>
                            <td>$ 5000</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>*</td>
                            <td>Solid Trust Pay</td>
                            <td>$ 5000</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>*</td>
                            <td>Eway</td>
                            <td>$ 5000</td>
                        </tr>
                    </table>
                 </div>
                
            </div>
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->
       
 <!-- new merchant account Modal Structure -->
          <div id="merchantaccount" class="modal ">
            <div class="modal-content">
              <h4>New Merchant Account</h4>
              {{Form::open(array('url'=>'merchant', 'class'=>'form-horizontal merchant', 'role'=>'form'))}}
                  
                  <div class="col s6 center-align">
                      <div class=" input-field col s12">
                            <i class="material-icons prefix blue-text lighten-4">account_circle</i>
                            <input type="text" id="merchantname" name="dev_username" required />
                            <label for="merchantname"> Merchant username</label>
                            <span class="alert-danger">{{ $errors->first('dev_username') }}</span>
                      </div>
                      <div class=" input-field col s12">
                            <i class="material-icons prefix blue-text lighten-4">phone</i>
                            <input type="tel" id="merchantphone" name="dev_phone" required />
                            <label for="merchantphone"> Phone number (international)</label>
                            <span class="alert-danger">{{ $errors->first('dev_phone') }}</span>
                      </div>
                      <div class=" input-field col s12">
                            <i class="material-icons prefix blue-text lighten-4">email</i>
                            <input type="email" id="merchantemail" name="dev_email" required />
                            <label for="merchantemail"> Email</label>
                            <span class="alert-danger">{{ $errors->first('dev_email') }}</span>
                      </div>
                        <div class="input-field col s12">
                            <select name="merhantprovider" id="merhantprovider">
                                <option selected="selected" value="paypal" class="left circle">PayPal</option>
                                <option value="solidtrustpay" class="left circle">Solid Trust Pay</option>
                                <option value="mobilemoney" class="left circle">Mobile Money</option>
                            </select>
                            <label><i class="material-icons grey-text tooltiped" data-position="right" data-delay="50" data-tooltip="The Payment provider to deposit funds in. Enter the corresponding phone, email or username to be used above.">info</i>Merchant Provider</label>
                        </div>
                      <div class="center-align">
                        <button class="btn-flat btn-primary waves-effect waves-white" type="submit"> Create</button>
                       <button type="button" class="modal-action modal-close waves-effect waves-green btn-flat btn-danger">Cancel</button>
                        {{Form::token()}}
                        {{Form::close()}}                    
                      </div>
                  </div>
                  
            </div>
          </div>
 <!-- end modal -->
 <!-- apyment Modal Structure -->
          <div id="modal1" class="modal ">
            <div class="modal-content">
              <h4>New Transaction</h4>
              {{Form::open(array('url'=>'payment', 'class'=>'form-horizontal payment', 'role'=>'form'))}}
                  <div class="row">
                  <div class="col s12 m6">
                    <h5>Transaction Info</h5>
                      <div class=" input-field col s12">
                            <i class="material-icons prefix blue-text lighten-4">attach_money</i>
                            <input type="number" id="amount" name="amount" min="1" required />
                            <label for="number"> Amount to send</label>
                      </div>
                      <div class="input-field col s12" id="currency">
                            <select class="" name="currency">
                                <option selected="selected" value="USD">USD - US Dollars</option>
                                <option value="EUR">EUR - Euros</option>
                                <option value="GBP">GBP - Bristish Pounds</option>
                                <option value="XAF"> FCFA - Franc CFA</option>
                                <option value="ZAR">South African Rand</option>
                                <option value="AUD">AUD - Australlian </option>
                                <option value="CAD">CAD - Canadian </option>
                                <option value="JPY">Japanese Yen</option>
                            </select>
                            <label>Currency</label>
                      </div>
                        <div class="input-field col s12">
                            <select class="pmode" name="mode" id="mode">
                                <option selected="selected" value="pp" class="left circle">PayPal</option>
                                <option value="stp" class="left circle">Solid Trust Pay</option>
                                <option value="sk" class="left circle">Skrill</option>
                                <option value="mm" class="left circle">Mobile Money</option>
                                <option value="ew" class="left circle">eWay</option>
                                <option value="cc" class="left circle">Credit/Debit Card</option>
                            </select>
                            <label><i class="material-icons grey-text tooltiped" data-position="right" data-delay="50" data-tooltip="This is the method of transfer you currently/actively use. Make sure you have a valid account with the provider">info</i>Sender Provider</label>
                        </div> <!-- cc Detail section -->
                        <div class="hide creditcard">
                            <div class="input-field col s7">
                                <i class="material-icons prefix blue-text lighten-4">credit_card</i>
                                <input type="number" id="cardnumber" name="cardnumber" min="1"/>
                                <label for="cardnumber">Card Number</label>
                            </div>
                            <div class="input-field col s2">
                                <input type="number" id="cvv" name="cvv" min="1"/>
                                <label for="cvv">CVV</label>
                            </div>
                            <div class="input-field col s3">
                                <select class="cctype" name="cctype" id="cctype">
                                    <option selected="selected" value="visa" class="left circle">VISA</option>
                                    <option value="mastercard" class="left circle">MASTERCARD</option>
                                    <option value="discover" class="left circle">Discover</option>
                                    <option value="maestro" class="left circle">Maestro</option>
                                </select>
                            </div>
                            <div class="input-field col s12">
                                <i class="material-icons prefix blue-text lighten-4">today</i>
                                <input type="month" id="expire" name="expire" />
                                <label for="expire">Card Expiry Date</label>
                            </div>
                            
                            <div class="input-field col s6">
                                <i class="material-icons prefix blue-text lighten-4">account_circle</i>
                                <input type="text" id="fname" name="fname" />
                                <label for="fname">First Name</label>
                            </div>
                            <div class="input-field col s6">
                                <i class="material-icons prefix blue-text lighten-4">account_circle</i>
                                <input type="text" id="lname" name="lname" />
                                <label for="lname">Last Name</label>
                            </div>
                        </div>
                        <!-- CC detail end -->
                  </div>
                  <div class="col s12 m6">
                    <h5>Receiver Info </h5>
                    <div class="input-field col s12">
                              <i class="material-icons prefix blue-text lighten-4">person</i>
                              <input type="text" id="number" name="number" required />
                                <label for="number">Receiver(name,number,email)</label>
                              <input type = "hidden" name = "testmode" value = "1" />
                    </div>
                    <div class="input-field col s12">
                              <i class="material-icons prefix blue-text lighten-4">email</i>
                              <input type="email" id="remail" name="remail" required />
                                <label for="number">email</label>
                    </div>
                    <div class="input-field col s12">
                            <select class="target" name="target" id="target" required="required">
                                <option value="" disabled selected >Select Receiver Platform</option>
                                <option value="pp" class="left circle">PayPal</option>
                                <option value="stp" class="left circle">Solid Trust Pay</option>
                                <option value="sk" class="left circle">Skrill</option>
                                <option value="mm" class="left circle">Mobile Money</option>
                                <option value="ew" class="left circle">eWay</option>
                            </select>
                            <label><i class="material-icons grey-text tooltiped" data-position="right" data-delay="50" data-tooltip="This is the account through which the receiver can receive money. Make sure the receiver's account is currently active on the platform">info</i>Receiver Provider</label>
                     </div>
                     <div class="right">
                        <button type="button" class="modal-action modal-close waves-effect waves-green btn-flat btn-danger">Close</button>
                        <button type="submit" class="btn-flat btn-primary waves-effect waves-white"><i class="material-icons right">send</i>Continue</button>                        
                    </div>
                    <div id="stp">
                        <input type="hidden" name="merchantAccount" value="larryakah" />
                        <input type="hidden" name="item_id" value="STP Hybrid Transfer" />
                        <input type="hidden" name="confirm_url" value="{{URL::route('dashboard')}}/stpconfirm" />
                        <input type="hidden" name="testmode" value="on" />
                        <input type="hidden" name="notify_url" value="{{URL::route('dashboard')}}/stpnotif" />
                        <input type="hidden" name="return_url" value="{{URL::route('dashboard')}}" />
                        <input type="hidden" name="cancel_url" value="{{URL::route('dashboard')}}/cancel" />
                        <input type="hidden" name="user1" value="xx" id="user1" /> <!-- receiver email, number etc set by js -->
                        <input type="hidden" name="user2" value="xx" id="user2" /><!-- receiver's payment provider -->
                    </div>
                    {{Form::token()}}
                    {{Form::close()}}                    
                  </div>
                  </div>
                       
                  <div class="row">
                    <div class="col s12 black-text">
                        Your account will be debited including the applicable Tax and platform charges as reflected on your Provider's account.                        
                    </div>
                  </div>
            </div>
          </div>
          
@stop