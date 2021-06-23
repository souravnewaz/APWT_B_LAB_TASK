<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Signup</title>
</head>
<body>
    <h1>Signup</h1>
    <form action="" method="post">
        @csrf
        <input type="text" name="full_name" placeholder="Full Name"><br><br>
        <input type="text" name="user_name" placeholder="User Name"><br><br>
        <input type="text" name="email" placeholder="Email"> <br><br>
        <input type="text" name="company_name" placeholder="Company Name"> <br><br>
        <input type="text" name="phone" placeholder="Phone"><br><br>
        <input type="text" name="city" placeholder="City"><br><br>
        <input type="text" name="country" placeholder="Country"><br><br>
        <input type="password" name="password" placeholder="Password"><br><br>
        <input type="password" name="password_confirmation" placeholder="Confirm Password"><br><br>
        <input type="submit" name="submit" placeholder="Signup">
    </form>
    <a href="/login">Login</a>
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