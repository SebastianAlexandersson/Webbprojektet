window.onload = loginText();

function loginText() {

  if(loggedIn == 1) {
    button.innerHTML = '<i class="fas fa-user-cog" id="icon"></i>';

  } else { 
    
      button.innerHTML = 'Login';
  }

}
