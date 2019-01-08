$("#addCrewBTN").click(function() {
    var selectedText = $("#crewSelect option:selected").text();
    var selectedValue = $("#crewSelect option:selected").val();
    if(selectedText){
        $("#selected_crew").append('<option value='+selectedValue+' class="form-control">'+selectedText+'</option>');
        $("#crewSelect option:selected").remove();
    }else{
        alert("Please select value to add/remove");
    }
});
$("#removeCrewBTN").click(function() {
    var selectedText = $("#selected_crew option:selected").text();
    var selectedValue = $("#selected_crew option:selected").val();
    if(selectedText){
        $("#crewSelect").append('<option value='+selectedValue+' class="form-control">'+selectedText+'</option>');
        $("#selected_crew option:selected").remove();
    }else {
        alert("Please select value to add/remove");
    }
});
$('#saveOrderBTN').click(function() {
    $('#selected_crew option').prop('selected', true);
});

