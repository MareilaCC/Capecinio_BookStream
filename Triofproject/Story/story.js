// script.js
// Example: Adding a hover effect to the book cover
const bookCover = document.querySelector('.book-cover');

bookCover.addEventListener('mouseover', () => {
    bookCover.style.transform = 'scale(1.1)';
});

bookCover.addEventListener('mouseout', () => {
    bookCover.style.transform = 'scale(1)';
});