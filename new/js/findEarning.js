$('#selectMonth').focusout(function () {
    var monthName = $("#selectMonth :selected").text();

    $.ajax({
        url: 'earningProcess.php',
        type: 'POST',
        data: $('#monthSelectForm').serialize(),
        async:true,
        success: function(response){
            $('#earningTable h6').remove();
            $('#earningTable p').remove();
            $('#earningTable table').remove();
            $('#earningTable table').append();
            $('#earningTable').append('<h6 class="text-center">'+'Summary Of Bill Details For '+monthName+'</h6>');
            $('#earningTable').append(response);
            // $('#holidays').fadeOut(500);

        }
    });
})