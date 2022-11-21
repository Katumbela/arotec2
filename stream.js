
var video = document.getElementById("video");

    vendorUrl = window.URL || window.webkitURL;
    navigator.getMedia = navigator.getUserMedia ||
    navigator.webkitGetUserMedia ||
    navigator.mozGetUserMedia ||
    navigator.msGetUserMedia;

    navigator.getMedia({
        video: true,
        audio:false,
    }, function(stream){
        video.srcObject = stream;
        video.onplay();
    }, function (error) {
        console.log(error);
    });


