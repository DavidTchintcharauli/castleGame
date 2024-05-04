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
            background-color: #f0f0f0; /* Light Gray color */
        }

        .main-hole {
            width: 600px;
            padding: 20px;
            background-color: #c2b280; /* Sandstone color */
            border: 5px solid #8b4513; /* SaddleBrown color */
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3); /* Shadow effect */
            text-align: center;
        }

        .title {
            font-size: 24px;
            font-weight: bold;
            color: #8b4513; /* SaddleBrown color */
            margin-bottom: 20px;
        }

        .description {
            font-size: 16px;
            color: #333; /* Dark Gray color */
            margin-bottom: 30px;
            line-height: 1.6;
        }

        .room-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .room {
            width: 150px;
            height: 150px;
            margin: 10px;
            background-color: #4682b4; /* SteelBlue color */
            border: 5px solid #1e90ff; /* DodgerBlue color */
            border-radius: 15px;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .room:hover {
            background-color: #87ceeb; /* LightSkyBlue color */
        }

        .room-text {
            font-size: 16px;
            color: #fff; /* White color */
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
    </div>
</body>
</html>
