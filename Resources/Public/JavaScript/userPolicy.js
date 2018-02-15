$( document ).ready(function() {
    $("#policiInfo div span").click(function(e){
        $("#policyData input").val($(this).attr("data-value"));
    });
});