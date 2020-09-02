<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trang chủ </title>

  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" />
  <link href="{{asset('css/menu.css')}}" rel="stylesheet" />
</head>

<body>
  <div class="header">
    <a href="#" id="menu-action">
      <i class="fa fa-bars"></i>
      <span>Close</span>
    </a>
    <div class="logo">
      Trang Chủ
    </div>
  </div>
  <div class="sidebar">
    <ul>
      <li><a href="#"><i class="fa fa-desktop"></i><span>Danh sách sinh viên</span></a></li>
      <li><a href="#"><i class="fa fa-server"></i><span>Danh sách học phí</span></a></li>
      <li><a href="#"><i class="fa fa-calendar"></i><span></span></a></li>
      <li><a href="#"><i class="fa fa-envelope-o"></i><span></span></a></li>
      <li><a href="#"><i class="fa fa-table"></i><span> </span></a></li>
  </div>

  <!-- Content -->
  <div class="main">
    <div class="hipsum">
      <div class="jumbotron">
        <h1 id="hello,-world!">Hello!<a class="anchorjs-link" href="#hello,-world!"><span class="anchorjs-icon"></span></a></h1>
        <p></p>
        <p><a class="btn btn-primary" href="#" role="button">Xem chi tiết</a></p>
      </div>
      <p></p>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>#</th>
            <th>Mã sinh viên</th>
            <th>Tổng tiền </th>
            <th>Tình trạng</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p></p>
      <div class="row">
        <div class="col-sm-6">
          <p></p>
        </div>
        <div class="col-sm-6">
          <p></p>
        </div>
      </div>
    </div>
  </div>
</body>

</html>