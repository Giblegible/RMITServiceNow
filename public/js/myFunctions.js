$(document).ready(function() {
    //Hide computer hardware option
    $('#computerHardware').hide();

    $('#serviceArea').on('change', function() {
        var service = $("#serviceArea option:selected").text();
        if(service === "Computer (Hardware)") {
            $('#computerHardware').show();
        }
        else {
            $('#computerHardware').hide();
        }
    })
});