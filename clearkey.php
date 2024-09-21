<!DOCTYPE html>
<html>
<head>
<meta name='referrer' content='no-referrer' />
    <title>clearkey</title>
    <meta content='width=device-width, initial-scale=1' name='viewport'>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<style>
*{margin:0;padding:0;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:-moz-none;-o-user-select:none;user-select:none}
html{overflow: hidden;}body {font:Arial,sans-serif;background-color:#000;color:#fff;height:100%;width: 100%;overflow:hidden;position:absolute;margin:0;padding:0;}#player {width:100%;height:100%;margin:0;padding:0;overflow:hidden;}video{width:100%;height:100%}
</style>  


</head>
<body style="padding: 0px; margin:0px;">

<script src="//ssl.p.jwpcdn.com/player/v/8.21.0/jwplayer.js"></script>
<script> jwplayer.key = 'ITWMv7t88JGzI0xPwW8I0+LveiXX9SWbfdmt0ArUSyc='; </script>
<div id="player"></div>


<script>

function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, '\\$&');
    var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, ' '));
}

var file = getParameterByName('file');

var src = getParameterByName('src');
if (src == 0) {alert('Vuelv');}




var keyid = getParameterByName('keyid');
if (keyid == 0) {alert('keyid');}


 var key = getParameterByName('key');
if (key == 0) {alert('key');}

if (file) {


  var playerInstance = jwplayer("player");

  playerInstance.setup({
    playlist: [{
      "title": "",
      "description": "",
      "image": "",
      "sources": [{
        "default": false,
        "type": "dash",
        "file": file,
        "drm": {
          "clearkey": {
            "keyId":keyid,
            "key":key
          }
        },
        "label": "0"
      }]
    }],
    width: "100%",
    height: "100%",
    autostart: false,
    logo: {
      file: '',
      link: '',
      position: 'top-right'
    },
    sharing: {}
  });
}
</script>
</body>
</html>
