<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOG IN FORM</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="mx-auto text-center">
    <h1>LOGIN</h1>
    <div>
        <form action="{{ route('login_page') }}" method="POST">
            @csrf
            <label for="user">Username</label>
            <input type="text" name="username" id="user" required autofocus><br><br>
            <label for="pass">Password</label>
            <input type="password" name="password" id="pass" required><br>
            <br>
            <button type="submit" class="w-40 border bg-blue-800 text-blue hover:bg-blue-800 px-5 py-2">LOGIN</button>
        </form>
    </div>

    @if($errors->any()){
        <div>
            <strong>{{ $errors->first() }}</strong>
        </div>

    }
    @endif
   <x-footer/>>
    
</body>
</html> -->