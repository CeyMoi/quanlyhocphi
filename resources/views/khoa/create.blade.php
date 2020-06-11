<form action="{{ route('khoa.store') }}" method="post">
    {{csrf_field()}}
    Mã khóa <input type="text" name="ma_khoa">
    <br>
    Tên khóa <input type="text" name="ten_khoa">
    <br>


    <button>Thêm</button>
</form>