<ul class="list-group mt-2">
    @forelse ($notifications as $notification)
        <li class="list-group-item">
            <a href="{{ $notification->url }}">{{ $notification->content }}</a>
            @if (!$notification->is_read)
                <span class="badge bg-danger">New</span>
            @endif
        </li>
    @empty
        <li class="list-group-item">No notifications</li>
    @endforelse
</ul>
