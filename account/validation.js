const loginForm = document.getElementById('form-box login');
const registerForm = document.getElementById('form-box register');

const errors = [];

loginForm.addEventListener('submit', function(event) 
{
    event.preventDefault();
    
    errors.length = 0;
    
    const userName = document.getElementById('userName');
    const password = document.getElementById('password');

    if (userName.value.trim() === '')
    {
        errors.push('Please enter the Username');
        userName.nextElementSibling.innerHTML = 'Please enter the Username';
        userName.nextElementSibling.style.color = 'white';
    }
    else
    {
        userName.nextElementSibling.innerHTML = '';
    }

    if (password.value.trim() === '')
    {
        errors.push('Please enter your password');
        password.nextElementSibling.innerHTML = 'Please enter your password';
        password.nextElementSibling.style.color = 'white';
    }
    else
    {
        password.nextElementSibling.innerHTML = '';
    }

    if (errors.length === 0)
    {
        form.submit();
    }
});

registerForm.addEventListener('submit', function(event)
{
    event.preventDefault();
    
    errors.length = 0;

    const newUserName = document.getElementById('newUserName');
    const email = document.getElementById('email');
    const newPassword = document.getElementById('newPassword');
    const confirmPassword = document.getElementById('confirmPassword');
    
    if (newUserName.value.trim() === '')
    {
        errors.push('Please create a Username');
        newUserName.nextElementSibling.innerHTML = 'Please create a Username';
        newUserName.nextElementSibling.style.color = 'white';
    }
    else
    {
        newUserName.nextElementSibling.innerHTML = '';
    }

    if (email.value.trim() === '')
    {
        errors.push('Please enter your email address');
        email.nextElementSibling.innerHTML = 'Please enter your email address';
        email.nextElementSibling.style.color = 'white';
    }
    else if (!validEmail(email.value.trim()))
    {
        errors.push('Please enter a valid email');
        email.nextElementSibling.innerHTML = 'Please enter a valid email';
        email.nextElementSibling.style.color = 'white';
    
    }
    else
    {
        email.nextElementSibling.innerHTML = '';
    }

    if (newPassword.value.trim() === '')
    {
        errors.push('Please enter your password');
        newPassword.nextElementSibling.innerHTML = 'Please enter your password';
        newPassword.nextElementSibling.style.color = 'white';
    }
    else
    {
        newPassword.nextElementSibling.innerHTML = '';
    }

    if (confirmPassword.value.trim() === '')
    {
        errors.push('Please enter your password again');
        confirmPassword.nextElementSibling.innerHTML = 'Please enter your password again';
        confirmPassword.nextElementSibling.style.color = 'white';
    }
    else if (confirmPassword.value.trim() !== password.value)
    {
        errors.push('The passwords is not same');
        confirmPassword.nextElementSibling.innerHTML = 'The password is not same';
        confirmPassword.nextElementSibling.style.color = 'white';
    }
    else
    {
        confirmPassword.nextElementSibling.innerHTML = '';
    }

    if (errors.length === 0)
    {
        form.submit();
    }
});

function validEmail(email)
{
    const emailRegex = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
    return emailRegex.test(email);
}