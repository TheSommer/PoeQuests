@extends('layouts.main')

@section('content')
<h1>Items</h2>
<table class="table">
  <tr>
    <th>Name</th>
    <th>Tags</th>
  </tr>
  @foreach($items as $item)
    <tr>
      <td>{{ $item->name }}</td>
      <td>
        @foreach($item->getTags() as $tag)
          <span class="badge badge-primary">{{ $tag->name }}</span> 
        @endforeach
      </td>
    </tr>
  @endforeach
</table>
@endsection
