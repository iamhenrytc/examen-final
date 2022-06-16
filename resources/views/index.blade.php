<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login Form Design One | Fazt</title>
    
    {{-- <link rel="stylesheet" href="{{ asset('../css/master.css') }}"> --}}
    <link rel="stylesheet" type="text/css" href="/css/master.css">
  </head>
  <body>

    <div class="login-box">
      {{-- <img src="/img/logo.png" class="avatar" alt="Avatar Image">   --}}
      <h1>Login Here</h1>
      <form  method="GET" action="{{route('login')}}"> 
        <!-- USERNAME INPUT -->
        <label for="username">Username</label>
        <input type="text" name="user" placeholder="Enter Username">
        <!-- PASSWORD INPUT -->
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Enter Password">
        <input type="submit" value="Log In">
        <a href="#">Lost your Password?</a><br>
        <a href="#">Don't have An account?</a>
      </form>
    </div>
    <div class="login-boxes">
      <h1>LONIX</h1>
      <h3>A UX BASED CREATIVE AGENCEY</h3>
    </div>
  </body>
</html>