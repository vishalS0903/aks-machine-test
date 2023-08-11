<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- @php
    $count =1 ;
@endphp
{{$count++}} --}}
{{-- <input type="checkbox" name="status" value="1" @if ($data->status== 1) checked  @endif> --}}

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

</head>
<body>

<div class="container">
  <h2>Basic Table</h2>
  <input type="text" id="myInput" placeholder="search" />

  <table class="table">
    <thead>
      <tr >
        <th>ID</th>
        <th>email</th>
        <th>pwd</th>
        <th>comment</th>
        <th>Action</th>
    </tr>
    </thead>
    <tr>



    </tr>

    <tbody id="myTable">
        @foreach ($products as $v)

    <tr>
        <td>{{$v->id}}</td>
        <td>{{$v->email}}</td>
        <td>{{$v->pwd}}</td>
        <td>{{$v->comment}}</td>
        <td><a href="{{route('edit',$v->id)}}"><button class="btn btn-success">edit</button></a>
            <a href="{{route('delete',$v->id)}}"> <button class="btn btn-danger">delete</button></a></td>
    </tr>

    @endforeach
    </tbody>
  </table>
</div>
{{-- <script>
    $(document).ready(function(){
      $("#myInput").on("keyup", function() {
        // alert('vishal')
        var value = $(this).val().toLowerCase();
        alert(value)
        // $("#myTable tr").filter(function() {
        //   $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        // });
      });
    });

    </script> --}}

    <script>
        $(document).ready(function(){
          $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
              $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
          });
        });
        </script>
</body>
</html>

</body>
</html>
