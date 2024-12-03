<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    <h1>ADDITION</h1>
    <form action="{{route('adds')}} method="GET">
        @csrf
        <label for= "num1" >number 1:<label>
            <input id="number1" name="number1"  type="text">
            @if( $errors -> has ('number1'))
                <p>{{ $errors ->first('number1')}}</p>
            @endif
        <br>
        <label for="num">number 2:<label>
            <input id="number1" name="number2"  type="text">
            @if( $errors -> has ('number2'))
                <p>{{ $errors ->first('number2')}}</p>
            @endif  <br>  
        <br>
        <button type="submitted">ADD</button><br>
        <h3>Result</h3>
    </form><br>
    @if($total != null)
        <p>Sum: {{$total}}</p>
    @else
        <p>Sum: not yet calculated</p>
    @endif 
    <a href="{{ route ('mainPage')}}">
    <br>
    <p>{{ __('BACK TO MAIN PAGE') }}</p>
    </a>
</body>
</html>
