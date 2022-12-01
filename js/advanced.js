jQuery(document).ready(function($){
    $(document).find('.fixed-size-header').addClass('scrolled');

    $(document).on('click', '.contact-forms__tab', function(){
        if(!$(this).hasClass('active')) {
            $('.contact-form').hide();
            $('.contact-forms__tab').removeClass('active');

            $(this).addClass('active');
            $($(this).attr('data-form')).fadeIn();
        }
    });

    $('.custom-file-upload').on('change', 'input', function() {
        let parent = $(this).closest('.custom-file-upload');
        let text = parent.find('.custom-file-upload__text');
        let filename = $(this).val().split('\\').pop();
        let default_text = $(parent).attr('data-default-text');

        if(filename != '') {
            text.text(filename);
        } else {
            text.text(default_text);
        }
    });
});
