const wrapper = document.querySelector('.wrapper');
const loginLink = document.querySelector('.login-link');
const iconClose = document.querySelector('.icon-close');

loginLink.addEventListener('click', ()=> {
    wrapper.classList.remove('active');
});

iconClose.addEventListener('click', ()=> {
    wrapper.classList.remove('active');
});