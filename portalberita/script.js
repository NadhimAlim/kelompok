document.addEventListener('DOMContentLoaded', function() {
    const hamburger = document.getElementById('hamburger');
    const navMenu = document.getElementById('nav-menu');

    hamburger.addEventListener('click', function() {
        console.log('Hamburger menu clicked'); // Debugging line
        navMenu.classList.toggle('show');
    });
});

document.getElementById('showRegister').onclick = function() {
    document.getElementById('loginModal').style.display = 'none';
    document.getElementById('registerModal').style.display = 'block';
}

document.getElementById('showLogin').onclick = function() {
    document.getElementById('registerModal').style.display = 'none';
    document.getElementById('loginModal').style.display = 'block';
}

var modals = document.querySelectorAll('.modal');
modals.forEach(modal => {
    modal.querySelector('.close').onclick = function() {
        modal.style.display = 'none';
    }
});

window.onclick = function(event) {
    modals.forEach(modal => {
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    });
}
