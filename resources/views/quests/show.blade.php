@extends("layouts.main")
@section("content")

<div class="row">
  <div class="col-md-12">
    <h1>{{ $quest->title }}</h1>
    <div class="row">
      @foreach($quest->getRewards() as $charRewards)

      @component('components.quest', ['charRewards' => $charRewards])
      @endcomponent

      @endforeach
    </div>
  </div>
</div>

@endsection
