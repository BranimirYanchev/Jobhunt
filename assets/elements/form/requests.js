let path = "backend/auth/"

$("#login-btn").on('click', (e) => {
    e.preventDefault();

    sendData(getInfo(0), path + "login.php");
});

$("#signup-btn").on('click', (e) => {
    e.preventDefault();

    sendData(getInfo(1), path + "signup.php", 1);
})

function sendData(data, url, type = 0) {
    $.ajax({
        url: url, // The URL for the request
        type: 'POST', // The type of request (GET, POST, etc.)
        dataType: 'json', // The type of data expected back from the server
        data: data,
        success: function (response) {
            showMessage(response.status, type)
        }
    });
}

function showMessage(message, type){
    let answers = {
        error: "Unexpexted error. Please try again!",
        email_error: "Check your email and try again!",
        password_error: "Check your password and try again!",
        email_not_validated: "Please valid your email!",
        user_not_exists: "User with this data does not exist!"
    }

    if(type == 1){
        answers.username_error = "Check your username and try again!";
        answers.user_exists = "User with this data already exists!";
    }

    if(message == "success"){
        toastr.success("Operation was successful!");
        window.open("dashboard/index.php", "_self")
        return;
    }

    toastr.error(answers[message]);
}

function getInfo(type) {
    let email = $("input[name='email']")[type].value;
    let password = $("input[name='password']")[type].value;

    if (type == 1) {
        return { username: $("input[name='username']")[0].value, email: email, password: password };
    }

    return { email: email, password: password };
}