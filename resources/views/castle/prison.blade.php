<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prison</title>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f0f0f0; /* Light Gray color */
        }

        .prison {
            width: 400px;
            padding: 20px;
            background-color: #333; /* Dark Gray color */
            border: 5px solid #000; /* Black color */
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5); /* Shadow effect */
            text-align: center;
        }

        .message {
            font-size: 24px;
            color: #fff; /* White color */
            margin-bottom: 20px;
        }

        .description {
            font-size: 18px;
            color: #ccc; /* Light Gray color */
            line-height: 1.6;
        }

        .btn-container {
            margin-top: 30px;
        }

        .btn {
            padding: 10px 20px;
            background-color: #8b0000; /* DarkRed color */
            color: #fff; /* White color */
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #5a0000; /* Darker shade of DarkRed */
        }
    </style>
</head>
<body>
    <div class="prison">
        <div class="message">You Have Been Arrested!</div>
        <div class="description">
            You have been caught attempting unauthorized access to restricted areas of the castle.<br>
            As punishment, you have been placed in the castle's prison.
        </div>
        <form class="btn-container" action="{{ route('welcome') }}">
            <button type="submit" class="btn">Return to Welcome Page</button>
        </form>
    </div>
</body>
</html>
