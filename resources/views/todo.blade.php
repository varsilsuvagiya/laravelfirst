<table border=2>
    <tr>
        <th>userId</th>
        <th>id</th>
        <th>title</th>
        <th>completed</th>
    </tr>
    @foreach ($todos as $todo)
        <tr>
            <td>{{ $todo->userId ?? 'undefined' }}</td>
            <td>{{ $todo->id ?? 'undefined' }}</td>
            <td>{{ $todo->title ?? 'undefined' }}</td>
            <td>{{ $todo->completed ? 'true' : 'false' }}</td>
        </tr>
    @endforeach
</ul>

