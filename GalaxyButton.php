<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GalaxyButton</title>
    <style>
        html,body {
            height: 100%;
            width: 100%;
            background: black;
            font-size: 24px;
            font-family: system-ui, sans-serif;
        }
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
            padding: 0;
        }
        button {
            padding: 0.75rem 1.5rem;
            font-size: 1rem;
            appearance: none;
            border: 0;
            background: 0;
            position: relative;
            color: white;
            border-radius: 0.5rem;
            overflow: hidden;
            font-weight: 500;
        }
        button:after {
            content: '';
            position: absolute;
            inset: 0;
            box-shadow: inset 0 0 0 2px #ffffff;
            border-radius: inherit;
            mix-blend-mode: overlay;
        }
        button iframe {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%) scale(1) 
            rotate(15deg);
            opacity: 0.5;
            filter: blur(5px);
            transition: all 0.5s ease-in-out;
        }
        button span {
            position: relative;
            z-index: 1;
            opacity: 0.75;
            color: white;
            transition: all 0.5s ease-in-out;  
        }
        button:hover iframe {
            transform: translate(-50%, -50%) scale(0.5);
            opacity: 1;
            filter: blur(0);
        }
        button:hover span {
            opacity: 1;
        }
    </style>
</head>
<body>
    <button>
        <span>Galaxy button!</span>
        <iframe 
        style="border: 0;
        margin: 0; width: 512px; height: 512px;"
         />
    </button>
</body>
</html>