<!DOCTYPE html>
  <html lang="en">
    <head>
      <title>Search a Skillcard</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta charset="UTF-8">
    </head>
    <body>
      <div class="cardboxouter">
        <div class="cardbox">
          <div id="card">
              <form method="post" onsubmit="" id="searchform">
                  <input type="text" name="player">
              </form>
<?php
$player = urlencode($_POST['player']);
if(strlen($player) >=  3 && strlen($player) <= 16) {
  header("Location: http://localhost:8888/$player");
};
?>
          </div>
        </div>
      </div>
    </body>
<style>
@font-face {
    font-family: 'balooregular';
    src: url('Baloo-Regular-webfont.eot');
    src: url('Baloo-Regular-webfont.eot?#iefix') format('embedded-opentype'),
         url('Baloo-Regular-webfont.woff2') format('woff2'),
         url('Baloo-Regular-webfont.woff') format('woff'),
         url('Baloo-Regular-webfont.ttf') format('truetype'),
         url('Baloo-Regular-webfont.svg#balooregular') format('svg');
    font-weight: normal;
    font-style: normal;
}
* {
  box-sizing: border-box;
  font-family: Baloo;
}
body {
  margin: 0;
}
.cardboxouter {
  display: table;
  position: absolute;
  height: 100%;
  width: 100%;;
}
.cardbox {
  display: table-cell;
  vertical-align: middle;
}
#card {
  background-color: rgb(219, 219, 219);
  margin: auto;
  width: 18em;
  border-radius: .22em;
  height: 3em;
  display: grid;
}
#playersearch {
  justify-content: center;
  align-self: center;
}

input[type=text] {
  border-style: solid;
  -webkit-appearance: none;
  font-family: baloo;
  font-size: 1.1em;
  height: 100%;
  width: 100%;
}

@font-face {
    font-family: 'baloo';
    src: url('Baloo-Regular-webfont.woff') format('woff');
    font-weight: normal;
    font-style: normal;

}
</style>
  </html>
