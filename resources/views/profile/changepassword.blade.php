<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>AKS Machine Test</title>
<link rel="stylesheet" href="css/style.css">
<!--[if lt IE 9]>
<script type="text/javascript" src="html5.js"></script>
<![endif]-->
<!--[if lt IE 7.]>
<script defer type="text/javascript" src="pngfix1.js"></script>
<![endif]-->

<!-- Menu start --------------->
<link href="menu/quickmenu0.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="menu/quickmenu0.js"></script>
<!-- Menu End --------------->
</head>
<body>

@include('master')

<form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
    @csrf
    @method('put')
<div id="wrap" >
  <section class="bodymain" style="min-height:580px;">
    <aside class="middle-container">
      <div class="admin-inr"><br>

		<div class="form-outer" style="margin-left:320px; width:500px;">
		          <h1>Change Password</h1>

<center>
    @if(session()->has('message'))
        <div id="message" class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>{{ session()->get('message') }}</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="close" style="color: red">
        <span aria-hidden="true">&times;</span>
        </div>
        <script>
            setTimeout(function() {
                document.getElementById('message').style.display = 'none';
            }, 2000);
        </script>
         @endif
    </center>
		          <div class="contact-row">
		            <div class="name">Current Password</div>
		            <div class="txtfld-box">
		              <input type="text" name="current_password">
		            </div>

                    <x-input-error :messages="$errors->updatePassword->get('current_password')" />
                        {{-- <div class="req-field"> This Field Required </div> --}}
                    </div>
		          <div class="clear"></div>
		          <div class="contact-row">
		            <div class="name">New Password</div>
		            <div class="txtfld-box">
		              <input type="text" name="password" >
		            </div>
                    <x-input-error :messages="$errors->updatePassword->get('password')" />
		          </div>
		          <div class="clear"></div>
		          <div class="contact-row">
		            <div class="name">Confirm Password</div>
		            <div class="txtfld-box">
		              <input type="password" name="password_confirmation">
		            </div>
                    <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" />
		          </div>
		          <div class="clear">&nbsp;</div>
		          <div class="contact-row">
		            <div class="name" style="float:right; width:1px;">&nbsp;</div>
		            <div style="background:none; border:none; float:left;">
		              {{-- <input type="button" class="btn" value="Change Password"> --}}
                      <button type="submit" class="btn" value="Change Password">Change Password</button>
		              <br>
		            </div>
		          </div>
		        </div>
            </form>
		        <div class="clear">&nbsp;</div>

        <div class="clear"></div>
      </div>
    </aside>
    <div class="clear"></div>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </section>
</div>
<div class="clear"></div>
<footer>
  <footer class="whitefoter">
    <div class="whitefooter-cont">
      <div style="float:left;">Copyright © AKS Machine Test. All Rights Reserved.</div>
           <a href="https://www.akswebsoft.com/" target="_blank" style="float:right;">
                <img src="images/akslogo.png" alt="AKS Websoft Consulting Pvt. Ltd." title="AKS Websoft Consulting Pvt. Ltd."></a>

      <div class="clear"></div>
    </div>
  </footer>
</footer>
</body>
</html>
