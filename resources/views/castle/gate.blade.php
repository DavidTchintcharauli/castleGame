<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Castle Game</title>
    <style>
        body,
        html {
            background-color: #f0f0f0;
            /* Light Gray color */
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .square {
            width: 450px;
            height: 600px;
            background-color: #c2b280;
            border: 5px solid #8b4513;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
            position: relative;
        }

        .title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #8b4513;
        }

        .description {
            font-size: 16px;
            margin-bottom: 30px;
            color: #333;
        }

        .btn-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
        }

        .btn {
            padding: 12px 24px;
            margin: 10px;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.3s, transform 0.2s;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2);
        }

        .btn-soldier {
            background-color: #4682b4;
            color: white;
        }

        .btn-thief {
            background-color: #8b0000;
            color: white;
        }

        .btn-citizen {
            background-color: #228b22;
            color: white;
        }

        .btn-spy {
            background-color: #9932cc;
            color: white;
        }

        .btn:hover {
            background-color: #555;
            transform: translateY(-3px);
        }

        .go-back-btn {
            position: absolute;
            bottom: 10px;
            right: 10px;
        }
    </style>
</head>

<body>
    <div class="square">
        <div class="title">Welcome to Castle Game</div>
        <div class="description">I am the guard of this castle. First, tell me who you are, and then I will let you into
            the castle.</div>
        <div class="btn-container">
            <form action="{{ route('mainHole') }}">
                <button type="submit" class="btn btn-soldier">Soldier</button>
            </form>
            <form action="{{ route('prison') }}">
                <button type="submit" class="btn btn-thief">Thief</button>
            </form>
            <form action="{{ route('mainHole') }}">
                <button type="submit" class="btn btn-citizen">Citizen</button>
            </form>
            <form action="{{ route('mainHole') }}">
                <button type="submit" class="btn btn-spy">Spy</button>
            </form>
        </div>
        <div class="go-back-btn">
            <button class="btn" onclick="goBack()">Go back</button>
        </div>
        <script>
            function goBack() {
                window.history.back();
            }
        </script>
    </div>
</body>

</html>
