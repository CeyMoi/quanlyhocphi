@extends('layouts.client.master')
@section('title', 'Thông tin tài khoản')
@section('content')
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title">Lịch sử học phí</h4>
				</div>
               <div class="card-body table-responsive">
				<table class="table">
					<thead>
						<tr>
							<th>Mã sinh viên</th>
							<th>Tên sinh viên</th>
							<th>Khóa</th>
							<th>Tên ngành</th>
							<th>Học phí theo tháng</th>
							<th>Học phí theo năm</th>
							<th>Số tiền đóng trong năm</th>
							<th>Tổng số tiền đã đóng</th>
							<th>Tình trạng</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>{{ $student->ma_sinh_vien }}</td>
							<td>{{ $student->getFullName() }}</td>
							<td>{{ $student->lop->khoa->ten_khoa }}</td>
							<td>{{ $student->lop->nganh->ten_nganh }}</td>
							<td>{{ number_format($hoc_phi['theo_thang']) }}</td>
							<td>{{ number_format($hoc_phi['theo_nam']) }}</td>
							<td>{{ number_format($hoc_phi['current_year']) }}</td>
							<td>{{ number_format($hoc_phi['total']) }}</td>
							<td>{{ $hoc_phi['status'] }}</td>
						</tr>
					</tbody>
				</table>
               </div>
           </div>
		</div>
	</div>
@stop