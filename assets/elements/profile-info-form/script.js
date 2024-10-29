$("body").css("overflow", "hidden");

$('#profile-info-form').on('submit', function (event) {
    event.preventDefault(); // Prevent default form submission

    // Gather form data
    const data = {
        first_name: $('#first_name').val(),
        last_name: $('#last_name').val(),
        place_of_living: $('#place_of_living').val(),
        phone: $('#phone').val(),
        dob: $('#dob').val()
    };

    sendData(data, "backend/profile/add_general_info.php")
});

function sendData(data, url) {
    $.ajax({
        url: url, // The URL for the request
        type: 'POST', // The type of request (GET, POST, etc.)
        dataType: 'json', // The type of data expected back from the server
        data: data,
        success: function (responce) {
            if(responce.status == "error"){
                toastr.error(responce.message);
                return;
            }
            
            toastr.success(responce.message);

            location.reload();
        }
    });
}