<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            text-align: center;
            background-color: #f4f4f4;
        }
        h1 {
            color: red;
            margin-top: 20px;
        }
        a {
            text-decoration: none;
            margin: 10px;
        }
        button {
            background-color: black;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Gallery</h1>
    <div>
        <a href="{{ route('gallery') }}">
            <button>Gallery</button>
        </a>
        <a href="{{ route('index') }}">
            <button>Index/Home</button>
        </a>
        <a href="{{ route('services') }}">
            <button>Services</button>
        </a>
        <br>
   
    </div>
</body>
</html>