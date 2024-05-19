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
    <div class="">
        <div class="d-inline-flex gap-1">
            <h1 class="text-center d-inline-flex gap-1">Image Gallery</h1>
            <a href="{{route('create')}}">
                <button type="button" class="btn btn-success d-inline-flex gap-1">Upload Image</button>
            </a>
        </div>


        @foreach($images as $i)
        <div class="card" style="width: 18rem;">
            <div class="card-body">
            <img src="{{asset('/storage/image/'.$i->image)}}" class="card-img-top" alt="{{$i->title}}">
            <br>
            <h5 class="card-title">{{$i->title}}</h5>
            <form action="{{route('delete', $i->id)}}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger btn-sm" >delete</button>
            </form>
            </div>
        </div>
        @endforeach
    </div>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>
