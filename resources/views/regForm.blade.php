<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <!-- Bootstrap CSS -->
    <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
        
    </style>
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">Welcome</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{url('/')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/register')}}">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/customer/view')}}">Customer</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  

    <div class="container">
        <h2 class="mb-4">Registration Form</h2>
        @php
        // phpinfo();
        // print_r($errors->all());
        $demo = 1;
        @endphp

        <form action="{{url('/')}}/register" method="post">
            @csrf

           
            <x-input type="text" name="name" label="Enter Name" :demo="$demo"/>
            <x-input type="email" name="email" label="Enter email" />
            <x-input type="password" name="password" label="Enter Password" />
            <x-input type="password" name="password_confirmed" label="Confirm Password" />
            <!-- <div class="form-group">
                <label for="email">Email:</label>
                <input type="" class="form-control" id="email" name="email" >
                <sapn class="text-danger">
                    @error('email')
                    {{$message}}
                    @enderror
                </sapn>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password">
                <sapn class="text-danger">
                    @error('password')
                    {{$message}}
                    @enderror
                </sapn>
            </div>

            <div class="form-group">
                <label for="password_confirmed">Confirm Password:</label>
                <input type="password" class="form-control" id="password_confirmed" name="password_confirmed" >
                <sapn class="text-danger">
                    @error('password_confirmed')
                    {{$message}}
                    @enderror
                </sapn>
            </div> -->
            <button type="submit" class="btn btn-primary">Register</button>

        </form>
    </div>
</body>
</html>
