<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Quên mật khẩu tài khoản</title>
</head>
<body>
	<p>Chào {{$user->ten_sinh_vien}}</p>
	<p>Chúng tôi đã nhận được yêu cầu đặt lại mật khẩu của bạn.</p>
	<p><a href="{{ route('client.auth.reset_password.index', $user->token_hash) }}">Nhấn vào đây để đổi mật khẩu của bạn.</a></p>
</body>
</html>