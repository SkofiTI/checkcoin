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
        <div class="main-content">
            <img id="bitcoin-image" src="/img/Bitcoin_Big.png" alt="Bitcoin_Big">
            <p>Monitor exchange rate changes live</p>
            <img id="tether-image" src="/img/Tether_Big.png" alt="Tether">
        </div>
        <div class="base-currency">
            <div class="base-currency__item">
                <img class="base-currency__image" src="/img/Bitcoin.png" alt="Bitcoin">
                <p class="base-currency__name">Bitcoin</p>
                <p class="base-currency__price">42134 $</p>
                <p class="base-currency__percent">4.123%</p>
            </div>
            <div class="base-currency__item">
                <img class="base-currency__image" src="/img/Tether.png" alt="Tether">
                <p class="base-currency__name">Tether</p>
                <p class="base-currency__price">42134 $</p>
                <p class="base-currency__percent">4.123%</p>
            </div>
            <div class="base-currency__item">
                <img class="base-currency__image" src="/img/Ethereum.png" alt="Ethereum ">
                <p class="base-currency__name">Ethereum</p>
                <p class="base-currency__price">42134 $</p>
                <p class="base-currency__percent">4.123%</p>
            </div>
            <div class="base-currency__item">
                <img class="base-currency__image" src="/img/Ripple.png" alt="Ripple ">
                <p class="base-currency__name">Ripple</p>
                <p class="base-currency__price">42134 $</p>
                <p class="base-currency__percent">4.123%</p>
            </div>
        </div>
    </div>
</body>
</html>