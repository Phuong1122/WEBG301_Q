<!DOCTYPE html>
<html>
  <head>
    <title>Manager Page</title>
  </head>
  <body>
    <h1>Manager Page</h1>
    <p>Hello, {{ Auth::user()->name }}</p>
    <nav>
      <ul>
        <li><a href="{{ route('games.index') }}">Boardgame list</a></li>
        <li><a href="{{ route('games.create') }}">Add new boardgame</a></li>
        <li><a href="{{ route('logout') }}">Log out</a></li>
      </ul>
    </nav>
    <hr>
    @yield('content')
  </body>
</html>