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
$stmt = $conn->prepare("SELECT ID, Path FROM Songs WHERE ID = :id");
$stmt->bindParam(':id', intval($_GET['id']));
$stmt->execute();
  $z = $stmt['Path'];
  echo "wavesurfer.load('" . $z."');"
  ?>

</script>
