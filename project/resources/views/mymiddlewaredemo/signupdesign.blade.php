<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    <div class="mx-auto text-center mt-10">
        <form action="{{ route('signup_Form') }}" method="POST">
            @csrf
            <input type="text" name="username" placeholder="Enter Username" required autofocus><br>
            <input type="email" name="email" placeholder="Enter Email" required><br>
            <input type="password" name="password" placeholder="Enter Password" required><br>
            <button type="submit" class="text-white border-black bg-blue-500 hover:bg-blue-500">
                SIGN UP
            </button>
        </form>
        @if($errors->any())
            <div class="error">{{ $errors->first() }}</div>
        @endif
    </div>
</body>
</html>


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGNUP |Pagent tabulation System</title>
    @vite(['resources/css/app.css', 'resources/js/app.js']) <!-- Fixed the JS file reference -->

    <link href="Https://cdn.jsdelivr.net/npmflowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <script src="Https://cdn.jsdelivr.net/npmflowbite@2.5.2/dist/flowbite.min.js"></script>

</head>
<body>
<div class="mx-auto w-8/12 text-center">
    <div class= "blue-container w-80 h-100 mx-auto bg-blue-100 shadow-lg rounded-lg p-15">
    <h1 class="text-2x1 ... text-center text-3x1 font-bold mb-6" style="font-family: 'YourFontFamily', serif; ">SIGNUP></h1>
    </div>
       <form method="POST" action="{{ route('register') }}">
            @csrf
            <input type="text" name="name" id="name" required autofocus placeholder= "Name" value="{{old('name')}}">
            <x-input-error :messages="$errors->get('name')" class="mt-2" /><br><br>
            
            <input type="email" name="email" id="email" required placeholder= "Username/Email"><x-input-error :messages="$errors->get('email')" class="mt-2" /><br><br>

            <input type="password" name="password" id="password" required placeholder="Password" value="{{old('password')}}">
            <x-input-error :messages="$errors->get('password')" class="mt-2" /><br><br>

            <input type="password" name="password_confirmation" for="password_confirmation" id="password_confirmation" required placeholder="Confirm Password">
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" /><br><br>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('loginAlcala') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-primary-button class="ms-4">
                    {{ __('Register') }}
                </x-primary-button>
            </div>

       </form>

       @if($errors->any()) <!-- Fixed syntax for if statement -->
           <div>
               <strong>{{ $errors->first() }}</strong>
           </div>
       @endif

       <br>
</body>
</html> -->