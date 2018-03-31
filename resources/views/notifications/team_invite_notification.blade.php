<li class="invite-notification">
    <a href="{{ route('teams.invites')  }}">
        <p>{{ $notification->data["title"] }}</p>
        <p>From: {{ $notification->data["from"] }} with the message: {{ $notification->data["message"] }}</p>
    </a>
    <button href="" class="btn-xs btn-primary">Accepteren</button>
    <button href="" class="btn-xs btn-danger">Weigeren</button>
</li>