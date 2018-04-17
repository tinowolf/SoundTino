<!-- main wavesurfer.js lib -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/wavesurfer.js/1.2.3/wavesurfer.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wavesurfer.js/1.2.3/plugin/wavesurfer.timeline.min.js"></script>

<p id="waveform" class="style2"><button class="btn btn-primary" onclick="wavesurfer.playPause()">
  <i class="glyphicon glyphicon-play"></i>
  Play
</button></p>
<!--
<p>
<div style="text-align: center">

  </p>
</div> -->


<script type="text/javascript">
var wavesurfer = WaveSurfer.create({
container: '#waveform',
waveColor: 'black',
progressColor: '#e97470'
});
wavesurfer.load('africa-toto.wav');
</script>
