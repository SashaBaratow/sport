jQuery(document).ready( function(){
    $('#events-year').change(function(){
        let year = $('#events-year').val();
        let event_overlay = $('.event-overlay');
        event_overlay.addClass('active')
        let data = {
            action: 'get_events',
            currentYear: year
        };
        jQuery.post( myAjax.ajaxUrl, data, function( response ){
            jQuery('.accordion').html(response)
            event_overlay.removeClass('active')
        } );
    });

} );
