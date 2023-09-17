const topMenu = document.getElementById('ct-top-menu');
const toggleTopMenuIcon = document.getElementById('toggle-ct-top-menu');

document.addEventListener('click', (e) => {
    if (toggleTopMenuIcon.contains(e.target)) {
        // Click to toggle top menu icon
        topMenu.classList.toggle('hidden');
        topMenu.classList.toggle('ct-top-menu-expanded');
    } else {
        // Click outside of top menu icon
        if (topMenu.classList.contains('ct-top-menu-expanded')) {
            topMenu.classList.add('hidden');
            topMenu.classList.remove('ct-top-menu-expanded');
        }
    }
});
