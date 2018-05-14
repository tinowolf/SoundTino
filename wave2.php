<!-- main wavesurfer.js lib -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/wavesurfer.js/1.2.3/wavesurfer.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wavesurfer.js/1.2.3/plugin/wavesurfer.timeline.min.js"></script>

<div id="waveform" class="style2">
  <progress id="progress" class="progress progress-striped" value="0" max="100"></progress>
</div>

<p>
<div style="text-align: center">
  <button class="btn btn-primary" onclick="wavesurfer.playPause()">
    <i class="glyphicon glyphicon-play"></i>
    Play
  </button>

  <button class="btn btn-primary" onclick="wavesurfer.toggleMute()">
    <i class="glyphicon glyphicon-play"></i>
    Mute
  </button>
  </p>
</div>


<script type="text/javascript">
var wavesurfer = WaveSurfer.create({
container: '#waveform',
waveColor: '#ffa64d',
progressColor: 'hsla(200, 100%, 30%, 1.0)'
});

wavesurfer.on('loading', function (percents) {                // mostra il caricamento della canzone
  document.getElementById('progress').value = percents;
});
wavesurfer.on('ready', function (percents) {                  //nasconde la barra di caricamento quando ha finito
  document.getElementById('progress').style.display = 'none';
});


<?php require 'connect.php';
 $stmt = $conn->prepare("SELECT Path FROM Songs WHERE ID = :id");
 $stmt->bindParam(':id', $id);
 $stmt->execute();
 $z = $stmt->fetch(PDO::FETCH_ASSOC);
   echo "wavesurfer.load('" .$z['Path']."');";
  ?>

</script>
