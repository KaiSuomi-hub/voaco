$( "#Kuiva" ).on( "click", function() {
    $("#hidden1").toggle();
});

$("#Kuiva").on('click', function () {
    $("div.item-c").hide();
    var targetDiv = $(this).attr('rel');
    $("#" + targetDiv).show();
});