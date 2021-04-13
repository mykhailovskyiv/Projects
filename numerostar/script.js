


new fullpage('#fullpage', {
    //options here
    autoScrolling: true,
    controlArrows: true,
    slidesNavigation: true,
    scrollBar: true,
    keyboardScrolling: true,
    responsiveWidth: 1280,
    responsiveHeight: 700,
    fitToSection: false
});

function myFunction() {
    var element = document.getElementById("fullpage");
    element.classList.remove("section");
}

//slide
document.getElementById('menu_button').addEventListener('click', function (e) {
    let menuContent = document.getElementById('menu_content');
    let blockContent = document.querySelector('.block_two')
    let blockContentTwo = document.querySelector('.block_two.second')
    let menuContentTwo = document.getElementById('menu_content_two')
    let plus = document.getElementById('plus')
    let plusTwo = document.getElementById('plus_two')
    e.preventDefault()
    plus.classList.toggle('is-active')
    if (menuContent.style.display !== 'block') {
        menuContent.style.display = 'block';
        blockContent.style.display = 'none';
        blockContentTwo.style.display = 'none';
        menuContentTwo.style.display = 'none'
        plusTwo.classList.remove('is-active')
    }
    else {
        menuContent.style.display = 'none';
        blockContent.style.display = 'block';
        blockContentTwo.style.display = 'block';
    }
})
document.getElementById('menu_button_two').addEventListener('click', function (e) {
    let menuContentTwo = document.getElementById('menu_content_two');
    let blockContent = document.querySelector('.block_two')
    let blockContentTwo = document.querySelector('.block_two.second')
    let menuContent = document.getElementById('menu_content')
    let plus = document.getElementById('plus_two')
    let plusTwo = document.getElementById('plus')
    e.preventDefault()
    plus.classList.toggle('is-active')
    if (menuContentTwo.style.display !== 'block') {
        menuContentTwo.style.display = 'block';
        blockContent.style.display = 'none';
        blockContentTwo.style.display = 'none';
        menuContent.style.display = 'none'
        plusTwo.classList.remove('is-active')
    }
    else {
        menuContentTwo.style.display = 'none';
        blockContent.style.display = 'block';
        blockContentTwo.style.display = 'block';
    }
})
//slide 2
document.getElementById('slide_two_menu_button').addEventListener('click', function (e) {
    let menuContentTwo = document.getElementById('slide_two_menu_content');
    let blockContent = document.getElementById('slide_two_block')
    let menuContent = document.getElementById('slide_two_menu_content_two')
    let plus = document.getElementById('slide_two_plus')
    let plusTwo = document.getElementById('slide_two_plus_two')
    e.preventDefault()
    plus.classList.toggle('is-active')
    if (menuContentTwo.style.display !== 'block') {
        menuContentTwo.style.display = 'block';
        blockContent.style.display = 'none';
        menuContent.style.display = 'none'
        plusTwo.classList.remove('is-active')
    }
    else {
        menuContentTwo.style.display = 'none';
        blockContent.style.display = 'block';
    }
})

document.getElementById('slide_two_menu_button_two').addEventListener('click', function (e) {
    let menuContentTwo = document.getElementById('slide_two_menu_content_two');
    let blockContent = document.getElementById('slide_two_block')
    let menuContent = document.getElementById('slide_two_menu_content')
    let plus = document.getElementById('slide_two_plus_two')
    let plusTwo = document.getElementById('slide_two_plus')
    e.preventDefault()
    plus.classList.toggle('is-active')
    if (menuContentTwo.style.display !== 'block') {
        menuContentTwo.style.display = 'block';
        blockContent.style.display = 'none';
        menuContent.style.display = 'none'
        plusTwo.classList.remove('is-active')
    }
    else {
        menuContentTwo.style.display = 'none';
        blockContent.style.display = 'block';
    }

})

//slide 3
document.getElementById('slide_three_menu_button').addEventListener('click', function (e) {
    let menuContentTwo = document.getElementById('slide_three_menu_content');
    let blockContent = document.getElementById('slide_three_block')
    let menuContent = document.getElementById('slide_three_menu_content_two')
    let plus = document.getElementById('slide_three_plus')
    let plusTwo = document.getElementById('slide_three_plus_two')
    e.preventDefault()
    plus.classList.toggle('is-active')
    if (menuContentTwo.style.display !== 'block') {
        menuContentTwo.style.display = 'block';
        blockContent.style.display = 'none';
        menuContent.style.display = 'none'
        plusTwo.classList.remove('is-active')
    }
    else {
        menuContentTwo.style.display = 'none';
        blockContent.style.display = 'block';
    }
})

