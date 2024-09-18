const formOpenBtn = document.querySelector("#form-open"),
	home = document.querySelector(".home"),
	formContainer = document.querySelector(".form_container"),
	formCloseBtn = document.querySelector(".form_close"),
	signupBtn = document.querySelector("#signup"),
	loginBtn = document.querySelector("#login"),
	pwShowHide = document.querySelectorAll(".pw_hide"),
	loginForm = document.querySelector(".login_form"),
	registerForm = document.querySelector(".signup_form"),
	slideTab = document.querySelector(".slider-tab"),
	loginParts = document.querySelectorAll(".login-part"),
	signupParts = document.querySelectorAll(".signup-part");

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

function whiteColor(el){
	el.classList.remove("c-b");
}

function blackColor(el){
	el.classList.add("c-b");
}

function hideFormEls(els){
	els[0].classList.add("hide-form-el");
	blackColor(els[1]);
	whiteColor(signupParts[1])
	document.querySelector(".slider-tab").style.left = "50%";
	document.querySelector(".login-form").style.marginLeft = "-50%";
}

function showFormEls(els){
	els[0].classList.remove("hide-form-el");
	whiteColor(els[1]);
	blackColor(signupParts[1])
	document.querySelector(".slider-tab").style.left = "0%";
	document.querySelector(".login-form").style.marginLeft = "0";
}

signupBtn.addEventListener("click", (e) => {
	e.preventDefault();
	hideFormEls(loginParts);
});

loginBtn.addEventListener("click", (e) => {
	e.preventDefault();
	showFormEls(loginParts);
});

