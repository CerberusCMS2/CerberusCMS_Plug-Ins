<?PHP
echo ("
			<VIDEO AUTOPLAY=\"\" ID=\"stream-element\" CONTROLS WIDTH=\"256\" HEIGHT=\"144\">
				<SOURCE SRC=\"\" TYPE=\"\">
			</VIDEO><BR><BR>

			Options :: Controls :: Live Video
			<HR ALIGN=\"LEFT\" WIDTH=\"50%\">
				<SELECT ID=\"CameraSource\"></SELECT><BR>
				<BUTTON ID=\"stream-start\">Record Video Stream</BUTTON>
				<BUTTON ID=\"stream-stop\">Stop Video Stream</BUTTON>

			<SCRIPT SRC=\"Camera.js\"></SCRIPT>
");

?>
