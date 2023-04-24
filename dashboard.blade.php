<!DOCTYPE html>
<html>
  <head>
    <title>Admin Page</title>
  </head>
  <body>
    <h1>Admin Page</h1>
    <p>Hello, {{ Auth::user()->name }}</p>
    <nav>
      <ul>
        <li><a href="{{ route('boardgames.index') }}">Boardgame list</a></li>
        <li><a href="{{ route('boardgames.create') }}">Add new boardgame</a></li>
        <li><a href="{{ route('logout') }}">Log out</a></li>
      </ul>
    </nav>
    <hr>
    @yield('content')
  </body>
</html>