@extends('layouts.frontend')

{{-- web site title --}}
@section('title')
@parent
RESET PASSWORD
@stop 
{{-- website content --}}
@section('content')
        <!-- login form start -->
    <section class="contact white tab-content">
       <!-- Tab panes -->            
      <div class="tab-content">
        <div class="tab-pane active contact-info" id="contact-form">
          <div class="container">
            <div class="row">
              <div class="col-sm-12 text-center">            
                <a href="#"><span class="sub-head">Home</span></a>
                <div class="title">
                  <h2>Reset Password</h2>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                {{Form::open(array('url'=>'recovery', 'class'=>'form-horizontal', 'role'=>'form'))}}
                    <input type="hidden" name="special"  value="{{$user->id}}" />
                  <div class="col-md-6 col-md-offset-3">
                    @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>{{ implode('', $errors->all('<p>:message</p>')) }}</strong>
                    </div>
                    @endif
                    <div class="form-group">
                      <input type="password" class="form-control" name="new_password" placeholder="New Password">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" name="confirm_new_password" placeholder="Confirm New Password">
                    </div>
                    <div class="form-group">
                      <input type="submit" class="btn btn-block" value="Reset">
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