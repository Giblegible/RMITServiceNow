$(document).ready(function() {
    //Hide computer hardware option
    $('#computerHardware').hide();
    $('#computerSoftware').hide();

    $('#serviceArea').on('change', function() {
        var service = $("#serviceArea option:selected").text();
        if(service === "Computer (Hardware)") {
            $('#computerHardware').show();
            $('#computerSoftware').hide();
        }
        else if(service === "Computer (Software)") {
            $('#computerSoftware').show();
            $('#computerHardware').hide();
        }
        else {
            $('#computerHardware').hide();
            $('#computerSoftware').hide();
        }
    });
});