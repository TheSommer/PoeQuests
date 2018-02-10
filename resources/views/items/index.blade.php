@extends('layouts.main')

@section('content')
<h1>Items</h2>
<table class="table">
  <tr>
    <th>Name</th>
    <th>Requirements</th>
    <th>Tags</th>
  </tr>
  @foreach($items as $item)
    <tr>
      <td>{{ $item->name }}</td>
      <td>
        <span class="badge badge-secondary">Lvl. {{ $item->req_level }}</span>
        @if($item->req_str > 0)
          <span class="badge badge-danger">{{ $item->req_str }} str</span>
        @endif
        @if($item->req_int > 0)
          <span class="badge badge-primary">{{ $item->req_int }} int</span>
        @endif
        @if($item->req_dex > 0)
          <span class="badge badge-success">{{ $item->req_dex }} dex</span>
        @endif
      </td>
      <td>
        @foreach($item->getTags() as $tag)
          <span class="badge badge-dark">{{ $tag->name }}</span>
        @endforeach
      </td>
    </tr>
  @endforeach
</table>
@endsection
