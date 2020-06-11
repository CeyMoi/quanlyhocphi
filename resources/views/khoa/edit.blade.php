<form action="{{ route('khoa.update',['id'=> $khoa->ma_khoa) }}" method="post">
	<input type="hidden" name="_method" value="PUT">
	{{csrf_field()}}
	Mã khóa <input type="text" name="ma_khoa">
    <br>
    Tên khóa <input type="text" name="ten_khoa">
    <br>


    <button>Sửa</button>
</form>