<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Currency search</title>

    @vite(['resources/js/app.js', 'resources/css/app.css', 'resources/css/fonts.css'])
</head>
<body>
    <nav>
        <div class="navbar">
            <a href="/">
                <p>CHECKCOIN</p>
            </a>
            <ul>
                <li>
                    <a href="#home">Home</a>
                </li>
                <li>
                    <a href="#cryptocurrency">Cryptocurrency</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="content">
        <div class="main-content">
            <img id="bitcoin-image" src="/img/Bitcoin_Big.png" alt="Bitcoin_Big">
            <p>Monitor exchange rate changes live</p>
            <img id="tether-image" src="/img/Tether_Big.png" alt="Tether_Big">
        </div>
        <div class="base-currency">
            @foreach ($data as $currency)
                <div class="base-currency__item">
                    <img class="base-currency__image" src="/img/{{ $currency['name'] }}.png" alt="{{ $currency['name'] }}">
                    <p class="base-currency__name">{{ $currency['name'] }}</p>
                    <p class="base-currency__price">{{ $currency['price'] }} $</p>
                    <p class="base-currency__percent {{ $currency['priceUp'] ? 'up-price' : 'down-price' }}">{{ $currency['percent'] }} %</p>
                </div>
            @endforeach
        </div>
        <div class="monitor-crypto">
            <table class="table-currency">
                <caption class="table-currency__caption" id="cryptocurrency">Cryptocurrency</caption>
                <thead>
                    <tr class="table-currency__menu">
                        <th>Coin</th>
                        <th>Price</th>
                        <th>24h Change</th>
                        <th>Market Cap</th>
                    </tr>
                </thead>
                <tbody class="table-currency__body crypto">
                </tbody>
            </table>
            <div class="pagination">
                <ul></ul>
            </div>
        </div>
    </div>
</body>
</html>