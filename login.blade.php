@extends('Layout_user')
@section('title')
  Login
@endsection
@section('content')
<!-- Main Container -->
<div class="main-container col1-layout">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-xs-12">
        <article class="col-main">
          <div class="account-login">
            <div class="page-title">
              <h2>Login or Create an Account</h2>
            </div>
            <fieldset class="col2-set">
              <div class="col-1 new-users"><strong>New Customers</strong>
                <div class="content">
                  <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
                  <div class="buttons-set">
                    <button onclick="window.location='{{ route('login.create') }}';" class="button create-account" type="button"><span>Create an Account</span></button>
                  </div>
                </div>
              </div>
              <div class="col-2 registered-users"><strong>Login Customers</strong>
                <form action="{{ route('login.store') }}" method="post">
                	@csrf
                    <div class="content">
                    <p>If you have an account with us, please log in.</p>
                    <ul class="form-list">
                        <li>
                        <label for="email">Email Address <span class="required">*</span></label>
                        <input type="text" title="Email Address" class="input-text required-entry" id="email" value="{{old('email_login')}}" name="email_login">
                        </li>
                        <li>
                        <label for="pass">Password <span class="required">*</span></label>
                        <input type="password" title="Password" id="pass" class="input-text required-entry validate-password" name="password_login">
                        </li>
                    </ul>
                    {{--  <p class="required">* Required Fields</p>  --}}
                    <div class="buttons-set">
                        <button id="send2" name="send" type="submit" class="button login"><span>Login</span></button>
                        <a class="forgot-word" href="#">Forgot Your Password?</a> </div>
                    </div>
                </form>
              </div>
            </fieldset>
          </div>
        </article>
        <!--	///*///======    End article  ========= //*/// -->
      </div>
    </div>
  </div>
</div>
<!-- Main Container End -->
@endsection
