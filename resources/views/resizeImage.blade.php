<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
 <title>Resize Image In Laravel</title>
</head>
<body>
 


<section class="py-3">
 <div class="container">
  <div class="row">
   <div class="col-m8-8 m-auto">
    <div class="card">
     <div class="card-header">
      <span class="h3">Resize A Image</span>
      <a href=""></a>
     </div>
     <div class="card-body">
      @if(Session::has('resize'))
        <div class="alert alert-info">
         {{Session::get('resize')}}
        </div>
      @endif
     <form action="{{route('image.resize')}}" method="POST" enctype="multipart/form-data">
      @csrf

      <div class="form-group">
       <input type="file" name="file" class="form-control" />
       <br>
       <button type="submit" class="btn btn-info form-control">Submit</button>
      </div>
     </form>
     </div>
    </div>
   </div>
  </div>
 </div>
</section>




 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>