let cryptoData = [];

const pageSize = 5;

const paginationContainer = document.querySelector('.pagination');
const paginationList = paginationContainer.querySelector('ul');

// Функция для обновления таблицы криптовалют
function updateCryptoTable(data) {
    const tableBody = document.querySelector('.table-currency__body.crypto');

    tableBody.innerHTML = '';

    data.forEach(coin => {
        const row = document.createElement('tr');

        row.innerHTML = `
            <td>
                <div class="table-currency__title">
                    <img src="${coin.image}">
                    <span class="currency-name">${coin.name}</span>
                </div>
            </td>
            <td>${coin.price} $</td>
            <td class="${coin.priceUp ? 'up-price' : 'down-price'}">${coin.percent} %</td>
            <td>${coin.marketCapital} $</td>
        `;

        tableBody.appendChild(row);
    });
}

// Функция для создания кнопок пагинации
function createPaginationButtons(totalPages, currentPage) {

    if (!paginationList) {
        paginationList = document.createElement('ul');
        paginationContainer.appendChild(paginationList);
    } else {
        paginationList.innerHTML = '';
    }

    for (let page = 1; page <= totalPages; page++) {
        const li = document.createElement('li');
        const a = document.createElement('a');

        a.textContent = page;

        if (page === currentPage) {
            a.classList.add('is-active');
        }

        a.addEventListener('click', (e) => {
            e.preventDefault();
            updateCryptoTable(cryptoData.slice((page - 1) * 5, page * 5));

            const buttons = paginationList.querySelectorAll('a');
            
            buttons.forEach(button => button.classList.remove('is-active'));
            a.classList.add('is-active');
        });

        li.appendChild(a);
        paginationList.appendChild(li);
    }

    paginationContainer.appendChild(paginationList);
}

// Функция для загрузки данных криптовалюты через API
function fetchCryptocurrencyData() {
    fetch('/api/v1/cryptocurrencies?limit=25')
        .then(response => response.json())
        .then(data => {
            const totalPages = Math.ceil(data.length / pageSize);
            cryptoData = data;

            createPaginationButtons(totalPages, 1);
            updateCryptoTable(cryptoData.slice(0, pageSize));
        });
}

fetchCryptocurrencyData();