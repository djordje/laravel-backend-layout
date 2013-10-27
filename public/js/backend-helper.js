(function($) {

    $(document).ready(function() {

        $('body').on('click', '[data-confirm]', function() {
            var message = $(this).data('confirm') || 'Confirm action?';
            confirm(message);
        });

    });

})(jQuery);