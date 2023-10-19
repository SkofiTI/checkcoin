import './bootstrap';

import './home/cryptoCurrencies';

const nav = document.querySelector('nav');
const homeButton = document.querySelector('a[href="#home"]');

window.addEventListener('scroll', () => {
    if (window.scrollY > nav.offsetHeight) {
        nav.classList.add('fixed-nav');
    } else {
        nav.classList.remove('fixed-nav');
    }
});

homeButton.addEventListener('click', (event) => {
    event.preventDefault();
    window.scrollTo(0, 0);
});

