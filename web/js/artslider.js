$(document).ready(function () {
    $.ajax({
        type: 'GET',
        dataType: 'json',
        url: '/monitor/insert_art',
        data: 'json',
        success: function (data) {

            var i = 0; 			//START POINT
            var unfiltered_images = data;	//UNFILTERED IMAGES ARRAY
            var time = 30000;	//TIME BETWEEN SWITCH

            var images = unfiltered_images.filter(file => file.endsWith('.JPG') || file.endsWith('.jpg')); //FILE FILTER BY EXTENSION
            console.log(images);

            if (images.length != 0) {

                function changeImg() {

                    document.getElementById('slide').src = "/" + images[i];

                    if (i < images.length - 1) { //CHECK IF INDEX IS UNDER MAX
                        i++; //ADD 1 TO INDEX
                    } else {
                        i = 0; //RESET BACK TO 0
                    }
                    setTimeout(changeImg, time); //RUN FUNCTION EVERY X SECONDS
                }

                window.onload = changeImg(); //RUN FUNCTION WHEN PAGE LOADS
            }
        }
    });
});