const formOpenBtn = document.querySelector("#form-open"),
	home = document.querySelector(".home"),
	formContainer = document.querySelector(".form_container"),
	formCloseBtn = document.querySelector(".form_close"),
	signupBtn = document.querySelector("#signup"),
	loginBtn = document.querySelector("#login"),
	pwShowHide = document.querySelectorAll(".pw_hide"),
	login = document.querySelectorAll(".login_form")[0],
	register = document.querySelectorAll(".signup_form")[0];

// pwShowHide.forEach(eyeIcon => {
// eyeIcon.addEventListener("click", () => {
//   let pwFields = eyeIcon.parentElement.parentElement.querySelectorAll(".password");

//   pwFields.forEach(password => {
//       if(password.type === "password"){
//           password.type = "text";
//           eyeIcon.classList.replace("bx-hide", "bx-show");
//           return;
//       }
//       password.type = "password";
//       eyeIcon.classList.replace("bx-show", "bx-hide");
//   })

// })
// })      

// links.forEach(link => {
// link.addEventListener("click", e => {
//  e.preventDefault(); //preventing form submit
//  forms.classList.toggle("show-signup");
// })
// })


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
	login.classList.add("hide-form");
	register.classList.remove("hide-form");
});

loginBtn.addEventListener("click", (e) => {
	e.preventDefault();
	login.classList.remove("hide-form");
	register.classList.add("hide-form");
});

