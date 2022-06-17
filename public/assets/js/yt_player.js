// Load the IFrame Player API code asynchronously.
var tag = document.createElement('script');
tag.src = "https://www.youtube.com/player_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

// https://www.youtube.com/watch?v=ve_wKlFPy08
// Replace the 'ytplayer' element with an <iframe> and
// YouTube player after the API code downloads.
var player;
function onYouTubePlayerAPIReady() {
  player = new YT.Player('ytplayer', {
    height: '360',
    width: '640',
    videoId: 'cYc9vReJfwE', // M7lc1UVf-VE ve_wKlFPy08
    playerVars: { 'autoplay': 1, 'controls': 0 },
    events: {
        'onReady': onPlayerReady
    }  
  });
}

function onPlayerReady(event) {
    // event.target.setVolume(100);
    event.target.playVideo();
  }
  