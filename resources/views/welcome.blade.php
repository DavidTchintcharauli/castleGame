<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f0f0f0; /* Light Gray color */
        }

        .castle {
            width: 450px;
            height: 600px;
            background-color: #c2b280; /* Sandstone color */
            border: 5px solid #8b4513; /* SaddleBrown color */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3); /* Shadow effect */
        }

        .welcome-text {
            font-family: 'figtree', sans-serif;
            font-size: 24px;
            font-weight: bold;
            color: #8b4513; /* SaddleBrown color */
            margin-bottom: 20px;
        }

        .btn {
            padding: 12px 24px;
            margin-top: 30px;
            background-color: #4caf50; /* Green color */
            color: white;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.3s, transform 0.2s;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2); /* Button shadow */
        }

        .btn:hover {
            background-color: #388e3c; /* Dark Green color */
            transform: translateY(-3px); /* Button hover effect */
        }
    </style>
</head>

<body>
    <div class="castle">
        <div class="welcome-text">Welcome to our Castle</div>
        <form action="{{ route('gate') }}">
            <button type="submit" class="btn">Click Me</button>
        </form>
    </div>
</body>

</html>
