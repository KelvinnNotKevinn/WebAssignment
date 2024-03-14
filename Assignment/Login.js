const container = document.querySelector('#container');
const LoginButton = document.querySelector('#Login');
const SignUpButton = document.querySelector('#SignUp');

SignUpButton.addEventListener('click',() => container.classList.add('right-panel-active'))
LoginButton.addEventListener('click',() => container.classList.remove('right-panel-active'))
