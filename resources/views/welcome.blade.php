@extends('layouts.main')

@section('content')
  <h3>Current endpoints</h3>
  <ul>
    <li><a href="/characters">/characters</a></li>
    <li><a href="/characters/Marauder">/characters/{name = Marauder}</a></li>
    <li><a href="/quests">/quests</a></li>
    <li><a href="/quests/1/5">/quests/{act = 1}/{order = 5}</a></li>
  </ul>
@endsection
