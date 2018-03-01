@extends('layouts.master')

@section('styles')
    <link rel = "stylesheet" href = "{{ URL::to('css/shop.css') }}">
@endsection


@section('content')
<div class = 'shop'>
    <div class = 'shop-main'>
        Search
    </div>
    <div class = 'shop-sub'>
        店舗検索
    </div>
</div>


<!-- Whole shops-->
<div class = 'whole-shop'>ショップ一覧</div>

<!-- search -->
<div class = 'search-container'>
    <div class = 'search-title'>
        ジャンルで絞る
    </div>
    <div class = 'dropdown'>
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">買い物</a>
            <a class="dropdown-item" href="#">食べる</a>
            <a class="dropdown-item" href="#">その他</a>
        </div>
    </div>
</div>

<!-- search main -->

<div>全5件</div>
<div class="card-group">
    <div class="card">
        <img class="card-img-top" src="img/japon.jpg" alt="Card image cap">
        <div class="card-block">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
    </div>
    <div class="card">
        <img class="card-img-top" src="img/ocutopus.jpg" alt="Card image cap">
        <div class="card-block">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
        </div>
    </div>
    <div class="card">
        <img class="card-img-top" src="img/tea_room.jpg" alt="Card image cap">
        <div class="card-block">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
        </div>
    </div>
    <div class="card">
        <img class="card-img-top" src="img/udon.JPG" alt="Card image cap">
        <div class="card-block">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
        </div>
    </div>
    <div class="card">
        <img class="card-img-top" src="img/ueshima.jpg" alt="Card image cap">
        <div class="card-block">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
        </div>
    </div>
</div>
@endsection