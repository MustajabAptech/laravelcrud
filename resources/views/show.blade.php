<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="row">
        <div class="col">
            <a class="btn btn-primary" href="{{url('form')}}">Add Student Record</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>ADDRESS</th>
                        <th>EMIAL</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($std as $st)
                    <tr>
                        <td>{{$st->id}}</td>
                        <td>{{$st->name}}</td>
                        <td>{{$st->address}}</td>
                        <td>{{$st->email}}</td>
                        <td><a class="btn btn-outline-warning" href="{{url('edit',$st->id)}}">Edit</a></td>
                        <td><a class="btn btn-outline-danger" href="{{url('delete',$st->id)}}">Delete</a></td>
                  
                    </tr>
                        
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
  </div>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>