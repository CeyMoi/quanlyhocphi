@extends('layouts.client.auth.master2')
@section('title', 'Quên mật khẩu')
@section('content')
<form action="{{ route('client.auth.forgot.store') }}" method="post">
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
    @if(!(session()->has('success')))
        <div class="form-group has-icon"><i class="icon-envelope-o"></i>
            <input type="text" name="email" class="form-control form-control-lg"
                placeholder="Nhập email">
        </div>
        <input type="submit" class="btn btn-primary btn-lg btn-block" value="Xác nhận">
    @endif
</form>
@stop