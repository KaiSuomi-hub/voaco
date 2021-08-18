
$('#element').click(function () {
    if($('#radio_button').is(':checked')) { alert("it's checked"); }
});
 

(function( $ ){
    $.fn.radcheck = function() {
       alert('hello world');
       return this;
    }; 
 })( jQuery );