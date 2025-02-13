<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ArcReactor</title>
    <style>
       body{
        margin: 0;
       }
       .fullpage-wrapper{
        width: 100%;
        height: 100vh;
        background: radial-gradient(#353c44, #222931);
        display: flex;
       }
       .reactor-container{
        width: 300px;
        height: 300px;
        margin: auto;
        border: 1px dashed #888;
        position: center;
       }
       .circle{
        border-radius: 50%;
       }
       .abs-center{
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        margin: auto;
       }
       .core-inner{
        width: 70px;
        height: 70px;
        border: 5px solid #1B4E5F;
        background-color: #FFFFFF;
        box-shadow: 0px 0px 7px 5px #52FEFE, 0px opx 10px 10px #52FEFE inset;
       }
       .core-outer{
        width: 120px;
        height: 120px;
        border: 1px solid #52FEFE;
        background-color: #FFFFFF;
        box-shadow: 0px 0px 2px 1px #52FEFE, 0px 0px 10px 5px #52FEFE inset;
       }
       .core-wrapper{
        width: 180px;
        height: 180px;
        background-color: #073c4b;
        box-shadow: 0px 0px 5px 4px #52FEFE, 0px 0px 6px 2px #52FEFE inset;
       }
       .tunnel{
        width: 220px;
        height: 220px;
        background-color: #FFFFFF;
        box-shadow: 0px 0px 5px 1px #52FEFE, 0px 0px 5px 4px #52FEFE inset;
       }
       .coil-container{
        position: center;
        width: 100px;
        height: 100px;
        animation-name: reactor-anim;
        animation-duration: 2s;
       }
       .coil{
        position: absolute;
        width: 30px;
        height: 20px;
        top: calc(50% - 110px);
        left: calc(50% - 15px);
        transform-origin: 15px 110px;
        background-color: #073c4b;
        box-shadow: 0px 0px 5px #52FEFE inset;
       }
       .coil-1{
        transform: rotate(0deg);
       }
       .coil-2{
        transform: rotate(45deg);
       }
       .coil-3{
        transform: rotate(90deg);
       }
       .coil-4{
        transform: rotate(135deg);
       }
       .coil-5{
        transform: rotate(180deg);
       }
       .coil-6{
        transform: rotate(225deg);
       }
       .coil-7{
        transform: rotate(270deg);
       }
       .coil-8{
        transform: rotate(315deg);
       }
@keyframes reactor-anim{
    from{
      transform: rotate(0deg);  
    }
    to{
        transform: rotate(360deg);
    }
}
    </style>
</head>
<body>
<?php echo "" ?>
<div class="fullpage-wrapper">
    <div class="reactor-container">
       <div class="tunnel circle abs-center"></div>
        <div class="core-wrapper circle abs-center"></div>
        <div class="core-outer circle abs-center"></div>
        <div class="core-inner circle abs-center"></div>
        <div class="coil-container">
        <div class="coil coil-1"></div>
        <div class="coil coil-2"></div>
        <div class="coil coil-3"></div>
        <div class="coil coil-4"></div>
        <div class="coil coil-5"></div>
        <div class="coil coil-6"></div>
        <div class="coil coil-7"></div>
        <div class="coil coil-8"></div>
        </div> 
    </div>
</div>
</body>
</html>