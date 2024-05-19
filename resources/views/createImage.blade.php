<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <div style="width: 500px" class="position-absolute top-50 start-50 translate-middle">
        <h1 class="text-center fw-bold m-2">Upload Image</h1>

    <div class="d-flex flex-column mb-3">
    <form action="{{route('store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Image Title</label>
            <input type="text" class="form-control" id="title" placeholder="" name="title" value="{{old('title')}}">
          </div>

          @error('title')
          <div class="alert alert-danger" role = "alert">{{$message}}</div>
          @enderror

          <div class="mb-3">
            <label for="image" class="form-label">Upload File</label>
            <input class="form-control form-control-lg" id="image" type="file" name="image">
          </div>

          @error('image')
          <div class="alert alert-danger" role = "alert">{{$message}}</div>
          @enderror

          <button type="submit" class="btn btn-primary btn-lg">Upload Image</button>
    </form>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
