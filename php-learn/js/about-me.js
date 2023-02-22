"use strict"

// Below are the JS codes for for the hobbies page

const hobbiesH3   = document.querySelectorAll('.hobbies-h3'); //all of the h3 headings for the hobbies page
const hobbiesP    = document.querySelectorAll('.hobbies-p'); // all of the p tags for the hobbies page
const hobbiesIcon = document.querySelectorAll('.hobbies-icon') //selects all of the icons for hobbies page

for (let h3 of hobbiesH3) {
    h3.addEventListener('click', () => {
        h3.nextElementSibling.classList.toggle('active');
        h3.firstChild.classList.toggle('active');
    });
};