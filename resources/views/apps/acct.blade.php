<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            background-color: black;
            color: aliceblue;
        }

        form {
            text-align: center;
            text-align: center;
            text-size-adjust: 300px;
            text-justify: newspaper;
            box-sizing: border-box;
        }
    </style>

<body>
    <b>Chat with {{ $receiver->name }}</b><br /><br />
    @foreach ($messages as $message)
        <b>
            {{ $message->sender->name }} {{ $message->sender->id === auth()->id() ? '(Me)' : '' }}
        </b>:
        <br />
        {{ $message->message }}
        <br />
        <br />
    @endforeach

    <br /><br />
    <form action="{{ route('send', ['id' => $receiver->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        {{-- <input type="hidden" name="friend_id" value="{{ $friend_id }}"> --}}
        <input type="text" name="messages" placeholder="type here">
        <input type="submit" value="send">
        <br>
        <input type="file" name="images" placeholder="file">
        <br><br>
    </form>
    {{-- <a href="{{ route('add_friend', ['id' => $friendId->user->id]) }}"></a> --}}
</body>
</head>

</html>
