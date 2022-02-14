$(document).ready(function () {

    $("#refreshBtn").on('click', function(){
        console.log("Refreshed!");
        window.location.reload();
    });

    $("#coBtn").on('click', function(){
        let x = document.getElementById("co");
        if (x.style.display === "block") {
            x.style.display = "none";
        } else {
            x.style.display = "block";
        }
    });

    $("#tempBtn").on('click', function(){
        console.log("Temp!");
        let x = document.getElementById("temp");
        if (x.style.display === "block") {
            console.log("Show None!");
            x.style.display = "none";
        } else {
            console.log("Show Block!");
            x.style.display = "block";
        }
    });

    $("#humBtn").on('click', function(){
        let x = document.getElementById("hum");
        if (x.style.display === "block") {
            x.style.display = "none";
        } else {
            x.style.display = "block";
        }
    });

    $("#vocBtn").on('click', function(){
        let x = document.getElementById("voc");
        if (x.style.display === "block") {
            x.style.display = "none";
        } else {
            x.style.display = "block";
        }
    });

    $("#preBtn").on('click', function(){
        let x = document.getElementById("pre");
        if (x.style.display === "block") {
            x.style.display = "none";
        } else {
            x.style.display = "block";
        }
    });

    $("#outBtn").on('click', function(){
        let x = document.getElementById("out");
        if (x.style.display === "block") {
            x.style.display = "none";
        } else {
            x.style.display = "block";
        }
    });

    // Trying to be responsive
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.style.visibility="visible";
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }

});
