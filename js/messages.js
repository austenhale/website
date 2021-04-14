$(function() {
    $("#message_wrapper").animate({"top" : "+=0px"}, function(e) {
        setTimeout( function(e) {
            $("#message_wrapper").animate({
                "top" : "-=20px"
            }, function(e) {
                $(".success_messages").remove();
                $(".failure_messages").remove();
                $("#message_wrapper").remove();
            });
        }, 2500);
    });
});