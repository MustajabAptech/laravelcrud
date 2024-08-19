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
            <form method="POST" action="save">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Student Name</label>
                  <input type="text" class="form-control" name="stdname">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Student Address</label>
                    <input type="text" class="form-control" name="stdadd">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Student Email</label>
                    <input type="text" class="form-control" name="stdemail">
                  </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>