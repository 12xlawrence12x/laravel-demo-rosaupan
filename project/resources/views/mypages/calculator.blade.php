<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
   

</head>
<body>
 <div class="mx-auto text-center bg-grey-200">
    <h1 class= "font-bold mt-2 ">THIS IS CALCULATOR</h1>
    <form action="{{route('callcalculate')}}" method="POST" class="mt-5">
        @csrf
        <label class="mt-5" for="num1">Number 1:</label>
        <input type="number" name="number1" id="num1" required autofocus>
        @if ($errors->has('number1'))
        <div class="mt-4"></div>{{ $errors->first('number1') }}
        @endif
        <label for="num2">Number 2:<label>
        <input type="number2" name="number2" id ="num2" required>
        @if ($errors->has('number2'))
        <br>
        <button type="submit" class="w-24 bg-blue-500 px-4 text-white hover:bg-blue-800 mt-3 mb-4 ">ADD</button>
     </form>
     <h3 class="text-x1">Result: </h3>

 </div>
    @if( $result !=null)
        <span class="text-1">SUM: {{ $result }}</span>
        @else
        <span class="text-1">SUM: YET NOT CALCULATE</span>
        @endif
</body>
</html>