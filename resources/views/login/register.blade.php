<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        html, body {
            height: 100%; /* Ensure the body and html take up full height */
        }
        .full-height {
            height: 100vh; /* Full viewport height */
        }
        .centered-form {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column; /* Center the form items vertically */
        }
       
    </style>
    <title>Document</title>
</head>
<body>
    <div class="container full-height d-flex justify-content-center align-items-center ">
        <form class="formcontainer w-50 h-30 border p-4 rounded-3" method="POST" action="{{route('blog.register')}}"> 
            @csrf

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Enter your name here..</label>
              <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp">
           </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Enter your email here..</label>
              <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
           </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="password_confirmation" placeholder="Confirm password">
            </div>
          
            <button type="submit" class="btn btn-primary w-100">Register Account</button>
          </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
