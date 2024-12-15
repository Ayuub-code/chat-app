<!DOCTYPE html>
<html>
<style>
    body {
        background-color: black;
        color: aliceblue;
    }

    a {
        color: aliceblue;
        text-decoration: none;
    }
</style>

<head>

<body>
    @foreach ($friends as $friend)
        <a href="{{ route('add_friend', ['id' => $friend->user->id]) }}"></a>
        <br>
        <a href="{{ route('Sent', ['id' => $friend->user->id]) }}">{{ $friend->user->name }}</a>
        <br>
        <img src="{{ $friend->user->profile_pics }}" width="20" height="30" alt="" />
    @endforeach
</body>
</head>

</html>
