const headerNode = document.querySelector('#header'),
  footerHeight = document.querySelector('#footer').clientHeight,
  headerHeight = headerNode.clientHeight,
  footerSpacer = document.querySelector('.footer__spacer'),
  headerSpacer = document.querySelector('.header__spacer'),
  makeNavSmall = () => {
    headerNode.classList.remove('large');
    headerNode.classList.add('small');
  },
  makeNavBig = () => {
    headerNode.classList.add('large');
    headerNode.classList.remove('small');
  },
  reziseFooterHeader = () => {
    footerSpacer.style.height = `${footerHeight}px`;
    headerSpacer.style.height = `${headerHeight}px`;
  };

window.onscroll = () => {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    makeNavSmall();
  } else {
    makeNavBig();
  }
};

window.addEventListener("resize", reziseFooterHeader());

reziseFooterHeader();

const switchLanguageCookie = (lang) => {
    const date = new Date();
    date.setTime(date.getTime()+(30*24*60*60*1000));
    const EXPIRES = 'expires='+date.toUTCString();
    document.cookie = `langCookie=${lang}; ${EXPIRES}; path=/`;
  },
  readLanguageCookie = () => {
        var name = 'langCookie' + '=';
        var ca = document.cookie.split(';');
        for(var i=0; i<ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0)==' ') c = c.substring(1);
            if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
        }
        return '';
      },
  bodyClassList = (LANG) => {
    document.body.classList.remove('german', 'english');
    document.body.classList.add(LANG);
  },
  setLangToBody = () => {
    const LANG = readLanguageCookie();
    LANG ? bodyClassList(LANG) : bodyClassList('german');
  },
  switchLang = [...document.querySelectorAll('.langSwitch ul li a')];

switchLang.forEach( (item) => {
  item.addEventListener('click', () => {
    const LANG = item.title;
    console.log(LANG);
    switchLanguageCookie(LANG);
    document.body.classList.remove('german', 'english');
    document.body.classList.add(LANG);
  });
});

setLangToBody();
