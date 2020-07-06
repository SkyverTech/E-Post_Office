var inputPass = document.getElementById('password');

// eye
var inputPass2 = document.getElementById('password'),
    icon = document.getElementById('icon');

const newLocal = 'active';
icon.onclick = function() {

    if (inputPass2.className == newLocal) {
        inputPass2.setAttribute('type', 'text');
        icon.className = 'fa fa-eye';
        inputPass2.className = '';

    } else {
        inputPass2.setAttribute('type', 'password');
        icon.className = 'fa fa-eye-slash';
        inputPass2.className = 'active';
    }

}