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
	                          <img class="user_avatar" src="{{ asset('assets/client/img/dummy/u3.png') }}" alt="{{ $user->ten_sinh_vien }}">
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
					<form action="{{ route('client.profile.update') }}" method="post">
						{{ csrf_field() }}
						<div class="form-group">
							<label for="password_old">Mật khẩu cũ</label>
							<input type="password" name="password_old" class="form-control">
						</div>
						<div class="form-group">
							<label for="password_new">Mật khẩu mới</label>
							<input type="password" name="password_new" class="form-control">
						</div>
						<div class="form-group">
							<label for="password_new_confirm">Nhập lại mật khẩu mới</label>
							<input type="password" name="password_new_confirm" class="form-control">
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