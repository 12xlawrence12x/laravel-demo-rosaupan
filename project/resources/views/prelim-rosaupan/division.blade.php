<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    
</head>
<body>
    <h1>DIVISION</h1>
    <form action="{{route('div')}}" method="GET"> 
        @csrf
        <label for="num1">number 1:<label>
            <input id="number1" name="number1"  type="number">
            @if( $errors -> has ('number1'))
                <p>{{ $errors ->first('number1')}}</p>        
            @endif
        <br>
        <label for="num2">number 2:<label>
            <input id="number2" name="number2"  type="number">
            @if( $errors -> has ('number2'))
                <p>{{ $errors ->first('number2')}}</p>
            @endif    
        <br>
        <button type="submit">divide</button>
        <h3>Result</h3>
    </form>
    @if($total != null)
        <p>quotient: {{$total}}</p>
    @elseif($total == 0)
        <p> 0 is not allowed</p>         
    @else
        <p>quotient: not yet calculated</p>
    @endif 
    <a href="{{ route ('mainPage')}}">
        <br>
    <p>{{ __('BACK TO MAIN PAGE') }}</p>
    </a>
</body>
</html>


