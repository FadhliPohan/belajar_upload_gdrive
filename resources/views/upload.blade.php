<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>


    <div style="padding: auto auto auto auto">
        <form action="{{ url('/file') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="iqbal">
            <input type="submit" value="Upload">
        </form>
    </div>

</body>

</html>
