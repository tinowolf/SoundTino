<!-- main wavesurfer.js lib -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/wavesurfer.js/1.2.3/wavesurfer.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wavesurfer.js/1.2.3/plugin/wavesurfer.timeline.min.js"></script>

<div id="waveform" class="style2"></div>

<p>
<div style="text-align: center">
  <button class="btn btn-primary" onclick="wavesurfer.playPause()">
    <i class="glyphicon glyphicon-play"></i>
    Play
  </button>
  </p>
</div>


<script type="text/javascript">
var wavesurfer = WaveSurfer.create({
container: '#waveform',
waveColor: 'white',
progressColor: 'black'
});
<?php require 'connect.php';
foreach ($stmt = $conn->query("SELECT Path FROM Songs ORDER BY ID DESC LIMIT 1")as $a) {$z = $a['Path'];}
echo "wavesurfer.load('". $z."');";?>
//https://ia902606.us.archive.org/35/items/shortpoetry_047_librivox/song_cjrg_teasdale_64kb.mp3
// attivare o disattivare per avere il tempo
/*wavesurfer.on('ready', function () {
  var timeline = Object.create(WaveSurfer.Timeline);

  timeline.init({
    wavesurfer: wavesurfer,
    container: '#waveform'
  });
});*/
</script>
