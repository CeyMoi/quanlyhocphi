@extends('layouts.client.auth.master')
@section('title', 'Đăng nhập')
@section('content')
<form action="{{ route('client.auth.login.store') }}" method="post">
    {{ csrf_field() }}
    <div class="form-group has-icon"><i class="icon-envelope-o"></i>
        <input type="text" name="email" class="form-control form-control-lg"
               placeholder="Email Address">
    </div>
    <div class="form-group has-icon"><i class="icon-user-secret"></i>
        <input type="password" name="password" class="form-control form-control-lg"
               placeholder="Password">
    </div>
    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Log In">
    {{-- <a href="#" class="btn btn-lg btn-block btn-social facebook">
        <i class="icon-facebook"></i> Login with Facebook
    </a>
    <a href="#" class="btn btn-lg btn-block btn-social twitter">
        <i class="icon-twitter"></i> Login with Twitter
    </a> --}}
</form>
@stop