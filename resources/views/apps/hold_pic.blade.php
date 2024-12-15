<!DOCTYPE html>
<html>

<head>
    <style>
        body {
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
            font-style: italic;
        }

        a.ex4 {
            color: maroon;
            background-color: peachpuff;
            border-style: hidden;
            font-size: 30px;
            font-family: sans-serif;
            text-align: center;
            border-radius: 12px;
            margin-left: 500px;
            text-decoration: none;
        }

        a.ex3 {
            color: maroon;
            /* border-style: hidden; */
            font-family: sans-serif;
            text-align: center;
            margin-left: 580px;
            font-size: 30px;
        }

        p {
            font-variant: small-caps;
        }

        hr {
            color: peachpuff;
        }
    </style>

<body>
    <h1> Chat-app the people choice</h1>
    <br><br>
    <p> Make your day better with chat-app<br>by send greetings and wish<br>to your friends,family and your love ones.
    </p>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <hr>

    <a class="ex4" href="{{ route('picture') }}"> Add Profile Pics </a>
    <br><br><br>
    <a class="ex3" href="{{ route('suggestions.show') }}"> skip </a>
</body>
</head>

</html>
