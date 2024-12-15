<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            background-color: black;
            color: aliceblue;
            opacity: 0.9;
            /* background-image: url("/Storage/fine.png"); */
            /* background-position: center; */
            /* background-repeat: no-repeat; */
            /* width: 100%;
            height: 50vh; */
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

        p.ex3 {
            color: green;
            text-align: left;
        }

        p.ex2 {
            text-align: left;
            color: maroon;
            opacity: 0.9;
        }

        p.ex4 {
            text-align: left;
            color: aliceblue;
        }

        a {
            opacity: 0.9;
            border-collapse: unset;
            text-decoration: none;
            text-align: center;
            background-color: papayawhip;
            border-style: groove;
            border-radius: 11px;
            border-color: maroon;
            margin-left: 500px;
            font-size: 20px;
        }

        /* div {
            background-color: dimgrey;
        } */
    </style>

<body>
    <h1> Welcome to Chat-app </h1>
    <br><br>
    <br><br>
    <br><br>
    <p> Never miss a moment with voice and video calls</p>
    <p class="ex1"> From a group call to classmates to a quick call with mom,<br> fell like you're in the same room
        with voice and
        video calls.
        <br><br>
        Learn more >
    </p>
    <div>
        <p class="ex2">Speak <br> freely</p>
        <p class="ex4"> With end-to-end encryption,your personal messages<br> and calls are secured.Only you and the
            <br>person
            you're talking to can read or listen to them,<br> nobody in between,not even Chat-app itself.
            <br><br> Learnmore >
        </p>
        <br><br>
        <a href="{{ route('loginpage') }}">Login here >> </a>
    </div>
</body>
</head>

</html>
