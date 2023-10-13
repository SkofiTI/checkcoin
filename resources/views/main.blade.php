<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Currency search</title>

    @vite(['resources/css/app.css', 'resources/css/fonts.css'])
</head>
<body>
    <div class="navbar">
        <a href="/">
            <p>CHECKCOIN</p>
        </a>
        <ul>
            <li>
                <a href="#home">Home</a>
            </li>
            <li>
                <a href="#currencies">Currencies</a>
            </li>
            <li>
                <a href="#coins">Coins</a>
            </li>
        </ul>
    </div>
    <div class="content">
        <img id="bitcoin-image" src="/img/Bitcoin.png" alt="Bitcoin">
        <p>Monitor exchange rate changes live</p>
        <img id="tether-image" src="/img/Tether.png" alt="Tether">
    </div>
</body>
</html>