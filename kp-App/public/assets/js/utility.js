document.addEventListener('DOMContentLoaded', function () {
    const utilityMenu = document.getElementById('utility-menu');
    const utilityDropdown = document.getElementById('utility-dropdown');

    if (utilityMenu && utilityDropdown) {
        console.log('Utility menu and dropdown found.');

        utilityMenu.addEventListener('click', function (event) {
            event.stopPropagation();
            console.log('Utility menu clicked.');
            const isDropdownVisible = utilityDropdown.style.display === 'block';
            utilityDropdown.style.display = isDropdownVisible ? 'none' : 'block';
        });

        document.addEventListener('click', function (event) {
            if (!utilityMenu.contains(event.target) && !utilityDropdown.contains(event.target)) {
                console.log('Clicked outside utility menu.');
                utilityDropdown.style.display = 'none';
            }
        });
    } else {
        console.error('Utility menu or dropdown not found.');
    }
});