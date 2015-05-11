/**
 * Created by cinjko on 11.02.2015.
 */
jQuery(document).ready(function(){
    function empty( mixed_var ) {
        return (
        mixed_var === '' ||
        mixed_var === 0 ||
        mixed_var === '0' ||
        mixed_var === null ||
        mixed_var === false ||
        mixed_var === 'false' ||
        mixed_var === undefined
        );
    }

    $('input').blur(function(){
        var id = $(this).attr('id');
        var val = $(this).val();
        console.log(val);
        switch (id) {
            case "first_name":
            case "last-name":
                var regName = /^([a-zA-Z_\(\)\s)|([а-яіїєґА-ЯІЇЄҐ_\(\)\s]+)$/;

                if (empty(val) || (val.length > 1 && val.length < 20 && regName.test(val))) {
                    $('p.error_' + id).css('display', 'none');
                } else {
                    $(this).addClass("error");
                    $('p.error_' + id).css('display', 'block');
                }
                break;
        }
    });

    $('#submit').click(function() {
        //console.log($(this));
        //$('#first_name').blur();
        $('input.text').each(function() {
            if(empty($(this).val())) {
                $(this).addClass('error');
            }
        })
    });

    $('input.text').focus(function(){
        $(this).removeClass('error');
    })
});

