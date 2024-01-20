<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Bootstrap Form</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    {!! Form::open(['url' => url('/'),'method' => 'GET']) !!}
     <div class="mb-3">
      <label for="name" class="form-label">Name:</label>
      {{-- <input type="text" class="form-control" id="name" name="name" required> --}}
      {!! Form::text('name','abc',[
        'id' => 'name',
        'class' => 'form-control'
    ]);!!}
    </div> 
    

    <div class="mb-3">
      <label for="email" class="form-label">Email:</label>
      <input type="email" class="form-control" id="email" name="email" required>
    </div>

    <div class="mb-3">
      <label for="mobile" class="form-label">Mobile Number:</label>
      <input type="tel" class="form-control" id="mobile" name="mobile" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Gender:</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gender" id="male" value="male" required>
        <label class="form-check-label" for="male">Male</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gender" id="female" value="female" required>
        <label class="form-check-label" for="female">Female</label>
      </div>
    </div>

    <div class="mb-3">
      <label for="size" class="form-label">Country:</label> 
      {{-- <select class="form-select" id="country" name="country" required>
        <option value="" disabled selected>Select Country</option>
        <option value="usa">United States</option>
        <option value="canada">Canada</option>
        <option value="uk">United Kingdom</option>
    </select>  --}}
    {!!  Form::select('size', ['L' => 'Large', 'S' => 'Small'], null, ['placeholder' => 'Pick a size...']);!!}
    </div>

    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="agree" name="agree" required>
      <label class="form-check-label" for="agree">I agree to the terms and conditions</label>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
    {!! Form::close() !!}
</div>

<!-- Bootstrap JS and Popper.js (Optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
