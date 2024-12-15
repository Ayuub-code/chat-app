<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            /* background-color: black; */
            color: aliceblue;
            opacity: 0.9;
            background-image: url("/Storage/fine.png");
            /* background-position: center; */
            /* background-repeat: no-repeat; */
            width: 100%;
            height: 50vh;
        }
    </style>

<body>

    <form action="{{ route('picture') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="profile_pics" placeholder="Add profile pics">
        <br><br>
        <input type="submit" value="submit">
    </form>
</body>
</head>

</html>
