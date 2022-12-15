const header = document.getElementsByClassName('nav')[0];
const dropdown = document.getElementById('dropdown-icon');
const navLinks = document.getElementsByClassName('nav-links')[0];
const navItems = navLinks.childNodes;

window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
        header.classList.add('scrolled');
    } else {
        header.classList.remove('scrolled');
    }
});

dropdown.addEventListener('click', () => {
    let num = 1;
    const lines = document.getElementsByClassName('dropdown-icon-line');

    for(let i = 0; i < lines.length; i++) {
        num *= -1;
        if(num + 1) {
            lines[i].classList.toggle('rotate')
        } else {
            lines[i].classList.toggle('rotate-reverse')
        }
    }

    header.classList.toggle('white-bg');
    navLinks.classList.toggle('full-height');
});


for(let i = 0; i < navItems.length; i++) {
    let navItem = navItems[i];

    navItem.addEventListener('mouseover', (e) => {
        navItem.classList.add('show-children');
    })

    navItem.addEventListener('mouseout', () => {
        navItem.classList.remove('show-children');
    })
}
