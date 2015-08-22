@section
    <h1>All Users</h1>
    @if ($users->count())
        @foreach ($users as $user)
            <li>{{ $user-username }}</li>
        @endforeach
    @endif
@stop