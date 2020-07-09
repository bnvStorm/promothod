
 $(document).ready(function() {
    $('.leftMenu a').each(function() {
        if ('http://promothod'+$(this).attr('href') == window.location.href)
        {
            $(this).addClass('active');
        }
    });
});
