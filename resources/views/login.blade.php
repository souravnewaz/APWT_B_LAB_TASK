<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="" method="post">
        @csrf
        <input type="text" name="email" placeholder="Email"> <br><br>
        <input type="password" name="password" placeholder="Password"><br><br>
        <input type="submit" name="submit" placeholder="Login">
    </form>
    @if (count($errors) > 0)
    <div>
       <ul>
          @foreach ($errors->all() as $error)
             <li>{{ $error }}</li>
          @endforeach
       </ul>
    </div>
   @endif
</body>
</html>