@extends('layout.default')
@section('title', 'home')
@section('content')
    <div class="jumbotron">
        <h1>hello world</h1>
        <p class="lead">你现在看到的是<a href="{{ route('login') }}">登录</a>页</p>
        <p>一切将从这里开始</p>
        <p><a class="btn btn-lg btn-success" href="{{ route('signup') }}" role="button">注册</a></p>
    </div>
@stop