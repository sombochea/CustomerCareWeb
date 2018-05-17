<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <style>
    aside{
      height: 1000px;
      width: 50%;
    }
    .img-container{
      width: 200px;
      height: 400px;
      border: 1px solid red;

    }


  </style>
</head>
<body>
   
  <h3>Hello</h3>
  <div class="img-container">
    {{-- <span class="align-middle">Helo</span>  --}}
    <img src="" alt="My img"  class=" img-fluid text-center my-img align-items-center">
  </div>

  <input type="file" name="up" id="upfile" class="button">

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 <script>
    $("#upfile").on("change",function(result){
      {{--  $(".my-img").attr  --}}

      $(".my-img").attr('src',URL.createObjectURL(result.target.files[0]));
      console.log(URL.createObjectURL(result.target.files[0]));
    })
 </script>
</body>
</html>