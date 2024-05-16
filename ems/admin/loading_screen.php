
<style>
    .loading-screen {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent white background */
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999; /* Ensure it's above other content */
        visibility: hidden; /* Initially hidden */
    }
</style>
<div class="loading-screen">
    <i class="fas fa-spinner fa-spin fa-3x"></i> <!-- Loading spinner icon -->
</div>

<script>
    // Show the loading screen
    function showLoadingScreen() {
        var loadingScreen = document.querySelector('.loading-screen');
        loadingScreen.style.visibility = 'visible';
    }

    // Hide the loading screen
    function hideLoadingScreen() {
        var loadingScreen = document.querySelector('.loading-screen');
        setTimeout(function() {
            loadingScreen.style.visibility = 'hidden';
        }, 2000); // Hide the loading screen after 2 seconds
    }

    // Hide the loading screen once the page has fully loaded, after at least 2 seconds
    window.addEventListener('load', function() {
        hideLoadingScreen();
    });

    // Show the loading screen when navigating away from the page
    window.addEventListener('beforeunload', showLoadingScreen);

    // Show the loading screen when clicking on links or buttons that navigate
    document.addEventListener('DOMContentLoaded', function () {
        var links = document.querySelectorAll('a');
        links.forEach(function (link) {
            link.addEventListener('click', function () {
                if (link.href && link.target !== '_blank') {
                    showLoadingScreen();
                }
            });
        });

        var forms = document.querySelectorAll('form');
        forms.forEach(function (form) {
            form.addEventListener('submit', showLoadingScreen);
        });
    });
</script>
</i> <!-- Loading spinner icon -->
</div>

</body>
</html>
