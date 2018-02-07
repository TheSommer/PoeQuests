@extends("layouts.main")
@section("content")

<table class="table">
    <tr>
        <th>Class</th>
        <th>Created</th>
        <th>Updated</th>
    </tr>
    
    <tr>
        <td>{{$character->name}}</td>
        <td>{{$character->created_at}}</td>
        <td>{{$character->updated_at}}</td>
    </tr>
</table>

@endsection