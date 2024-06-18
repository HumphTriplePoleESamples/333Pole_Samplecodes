<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gear</title>
    <style>
        body{
            background: #198;
        }
        .parent{
            display: flex;
            height: 500px;
        }
        .gear{
            position: relative;
            width: 250px;
            height: 250px;
            margin: auto;
            background: #fff;
            border-radius: 50%;
            animation-name: spin;
            animation-duration: 4s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }
        .gear .center{
            position: absolute;
            top: 50px;
            left: 50px;
            z-index: 10;
            width: 100px;
            height: 100px;
            background: #198;
            border-radius: 50%;
        }
        .tooth{
            position: absolute;
            top: -25px;
            left: 75px;
            z-index: 1;
            width: 45px;
            height: 250px;
            background: #fff;
        }
        .tooth:nth-child(1){
            transform: rotate(45deg);
        }
        .tooth:nth-child(2){
            transform: rotate(90deg);
        }
        .tooth:nth-child(3){
            transform: rotate(180deg);
        }
        .tooth:nth-child(4){
            transform: rotate(360deg);
        }
        
        @keyframes spin{
            from {transform: rotate(0deg);}
            to {transform: rotate(360deg);}
        } 
    </style>
</head>

<body>
    <div class="parent">
        <div class="gear"></div>
        <div class="center"></div>
        <div class="tooth"></div>
        <div class="tooth"></div>
        <div class="tooth"></div>
        <div class="tooth"></div>
    </div>
  <?php echo "" ?>
</body>

</html>