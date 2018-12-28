
var button = document.getElementById('loginBtn');
  button.addEventListener('click', loggaIn)

var navbar = document.getElementsByClassName('navbar');

function closeBox() {

  navbar[0].removeChild(box)
  
}

function loggaIn() {

  let boxExists = document.getElementsByClassName('login-box');

  if(boxExists.length == 1) {
    return;
  } else {

  if(loggedIn == 0) {

    let box = document.createElement('div');
    navbar[0].appendChild(box);
    box.setAttribute('class', 'login-box utility-box');
    box.setAttribute('id', 'box');

    let loginHeaderBox = document.createElement('div');
    box.appendChild(loginHeaderBox);
    loginHeaderBox.setAttribute('class', 'row');
    
    let loginHeader = document.createElement('h5');
    loginHeaderBox.appendChild(loginHeader);
    loginHeader.innerHTML = 'Logga in';

    let close = document.createElement('button');
    box.appendChild(close);
    close.setAttribute('id', 'close');
    close.setAttribute('class', 'close-button');
    close.addEventListener('click', closeBox);
    close.innerHTML = "X";

    let formBox = document.createElement('div');
    box.appendChild(formBox);
    formBox.setAttribute('class', 'row');

    let form = document.createElement('form');
    formBox.appendChild(form);
    form.setAttribute('method', 'post');
    form.setAttribute('action', '/includes/login.php');
    form.setAttribute('class', 'form');

    let user = document.createElement('input');
    form.appendChild(user);
    user.setAttribute('type', 'text');
    user.setAttribute('placeholder', 'Användarnamn');
    user.setAttribute('name', 'username');
    user.setAttribute('required', 'true');
    user.setAttribute('autofocus', 'true');

    let pass = document.createElement('input');
    form.appendChild(pass);
    pass.setAttribute('type', 'password');
    pass.setAttribute('placeholder', 'Lösenord');
    pass.setAttribute('name', 'password');
    pass.setAttribute('required', 'true');

    let submit = document.createElement('input');
    form.appendChild(submit);
    submit.setAttribute('type', 'submit');
    submit.setAttribute('value', 'Skicka')

  } else {

    let box = document.createElement('div');
    navbar[0].appendChild(box)
    box.setAttribute('class', 'login-box utility-box');
    box.setAttribute('id', 'box');

    let logoutHeaderBox = document.createElement('div');
    box.appendChild(logoutHeaderBox);
    logoutHeaderBox.setAttribute('class', 'row');

    let close = document.createElement('button');
    logoutHeaderBox.appendChild(close);
    close.setAttribute('id', 'close');
    close.setAttribute('class', 'close-button');
    close.addEventListener('click', closeBox);
    close.innerHTML = "X";
    
    let logoutHeader = document.createElement('h5');
    logoutHeaderBox.appendChild(logoutHeader);
    logoutHeader.innerHTML = 'Inloggad som';

    let logoutInfoBox = document.createElement('div');
    box.appendChild(logoutInfoBox);
    logoutInfoBox.setAttribute('class', 'row');

    let logoutUser = document.createElement('p');
    logoutInfoBox.appendChild(logoutUser);
    logoutUser.innerHTML = 'Användarnamn: ' + sessionUser + '<br>' + 'Namn: ' + sessionFullName;
    
    let logoutLinkBox = document.createElement('div');
    box.appendChild(logoutLinkBox);
    logoutLinkBox.setAttribute('class', 'row');
    
    let logoutlink = document.createElement('a');
    logoutLinkBox.appendChild(logoutlink);
    logoutlink.setAttribute('href', '/includes/logout.php'); 

    let logoutbutton = document.createElement('button');
    logoutlink.appendChild(logoutbutton);
    logoutbutton.setAttribute('class', 'button');
    logoutbutton.innerHTML = 'Logga ut';


  }
  }
}










