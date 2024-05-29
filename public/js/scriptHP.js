const header = document.querySelector('header');
const links = document.querySelectorAll('nav ul li a');

links.forEach(link => {
  link.addEventListener('click', () => {
    header.style.backgroundColor = 'black';
  });
});

///////////////////////////////////////////////////////////////////////

const overlay = document.querySelector('.overlay');
const overlayContent = document.querySelector('.content');

overlay.addEventListener('mouseenter', () => {
  overlayContent.classList.add('active');
});

overlay.addEventListener('mouseleave', () => {
  overlayContent.classList.remove('active');
});



///////////////////////////////////////////////////////////////////////

const overlay2 = document.querySelector('.overlay2');

overlay2.addEventListener('mouseenter', () => {
  overlay2.classList.add('active');
});

overlay2.addEventListener('mouseleave', () => {
  overlay2.classList.remove('active');
});

