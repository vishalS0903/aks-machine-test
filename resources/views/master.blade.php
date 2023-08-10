
<header>
    <div id="wrap">
         <div class="logo"><img src="{{ asset('images/logo.png') }}" border="0"></div>
      <div class="topmenu">
        <ul>
          <li><a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
          <li><a href="{{url('/change-password')}}">Change Password</a>&nbsp;|</li>
          <li><a href="{{route('logout')}}"><img src="{{ asset('images/logout.png') }}" width="16" height="16" border="0" align="absmiddle">&nbsp;&nbsp;Logout</a></li>
        </ul>
        <div class="clear"></div>
      </div>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
  </header>
    <nav>
      <ul id="qm0" class="qmmc" >
        <li><a href="{{url('/userdashboard')}}">Dashboard</a></li>
        <li><a href="#">Product</a>
            <ul>
              <li><a href="{{route('category.create')}}">Add Category</a></li>
              <li><a href="{{route('subcategory.create')}}">Add  Sub Category</a></li>

              <li><a href="{{route('product.create')}}">Add Product</a></li>
            </ul>
        </li>
       <!--  <li><a href="#">CCTV</a>
            <ul>
                <li><a href="product-brand.html">Add Brand</a></li>
                <li><a href="cctv.html">Add Product</a></li>
            </ul>z
        </li> -->
      </ul>
    </nav>

