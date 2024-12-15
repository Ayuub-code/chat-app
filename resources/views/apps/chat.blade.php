<!DOCTYPE html>
<html>

<head>

<body>
    @foreach ($conversations as $conversation)
        {{ $conversation->message }}
    @endforeach
</body>
</head>

</html>
