// Fungsi Actionbar Scroll
$(window).scroll(function() {
    if($(this).scrollTop() > 10) 
    {
        $('.nav-pad').addClass('scrolled');
    } else {
        $('.nav-pad').removeClass('scrolled');  
    }
});