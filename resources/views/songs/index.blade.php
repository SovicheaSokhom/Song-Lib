<div class="container">
<table class="table">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Singer</th>
    </tr>
    </thead>
    <tbody>
    @foreach($data as $row)
        <tr>
        <td>{{ $row['id'] }}</td>
        <td>{{ $row['name'] }}</td>
        <td>{{ $row['singer'] }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>