const formOpenBtn = document.querySelector("#form-open"),
	home = document.querySelector(".home"),
	formContainer = document.querySelector(".form_container"),
	formCloseBtn = document.querySelector(".form_close"),
	signupBtn = document.querySelector("#signup"),
	loginBtn = document.querySelector("#login"),
	pwShowHide = document.querySelectorAll(".pw_hide"),
	loginForm = document.querySelector(".login_form"),
	registerForm = document.querySelector(".signup_form"),
	slideTab = document.querySelector(".slider-tab");



document.getElementById('toggleButton').addEventListener('click', function () {
	var div = document.querySelectorAll('.form-page')[0];
	div.style.display = 'block'; // Първо показва див
	setTimeout(function () {
		div.classList.add('show'); // След малко добавя класа за плавно показване
	}, 10); // Малко забавяне, за да може display: block да влезе в сила

	// Добавя клас към body, за да деактивира скролването
	document.body.classList.add('no-scroll');
});

// Функция за затваряне на модала
document.querySelectorAll('.form_close')[0].addEventListener('click', function () {
	var loginRegisterDiv = document.querySelectorAll('.form-page')[0];
	loginRegisterDiv.style.display = 'none'; // Скрива модала

	// Премахва класа от body, за да активира отново скролването
	document.body.classList.remove('no-scroll');
});



pwShowHide.forEach((icon) => {
	icon.addEventListener("click", () => {
		let getPwInput = icon.parentElement.querySelector("input");
		if (getPwInput.type === "password") {
			getPwInput.type = "text";
			icon.classList.replace("uil-eye-slash", "uil-eye");
		} else {
			getPwInput.type = "password";
			icon.classList.replace("uil-eye", "uil-eye-slash");
		}
	});
});


signupBtn.addEventListener("click", (e) => {
	e.preventDefault();
	loginForm.classList.add("hide-form");
	registerForm.classList.remove("hide-form");
});

loginBtn.addEventListener("click", (e) => {
	e.preventDefault();
	loginForm.classList.remove("hide-form");
	registerForm.classList.add("hide-form");
});



