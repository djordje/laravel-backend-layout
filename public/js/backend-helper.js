(function($) {

    $(document).ready(function() {

        $('body').on('click', '[data-confirm]', function(e) {
            e.preventDefault();
            e.stopPropagation();

            var callback = null;
            var $el = $(this);
            var message = $el.data('confirm') || 'Confirm action?';

            if ($el.attr('href')) {
                callback = function(isConfirmed) {
                    if (isConfirmed) {
                        window.location.href = $el.attr('href');
                    }
                };
            }

            if ($el.attr('type') && $el.attr('type') === 'submit') {
                callback = function(isConfirmed) {
                    if (isConfirmed) {
                        $el.closest('form').get(0).submit();
                    }
                };
            }

            bootbox.confirm(message, callback);
        });

    });

})(jQuery);