
var button = document.getElementById('loginBtn');
  button.addEventListener('click', loggaIn)

var navbar = document.getElementsByClassName('navbar');

function closeBox() {

  navbar[0].removeChild(box)
  
}

function loggaIn() {

  let boxExists = document.getElementsByClassName('login-window');

  if(boxExists.length == 1) {
    return;
  } else {

  if(loggedIn == 0) {

    let box = document.createElement('div');
    navbar[0].appendChild(box);
    box.setAttribute('class', 'login-window');
    box.setAttribute('id', 'box');

    let close = document.createElement('button');
    box.appendChild(close);
    close.setAttribute('class', 'close-button');
    close.setAttribute('id', 'close');
    close.addEventListener('click', closeBox);
    close.innerHTML = "X";

    let form = document.createElement('form');
    box.appendChild(form);
    form.setAttribute('method', 'post');
    form.setAttribute('action', 'login.php');

    let user = document.createElement('input');
    form.appendChild(user);
    user.setAttribute('type', 'text');
    user.setAttribute('placeholder', 'Användarnamn');
    user.setAttribute('name', 'username');
    user.setAttribute('required', 'true');

    let pass = document.createElement('input');
    form.appendChild(pass);
    pass.setAttribute('type', 'password');
    pass.setAttribute('placeholder', 'Lösenord');
    pass.setAttribute('name', 'password');
    pass.setAttribute('required', 'true');

    let submit = document.createElement('input');
    form.appendChild(submit);
    submit.setAttribute('type', 'submit');

  } else {

    let box = document.createElement('div');
    navbar[0].appendChild(box)
    box.setAttribute('class', 'login-window');
    box.setAttribute('id', 'box');

    let close = document.createElement('button');
    box.appendChild(close);
    close.setAttribute('class', 'close-button');
    close.setAttribute('id', 'close');
    close.addEventListener('click', closeBox);
    close.innerHTML = "X";
    
    let logoutlink = document.createElement('a');
    box.appendChild(logoutlink);
    logoutlink.setAttribute('href', 'logout.php');
    let logoutbutton = document.createElement('button');
    logoutlink.appendChild(logoutbutton);
    logoutbutton.setAttribute('class', 'logout-button');
    logoutbutton.innerHTML = 'Logout';
    
  }
  }
}










