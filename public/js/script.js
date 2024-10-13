function confirmLogout() {
    if (confirm("Apakah anda yakin ingin keluar?")) {
        document.getElementById("keluar-app").submit();
    }
}

    // Function to add/remove active border
    function setActiveLink(element) {
        // Remove active class from all span elements
        document.querySelectorAll('.icon-wrapper').forEach(function(iconWrapper) {
            iconWrapper.classList.remove('active-border');
        });

        // Add active class to clicked element
        element.classList.add('active-border');
    }

    // Set the default active border on the 'Home' icon
    document.addEventListener('DOMContentLoaded', function() {
        const defaultIcon = document.querySelector('.nav-item:first-child .icon-wrapper');
        if (defaultIcon) {
            defaultIcon.classList.add('active-border');
        }
    });

    // Add click event listener to all icon wrappers
    document.querySelectorAll('.nav-item .icon-wrapper').forEach(function(iconWrapper) {
        iconWrapper.addEventListener('click', function() {
            setActiveLink(this);
        });
    });
