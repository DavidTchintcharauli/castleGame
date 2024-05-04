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
        }

        .castle {
            width: 600px;
            height: 600px;
            background-color: #c2b280;
            border: 5px solid #8b4513;
            position: relative;
            text-align: center;
        }

        .welcome-text {
            position: absolute;
            top: 20px;
            left: 0;
            right: 0;
            font-size: 18px;
            color: #8b4513;
        }

        .btn {
            padding: 10px 20px;
            background-color: #4caf50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            position: absolute;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
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
