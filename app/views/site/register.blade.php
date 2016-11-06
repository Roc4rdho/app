@extends('layouts.frontend')

{{-- web site title --}}
@section('title')
@parent
REGISTER
@stop 
{{-- website content --}}
@section('content')
        <!-- registration form start -->
    <section id="contact" class="contact white tab-content">
       <!-- Tab panes -->            
      <div class="tab-content">
        <div class="tab-pane active contact-info" id="contact-form">
          <div class="container">
            <div class="row">
              <div class="col-sm-12 text-center">            
                <a href="#"><span class="sub-head">Home</span></a>
                <div class="title">
                  <h2>Create Account</h2>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <form class="form-horizontal" role="form">
                  <div class="col-md-6 col-md-offset-3">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Full names" required="required">
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control" placeholder="Email address" required="required">
                    </div>
                    <div class="form-group">
                      <input type="number" class="form-control" placeholder="Phone number" required="required">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Country" required="required">
                    </div>
                    <div class="form-group">
                      <div class="span-form">
                        <input class="form-control" type="password" placeholder="Password" required="required">
                      </div>
                      <div class="span-form">
                        <input type="password" class="form-control" placeholder="Confirm password" required="required">
                      </div>
                    </div>
                    <div class="form-group">
                      <input type="submit" class="btn" value="Create my account">
                      <p class="pull-right">
                        <span>Agree to <a href="#">Terms and conditions</a></span><br>
                        <span>Already have an account? <a href="{{URL::to('login')}}">Login</a></span>
                      </p>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>  
    </section>
    <!-- registration form end -->

@stop