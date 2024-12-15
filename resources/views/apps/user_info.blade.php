<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            background-color: black;
            color: mintcream;
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
    </style>

<body>

    <form action="{{ route('registration') }}" method="POST">
        @csrf
        <input type = "text" name="phone no" placeholder="phone no">
        <br>
        <input type = "text" name="name" placeholder="User name">
        <br>
        <input type="text" name="email" placeholder="email">
        <br>
        <input type="text" name="password" placeholder="password">
        <br><br>
        <input type="submit" value="submit details">
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
</body>
</head>

</html>
