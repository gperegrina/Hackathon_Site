var source, destination;
//var directionsService = new google.maps.DirectionsService();
/*
google.maps.event.addDomListener(window, 'load', function () {
    new google.maps.places.SearchBox(document.getElementById('txtSource'));
    new google.maps.places.SearchBox(document.getElementById('txtDestination'));
});*/
// Function is call on button click
function GetRoute() {


    //*********DIRECTIONS AND ROUTE**********************//
    source = document.getElementById("txtSource").value; // gets both addresses from text field
    destination = document.getElementById("txtDestination").value;

    var service = new google.maps.DistanceMatrixService();
    service.getDistanceMatrix({
        origins: [source],
        destinations: [destination],
        travelMode: google.maps.TravelMode.DRIVING,
        unitSystem: google.maps.UnitSystem.IMPERIAL,
        avoidHighways: false,
        avoidTolls: false
    }, function (response, status) {
        if (status == google.maps.DistanceMatrixStatus.OK && response.rows[0].elements[0].status != "ZERO_RESULTS") {
            var distance = response.rows[0].elements[0].distance.text; // The distance between 2 addresses
            //var temp = parseInt(distance, 10) * 0.621371;
            //var miles = temp.toFixed(1);
            //var duration = response.rows[0].elements[0].duration.text;
            var dvDistance = document.getElementById("dvDistance");
           dvDistance.innerHTML = "";
            dvDistance.innerHTML += "Distance: " + distance + "<br />";
            //dvDistance.innerHTML += "Duration:" + duration;

        } else {
            alert("Unable to find the distance via road.");
        }
    });
}
