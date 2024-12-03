<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <h1>MULTIPLICATION</h1>
    <form actions="{{route('muli')}}" method="POST"> 
    @czrf
        <label for="num1">number 1:<label>
            <input id="number1" name="number1"  type="number">
            @if( $errors -> has ('number1'))
                <p>{{ $errors ->first('number1')}}</p>
            @endif
        <br>
        <label for="num1">number 2:<label>
            <input id="number2" name="number2"  type="number">
            @if( $errors -> has ('number2'))
                <p>{{ $errors ->first('number2')}}</p>
            @endif    
        <br>
        <button type="reset">multiply</button>
        <h3>Result</h3>
    </form>
    @if($total != null)
        <p>product: {{$total}}</p>
    @else
        <p>product: not yet calculated</p>
    @endif 
    <a href="{{ route ('mainPage')}}">
        <br>
    <p>{{ __('BACK TO MAIN PAGE') }}</p>
    </a>
</body>
</html>
