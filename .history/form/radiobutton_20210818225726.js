
$('#element').click(function () {
    if($('#radio_button').is(':checked')) { alert("it's checked"); }
});
 

function radCheck($param) {
    $param.toggle();  // or whatever you want to do
 }
 
 myFunction($('#my_div'));