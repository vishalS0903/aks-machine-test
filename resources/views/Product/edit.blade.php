<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>


<title>AKS Machine Test</title>
<!-- slider start -->
<!-- slider end -->
<link rel="stylesheet" href="{{ asset ('css/style.css')}}">
<!--[if lt IE 9]>
<script type="text/javascript" src="html5.js"></script>
<![endif]-->
<!--[if lt IE 7.]>
<script defer type="text/javascript" src="pngfix1.js"></script>
<![endif]-->

<!-- Menu start --------------->
<link href="{{ asset ('menu/quickmenu0.css')}}" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="{{ asset ('menu/quickmenu0.js') }}"></script>
<!-- Menu End --------------->
</head>
<body>
@include('master')
<form action="{{route('product.update',$data->id)}}" method="POST" enctype="multipart/form-data">
@csrf
<div id="wrap">
  <div class="clear" style="height:5px;"></div>
  <div id="wrap2">
    <h1>Add Product</h1>
    <br>

    <div class="form-raw">
      <div class="form-name">Select Category</div>
      <div class="form-txtfld">
        <select name="category_id" id="category_id" >
            <option>Select Subcategory</option>
            @foreach ($category as $c)
            <option value="{{$c->id}}" @if($c->id==$data->category->id) selected='selected' @endif>{{ $c->name}}</option>

            @endforeach
             {{-- <option></option>
             <option></option> --}}
        </select>
      </div>
      @if ($errors->has('category_id'))
      <span class="req-field">{{ $errors->first('category_id') }}</span>
    @endif
    </div>
      <div class="clear"></div>


        <div class="form-raw">
      <div class="form-name">Select Sub Category</div>
      <div class="form-txtfld">
        <select multiple="select" style="height: 100px;" name="subcategory_id" id="subcategory_id">
            {{-- @foreach ($subcategory as $c)
            <option value="{{$c->id}}">{{$c->name}}</option>

            @endforeach --}}
                         {{--
             <option></option> --}}
        </select>
      </div>
      @if ($errors->has('subcategory_id'))
      <span class="req-field">{{ $errors->first('subcategory_id') }}</span>
     @endif
    </div>
      <div class="clear"></div>

    <div class="form-raw">
      <div class="form-name">Product Name</div>
      <div class="form-txtfld">
        <input type="text" name="product" value="{{$data->product}}">
      </div>
      @if ($errors->has('product'))
      <span class="req-field">{{ $errors->first('product') }}</span>
    @endif
    </div>

    <div class="form-name">Product Image1</div>
    <div class="form-txtfld">
      <input type="file" name="image" id="image1" value="{{$data->image}}">
      <img src="{{asset('uploads_images/'.$data->image)}}" alt="not fount" Width=500px, Height=300px  >
      {{-- @if ($data->image)
        <img src="{{ asset('uploads_images/' . $data->image) }}" alt="Product Image" width="200">
    @endif --}}
       {{-- <figure>{{$data->image}}</figure> --}}
      {{-- <div class="form-name"> Image Size ( Width=560px, Height=390px ) (Product page)</div> --}}
    </div>
    @if ($errors->has('image'))
    <span class="req-field">{{ $errors->first('image') }}</span>
    @endif
  </div>
  <div class="form-raw" style="width:100%;">
    <div class="form-name">Short Description</div>
    <div class="form-txtfld">
      <textarea name="shortdescription">{{$data->shortdescription}}"</textarea>
    </div>
    @if ($errors->has('shortdescription'))
    <span class="req-field">{{ $errors->first('shortdescription') }}</span>
    @endif
  </div>

  <div class="clear"></div>
  <h1 style="border-bottom: 1px solid #CCC; padding-bottom: 10px; margin: 20px 0 0px 0;">Description</h1>
    <br>
  <div class="form-raw">
    <div class="form-name"> &nbsp;</div>
      <div class="form-txtfld">
       <input type="text"  placeholder="Title" name="title" value="{{$data->title}}">
      </div>
      @if ($errors->has('title'))
      <span class="req-field">{{ $errors->first('title') }}</span>
        @endif
    </div>
  <div class="form-raw">
      <div class="form-name">&nbsp;</div>
      <div class="form-txtfld txtfld50"><input type="text" placeholder="heading" name="heading" value="{{$data->heading}}"></div>
      @if ($errors->has('heading'))
      <span class="req-field">{{ $errors->first('heading') }}</span>
     @endif
      <div class="form-txtfld txtfld50"><input type="text" placeholder="desciption" name="desciption" value="{{$data->desciption}}"></div>
      @if ($errors->has('desciption'))
      <span class="req-field">{{ $errors->first('desciption') }}</span>
     @endif
       {{-- <a href="#"><img src="{{ asset ('images/delete.gif') }}" alt=""></a> --}}
  </div>
  {{-- <div class="form-raw">
      <div class="form-name">&nbsp;</div>
      <div class="form-txtfld" style="width: 320px; text-align: right;"><a href="#">Add More +</a></div>
  </div> --}}



  {{-- <div class="form-raw">
      <div class="form-name"> &nbsp;</div>
      <div class="form-txtfld">
      <input type="text"  placeholder="Title">
      </div>
    </div>
  <div class="form-raw">
      <div class="form-name">&nbsp;</div>
      <div class="form-txtfld txtfld50"><input type="text" placeholder="heading"></div>
      <div class="form-txtfld txtfld50"><input type="text" placeholder="desciption"></div> <a href="#"><img src="images/delete.gif" alt=""></a>
  </div>
  <div class="form-raw">
      <div class="form-name">&nbsp;</div>
      <div class="form-txtfld" style="width: 320px; text-align: right;"><a href="#">Add More +</a></div>
  </div> --}}


 {{--
  <div class="form-raw">
      <div class="form-name"> &nbsp;</div>
      <div class="form-txtfld">
        <input type="text"  placeholder="Title">
      </div>
    </div>
 <div class="form-raw">
      <div class="form-name">&nbsp;</div>
      <div class="form-txtfld txtfld50"><input type="text" placeholder="heading"></div>
      <div class="form-txtfld txtfld50"><input type="text" placeholder="desciption"></div>
       <a href="#"><img src="images/delete.gif" alt=""></a>
  </div>
  <div class="form-raw">
      <div class="form-name">&nbsp;</div>
      <div class="form-txtfld" style="width: 320px; text-align: right;"><a href="#">Add More +</a></div>
  </div> --}}

 <!--  <div class="form-raw">
      <div class="form-name">&nbsp;</div>
      <div class="form-txtfld txtfld50"><input type="text" placeholder="heading"></div>
      <div class="form-txtfld txtfld50"><input type="text" placeholder="desciption"></div>
      <a href="#"><img src="images/delete.gif" alt=""></a>
  </div> -->







  <div class="clear"></div>
  <h1 style="border-bottom: 1px solid #CCC; padding-bottom: 10px; margin: 20px 0 0px 0;">Features</h1>
    <br>
  <div class="form-raw" style="width:100%;">
    <div class="form-name">Content</div>
    <div class="form-txtfld" style="width:780px;">
      <textarea style="width:100%; height:500px;" name="content" id="body">{{$data->content}}</textarea>
    </div>
    @if ($errors->has('content'))
    <span class="req-field">{{ $errors->first('content') }}</span>
    @endif
  </div>
  <div class="clear"></div>
  <h1 style="border-bottom: 1px solid #CCC; padding-bottom: 10px; margin: 20px 0 0px 0;">Upload PDF</h1>
    <br>

