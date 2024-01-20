<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Registration Form</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Welcome</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/register') }}">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/customer/view') }}">Customer</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="card-header bg-silver text-blue">
            <h5 class="mb-0">{{$formTitle}}</h5>
        </div>
        <form action="{{$url}}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter your name"
                        name="name" value = "{{!is_null($customer)?$customer->name : ''}}">
                </div>
                <div class="col-md-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your email"
                        name="email" value = "{{!is_null($customer)?$customer->email : ''}}">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <label for="state">State</label>
                    <input type="text" class="form-control" id="state" placeholder="Enter your state"
                        name="state" value = "{{!is_null($customer)?$customer->state : ''}}">
                </div>
                <div class="col-md-6">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" placeholder="Enter your address"
                        name="address" value = "{{!is_null($customer)?$customer->address : ''}}">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <label for="dob">Date of Birth</label>
                    <input type="date" class="form-control" id="dob" name="dob"
                    value = "{{!is_null($customer)?$customer->dob : ''}}">
                </div>
                <div class="col-md-6">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter your password"
                        name="password">
                </div>
                <div class="col-md-6">
                    <label for="city">City</label>
                    <input type="text" class="form-control" id="city" placeholder="Enter your city"
                        name="city" value = "{{!is_null($customer)?$customer->city : ''}}">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <label for="confirmPassword">Confirm Password</label>
                    <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm your password"
                        name="confirmPassword">
                </div>
                <div class="col-md-6">
                    <label>Gender</label>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="male" name="gender" value="M" {{!is_null($customer)&&$customer->gender == "M"?"checked" : ''}}>
                        <label class="form-check-label" for="male">Male</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="female" name="gender"
                            value="F" {{!is_null($customer)&&$customer->gender == "F"?"checked" : ''}}>
                        <label class="form-check-label" for="female">Female</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="other" name="gender"
                            value="O" {{!is_null($customer)&&$customer->gender == "O"?"checked" : ''}}>
                        <label class="form-check-label" for="other">Other</label>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
