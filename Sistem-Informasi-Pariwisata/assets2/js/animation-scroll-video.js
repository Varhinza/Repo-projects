//scroll animation
var name = "#floatDiv";
var menuYloc = null;
$(document).ready(function () {
    menuYloc = parseInt($(name).css("top").substring(0, $(name).css("top").indexOf("px")))
    $(window).scroll(function () {
        offset = menuYloc + $(document).scrollTop() + "px";
        $(name).animate({ top: offset }, { duration: 500, queue: false });
    });
});

//remove element video
const video = document.getElementById('floatDiv');
video.addEventListener('click',function(e) {
    if (e.target.className == 'tombol') {
        e.target.parentElement.style.display = 'none';
    }
})

//modal video
var modal = document.getElementById("myModal");
// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var vid = document.getElementById("vid");
var modalVid = document.getElementById("video01");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");

vid.addEventListener('playing',function () {
    modal.style.display = "block";
    modalVid.play();
    captionText.innerHTML = this.alt;
})
vid.addEventListener("pause", function () {
    modalVid.pause();
})
modalVid.addEventListener("pause", function () {
    vid.pause();
})

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("closed")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
    vid.pause();
    vid.currentTime = 0;
    modalVid.pause();
    modalVid.currentTime = 0;
}