document.getElementById('slide_three_menu_button_two').addEventListener('click', function (e) {
    let menuContentTwo = document.getElementById('slide_three_menu_content_two');
    let blockContent = document.getElementById('slide_three_block')
    let menuContent = document.getElementById('slide_three_menu_content')
    let plus = document.getElementById('slide_three_plus_two')
    let plusTwo = document.getElementById('slide_three_plus')
    e.preventDefault()
    plus.classList.toggle('is-active')
    if (menuContentTwo.style.display !== 'block') {
        menuContentTwo.style.display = 'block';
        blockContent.style.display = 'none';
        menuContent.style.display = 'none'
        plusTwo.classList.remove('is-active')
    }
    else {
        menuContentTwo.style.display = 'none';
        blockContent.style.display = 'block';
    }

})

//slide 4

document.getElementById('slide_four_menu_button').addEventListener('click', function (e) {
    let menuContentTwo = document.getElementById('slide_four_menu_content');
    let blockContent = document.getElementById('slide_four_block')
    let menuContent = document.getElementById('slide_four_menu_content_two')
    let plus = document.getElementById('slide_four_plus')
    let plusTwo = document.getElementById('slide_four_plus_two')
    e.preventDefault()
    plus.classList.toggle('is-active')
    if (menuContentTwo.style.display !== 'block') {
        menuContentTwo.style.display = 'block';
        blockContent.style.display = 'none';
        menuContent.style.display = 'none'
        plusTwo.classList.remove('is-active')
    }
    else {
        menuContentTwo.style.display = 'none';
        blockContent.style.display = 'block';
    }
})

document.getElementById('slide_four_menu_button_two').addEventListener('click', function (e) {
    let menuContentTwo = document.getElementById('slide_four_menu_content_two');
    let blockContent = document.getElementById('slide_four_block')
    let menuContent = document.getElementById('slide_four_menu_content')
    let plus = document.getElementById('slide_four_plus_two')
    let plusTwo = document.getElementById('slide_four_plus')
    e.preventDefault()
    plus.classList.toggle('is-active')
    if (menuContentTwo.style.display !== 'block') {
        menuContentTwo.style.display = 'block';
        blockContent.style.display = 'none';
        menuContent.style.display = 'none'
        plusTwo.classList.remove('is-active')
    }
    else {
        menuContentTwo.style.display = 'none';
        blockContent.style.display = 'block';
    }

})
// slide 5 

document.getElementById('slide_five_menu_button').addEventListener('click', function (e) {
    let menuContentTwo = document.getElementById('slide_five_menu_content');
    let blockContent = document.getElementById('slide_five_block')
    let menuContent = document.getElementById('slide_five_menu_content_two')
    let plus = document.getElementById('slide_five_plus')
    let plusTwo = document.getElementById('slide_five_plus_two')
    e.preventDefault()
    plus.classList.toggle('is-active')
    if (menuContentTwo.style.display !== 'block') {
        menuContentTwo.style.display = 'block';
        blockContent.style.display = 'none';
        menuContent.style.display = 'none'
        plusTwo.classList.remove('is-active')
    }
    else {
        menuContentTwo.style.display = 'none';
        blockContent.style.display = 'block';
    }
})

document.getElementById('slide_five_menu_button_two').addEventListener('click', function (e) {
    let menuContentTwo = document.getElementById('slide_five_menu_content_two');
    let blockContent = document.getElementById('slide_five_block')
    let menuContent = document.getElementById('slide_five_menu_content')
    let plus = document.getElementById('slide_five_plus_two')
    let plusTwo = document.getElementById('slide_five_plus')
    e.preventDefault()
    plus.classList.toggle('is-active')
    if (menuContentTwo.style.display !== 'block') {
        menuContentTwo.style.display = 'block';
        blockContent.style.display = 'none';
        menuContent.style.display = 'none'
        plusTwo.classList.remove('is-active')
    }
    else {
        menuContentTwo.style.display = 'none';
        blockContent.style.display = 'block';
    }

})



// document.querySelector('.c-hamburger').addEventListener('click', function (e) {
//     let mobileMenu = document.getElementById('mobile-menu');
//     e.preventDefault();
//     this.classList.toggle('is-active')
//     if (mobileMenu.style.display !== 'block') {
//         mobileMenu.style.display = 'block';
//     }
//     else {
//         mobileMenu.style.display = 'none';
//     }

// })