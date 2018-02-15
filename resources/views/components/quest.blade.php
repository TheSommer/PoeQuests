<div class="col">
  {{ $charRewards[0]->getCharacter()->name }}
  <hr>
  <ul>
  @foreach($charRewards as $charReward)
    <li>{{ $charReward->getItem()->name }}</li>
  @endforeach
  </ul>
</div>
