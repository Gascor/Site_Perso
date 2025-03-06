// script.js

document.addEventListener('DOMContentLoaded', () => {
    window.addEventListener('scroll', () => {
      const header = document.querySelector('header');
      if (window.scrollY > 50) {
        header.classList.add('bg-dark');
      } else {
        header.classList.remove('bg-dark');
      }
    });
  });
  