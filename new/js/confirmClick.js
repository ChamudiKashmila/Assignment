$('.confirm_Action').click(function () {
    var txt;
    var r = confirm("Are you sure ?");
    if (r == false) {
        top.close();
        window.location.href = 'view_Bookings.php';
    }
});
