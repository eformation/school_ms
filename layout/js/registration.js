/*
 * Set local storage
 */

if(localStorage.registration)
{
    option = localStorage.registration;
    $(".tab-pane").removeClass('active');
    $('div#'+option).addClass('active');
    $(".nav li").removeClass('active');
    $('li.'+option).addClass('active');
}
else
{
    localStorage.registration = "Student";
}

/*
 * Code to handel display for school registration tab
 */

$('.nav a').live('click',function(){
   localStorage.registration = $(this).attr('href').substr(1); 
});