@extends('layouts.master')

@section('styles')
    <link rel = "stylesheet" href = "{{ URL::to('css/contact.css') }}">
@endsection


@section('content')
<div class = 'contact'>
    <div class = 'contact-main'>
        Contact
    </div>
    <div class = 'contact-sub'>
        お問い合わせ
    </div>
</div>




<!-- CONTACT -->
<p>{{$msg}}</p>
<section id="contact" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form action = '/contact' method = 'post'>
                    <div class="form-group">
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input type="text" class="form-control" name = 'name' placeholder="お名前">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input type="email" class="form-control" name =  'mail' placeholder="メールアドレス">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                            <textarea class="form-control" placeholder="お問い合わせ内容"  name =  'contents'rows="8"></textarea>
                        </div>
                    </div>
                    <input type="submit" value="送信" class="btn btn-success btn-block btn-sm">
                </form>
            </div>
        </div>
    </div>
</section>
@endsection