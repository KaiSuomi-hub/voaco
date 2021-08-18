$( "#Kuiva" ).on( "click", function() {
    $("#hidden1").toggle();
});

.on('click', function(){
    $("div.week").hide();
    var targetDiv = $(this).attr('rel');
    $("#"+targetDiv).show();