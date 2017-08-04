$(document).ready(function() {
    //Hide computer hardware option
    $('#computerHardware').hide();
    $('#computerSoftware').hide();
    $('#computerSoftwareOther').hide();

    $('#serviceArea').on('change', function() {
        var service = $("#serviceArea option:selected").text();
        if(service === "Computer (Hardware)") {
            $('#computerHardware').show();
            $('#computerSoftware').hide();
            $('#computerSoftwareOther').hide();
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

    $('#computerSoftware').on('change', function() {
        var option = $("#computerSoftware option:selected").text();
        if(option === "Other") {
            $('#computerSoftwareOther').show();
        }
        else {
            $('#computerSoftwareOther').hide();
        }
    });
});