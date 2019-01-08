
$('#phoneNumber').focusout(function () {
    var phone = $('#phoneNumber').val().replace(/ /g,'')
    if(!phone){

    }else{
        var phone = $('#phoneNumber').val().replace(/ /g,''),
            intRegex = /[0-9-+]+$/;
        if(!intRegex.test(phone))
        {
            var result = confirm("Enter Valid Contact Number");
            if(result == true){
                $('#phoneNumber').val("");
            }
        }
    }
});
