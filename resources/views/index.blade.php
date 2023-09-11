<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>

<body>
    <h1>img</h1>
    <form action="{{route('store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="flex flex-col">
            <input type="text" placeholder="Tittle" name="tittle">
            @error('tittle')
            <p class="text-red-600">d{{$message}}</p>
            @enderror
        </div>
        <div>
            <input type="file" placeholder="img" name="img">
        </div>
        <button type="submit">Add</button>
    </form>
</body>

</html>