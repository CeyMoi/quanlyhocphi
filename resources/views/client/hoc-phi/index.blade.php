@extends('layouts.client.master')
@section('title', 'Thông tin tài khoản')
@section('content')
	<div class="row">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title">Thông tin học phí</h4>
				</div>
				<div class="card-body">
					<ul class="list-group">
						<li class="list-group-item">
							<strong class="s-12">Mã sinh viên</strong>
							<span class="float-right s-12">{{ $student->ma_sinh_vien }}</span>
						</li>
						<li class="list-group-item">
							<strong class="s-12">Họ tên</strong>
							<span class="float-right s-12">{{ $student->getFullName() }}</span>
						</li>
						<li class="list-group-item">
							<strong class="s-12">Khóa học</strong>
							<span class="float-right s-12">{{ $student->lop->khoa->ten_khoa }}</span>
						</li>
						<li class="list-group-item">
							<strong class="s-12">Chuyên ngành</strong>
							<span class="float-right s-12">{{ $student->lop->nganh->ten_nganh }}</span>
						</li>
						<li class="list-group-item">
							<strong class="s-12">Học phí theo tháng</strong>
							<span class="float-right s-12">{{ number_format($hoc_phi['theo_thang']) }}</span>
						</li>
						<li class="list-group-item">
							<strong class="s-12">Học phí theo năm</strong>
							<span class="float-right s-12">{{ number_format($hoc_phi['theo_nam']) }}</span>
						</li>
						<!-- <li class="list-group-item">
							<strong class="s-12">Số tiền đóng trong năm</strong>
							<span class="float-right s-12">{{ number_format($hoc_phi['current_year']) }}</span>
						</li> -->
						<li class="list-group-item">
							<strong class="s-12">Tổng số tiền đã đóng</strong>
							<span class="float-right s-12">{{ number_format($hoc_phi['total']) }}</span>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title">Lịch sử học phí</h4>
				</div>
               <div class="card-body table-responsive">
				<table class="table">
					<thead>
						<tr>
							<th>STT</th>
							<th>Số tiền đã đóng(VNĐ)</th>
							<th>Ngày đóng</th>
						</tr>
					</thead>
					<tbody>
					@foreach($student->hoaDons as $key => $hoaDon)
						<tr>
							<td>{{ $key + 1 }}</td>
							<td>{{ number_format($hoaDon->so_tien_dong) }}</td>
							<td>{{ $hoaDon->ngay_dong->format('d-m-Y') }}</td>
						</tr>
					@endforeach
					</tbody>
					<tfoot>
						<tr>
							<td colspan="3" class="text-right">
								Tình trạng: {{ $hoc_phi['status'] }}
							</td>
						</tr>
					</tfoot>
				</table>
               </div>
           </div>
		</div>
	</div>
@stop