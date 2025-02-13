<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BorderAnimation</title>
    <style>
        @property --rotate {
            syntax: "<angle>";
            initial-value: 0deg;
            inherits: false;
        }
        body {
            height: 100vh;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .modal {
            background: white;
            width: 50%;
            height: 50%;
            position: relative;
            border-radius: 6px;
        }
        .modal::before {
            content: "";
            display: block;
            width: 104%;
            height: 110%;
            border-radius: 8px;
            background: conic-gradient(from var(--rotate) 
            at 50% 50%, #1d7afc 6%, transparent 30%,
            transparent 70%, #f8e6a0 90%, #1d7afc 100%),
            #8bdbe5;
            position: absolute;
            z-index: -1;
            top: -5%;
            left: -2%;
            animation: spin 2s linear infinite;
        }
        @keyframes spin {
            0% {
                --rotate: 0deg;
            }
            100% {
                --rotate: 360deg;
            }
        }
    </style>
</head>
<body>
    <div class="modal"></div>
</body>
</html>