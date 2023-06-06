<table>
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Singer</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data as $record)
      <tr>
        <td>{{ $record->id }}</td>
        <td>{{ $record->name }}</td>
        <td>{{ $record->singer }}</td>
      </tr>
    @endforeach
  </tbody>
</table>