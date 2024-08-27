<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Splash Screen</title>
    <link rel="stylesheet" href="{{ asset('css/splash.css') }}">
</head>
<body>
    <div class="splash">
        <div class="dots">
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
    </div>
    <script src="{{ asset('js/splash.js') }}"></script>
</body>
<style>
    /* CSS Reset */
*,
*::before,
*::after {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}


html, body {
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #fff;
    overflow: hidden;
}


.splash {
    display: flex;
    align-items: center;
    justify-content: center;
}


.dots {
    display: flex;
    justify-content: space-between;
    width: 100px;
}

.dot {
    width: 15px;
    height: 15px;
    background-color: grey;
    border-radius: 50%;
    animation: bounce 1.5s infinite;
}


.dot:nth-child(2) {
    animation-delay: 0.2s;
}


.dot:nth-child(3) {
    animation-delay: 0.4s;
}


@keyframes bounce {
    0%, 100% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-20px);
    }
}

</style>
<script>
    document.addEventListener('DOMContentLoaded', function () {
    setTimeout(function () {
        window.location.href = '/welcome'; 
    }, 3000); 
});

</script>
</html>
