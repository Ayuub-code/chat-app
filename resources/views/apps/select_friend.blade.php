<!DOCTYPE html>
<html>
<style>
    body {
        background-color: black;
    }
</style>

<body>
    @foreach ($suggestions as $suggestion)
        {{ $suggestion->name }}
        <br>
        <img src="{{ $suggestion->profile_pics }}" width="20" height="30" alt="" />
        <a href="">Add as Friend</a>
        <br>
    @endforeach
</body>

</html>
