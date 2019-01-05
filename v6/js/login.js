
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
    user.setAttribute('pattern', '^[A-Za-z0-9_]*$');
    user.addEventListener('input', function() {
      this.setCustomValidity('');
    });
    user.addEventListener('invalid', function() {
      this.setCustomValidity('Endast stora och små bokstäver samt siffror och _ tillåtna');
    });

    let pass = document.createElement('input');
    form.appendChild(pass);
    pass.setAttribute('type', 'password');
    pass.setAttribute('placeholder', 'Lösenord');
    pass.setAttribute('name', 'password');
    pass.setAttribute('required', 'true');
    pass.setAttribute('pattern', '^[A-Za-z0-9_]*$');
    pass.addEventListener('input', function() {
      this.setCustomValidity('');
    });
    pass.addEventListener('invalid', function() {
      this.setCustomValidity('Endast stora och små bokstäver samt siffror och _ tillåtna');
    });
    

    let submit = document.createElement('input');
    form.appendChild(submit);
    submit.setAttribute('type', 'submit');
    submit.setAttribute('value', 'Skicka');

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

    let throwAway = document.createElement('div');
    logoutInfoBox.appendChild(throwAway);

    let logoutUserBox = document.createElement('div');
    logoutInfoBox.appendChild(logoutUserBox);
    logoutUserBox.setAttribute('class', 'row border-box');

    let logoutUserOne = document.createElement('span');
    logoutUserBox.appendChild(logoutUserOne);
    logoutUserOne.innerHTML = 'Användarnamn:';
    
    let logoutUserTwo = document.createElement('span');
    logoutUserBox.appendChild(logoutUserTwo);
    logoutUserTwo.setAttribute('class', 'align-right');
    logoutUserTwo.innerHTML = sessionUser;

    let logoutNameBox = document.createElement('div');
    logoutInfoBox.appendChild(logoutNameBox);
    logoutNameBox.setAttribute('class', 'row border-box');

    let logoutNameOne = document.createElement('span');
    logoutNameBox.appendChild(logoutNameOne);
    logoutNameOne.innerHTML = 'Namn:';
    
    let logoutNameTwo = document.createElement('span');
    logoutNameBox.appendChild(logoutNameTwo);
    logoutNameTwo.setAttribute('class', 'align-right');
    logoutNameTwo.innerHTML = sessionFullName;

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










