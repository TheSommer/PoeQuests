@extends("layouts.main")
@section("content")

<table class="table">
    <tr>
        <th>Act</th>
        <th>Order</th>
        <th>Title</th>
        <th>Created at</th>
        <th>Updated at</th>
    </tr>
    @foreach($quests as $quest)
    <tr>
        <td>{{$quest->act}}</td>
        <td>{{$quest->order}}</td>
        <td>{{$quest->title}}</td>
        <td>{{$quest->created_at}}</td>
        <td>{{$quest->updated_at}}</td>
    </tr>
    @endforeach
</table>

@endsection