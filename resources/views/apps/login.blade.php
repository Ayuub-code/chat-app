<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            /* background-color: black; */
            /* color: aliceblue;
            opacity: 0.9;
            background-image: url("/Storage/fine.png"); */
            /* background-position: center; */
            /* background-repeat: no-repeat; */
            /* width: 100%;
            height: 50vh; */
            background-color: black;
            color: aliceblue;
        }

        h1 {
            color: maroon;
            border-style: groove;
            border-color: maroon;
            border-radius: 12px;
            background-color: peachpuff;
            font-family: sans-serif;
            font-style: normal;
            font-size: 50px;
            font-variant: small-caps;
            text-align: center;
        }

        input {
            text-align: center;
            text-size-adjust: 300px;
            text-justify: newspaper;
            box-sizing: border-box;
        }

        form {
            text-align: center;
            text-size-adjust: 300px;
            text-justify: newspaper;
            box-sizing: border-box;
        }

        /* p {
            color: aliceblue;
        } */

        /* a {
             color: maroon;
            background-color: peachpuff;
            border-style: hidden;
            font-size: 30px;
            font-family: sans-serif;
            text-align: center;
            border-radius: 12px;
            margin-left: 500px;
            text-decoration: none;
        } */
    </style>

<body>
    <h1> Welcome to Chat-app </h1>
    <p> Never miss a moment with voice and video calls</p>
    <p> THE Life thread of our work bring <br> more hope to the future.
        <br> With the help of AI, the future of young <br> generation remain bright
    </p>
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <input type="text" name="email" placeholder="E-mail">
        <br>
        <input type="text" name="password" placeholder="password">
        <br><br>
        <input type="submit" value="Login">
    </form>
    @if ($errors->any())
        <div class="input your details">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <br><br><br><br><br>
    {{-- <a href="{{ route('picture') }}"> Add Profile Pics </a>
    <br><br>
    <a href="{{ route('picture') }}"> skip </a> --}}
</body>
</head>

</html>
