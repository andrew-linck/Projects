<?php include 'search.php'; ?>
<!DOCTYPE html>
  <html lang="en">
    <head>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta charset="UTF-8">
      <meta name="description" content="Check Fortnite Player Skillcards" />
      <title><?php echo ucfirst(str_replace("/", "", urldecode($player))); ?></title>

      <meta property="og:url" content="<?php echo $_SERVER['SERVER_NAME']; echo urlencode($_SERVER['REQUEST_URI']) ?>"/>
      <meta property="og:title" content="<?php echo str_replace("/", "", urldecode(ucfirst($player))); ?>" />
      <meta property="og:description" content="Fortnite Player Skill Card" />
      <meta property="og:type" content="website"/>
      <meta property="og:site_name" content="Skillcard"/>
      <meta property="og:image" content="<?php echo $emblem ?>" />
      <meta property="og:image:alt" content="Tier Emblem" />
      <meta property="og:image:width" content="1024" />
      <meta property="og:image:height" content="1024" />

      <meta name="twitter:url" content="<?php echo $_SERVER['SERVER_NAME']; echo urlencode($_SERVER['REQUEST_URI']) ?>"/>
      <meta name="twitter:card" content="summary"/>
      <meta name="twitter:title" content="<?php echo str_replace("/", "", urldecode(ucfirst($player))); ?>" />
      <meta name="twitter:description" content="Fortnite Player Skill Card" />
      <meta name="twitter:image" content="<?php echo $emblem ?>" />
      <meta name="twitter:site" content=""/>
      <meta name="twitter:creator" content=""/>

      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta charset="UTF-8">

      <link rel="stylesheet" type="text/css" 
      href="style.css"/>
    </head>

    <body>
    <div class="cardboxouter">
        <div class="cardbox">
          <div id="card">
          <div class="cardblock" id="playericonbackdrop">
            <img src="<?php echo $emblem ?>" id="playericon"/>
          </div>
          <div class="cardblock" id="player">
            <div id="playertag">
                <span id="playertag">@<?php echo $userhandle; ?></span>
            </div>
          </div>
          <div class="cardblock" id="rating">
            <div id="ratingtext">
              <span id="ratingtext">rating</span>
            </div>
            <div id="ratingnumber">
              <span id="ratingnumber"><?php echo $rating; ?></span>
            </div>
          </div>
          <div class="cardblock" id="share">
            <div id="sharetext">
              <span id="sharetext">share</span>
            </div>
            <div id="sharebuttons">
              <a class="button" href="https://twitter.com/intent/tweet?text=<?php echo $_SERVER['SERVER_NAME']; echo urlencode($_SERVER['REQUEST_URI']) ?>"><img src="twitterbutton.png" id="twitterbutton" class ="button"></a>
              <a class="button" onclick="Clipboard.copy('<?php echo $_SERVER['SERVER_NAME']; echo $_SERVER['REQUEST_URI'] ?>'); Alert();"><img src="copybutton.png" id="copybutton" class="button"></a>
              <a class="button" href="sms:&body=<?php echo $_SERVER['SERVER_NAME']; echo str_replace(" ", "+", $_SERVER['REQUEST_URI']) ?>"><img src="textbutton.png" id="textbutton" class="button"></a>
            </div>
          </div>
          </div>
        </div>
      </div>
    </body>
  </html>
<script>
window.Clipboard = (function(window, document, navigator) {
    var textArea,
        copy;

    function isOS() {
        return navigator.userAgent.match(/ipad|iphone/i);
    }

    function createTextArea(text) {
        textArea = document.createElement('textArea');
        textArea.value = text;
        textArea.readOnly = true;
        document.body.appendChild(textArea);
    }

    function selectText() {
        var range,
            selection;

        if (isOS()) {
            range = document.createRange();
            range.selectNodeContents(textArea);
            selection = window.getSelection();
            selection.removeAllRanges();
            selection.addRange(range);
            textArea.setSelectionRange(0, 999999);
        } else {
            textArea.select();
        }
    }

    function copyToClipboard() {
        document.execCommand('copy');
        document.body.removeChild(textArea);
    }

    copy = function(text) {
        createTextArea(text);
        selectText();
        copyToClipboard();
    };

    return {
        copy: copy
    };
})(window, document, navigator);

Clipboard.copy('text to be copied');

function Alert() {
  alert("copied");
}
</script>