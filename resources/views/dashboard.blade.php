<!DOCTYPE html>
<html>
  <head>
    <title>Trang quản trị</title>
  </head>
  <body>
    <h1>Trang quản trị</h1>
    <p>Xin chào, {{ Auth::user()->name }}</p>
    <nav>
      <ul>
        <li><a href="{{ route('boardgames.index') }}">Danh sách boardgame</a></li>
        <li><a href="{{ route('boardgames.create') }}">Thêm boardgame mới</a></li>
        <li><a href="{{ route('logout') }}">Đăng xuất</a></li>
      </ul>
    </nav>
    <hr>
    @yield('content')
  </body>
</html>