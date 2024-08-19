<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
    </nav>
    {{-- Navbar --}}

    {{-- Main Container --}}
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                @if (isset($editRecord['id']))
                <form action="{{ url('updateProduct') }}" method="POST">
                    <input type="hidden" name="id" value="{{ $editRecord['id'] }}">
                @else
                <form action="{{ url('addProduct') }}" method="POST">
                @endif
                    @csrf
                    <div class="mb-3">
                      <label for="product_name" class="form-label">Product Name</label>
                      <input type="text" class="form-control" id="product_name" name="product_name" value="@isset($editRecord['product_name']){{$editRecord['product_name']}}@endisset">                    
                    </div>
                    <div class="mb-3">
                      <label for="product_desc" class="form-label">Description</label>
                      <input type="text" class="form-control" id="product_desc" name="product_desc" value="@isset($editRecord['product_desc']){{$editRecord['product_desc']}}                          @endisset">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-md-12">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Desc</th>
                        <th scope="col">Action</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Updated At</th>
                      </tr>
                    </thead>
                    <tbody>
                        @forelse ($products as $product)
                            <tr>
                                <th scope="row">{{ $product['id']}}</th>
                                <td>{{ $product['product_name']}}</td>
                                <td>{{ $product['product_desc']}}</td>
                                <td><a href="{{ url('editProduct') }}/{{ $product['id'] }}"  class="btn btn-sm btn-warning">Edit</a> | <a href="{{ url('deleteProduct') }}/{{ $product['id'] }}" class="btn btn-sm btn-danger">Delete</a></td>
                                <td>{{ date('d-m-Y',strtotime($product['created_at'])) }} </td>
                                <td>{{ date('d-m-Y',strtotime($product['updated_at'])) }}</td>
                            </tr>
                        @empty
                            <tr>
                                <th colspan="3">No records Found</th>
                            </tr>
                        @endforelse
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
    {{-- Main Container --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>