const forms = document.querySelector(".forms"),
pwShowHide = document.querySelectorAll(".eye-icon"),
links = document.querySelectorAll(".link");

pwShowHide.forEach(eyeIcon => {
eyeIcon.addEventListener("click", () => {
  let pwFields = eyeIcon.parentElement.parentElement.querySelectorAll(".password");
  
  pwFields.forEach(password => {
      if(password.type === "password"){
          password.type = "text";
          eyeIcon.classList.replace("bx-hide", "bx-show");
          return;
      }
      password.type = "password";
      eyeIcon.classList.replace("bx-show", "bx-hide");
  })
  
})
})      

links.forEach(link => {
link.addEventListener("click", e => {
 e.preventDefault(); //preventing form submit
 forms.classList.toggle("show-signup");
})
})

document.getElementById('toggleButton').addEventListener('click', function() {
    var div = document.getElementById('login-register');
    div.style.display = 'block'; // Първо показва див
    setTimeout(function() {
        div.classList.add('show'); // След малко добавя класа за плавно показване
    }, 10); // Малко забавяне, за да може display: block да влезе в сила

    // Добавя клас към body, за да деактивира скролването
    document.body.classList.add('no-scroll');
});

// Функция за затваряне на модала
document.getElementById('closeButton-login').addEventListener('click', function() {
    var loginRegisterDiv = document.getElementById('login-register');
    loginRegisterDiv.style.display = 'none'; // Скрива модала

    // Премахва класа от body, за да активира отново скролването
    document.body.classList.remove('no-scroll');
});

document.getElementById('closeButton-signup').addEventListener('click', function() {
    var loginRegisterDiv = document.getElementById('login-register');
    loginRegisterDiv.style.display = 'none'; // Скрива модала

    // Премахва класа от body, за да активира отново скролването
    document.body.classList.remove('no-scroll');
});
