<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Circles</title>
    <style>
        body {
            height: 100vh;
            background-color: #1d2630;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
            padding: 0;
        }
        .spinner-box {
            width: 300px;
            height: 300px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: transparent;
        }
        .leo-border-1 {
            position: absolute;
            width: 150px;
            height: 150px;
            padding: 3px;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            background: #3ff9dc;
            background: linear-gradient(0deg), #3ff9dc1a, 33%, #3ff9dc 100%;
            animation: spin3D 1.8s linear 0s infinite;
        }
        .loe-core-1 {
            width: 100px;
            height: 100px;
            background: #37474faa;
            border-radius: 50%;
        }
        .leo-border-2 {
            position: absolute;
            width: 150px;
            height: 150px;
            padding: 3px;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            background: #fb5b53;
            background: linear-gradient(0deg), #fb5b53a, 33%, #fb5b53 100%;
            animation: spin3D 2.2s linear 0s infinite;
        }
        .loe-core-2 {
            width: 100px;
            height: 100px;
            background-color: #1d2630aa;
            border-radius: 50%;
        }
        @keyframes spin3D {
            from {
                transform: rotate3d(.5s, .5s, .5s, 360deg);
            }
            to {
                transform: rotate3d(0deg);
            }
        }
    </style>
</head>
<body>
    <div class="spinner-box">
        <div class="leo-border-1">
             <div class="leo-core-1"></div>
        </div>
        <div class="leo-border-2">
            <div class="leo-core-2"></div>
        </div>
    </div>
</body>
</html>