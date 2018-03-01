@extends('layouts.master')

@section('styles')
    <link rel = "stylesheet" href = "{{ URL::to('css/map.css') }}">
@endsection


@section('content')
<div class = 'map'>
    <div class = 'map-main'>
        Map
    </div>
    <div class = 'map-sub'>
        店舗マップ
    </div>
</div>

<div class = 'map-wrapper'>
    <img class = 'map1' src = 'img/floor_map_01F.gif' alt = 'map1'>
    <img class = 'map2' src = 'img/floor_map_B1F.gif' alt = 'map2'>
</div>
@endsection



