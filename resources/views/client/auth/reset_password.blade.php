@extends('layouts.client.auth.master2')
@section('title', 'Cập nhật mật khẩu')
@section('content')
<form action="{{ route('client.auth.reset_password.store') }}" method="post">
    {{ csrf_field() }}
    @if($errors->has('password'))
        {{ $errors->first('password') }}
    @endif
    @if(session()->has('error'))
        {{ session()->get('error') }}
    @endif
    @if(session()->has('success'))
        {{ session()->get('success') }}
    @endif
    <div class="form-group has-icon"><i class="icon-user-secret"></i>
    <input type="hidden" name="token_hash" value="{{ $token }}">
        <input type="password" name="password" class="form-control form-control-lg"
               placeholder="Mật khẩu">
    </div>
    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Xác nhận">
</form>
@stop