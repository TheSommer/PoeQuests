@extends("layouts.main")
@section("content")

<table class="table">
    <tr>
        <th>Class</th>
        <th>Created</th>
        <th>Updated</th>
    </tr>
    @foreach($characters as $char)
    <tr>
        <td>{{$char->name}}</td>
        <td>{{$char->created_at}}</td>
        <td>{{$char->updated_at}}</td>
    </tr>
    @endforeach
</table>

@endsection