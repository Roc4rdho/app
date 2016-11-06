@extends('layouts.frontend')

{{-- web site title --}}
@section('title')
@parent
FORGOT PASSWORD
@stop 
{{-- website content --}}
@section('content')
    <!-- forgot password form start -->
    <section class="contact white tab-content">
       <!-- Tab panes -->            
      <div class="tab-content">
        <div class="tab-pane active contact-info" id="contact-form">
          <div class="container">
            <div class="row">
              <div class="col-sm-12 text-center">            
                <a href="#"><span class="sub-head">Home</span></a>
                <div class="title">
                  <h2>Forgot Password</h2>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                {{Form::open(array('url'=>'forgotpasswd', 'class'=>'form-horizontal', 'role'=>'form'))}}
                  <div class="col-md-6 col-md-offset-3">
                    <span>Forgotten your password? Enter your email address below to begin the reset process.</span><br>
                    <div class="form-group">
                      <input type="email" class="form-control" name="email" placeholder="john@example.com" required="required">
                    </div>
                    <div class="form-group">
                      <input type="submit" class="btn btn-block pull-left" value="Send">
                    </div>
                  </div>
                {{Form::token()}}
                {{Form::close()}}
              </div>
            </div>
          </div>
        </div>
      </div>  
    </section>
    <!-- forgot password form end -->
@stop