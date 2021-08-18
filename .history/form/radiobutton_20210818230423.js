
// $('#element').click(function () {
//     if($('#radio_button').is(':checked')) { alert("it's checked"); }
// });
 

// function radCheck($param) {
//     $param.toggle();  // or whatever you want to do
//  }
 
//  radCheck($('#my_div'));
// id="Kuiva"
if($("input:radio[id=kuiva]").is(":checked")){
    //Code to append goes here
    $('#hidden1').toggle();
}