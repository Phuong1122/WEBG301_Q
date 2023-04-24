<!DOCTYPE html>
<html>
  <head>
    <title>SIGN IN</title>
  </head>
  <body>
    <h1>Log in</h1>
    @if ($errors->any())
      <div>
        <strong>error:</strong>
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
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
      </div>
      <div>
        <label for="remember">remember login</label>
        <input type="checkbox" name="remember" id="remember">
      </div>
      <div>
        <button type="submit">Login</button>
      </div>
    </form>
  </body>
</html>