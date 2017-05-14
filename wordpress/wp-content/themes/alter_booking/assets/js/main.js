var footerVisible = false,
  headerNode = document.querySelector('.header__content'),
  footerNode = document.querySelector('.footer__content'),
  footerSpacer = document.querySelector('.footer__spacer'),
  wrap = document.querySelector('.wrap'),
  body = document.body,
  html = document.documentElement,
  documentHeight = Math.max( body.scrollHeight, body.offsetHeight, html.clientHeight, html.scrollHeight, html.offsetHeight ),
  makeNavSmall = function() {
    headerNode.classList.remove('large');
    headerNode.classList.add('small');
  },
  makeNavBig = function() {
    headerNode.classList.add('large');
    headerNode.classList.remove('small');
  },
  reziseFooterHeader = function() {
    var footerHeight = document.querySelector('#footer').clientHeight,
      headerHeight = headerNode.clientHeight;
    footerSpacer.style.height = `${footerHeight - 5}px`;
    wrap.style.paddingTop = `${headerHeight + 5}px`;
  },
  setFooterHeaderStyles = function() {
    if (document.body.scrollTop > 120 || document.documentElement.scrollTop > 120) {
      makeNavSmall();
    } else {
      makeNavBig();
    }
    if ((document.body.scrollTop > (documentHeight/4))) {
      footerNode.style.visibility = 'visible';
      footerVisible = true;
    } else if ((document.body.scrollTop < (documentHeight/4))) {
      footerNode.style.visibility = 'hidden';
      footerVisible = false;
    }
    reziseFooterHeader();
  };

window.addEventListener("scroll", setFooterHeaderStyles, false);
window.addEventListener("resize", reziseFooterHeader, false);
window.addEventListener("orientationchange", reziseFooterHeader, false);

setFooterHeaderStyles();
reziseFooterHeader();

var switchLanguageCookie = function(lang) {
    var date = new Date();
    date.setTime(date.getTime()+(30*24*60*60*1000));
    var EXPIRES = 'expires='+date.toUTCString();
    document.cookie = `langCookie=${lang}; ${EXPIRES}; path=/`;
  },
  readLanguageCookie = function() {
        var name = 'langCookie' + '=';
        var ca = document.cookie.split(';');
        for(var i=0; i<ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0)==' ') c = c.substring(1);
            if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
        }
        return '';
      },
  bodyClassList = function(LANG) {
    document.body.classList.remove('german', 'english');
    document.body.classList.add(LANG);
  },
  setLangToBody = function() {
    var BODYLANG = readLanguageCookie();
    if(BODYLANG) {
      bodyClassList(BODYLANG)
    } else {
      bodyClassList('german');
    }
  },
  switchLang = Array.prototype.slice.call(document.querySelectorAll('.langSwitch ul li a'));

switchLang.forEach( function(item) {
  item.addEventListener('click', function() {
    var LANG = item.title;
    switchLanguageCookie(LANG);
    document.body.classList.remove('german', 'english');
    document.body.classList.add(LANG);
  });
});

setLangToBody();
