navigator.mediaDevices.enumerateDevices().then(function (devices) {

for(var i = 0; i < devices.length; i ++){
	var device = devices[i];

if (device.kind === 'videoinput') {

	var option = document.createElement('option');
	option.value = device.deviceId;
	option.text = device.label || 'camera ' + (i + 1);
	document.querySelector('select#CameraSource').appendChild(option);

}

};

});

const videoElement			= document.getElementById('stream-element')

var buttonStart				= document.getElementById('stream-start')
var buttonStop				= document.getElementById('stream-stop')

var recorder;

const settings				= {

video: true,
audio: true

}

buttonStart.addEventListener('click', function (e) {

	navigator.mediaDevices.getUserMedia(settings).then((stream) => {
		console.log(stream);
		videoElement.srcObject	= stream

		recorder		= new MediaRecorder(stream)
		console.log(recorder);

		recorder.start();

		const blobContainer	= [];

recorder.ondataavailable		= function (e) {
            
	blobContainer.push(e.data)
}

recorder.onerror = function (e) {

	return console.log(e.error || new Error(e.name));
}

recorder.onstop = function (e) {
	console.log(window.URL.createObjectURL(new Blob(blobContainer)));

	var newVideoProperties		= document.createElement('video')
	newVideoProperties.height	= '1080'
	newVideoProperties.width	= '1920'
	newVideoProperties.autoplay	= true
	newVideoProperties.controls	= true
	newVideoProperties.innerHTML	= `<source src="${window.URL.createObjectURL(new Blob(blobContainer))}"type="video/mp4">`
	document.body.removeChild(videoElement)
	document.body.insertBefore(newVideoProperties, buttonStart);

	var formdata			= new FormData();
	formdata.append('blobFile', new Blob(blobContainer));

fetch('Processor.php', {
	method: 'POST',
	body: formdata

}).then(()=>{

	alert('Streams Message: The Live Video Stream Was Written To The Live Video Directory')

})

}

})
    
})

buttonStop.addEventListener('click', function (e) {
	videoElement.pause();
	recorder.stop();
})