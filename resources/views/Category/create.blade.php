<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>AKS Machine Test</title>
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script> --}}
<!-- slider start -->
<!-- slider end -->
<link rel="stylesheet" href="{{ asset('css/style.css')}}">
<!--[if lt IE 9]>
<script type="text/javascript" src="html5.js"></script>
<![endif]-->
<!--[if lt IE 7.]>
<script defer type="text/javascript" src="pngfix1.js"></script>
<![endif]-->

<!-- Menu start --------------->
<link href="{{ asset('menu/quickmenu0.css') }}" rel="stylesheet" type="text/css" media="screen" />
<script type="{{ asset('text/javascript" src="menu/quickmenu0.js') }}"></script>
<!-- Menu End --------------->
</head>
<body>
@include('master')
  <form action="{{route('category.store')}}" method="POST">
    @csrf
<div id="wrap">

  <div class="clear" style="height:5px;"></div>
  <div id="wrap2">
    <center>
        @if(session()->has('message'))
            <div id="message" class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>{{ session()->get('message') }}</strong>
          <button type="button"  data-dismiss="alert" aria-label="close" style="color: red">
            <span aria-hidden="true">&times;</span>
            </div>
            <script>
                setTimeout(function() {
                    document.getElementById('message').style.display = 'none';
                }, 3000);
            </script>
             @endif
        </center>
    <h1>Add Category</h1>
    <br>

    <div class="form-raw">
      <div class="form-name">Category Name</div>
      <div class="form-txtfld">
        <input type="text" name="name">
      </div>
      @if ($errors->has('name'))
      <span class="req-field">{{ $errors->first('name') }}</span>
  @endif
    </div>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
    <div class="form-raw">
      <div class="form-name">Active</div>
      <div class="form-txtfld">
        <input type="checkbox" name="status" value="1">
      </div>
      <div class="clear"></div>
    </div>

    <div class="form-raw">
      <div class="form-name">&nbsp;</div>
      <div class="form-txtfld" style="width:290px;">
        {{-- <input type="button" class="btn" value="Submit" > --}}
        <Button type="submit" class="btn">submit</Button>
      </div>
    </div>
  </div>
  </form>
  <div class="clear">&nbsp;</div>
</div>

<div id="wrap3">

  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="admintable">
    <tr>
      <th width="59" align="left" valign="middle">Sr.No.</th>
      <th width="752" align="left" valign="middle">Category Name</th>
      <th width="77" align="left" valign="middle">Status</th>
      <th width="54" align="left" valign="middle">Edit</th>
      <th width="71" align="left" valign="middle">Remove</th>
    </tr>
    {{-- <tr>
      <td align="left" valign="top">1</td>
      <td align="left" valign="top">Lorem Lipsumis text.</td>
      <td align="left" valign="top"><strong>Active</strong></td>
      <td align="left" valign="top"><a href="#">Edit</a></td>
      <td align="center" valign="top"><a href="#"><img src="{{ asset('images/icon-bin.jpg') }}" alt="" width="25" height="25" border="0" align="absmiddle" /></a></td>
    </tr> --}}
        @php
        $count =1;
        @endphp
        @foreach ($product as $p)
        <tr>

            <td align="left" valign="top">{{$count++}}</td>
            <td align="left" valign="top">{{$p->name}}</td>
            <td align="left" valign="top">
                @if ($p->status==null)
                Inactive
                @else
                Active
                @endif
            </td>
            <td align="left" valign="top"><a href="{{route('category.edit',$p->id)}}">Edit</a></td>
            <td align="center" valign="top"><a href="{{route('category.delete',$p->id)}}"><img src="{{ asset('images/icon-bin.jpg') }}" alt="" width="25" height="25" border="0" align="absmiddle" /></a></td>


        </tr>
        @endforeach

  </table>
  <div class="clear">&nbsp;</div>
</div>
<div class="clear"></div>
<footer>
  <footer class="whitefoter">
    <div class="whitefooter-cont">
      <div style="float:left;">Copyright © AKS Machine Test. All Rights Reserved.</div>
           <a href="https://www.akswebsoft.com/" target="_blank" style="float:right;">
                <img src="{{ asset('images/akslogo.png') }}" alt="AKS Websoft Consulting Pvt. Ltd." title="AKS Websoft Consulting Pvt. Ltd."></a>

      <div class="clear"></div>
    </div>
  </footer>
</footer>
</body>
</html>
