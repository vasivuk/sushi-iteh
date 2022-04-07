const navbar = document.querySelector('.navbar');
const navToggle = document.querySelector('.nav_toggle_button');

navToggle.addEventListener('click', () => {
    const visibility = navbar.getAttribute('data-visible');

    if(visibility == "false") {
        navbar.setAttribute('data-visible', true);
    } else if(visibility == "true"){
        navbar.setAttribute('data-visible', false);
    }
})