<div class="form-raw">
      <div class="form-name">&nbsp;</div>
      <div class="form-txtfld txtfld50"><input type="text" placeholder="PDF heading" name="pdf_heading" value="{{$data->pdf_heading}}"></div>
      @if ($errors->has('pdf_heading'))
      <span class="req-field">{{ $errors->first('pdf_heading') }}</span>
    @endif
      <div class="form-txtfld txtfld50"><input type="file" placeholder="desciption" name="pdf_file" value="{{$data->pdf_file}}"></div>
      @if ($errors->has('pdf_file'))
      <span class="req-field">{{ $errors->first('pdf_file') }}</span>
    @endif
  </div>
  {{-- <div class="form-raw">
      <div class="form-name">&nbsp;</div>
      <div class="form-txtfld" style="width: 320px; text-align: right;"><a href="#">Add More +</a></div>
  </div> --}}

{{-- <div class="form-raw">
      <div class="form-name">&nbsp;</div>
      <div class="form-txtfld txtfld50"><input type="text" placeholder="PDF heading"></div>
      <div class="form-txtfld txtfld50"><input type="file" placeholder="desciption"></div>
  </div>
  <div class="form-raw">
      <div class="form-name">&nbsp;</div>
      <div class="form-txtfld" style="width: 320px; text-align: right;"><a href="#">Add More +</a></div>
  </div> --}}

   {{-- <div class="form-raw">
      <div class="form-name">&nbsp;</div>
      <div class="form-txtfld txtfld50"><input type="text" placeholder="PDF heading"></div>
      <div class="form-txtfld txtfld50"><input type="file" placeholder="desciption"></div>
      <a href="#"><img src="images/delete.gif" alt=""></a>
  </div> --}}




     <!-- <div class="form-raw">
      <div class="form-name">Heading</div>
      <div class="form-txtfld">
        <input type="text">
      </div>
    </div>
     <div class="form-raw">
      <div class="form-name">PDF</div>
      <div class="form-txtfld">
        <input type="file">
      </div>
    </div> -->



  <div class="clear"></div>
  <div class="form-raw">
    <div class="form-name">Active</div>
    <div class="form-txtfld">
        <input type="checkbox" name="status" value="1" @if ($data->status== 1) checked  @endif>
    </div>
    <div class="clear"></div>
  </div>
  <div class="clear"></div>
  <div class="form-raw">
    <div class="form-name">&nbsp;</div>
    <div class="form-txtfld">
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
<div id="wrap2">
   <table width="100%" border="0" cellspacing="0" cellpadding="0" class="admintable">
    <tr>
      <th width="53" align="left" valign="middle">Sr.No.</th>
      <th width="153" align="left" valign="middle">Select Category</th>
      <th width="71" align="left" valign="middle"> Select Sub Category</th>
     <th width="71" align="left" valign="middle"> Product Name</th>

      <th width="408" align="left" valign="middle">Short Description</th>
      <th width=" " align="left" valign="middle">Full Description</th>
      <th width="49" align="left" valign="middle">Status</th>

      <th width="49" align="left" valign="middle">Edit</th>
      <th width="61" align="left" valign="middle">Remove</th>
    </tr>
    {{-- <tr>
      <td align="left" valign="top">1</td>
      <td align="left" valign="top">Lorem .</td>
      <td align="left" valign="top">Lorem .</td>
      <td align="left" valign="top">dfdd</td>

      <td align="left" valign="top">fdfd</td>
      <td align="left" valign="top">fdfd</td>


      <td align="left" valign="top"><strong>Active</strong></td>
      <td align="left" valign="top"><a href="#">Edit</a></td>
      <td align="center" valign="top"><a href="#"><img src="{{ asset ('images/icon-bin.jpg') }}" alt="" width="25" height="25" border="0" align="absmiddle" /></a></td>
    </tr> --}}
    @php
    $count= 1;
