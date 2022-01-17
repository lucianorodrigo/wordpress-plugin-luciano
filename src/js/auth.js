document.addEventListener('DOMContentLoaded', function (e) {
    const showAuthBtn = document.getElementById('luciano-show-auth-form'),
        authContainer = document.getElementById('luciano-auth-container'),
        close = document.getElementById('luciano-auth-close');
    
    showAuthBtn.addEventListener('click', () => {
        authContainer.classList.add('show');        
        showAuthBtn.parentElement.classList.add('hide');
    });

    close.addEventListener('click', () => {
        authContainer.classList.remove('show');
        showAuthBtn.parentElement.classList.remove('hide');
    });
});