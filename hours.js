// stuff for the google map
// https://www.youtube.com/watch?v=Zxf1mnP5zcw
function initMap(){
    var options = {
        zoom: 17,
        center: {lat: 38.95081822034898, lng: -92.32780653646796}
    }

    var map = new google.maps.Map(document.getElementById("map"), options);

    var marker = new google.maps.Marker({
       position: {lat: 38.95081822034898, lng: -92.32780653646796},
        map: map
    });
}

// function to check time and change the open/closed sign accordingly
function openStatus() {
    var d = new Date();
    var hours = d.getHours();
    var minutes = d.getMinutes();
    console.log(d);
    if (hours >= 11 && hours < 23){
        if (hours == 11){
            if (minutes >= 30){
                $("#openStatus").html('<img src="images/open.jpg" id="openSign" alt="opensign">');
            }else{
                $("#openStatus").html('<img src="images/closed.jpg" id="openSign" alt="closedsign">');
                return;
            }
        }
        $("#openStatus").html('<img src="images/open.jpg" id="openSign" alt="opensign">');
    }else{
        $("#openStatus").html('<img src="images/closed.jpg" id="openSign" alt="closedsign">');
    }
}

$(function(){
    openStatus();
    
    setTimeout(function () {
        if ($("#map").is(':empty')){
            $("#map").html = "Error loading Google map. Please refresh the page.";
        }
    });
});