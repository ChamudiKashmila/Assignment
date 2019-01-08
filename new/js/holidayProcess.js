$("#holidayDate").focusout(function() {

    var holidayDate = $("#holidayDate").val();
    //var dataString = 'Subject='+ holidayDate;

    $.ajax({
        url: 'holidayProcess.php',
        type: 'POST',
        data: $('#holidays').serialize(),
        async:true,
        success: function(response){
            $('#holidays p').remove();
            $('#holidays').append('<p>'+response+'</p>');
           // $('#holidays').fadeOut(500);

        }
    });
});