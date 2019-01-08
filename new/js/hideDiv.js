$('#functionCategory').click(function () {
   var category = $('#functionCategory').val();
   if(category == "Homecomming"){
       $('#payments').hide();
   }else {
       $('#payments').show();
   }
});
$('#resetBTN').click(function () {
    $('#payments').show();
})