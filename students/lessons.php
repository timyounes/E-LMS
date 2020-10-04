<!doctype html>
<html lang="en">
<head>
  <!--
    Demo by Ildar Sagdejev ( http://twitter.com/tknomad )
  -->
  <meta charset="UTF-8">
  <title>E-LMS-CvSUIC | Lessons Overview</title>
  <link rel="stylesheet" href="css/common.css">
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div id="wrap">
    <h1>Which browser is your favorite?</h1>
    <div id="showcase" class="noselect">
	  <img class="cloud9-item" src="images/browsers/firefox.png" alt="Firefox">
      <img class="cloud9-item" src="images/browsers/wyzo.png" alt="Wyzo">
      <img class="cloud9-item" src="images/browsers/opera.png" alt="Opera">
      <img class="cloud9-item" src="images/browsers/chrome.png" alt="Chrome">
      <img class="cloud9-item" src="images/browsers/iexplore.png" alt="Internet Explorer">
      <img class="cloud9-item" src="images/browsers/safari.png" alt="Safari">
    </div>
    <footer>
      <p id="item-title">&nbsp;</p>
      <div id="nav" class="noselect">
        <button class="left">
		left
        </button>
        <button class="right">
         right
        </button>
      </div>
      <div id="get">
        <a id="download" href="http://github.com/specious/cloud9carousel">Download from GitHub</a>
        <p id="license">MIT License</p>
      </div>
      <div id="share">
        <iframe src="http://ghbtns.com/github-btn.html?user=specious&repo=cloud9carousel&type=watch&count=true"
    allowtransparency="true" frameborder="0" scrolling="0" width="86" height="20"></iframe>
        <div class="fb-like" data-href="http://specious.github.io/cloud9carousel/" data-layout="button_count" data-show-faces="true" data-font="arial"></div>
        <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://specious.github.io/cloud9carousel/" data-count="horizontal"></a>
        <div class="g-plusone" data-href="http://specious.github.io/cloud9carousel/" data-size="medium" data-annotation="bubble" data-expandto="bottom"></div>
      </div>
      <div id="credits">
        <h1>Cloud 9 Carousel</h1>
        <ul>
          <li>
            By <a href="http://twitter.com/tknomad">Ildar Sagdejev</a> and <a href="http://www.professorcloud.com/">R. Cecco</a>
          </li>
          <li>
            <a href="http://www.digitalia.be/software/reflectionjs-for-jquery">Reflection plugin</a> by <a href="http://www.digitalia.be/">Christophe Beyls</a>
          </li>
        </ul>
      </div>
    </footer>
  </div>
  <script src="js/lib/jquery.js"></script>
  <script src="js/lib/jquery.reflection.js"></script>
  <script src="js/lib/jquery.cloud9carousel.js"></script>
  <script>
    $(function() {
      var showcase = $("#showcase"), title = $('#item-title')

      showcase.Cloud9Carousel( {
        yOrigin: 42,
        yRadius: 48,
        mirror: {
          gap: 12,
          height: 0.2
        },
        buttonLeft: $("#nav > .left"),
        buttonRight: $("#nav > .right"),
        autoPlay: 1,
        bringToFront: true,
        onRendered: rendered,
        onLoaded: function() {
          showcase.css( 'visibility', 'visible' )
          showcase.css( 'display', 'none' )
          showcase.fadeIn( 1500 )
        }
      } )

      function rendered( carousel ) {
        title.text( carousel.nearestItem().element.alt )

        // Fade in based on proximity of the item
        var c = Math.cos((carousel.floatIndex() % 1) * 2 * Math.PI)
        title.css('opacity', 0.5 + (0.5 * c))
      }

      //
      // Simulate physical button click effect
      //
      $('#nav > button').click( function( e ) {
        var b = $(e.target).addClass( 'down' )
        setTimeout( function() { b.removeClass( 'down' ) }, 80 )
      } )

      $(document).keydown( function( e ) {
        //
        // More codes: http://www.javascripter.net/faq/keycodes.htm
        //
        switch( e.keyCode ) {
          /* left arrow */
          case 37:
            $('#nav > .left').click()
            break

          /* right arrow */
          case 39:
            $('#nav > .right').click()
        }
      } )
    })
  </script>
  <script src="js/social.js" async></script>
</body>
</html>