@endphp
    @foreach ($product as $p)
    <tr>

      <td align="left" valign="top">{{$count++}}</td>
      <td align="left" valign="top">{{@$p->category->name}}</td>
      <td align="left" valign="top">{{@$p->subcategory->name}}</td>
      <td align="left" valign="top">{{$p->product}}</td>

      <td align="left" valign="top">{{$p->shortdescription}}</td>
      <td align="left" valign="top">{{$p->desciption}}</td>


      <td align="left" valign="top" ><strong>
                                        @if($p->status==null)
                                         Inactive
                                        @else
                                         Active
                                        @endif
                                    </strong></td>
      <td align="left" valign="top"><a href="#">Edit</a></td>
      <td align="center" valign="top"><a href="{{route('product.delete',$p->id)}}"><img src="{{ asset ('images/icon-bin.jpg') }}" alt="" width="25" height="25" border="0" align="absmiddle" /></a></td>


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
      <a href="https://www.akswebsoft.com/" target="_blank" style="float:right;"> <img src="{{ asset('images/akslogo.png') }}" alt="AKS Websoft Consulting Pvt. Ltd." title="AKS Websoft Consulting Pvt. Ltd."></a>
      <div class="clear"></div>
    </div>
  </footer>
  <script>
  ClassicEditor
      .create(document.querySelector('#body'))
      .catch(error => {
          console.error(error);
      });
</script>
{{-- <script>
  $(document).ready(function() {
  $('#category_id').change(function() {
      var categoryId = $(this).val(); // Get the selected country ID
      if (categoryId) {
          $.ajax({
              url: '/subcategories', // The URL to your Laravel route/controller method
              type: 'GET',
              data: { category_id: categoryId },
              success: function(response) {
                  // Clear the existing cities dropdown
                  $('#subcategory_id').empty();

                  // Populate the cities dropdown with the retrieved cities
                  $.each(response, function(key, subcategory_id) {
                      $('#subcategory_id').append('<option value="' + subcategory.id + '">' + subcategory.name + '</option>');
                  });
              }
          });
      } else {
          // Clear the cities dropdown if no country is selected
          $('#subcategory_id').empty();
      }
  });
});

</script> --}}
<script>
  $(document).ready(function(){
  $('#image1').on('change', function(){ //on file input change
      if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
      {
          $('#thumb-output').html(''); //clear html of output element
          var data = $(this)[0].files; //this file data

          $.each(data, function(index, file){ //loop though each file
              if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){ //check supported file type
                  var fRead = new FileReader(); //new filereader
                  fRead.onload = (function(file){ //trigger function on successful read
                  return function(e) {
                      var img = $('<img Width=560px, Height=390px />').addClass('thumb').attr('src', e.target.result); //create image element
                      $('#thumb-output').append(img); //append image to output element
                  };
                    })(file);
                  fRead.readAsDataURL(file); //URL representing the file's data.
              }
          });

      }else{
          alert("Your browser doesn't support File API!"); //if File API is absent
      }
  });
});
</script>

<script>
    $(document).ready(function() {
    $('#category_id').change(function() {
        var categoryId = $(this).val(); // Get the selected country ID
        if (categoryId) {
            $.ajax({
                url: '/subcategories', // The URL to your Laravel route/controller method
                type: 'GET',
                data: { category_id: categoryId },
                success: function(response) {
                    // Clear the existing cities dropdown
                    $('#subcategory_id').empty();

                    // Populate the cities dropdown with the retrieved cities
                    $.each(response, function(key, subcategory_id) {
                        $('#subcategory_id').append('<option value="' + subcategory_id.id + '">' + subcategory_id.name + '</option>');
                    });
                }
            });
        } else {
            // Clear the cities dropdown if no country is selected
            $('#subcategory_id').empty();
        }
    });
});
</script>
</body>
</html>
