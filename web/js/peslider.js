$(document).ready(function () {
    $.ajax({
        type: 'GET',
        dataType: 'json',
        url: '/monitor/insert_pe',
        data: 'json',
        success: function (data) {

            var i = 0; 			//START POINT
            var z = 0;          //START POINT
            var x = 0;          //START POINT
            var unfiltered_images = data;	//UNFILTERED IMAGES ARRAY
            var time = 30000;	//TIME BETWEEN SWITCH

            var sportmans = unfiltered_images.filter(file => file.endsWith('.JPG')); //FILE FILTER BY EXTENSION
            var gto = unfiltered_images.filter(file => file.endsWith('.jpg')); //FILE FILTER BY EXTENSION

            var gto1 = gto.slice(0, 5);
            var gto2 = gto.slice(5);

            console.log(sportmans);
            console.log(gto1);
            console.log(gto2);

            if (gto1.length != 0 && gto2.length != 0 && sportmans.length != 0) {

                function changesm() {

                    document.getElementById('sportmans').src = "/" + sportmans[i];

                    if (x < sportmans.length - 1) { //CHECK IF INDEX IS UNDER MAX
                        x++; //ADD 1 TO INDEX
                    } else {
                        x = 0; //RESET BACK TO 0
                    }
                    setTimeout(changesm, time); //RUN FUNCTION EVERY X SECONDS
                }

                window.onload = changesm(); //RUN FUNCTION WHEN PAGE LOADS

                function changegto1() {

                    document.getElementById('gto1').src = "/" + gto1[i];

                    if (i < gto1.length - 1) { //CHECK IF INDEX IS UNDER MAX
                        i++; //ADD 1 TO INDEX
                    } else {
                        i = 0; //RESET BACK TO 0
                    }
                    setTimeout(changegto1, time); //RUN FUNCTION EVERY X SECONDS
                }

                window.onload = changegto1(); //RUN FUNCTION WHEN PAGE LOADS

                function changegto2() {

                    document.getElementById('gto2').src = "/" + gto2[i];

                    if (z < gto2.length - 1) { //CHECK IF INDEX IS UNDER MAX
                        z++; //ADD 1 TO INDEX
                    } else {
                        z = 0; //RESET BACK TO 0
                    }
                    setTimeout(changegto2, time); //RUN FUNCTION EVERY X SECONDS
                }

                window.onload = changegto2(); //RUN FUNCTION WHEN PAGE LOADS
            }
        }
    });
});