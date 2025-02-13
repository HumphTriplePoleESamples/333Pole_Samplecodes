<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>howToMakeGlassEffects</title>

<style>
    body{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .box{
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        background: url("background.jpg");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    .glss{
        width: 250px;
        height: 250px;
        backdrop-filter: blur(10px);
        border-radius: 30px;
        background: linear-gradient(100deg, rgba(0,0,0,.2), rgba(0,0,0,.2));
        box-shadow: 0 10px 26px 0 rgba(0,0,0,.50);
    }

</style>

</head>
<body>
    
    <div class="box">
    <div class="glass"></div>
    </div>

</body>
</html>