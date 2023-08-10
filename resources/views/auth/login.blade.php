{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
 --}}
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
 <header>
   <div id="wrap">



     <div class="logo"><img src="images/logo.png" border="0"></div>

     <div class="admintxt">Admin panel</div>
     <div class="clear"></div>
   </div>
   <div class="clear"></div>
 </header>
 <div class="clear"></div>
 <div class="bodycont">
   <div id="wrap2" style="min-height:530px;">
     <div class="login-cont">
       <h1 class="loginhd">Login Here</h1>
       <x-input-error :messages="$errors->get('email')" class="mt-2" />
        <x-input-error :messages="$errors->get('password')" class="mt-2" />
       <form method="POST" action="{{ route('login') }}">
        @csrf
       <div class="login-row">
         <div class="loginname">Email</div>
         <div class="admintxtfld-box">
           <input type="text" name="email">
         </div>
         <div class="clear"></div>
       </div>
 <!--       <div class="loginreq-field">* This Field Required </div> -->

       <div class="login-row">
         <div class="loginname">Password</div>
         <div class="admintxtfld-box">
           <input type="password" name="password">

         </div>
         <div class="clear"></div>
       </div>

       <div class="clear"></div>
       <div class="contact-row" style="width:325px;">
         <div style="background:none; border:none; margin-top:15px;">
         <a href="admin.html" style="text-decoration:none;">
           <button type="submit" class="btn" value="Login">Login</button>
           </a><br>
         </div>
       </div>
    </form>
       <div class="clear"></div>
     </div>
     <div class="clear"></div>
   </div>
   <div class="clear"></div>
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
