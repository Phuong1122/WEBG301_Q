<!DOCTYPE html>
<html>
  <head>
    <title>Đăng nhập</title>
  </head>
  <body>
    <h1>Đăng nhập</h1>
    @if ($errors->any())
      <div>
        <strong>Lỗi:</strong>
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
    <form method="POST" action="{{ route('login') }}">
      @csrf
      <div>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required autofocus>
      </div>
      <div>
        <label for="password">Mật khẩu:</label>
        <input type="password" name="password" id="password" required>
      </div>
      <div>
        <label for="remember">Ghi nhớ đăng nhập</label>
        <input type="checkbox" name="remember" id="remember">
      </div>
      <div>
        <button type="submit">Đăng nhập</button>
      </div>
    </form>
  </body>
</html>