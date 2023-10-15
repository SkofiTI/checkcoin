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
    <nav>
        <a id="home" href="/">
            <p>CHECKCOIN</p>
        </a>
        <ul>
            <li>
                <a href="#home">Home</a>
            </li>
            <li>
                <a href="#cryptocurrency">Cryptocurrency</a>
            </li>
            <li>
                <a href="#coins">Currencies</a>
            </li>
        </ul>
    </nav>
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
        <div class="monitor-crypto">
            <table class="table-currency">
                <caption id="cryptocurrency">Cryptocurrency</caption>
                <tr class="table-currency__menu">
                    <th>Coin</th>
                    <th>Price</th>
                    <th>24h Change</th>
                    <th>Market Cap</th>
                </tr>
                <tr>
                    <td>
                        <div class="table-currency__title">
                            <img src="/img/Bitcoin.png">
                            <span class="currency-name">Bitcoin</span>
                        </div>
                    </td>
                    <td>42134 $</td>
                    <td class="down-price">-0.81 %</td>
                    <td>119,150,835,874 $</td>
                </tr>
                <tr>
                    <td>
                        <div class="table-currency__title">
                            <img src="/img/Tether.png">
                            <span class="currency-name">Tether</span>
                        </div>
                    </td>
                    <td>1 $</td>
                    <td class="up-price">0.11 %</td>
                    <td>243,936,194,1 $</td>
                </tr>
                <tr>
                    <td>
                        <div class="table-currency__title">
                            <img src="/img/Ethereum.png">
                            <span class="currency-name">Ethereum</span>
                        </div>
                    </td>
                    <td>12134 $</td>
                    <td class="up-price">1.12 %</td>
                    <td>200,893,835,874 $</td>
                </tr>
                <tr>
                    <td>
                        <div class="table-currency__title">
                            <img src="/img/Ripple.png">
                            <span class="currency-name">Ripple</span>
                        </div>
                    </td>
                    <td>12134 $</td>
                    <td class="down-price">-1.18 %</td>
                    <td>62,886,835,874 $</td>
                </tr>
            </table>
            <div class="pagination">
                <ul>
                    <li><a href="#">1</a></li>
                    <li><a class="is-active" href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>