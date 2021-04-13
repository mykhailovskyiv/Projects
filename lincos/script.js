const fire = document.getElementById('fire')
const fireTwo = document.getElementById('fire_two')
const fireThree = document.getElementById('fire_three')

setInterval(function () {
    setTimeout(function () {
        fire.style.display = "block";
        fireTwo.style.display = "none";
        fireThree.style.display = "none";
        setTimeout(function () {
            fire.style.display = "none";
            fireTwo.style.display = "block";
            fireThree.style.display = "none";
            setTimeout(function () {
                fire.style.display = "none";
                fireTwo.style.display = "none";
                fireThree.style.display = "block";
            }, 300);

        }, 300);

    }, 300);

}, 900);


//mobile menu

document.querySelector('.c-hamburger').addEventListener('click', function (e) {
    let mobileMenu = document.getElementById('mobile-menu');
    e.preventDefault();
    this.classList.toggle('is-active-hamb')
    if (mobileMenu.style.display !== 'block') {
        mobileMenu.style.display = 'block';
    }
    else {
        mobileMenu.style.display = 'none';
    }

})

document.getElementById('wrapper').addEventListener('click', function () {
    let mobileMenu = document.getElementById('mobile-menu');
    mobileMenu.style.display = 'none';
    document.querySelector('.c-hamburger').classList.toggle('is-active-hamb');
})
document.getElementById('wrapper2').addEventListener('click', function () {
    let mobileMenu = document.getElementById('mobile-menu');
    mobileMenu.style.display = 'none';
    document.querySelector('.c-hamburger').classList.toggle('is-active-hamb');
})
document.getElementById('wrapper3').addEventListener('click', function () {
    let mobileMenu = document.getElementById('mobile-menu');
    mobileMenu.style.display = 'none';
    document.querySelector('.c-hamburger').classList.toggle('is-active-hamb');
})


AOS.init();

// You can also pass an optional settings object
// below listed default settings
AOS.init({
    // Global settings:
    disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
    startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
    initClassName: 'aos-init', // class applied after initialization
    animatedClassName: 'aos-animate', // class applied on animation
    useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
    disableMutationObserver: false, // disables automatic mutations' detections (advanced)
    debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
    throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)


    // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
    offset: 30, // offset (in px) from the original trigger point
    delay: 200, // values from 0 to 3000, with step 50ms
    duration: 1100, // values from 0 to 3000, with step 50ms
    easing: 'ease', // default easing for AOS animations
    once: false, // whether animation should happen only once - while scrolling down
    mirror: false, // whether elements should animate out while scrolling past them
    anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

});