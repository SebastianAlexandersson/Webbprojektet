window.onload = loginText();
window.onload = setSettings();

function loginText() {

  if(loggedIn == 1) {
    button.innerHTML = '<i class="fas fa-user-cog" id="icon"></i>';

  } else { 
    
      button.innerHTML = 'Login';
  }

}

function setSettings() {

  navbar[0].children[2].firstElementChild.setAttribute('href', facebooklink);
  if(facebooklink == '#') {
    navbar[0].children[2].firstElementChild.style.display ='none';
  } else { 
    navbar[0].children[2].firstElementChild.style.display = 'initial';
  }
  navbar[0].children[3].firstElementChild.setAttribute('href', youtubelink);
  if(youtubelink == '#') {
    navbar[0].children[3].firstElementChild.style.display = 'none';
  } else {
    navbar[0].children[3].firstElementChild.style.display = 'initial';
  }
  navbar[0].children[4].firstElementChild.setAttribute('href', twitterlink);
  if(twitterlink == '#') {
    navbar[0].children[4].firstElementChild.style.display = 'none';
  } else {
    navbar[0].children[4].firstElementChild.style.display = 'initial';
  }
  navbar[0].children[5].firstElementChild.setAttribute('href', instalink);
  if(instalink == '#') {
    navbar[0].children[5].firstElementChild.style.display = 'none';
  } else {
    navbar[0].children[5].firstElementChild.style.display = 'initial';
  }

  let heroimg = document.getElementsByClassName('hero-image');
  if (heroimg.length > 0) {
  heroimg[0].style.backgroundImage = "linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('" + heroImgSrc + "')";
  }

  let herotext = document.getElementsByClassName('hero-text');
  if (herotext.length > 0) {
  herotext[0].children[0].textContent = heroHeader;
  herotext[0].children[1].textContent = heroHeaderSmall;
  }
}





