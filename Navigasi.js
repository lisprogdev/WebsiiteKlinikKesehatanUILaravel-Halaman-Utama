document.addEventListener('DOMContentLoaded', function () {
    const toggleButton = document.querySelector('.navbar-toggler');
    const navbarCollapse = document.querySelector('#navbarNav');
  
    toggleButton.addEventListener('click', function () {
      navbarCollapse.classList.toggle('show');
    });
  });
  