$(document).ready(function(){
    $('#icon').click(function(){
        $('ul').toggleClass('show');
    })
})

function togglePopup(){
document.getElementById("popup-1").classList.toggle("active");
}

// PASSWORD SHOW/HIDE 

const password = document.getElementById('password');
const toggle = document.getElementById('password-toggle');

function showHide(){
if(password.type === 'password'){
    password.setAttribute('type', 'text');
    toggle.classList.add('hide');
}else{
    password.setAttribute('type', 'password');
    toggle.classList.remove('hide');
}
}

