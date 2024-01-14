<footer class="bg-dark text-light text-center py-3">
    <p>&copy; 2024 Your Website. All rights reserved.</p>
</footer>

<script>
    $(document).ready(function () {
        function adjustFooterPosition() {
            var contentHeight = $('#content-container').height();
            var windowHeight = $(window).height();
            var footerHeight = $('#footer-container').height();

            if (contentHeight + footerHeight < windowHeight) {
                $('#footer-container').removeClass('fixed-bottom');
            } else {
                $('#footer-container').addClass('fixed-bottom');
            }
        }

        adjustFooterPosition();

        $(window).resize(function () {
            adjustFooterPosition();
        });
    });
</script>