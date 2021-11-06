$(document).ready(function () {
    $('#colorYes').change(function () {
        if (this.checked)
            //  ^
            $('#autoUpdate').fadeIn('slow');
        else
            $('#autoUpdate').fadeOut('slow');
    });
});



