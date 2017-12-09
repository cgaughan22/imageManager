


// Get the modal
var modal = document.getElementById('myModal');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
// var images = document.getElementsByClassName('images');
// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

function showImgModal(id) {
    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementById(id);
    modal.style.display = "block";
    modalImg.src = img.src;
    captionText.innerHTML = img.alt;
}




// // Get Modal 2

// // Get the modal
// var modal = document.getElementById('myModal');

// // // Get the image and insert it inside the modal - use its "alt" text as a caption
// var img = document.getElementsByClassName('images');
// var modalImg = document.getElementById("img01");
// var captionText = document.getElementById("caption");
// images.onclick = function(){
//     modal.style.display = "block";
//     modalImg.src = this.src;
//     captionText.innerHTML = this.alt;
// }

// // Get Modal 2

// // Get the modal
// var modal = document.getElementById('myModal');

// // Get the image and insert it inside the modal - use its "alt" text as a caption
// var img = document.getElementById('myImg3');
// var modalImg = document.getElementById("img01");
// var captionText = document.getElementById("caption");
// img.onclick = function(){
//     modal.style.display = "block";
//     modalImg.src = this.src;
//     captionText.innerHTML = this.alt;
// }

// Get the <span> element that closes the modal
// var span = document.getElementsByClassName("close")[0];

// // When the user clicks on <span> (x), close the modal
// span.onclick = function() {
//     modal.style.display = "none";
// }

