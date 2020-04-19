// Fungsi Actionbar Scroll
$(window).scroll(function() {
    if($(this).scrollTop() > 10) 
    {
        $('.btn-show').show();
        $('.nav-show').hide();
        $('.nav-pad').addClass('scrolled');
    } else {
        $('.btn-show').hide();
        $('.nav-show').show();
        $('.nav-pad').removeClass('scrolled');  
    }
});