<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyOckOr1pvmE9g6S5UOMhGfRZL99SMK7R" crossorigin="anonymous">
  <title>Rajat's Website</title>
  <style>
    body {
      background-color: #ffffff; /* White background for the page */
      margin: 0;
    }

    .navbar {
      background-color: #000000; /* Black background for the navbar */
    }

    .navbar-nav a {
      color: #ffffff; /* White color for navbar links */
    }

    .center-container {
      height: 100vh;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }

    h1 {
      color: #000000; /* Black color for the header */
      text-align: center;
    }
  </style>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="#">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{url('/localisation/en')}}">English</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/localisation/hi')}}">Hindi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/localisation/pun')}}">Punjabi</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="center-container">
    <h1>@lang('lang.welcome')</h1>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-Y3P8U8FvkVlGgJSsSxF7TjkjG6B/Id+T7QxPAVyZjOdL8Q1l3nmFT5J5By6mO3f" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyOckOr1pvmE9g6S5UOMhGfRZL99SMK7R" crossorigin="anonymous"></script>

</body>
</html>
