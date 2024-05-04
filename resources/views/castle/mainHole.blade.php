<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Our Castle</title>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f0f0f0; 
        }

        .main-hole {
            width: 600px;
            padding: 20px;
            background-color: #c2b280;
            border: 5px solid #8b4513; 
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3); 
            text-align: center;
            position: relative;
        }

        .title {
            font-size: 24px;
            font-weight: bold;
            color: #8b4513; 
            margin-bottom: 20px;
        }

        .description {
            font-size: 16px;
            color: #333; 
            margin-bottom: 30px;
            line-height: 1.6;
        }

        .room-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-bottom: 20px;
        }

        .room {
            width: 150px;
            height: 150px;
            margin: 10px;
            background-color: #4682b4; 
            border: 5px solid #1e90ff; 
            border-radius: 15px;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s;
        }

        .room:hover {
            background-color: #87ceeb; 
            transform: scale(1.05);
        }

        .room-text {
            font-size: 16px;
            color: #fff; 
            transition: color 0.3s;
        }

        .room:hover .room-text {
            color: #000; 
        }

        .go-back-btn {
            position: absolute;
            bottom: 20px;
            right: 20px;
        }

        .btn {
            padding: 12px 24px;
            background-color: white; 
            border: none;
            border-radius: 25px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s, transform 0.2s;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2); 
        }

        .btn:hover {
            background-color: #555;
            transform: translateY(-3px);
            color: white;
        }
    </style>
</head>
<body>
    <div class="main-hole">
        <div class="title">Welcome to Our Castle</div>
        <div class="description">
            You can access some places of the castle, but be careful! Unauthorized access to restricted areas will result in your arrest.
        </div>
        <div class="room-container">
            <div class="room">
                <div class="room-text">Kitchen</div>
            </div>
            <div class="room">
                <div class="room-text">Bedroom</div>
            </div>
            <div class="room">
                <div class="room-text">Prison</div>
            </div>
            <div class="room">
                <div class="room-text">Treasure Room</div>
            </div>
            <div class="room">
                <div class="room-text">Toilet</div>
            </div>
            <div class="room">
                <div class="room-text">Soldier Quarters</div>
            </div>
            <div class="room">
                <div class="room-text">King's Chamber</div>
            </div>
            <div class="room">
                <div class="room-text">Queen's Chamber</div>
            </div>
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
