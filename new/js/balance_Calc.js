$('#advance').keyup(function () {
    var total =$('#total').val();
    var advance =$('#advance').val();
    if(total && advance){
        var balance = total - advance;
        $('#balance').val(balance);
    }
});
$('#advance').keyup(function () {
    var advance =$('#advance').val();
    var total =$('#total').val();
    if(parseInt(total) < parseInt(advance)){
        alert('Please Check Total Value');
        $('#balance').val('');
        $('#advance').val('');
        $('#total').focus();
    }
    else if(advance.trim() == '' || advance.trim() == ""){
        $('#balance').val('');
    }
});