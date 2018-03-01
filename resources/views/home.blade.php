@extends('layouts.master')


@section('content')

<!-- body -->
<div class = 'home'>
    <div class = 'home-main'>
        Home
    </div>
    <div class = 'home-sub'>
        ホーム
    </div>
</div>

<!-- Palaceside -->
<div class = "palace-side">
    <div class = "palace-side-title">
        パレスサイドビル名店会について
    </div>
    <!--
    <img src = 'static/palaceSide2.png' class = "palace-side-image" />
    -->
</div>

<!-- info -->
<div class = 'info'>
    <div class = 'info-title'>
        最新情報
    </div>
    <div class = 'info-subtitle'>
        パレスサイドビル名店会の最新情報をお届けします
    </div>
</div>
<div class = 'row' style = 'width: 100vw; margin-left: 0; margin-right: 0;' >
    <div class = 'col-sm-4' style = 'padding-right: 0; padding-left:0;'>
        <div class="card">
            <img class="card-img-top" src="img/north-face.png" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-success">詳細</a>
            </div>
        </div>
    </div>
    <div class = 'col-sm-4' style = 'padding-right: 0; padding-left:0;'>
        <div class="card">
            <img class="card-img-top" src="img/north-face.png" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-success">詳細</a>
            </div>
        </div>
    </div>
    <div class = 'col-sm-4' style = 'padding-right: 0; padding-left:0;'>
        <div class="card">
            <img class="card-img-top" src="img/north-face.png" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-success">詳細</a>
            </div>
        </div>
    </div>
</div>

<!-- SNS -->
<div class = 'SNSTitle'>
    <div class =  'snsTitle-main'>
        パレスサイドビル公式SNS
    </div>
    <div class =  'snsTitle-main2'>
        各種SNSでリアルタイムの情報をお届けします
    </div>
    <img src = 'img/facebook.svg' class = "facebook-logo"/>
    <img src = 'img/Twitter-Logo.png' class = "twitter-logo" />
</div>
<div class = 'row' id = 'sns-main-wrapper' style = 'width: 100vw; margin-left: 0; margin-right: 0; position:relative'>
    <div class =  'col-sm-6' id = 'twitter-wrapper'>
        <a class="twitter-timeline"  width = 380px height = 500px href="https://twitter.com/meitenkai1966?ref_src=twsrc%5Etfw">Tweets by meitenkai1966</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>
    <div class = 'col-sm-6'  id = facebook-wrapper>
        <iframe id = 'facebookMain'src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fmeitenkai1966%2F%3Fref%3Dpy_c&tabs=timeline&width=380&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=1887174554867747" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
    </div>
</div>


<!-- ACCESS -->

<div class = 'row' id = 'access-wrapper' style = 'background-color:#003366; position: relative; width: 100vw;  margin-left: 0; margin-right: 0; position:relative'>
    <div class = 'col-sm-4' id = 'access-main1'>
        <div class = 'access-title'>
            交通・アクセス
        </div>
        <div class = 'train-title'>
            <img src =  'img/train.svg' alt =  'train'>
            <div>電車をご利用の場合</div>
        </div>
        <div class =  'tozai-line-title'>
            東京メトロ東西線「竹橋」駅 直結
        </div>
        <div class = 'tozai-line-main'>
            パレスサイドビルは竹橋駅に直結しております。<br/>
            中野寄り階段「竹橋方面出口」（1b出口）をご利用ください。
        </div>
        <div class = 'other-line-title'>
            東京メトロ半蔵門線、<br/>都営地下鉄新宿線・三田線<br/>「神保町」駅 徒歩5分
        </div>
        <div class = 'other-line-main'>
            神保町駅から徒歩で、お越しいただけます。<br/>
            神保町駅「小学館、共立女子学園、如水会館方面出口」（A8出口）から<br/>
            白山通りを竹橋方面へ徒歩5分です。
        </div>

        <div class = 'car-title'>
            <img src = 'img/drive.svg' alt = 'car'>
            <div>車をご利用の場合</div>
        </div>
        <div class = 'car-main-title'>
            首都高速の出入り口（一ツ橋、北の丸、代官町、神田橋）からアクセスが容易です
        </div>
        <div class = 'car-main'>
            地下2、3、4階に300台が収容できる一般車両駐車場と<br/>
            地下2階に25台収容のバイク駐輪場があり、地下3階には<br/>
            電気自動車用急速充電器(利用無料)も設置しています。<br/>
        </div>
    </div>
    <div class = 'col-sm-4'  id = 'access-main2'>
        <div class = 'meitenkai-title'>
            パレスサイドビル名店会
        </div>
    </div>
    <div class = 'col-sm-4'  id = 'access-main3'>
        <div class = 'related-websites-title'>
            関連サイト
        </div>
    </div>
</div>

@endsection