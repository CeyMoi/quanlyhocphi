@extends('layouts.client.auth.master')
@section('title', 'Đăng nhập')
@section('content')
<form action="{{ route('client.auth.login.store') }}" method="post">
    {{ csrf_field() }}
    @if($errors->has('email'))
        {{ $errors->first('email') }}
    @endif
    @if(session()->has('error'))
        <p class="text-warning">{{ session()->get('error') }}</p>
    @endif
    @if(session()->has('success'))
        <p class="text-success">{{ session()->get('success') }}</p>
    @endif
    <div class="form-group has-icon"><i class="icon-envelope-o"></i>
        <input type="text" name="email" class="form-control form-control-lg"
               placeholder="Nhập Email">
    </div>
    @if($errors->has('password'))
        {{ $errors->first('password') }}
    @endif
    <div class="form-group has-icon"><i class="icon-user-secret"></i>
        <input type="password" name="password" class="form-control form-control-lg"
               placeholder="Nhập mật khẩu">
    </div>
    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Đăng nhập">
    {{-- <a href="#" class="btn btn-lg btn-block btn-social facebook">
        <i class="icon-facebook"></i> Login with Facebook
    </a>
    <a href="#" class="btn btn-lg btn-block btn-social twitter">
        <i class="icon-twitter"></i> Login with Twitter
    </a> --}}
</form>
@stop