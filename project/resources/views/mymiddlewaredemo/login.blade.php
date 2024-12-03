<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="mx-auto text-center mt-10">
        <form action="{{ route('login_Form')}}" method="POST">
        @csrf
            <input type="text"
                    name="username"
                    placeholder ="Enter Username"
                    required autofocus><br>
            <input type="text"
                    name="password"
                    placeholder ="Enter Password"
                    required ><br>
            <button type="submit"
                    class="text-white border-black bg-blue-500 hover:bg-blue-500">
                LOGIN
            </button>
        </form>
    @if($errors->any())
     <div></div> 
     </div>
    @endif
</body>
</html>   -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-black shadow-lg rounded-lg p-8 w-96">
        <h2 class="text-2xl font-bold text-center mb-6">Login</h2>
        <form action="{{ route('login_Form') }}" method="POST">
            @csrf
            <div class="mb-4">
                <input type="text"
                       name="username"
                       placeholder="Enter Username"
                       required autofocus
                       class="border rounded-lg p-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="mb-6">
                <input type="password"
                       name="password"
                       placeholder="Enter Password"
                       required
                       class="border rounded-lg p-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <button type="submit"
                    class="text-white bg-blue-500 hover:bg-blue-600 rounded-lg p-2 w-full">
                LOGIN
            </button>
        </form>
        
        <p class=
    </div>
</body>
</html>


