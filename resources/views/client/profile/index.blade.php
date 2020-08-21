@extends('layouts.client.master')
@section('title', 'Thông tin tài khoản')
@section('content')
	<div class="row">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title">Thông tin cá nhân</h4>
				</div>
               <ul class="list-group list-group-flush">
	               <li class="list-group-item">
	                  <a href="#">
	                      <div class="image mr-3  float-left">
	                          <img class="user_avatar" style="width: 100px" src="{{ asset('assets/images/avatar-1.jpg') }}" alt="{{ $user->ten_sinh_vien }}">
	                      </div>
	                      <h6 class="p-t-10">{{ $user->ten_sinh_vien }}</h6>
	                      <span><i class="icon-date_range"></i>{{ $user->ngay_sinh->format('d-m-Y') }}</span>
	                   </a>
	               </li>
                   <li class="list-group-item"><i class="icon icon-mobile text-primary"></i><strong class="s-12">Số điện thoại</strong> <span class="float-right s-12">{{ $user->so_dien_thoai }}</span></li>
                   <li class="list-group-item"><i class="icon icon-mail text-success"></i><strong class="s-12">Email</strong> <span class="float-right s-12">{{ $user->email }}</span></li>
                   <li class="list-group-item"><i class="icon icon-address-card-o text-warning"></i><strong class="s-12">Địa chỉ</strong> <span class="float-right s-12">{{ $user->dia_chi }}</span></li>
                   <li class="list-group-item"><i class="icon icon-web text-danger"></i> <strong class="s-12">Lớp</strong> <span class="float-right s-12">{{ $user->lop->ten_lop }}</span></li>
               </ul>
           </div>
		</div>
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title">Đổi mật khẩu</h4>
				</div>
				<div class="card-body">
					@if (Session::has('success'))
						<div class="alert alert-success">{{Session::get('success')}}</div>
					@endif
					@if (Session::has('error'))
						<div class="alert alert-success">{{Session::get('error')}}</div>
					@endif
					<form action="{{ route('client.profile.password') }}" method="post" class="{{ $errors->has('password') ? 'was-validated' : '' }}">
						{{ csrf_field() }}
						<div class="form-group">
							<label for="password">Mật khẩu cũ</label>
							<input type="password" name="password" class="form-control">
							@if ($errors->has('password'))
								<div class="valid-feedback">{{$errors->first('password')}}</div>
							@endif
						</div>
						<div class="form-group">
							<label for="password_new">Mật khẩu mới</label>
							<input type="password" name="password_new" class="form-control">
							@if ($errors->has('password_new'))
								<div class="valid-feedback">{{$errors->first('password_new')}}</iv>
							@endif
						</div>
						<div class="form-group">
							<label for="password_new_confirmation">Nhập lại mật khẩu mới</label>
							<input type="password" name="password_new_confirmation" class="form-control">
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary">Cập nhật</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@stop