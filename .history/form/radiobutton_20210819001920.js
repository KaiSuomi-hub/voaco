$( "#Kuiva" ).on( "click", function() {
    $("#hidden1").toggle();
});

$( "#Kuiva" ).on('click', function(){
    $("div.item").hide();
    var targetDiv = $(this).attr('rel');
    $("#"+targetDiv).show();