<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information Table</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!-- <pre> -->
    <!-- {{ print_r($customers) }} -->

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

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h2>User Information</h2>
                    <div>
                        <a href="{{ url('customer/trash') }}" class="btn btn-primary ml-2">View Trash</a>
                        <a href="{{ route('customer.create') }}" class="btn btn-primary ml-2">Add Customer</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-8">
                <form action = "" method = "GET">
                    <div class="form-group row">
                        <div class="col-sm-8">
                            <input type="search" class="form-control" id="searchField" name="searchField" placeholder="Enter search term" value ={{$search}}>
                        </div>
                        <div class="col-sm-2">
                            <button type="submit" class="btn btn-primary btn-block">Search</button>
                        </div>
                        <div class="col-sm-2">
                            <a href="{{url('/customer/view')}}">
                                <button type="button" class="btn btn-primary btn-block">clear</button>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Address</th>
                    <th>Date of Birth</th>
                    <th>Gender</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                    <tr>
                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>{{ $customer->city }}</td>
                        <td>{{ $customer->state }}</td>
                        <td>{{ $customer->address }}</td>
                        <td>{{ $customer->dob }}</td>
                        <td>
                            @if ($customer->gender == 'M')
                                Male
                            @elseif($customer->gender == 'F')
                                Female
                            @else
                                Other
                            @endif
                        </td>
                        <td>
                            <a href = "{{ route('customer.delete', ['id' => $customer->customer_id]) }}">
                                <button class="btn btn-danger">Trash</button>
                            </a>
                            <a href = "{{ route('customer.edit',['id' => $customer->customer_id]) }}">
                              <button class="btn btn-primary">Edit</button>
                          </a>
                        </td>
                    </tr>
                @endforeach
                <!-- Add more rows with data as needed -->
            </tbody>
        </table>
        <div class="row">

            {{$customers->links('pagination::bootstrap-5')}}
            {{-- {{ $customers->onEachSide(5)->links() }} --}}
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js (required for some Bootstrap components) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
