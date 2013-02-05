/*
 * Declaring global variables
 */
opentab = "student";

/*
 * Functions handling display of registration fields as per the openned tab
 */

function school_tab()
{
    $('input#idno').parent().parent().addClass("hide");
}

function teacher_tab()
{
    $('input#idno').parent().parent().removeClass("hide");
}

function student_tab()
{
    $('input#idno').parent().parent().removeClass("hide");
}

/*
 * Set local storage
 */

if(localStorage.registration)
{
    opentab = localStorage.registration;
    $(".tab-pane").removeClass('active');
    $('div#'+opentab).addClass('active');
    $(".nav li").removeClass('active');
    $('li.'+opentab).addClass('active');
}
else
{
    localStorage.registration = "student";
}

/*
 * Code to handel display for school registration tab
 */

$('.nav a').live('click',function(){
   localStorage.registration = $(this).attr('href').substr(1); 
});

/*
 * Code to handle display of fields on page load
 */
if(opentab == 'school')
    school_tab();
else if(opentab == 'teacher')
    teacher_tab();
else
    student_tab();

/*
 * Code to handle code display when switching b/w tabs
 */

$('.nav li a').live('click',function() {
   var function_call_name = $(this).parent().attr('class');
   function_call_name = function_call_name +"_tab";
   function_call_name();
});