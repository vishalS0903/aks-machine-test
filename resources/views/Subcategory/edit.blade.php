<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>AKS Machine Test</title>
<!-- slider start -->
<!-- slider end -->
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<!--[if lt IE 9]>
<script type="text/javascript" src="html5.js"></script>
<![endif]-->
<!--[if lt IE 7.]>
<script defer tyape="text/javascript" src="pngfix1.js"></script>
<![endif]-->

<!-- Menu start --------------->
<link href="{{ asset('menu/quickmenu0.css') }}" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="{{ asset('menu/quickmenu0.js')}}"></script>
<!-- Menu End --------------->
</head>
<body>
    @include('master')

    <form action="{{route('subcategory.update',$data->id)}}" method="post">
        @csrf
<div id="wrap">
  <div class="clear" style="height:5px;"></div>
  <div id="wrap2">
    <h1>Add Sub Category</h1>
    <br>

<div class="form-raw">
      <div class="form-name">Select Category</div>
      <div class="form-txtfld">
        <select name="category_id">
             {{-- <option>1Select Option</option> --}}
             @foreach ($product as $product)
             <option selected="selected" value="{{$product->id}}" @if($product->id==$data->category->id) selected='selected' @endif>{{$product->name}}</option>

             @endforeach
             {{-- <option></option> --}}
        </select>
      </div>
      @if ($errors->has('category_id'))
      <span class="req-field">{{ $errors->first('category_id') }}</span>
  @endif
    </div>
      <div class="clear"></div>

    <div class="form-raw">
      <div class="form-name">Add Sub Category</div>
      <div class="form-txtfld">
        <input type="text" name="name" value="{{$data->name}}">
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
        <input type="checkbox" name="status" value="1" @if ($data->status== 1) checked  @endif>
      </div>
      <div class="clear"></div>
    </div>

    <div class="form-raw">
      <div class="form-name">&nbsp;</div>
      <div class="form-txtfld" style="width:290px;">
        {{-- <input type="button" class="btn" value="Submit"> --}}
        <button type="submit" class="btn">Update</button>
      </div>
    </div>
  </div>
</form>
  <div class="clear">&nbsp;</div>
</div>
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
            }, 1500);
        </script>
         @endif
    </center>
<div id="wrap3">
  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="admintable">
    <tr>
      <th width="59" align="left" valign="middle">Sr.No.</th>
      <th width="752" align="left" valign="middle">Category Name</th>
       <th width="752" align="left" valign="middle">Sub Category Name</th>
      <th width="77" align="left" valign="middle">Status</th>
      <th width="54" align="left" valign="middle">Edit</th>
      <th width="71" align="left" valign="middle">Remove</th>
    </tr>
    {{-- <tr>
      <td align="left" valign="top">1</td>
      <td align="left" valign="top">Lorem Lipsumis text.</td>
       <td align="left" valign="top">Sub category</td>
      <td align="left" valign="top"><strong>Active</strong></td>
      <td align="left" valign="top"><a href="#">Edit</a></td>
      <td align="center" valign="top"><a href="#"><img src="{{ asset('images/icon-bin.jpg')}}" alt="" width="25" height="25" border="0" align="absmiddle" /></a></td>
    </tr> --}}
    @php
    $count= 1;
@endphp
    @foreach ($subcategory_data as $p)
    <tr>

        <td align="left" valign="top">{{$count}}</td>
        <td align="left" valign="top">{{@$p->category->name}}</td>
        <td align="left" valign="top">{{$p->name}}</td>
        <td align="left" valign="top">
            @if ($p->status==null)
            Inactive
            @else
            Active
            @endif
        </td>        <td align="left" valign="top"><a href="{{route('subcategory.edit',$p->id)}}">Edit</a></td>
        <td align="center" valign="top"><a href="{{route('subcategory.delete',$p->id)}}"><img src="{{ asset('images/icon-bin.jpg') }}" alt="" width="25" height="25" border="0" align="absmiddle" /></a></td>


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
                <img src="{{ asset('images/akslogo.png')}}" alt="AKS Websoft Consulting Pvt. Ltd." title="AKS Websoft Consulting Pvt. Ltd."></a>

      <div class="clear"></div>
    </div>
  </footer>
</footer>
</body>
</html>
