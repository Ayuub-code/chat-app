<!DOCTYPE html>
<html>
<style>
    body {
        background-color: black;
        color: aliceblue;
    }

    a.ex2 {
        color: aliceblue;
        margin-left: 900px;
        border: groove;
        border-radius: 10px;
        border-color: maroon;
        text-decoration: none;
        background-color: maroon;
    }

    a.ex3 {
        color: aliceblue;
        margin-left: 500px;
        border: groove;
        border-radius: 10px;
        border-color: maroon;
        text-decoration: none;
        background-color: maroon;
    }

    div {
        background-color: peachpuff;
    }

    a {
        text-decoration: none;
        color: maroon;
    }
</style>

<body>

    <br><br>
    @foreach ($suggestions as $suggestion)
        <br>
        {{ $suggestion->name }}
        <br>
        <img src={{ $suggestion->profile_pics }} width="20" height="30" alt="" />
        <a href="{{ route('add_friend', ['id' => $suggestion->id]) }}">Add as Friend</a>
        <br>
    @endforeach
</body>
<br><br><br><br><br><br><br><br><br><br><br>
<div>
    {{-- <br><br> --}}
    <br><br>
    <a class="ex3" href="{{ route('show_friends', ['id' => $suggestion->id]) }}">friends</a> <a class="ex3"
        href="{{ route('Sent', ['id' => $suggestion->id]) }}">
        CHAT </a>
    <br><br>
</div>

</html>
