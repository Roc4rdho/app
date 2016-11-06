@extends('layouts.frontend')

{{-- web site title --}}
@section('title')
@parent
LOGIN
@stop 
{{-- website content --}}
@section('content')
        <!-- login form start -->
    <section id="contact" class="contact white tab-content">
       <!-- Tab panes -->            
      <div class="tab-content">
        <div class="tab-pane active contact-info" id="contact-form">
          <div class="container">
            <div class="row">
              <div class="col-sm-12 text-center">            
                <a href="#"><span class="sub-head">Home</span></a>
                <div class="title">
                  <h2>Login</h2>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                {{Form::open(array('url'=>'login', 'class'=>'form-horizontal', 'role'=>'form'))}}
                  <div class="col-md-6 col-md-offset-3">
                    @if(Session::has('alertError'))
                    <div class="alert alert-dismissable alert-danger">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{Session::get('alertError')}}</strong>
                    </div>
                    @endif
                    <div class="form-group">
                      <input type="email" class="form-control" name="email" placeholder="john@example.com">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <input type="submit" class="btn pull-left" value="Login to my account">
                      <p class="pull-right">
                        <a href="{{URL::to('forgotpasswd')}}">Forgot Password</a><br>
                        <a href="{{URL::to('register')}}">Create new account</a>
                      </p>
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
    <!-- login form end -->
    @stop