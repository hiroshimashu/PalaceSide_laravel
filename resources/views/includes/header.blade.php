<div class="container-fluid">
    <!-- nav -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class = 'nav-box'>
            <div class="navbar-brand">MEITENKAI</div>
            <div class="subtitle">パレスサイドビル</div>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item nav-pills">
                    <a class = "nav-link" href = "{{ url('/') }}">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class = "nav-link" href = "{{  url('/shop') }}">店舗検索</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href = "{{  url('/shopMap') }}">店舗マップ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href = "{{ url('/contact') }}">コンタクト</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
