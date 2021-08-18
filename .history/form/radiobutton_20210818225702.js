
$('#element').click(function () {
    if($('#radio_button').is(':checked')) { alert("it's checked"); }
});
 

function myFunction($param) {
    $param.toggle();  // or whatever you want to do
    ...
 }
 
 myFunction($('#my_div'));