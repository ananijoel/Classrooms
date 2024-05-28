const navButton = document.querySelector('.nav-button');
const header = document.querySelector('header');
const header_bottom = document.querySelector('.bottom');
const container = document.querySelector('.container');
const navImage = document.querySelector('.nav-button img');
const nav_a = document.querySelectorAll('.nav-a');

navButton.addEventListener('click', () => {
    if (header.className === '') {
        header.classList.add('active');
        header_bottom.classList.add('active');
        nav_a.forEach((a, index) => {
            setTimeout(() => {
                a.classList.add('active');
            }, 500);
        });
        navImage.src = '../Pictures/Header/navigation.svg';
        container.classList.add('active');
    } else {
        header.classList.remove('active');
        header_bottom.classList.remove('active');
        nav_a.forEach((a, index) => {
            setTimeout(() => {
                a.classList.remove('active');
            }, 500 );
        });
        navImage.src = '../Pictures/Header/compass.svg';
        container.classList.remove('active');
    }
});
