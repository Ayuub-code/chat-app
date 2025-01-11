<!DOCTYPE html>
<html>

<body>
    <div>
        @if (count($conversations) < 1)
            <div>No conversations yet</div>
        @else
            @foreach ($conversations as $conversation)
                <a href={{ route('Sent', ['friend' => $conversation->converser2->id]) }}>{{ $conversation->converser1->id === $user->id ? $conversation->converser2->name : $conversation->converser1->name }}
                    ({{ $conversation->converser1->unread_messages_count }})
                </a><br />
            @endforeach
        @endif
    </div>
</body>

</html>
