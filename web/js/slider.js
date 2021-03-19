$(document).ready(function () {
    $.ajax({
        type: 'GET',
        dataType: 'json',
        url: '/web/monitor/insert',
        data: 'json',
        success: function (data) {

            var i = 0; 			// Start Point
            var unfiltered_images = data;	// Unfiltered Images Array
            var time = 30000;	// Time Between Switch

            var images = unfiltered_images.filter(file => file.endsWith('.JPG')); //ФИЛЬТР ФАЙЛОВ ПО РАСШИРЕНИЮ
            console.log(images);

            if (images.length != 0) {

                function changeImg() {

                    //document.slide.src = images[i];
                    document.getElementById('slide').src = images[i];

                    if (i < images.length - 1) { // Check If Index Is Under Max
                        i++; // Add 1 to Index
                    } else {
                        i = 0; // Reset Back To 0
                    }
                    setTimeout(changeImg, time); // Run function every x seconds
                }

                window.onload = changeImg(); // Run function when page loads
            }
        }
    });
});