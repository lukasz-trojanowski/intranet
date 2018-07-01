// parallax

$(window).scroll(function () {
  $("body").css("background-position","50% " + ($(this).scrollTop() / -2) + "px");
});

$("[data-fancybox]").fancybox({
  iframe: {
      tpl:
       '<iframe id="fancybox-frame{rnd}" style="border:10px white solid" name="fancybox-frame{rnd}" class="fancybox-iframe" frameborder="0" vspace="0" hspace="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen allowtransparency="true" src=""></iframe>',

  },
  hideScrollbar: false,
  lang: "pl",
  animationEffect: "fade",
  transitionEffect: "slide",
  i18n: {
      pl: {
          CLOSE: "Zamknij",
          NEXT: "Następne",
          PREV: "Poprzednie",
          ERROR: "Wystąpił problem z ładowaniem pliku. <br/>Spróbuj później.",
          PLAY_START: "Rozpocznij pokaz slajdów",
          PLAY_STOP: "Wstrzymaj pokaz slajdów",
          FULL_SCREEN: "Pełny ekran",
          THUMBS: "Miniaturki",
          DOWNLOAD: "Pobierz",
          SHARE: "Udostępnij",
          ZOOM: "Powiększenie"
      },
  },
  clickContent: "close"
});