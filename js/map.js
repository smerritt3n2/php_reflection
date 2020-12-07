 /*==============================================================================
 * When a Element is selected, It reveals 
 ==============================================================================*/

// create a map in the "map" div, set the view to a given place and zoom
var map = L.map('map').setView([48.858190, 2.294470], 16);

L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

L.marker([48.858190, 2.294470]).addTo(map)
    .bindPopup('Netmatters')
    .openPopup();


// create a map in the "map" div, set the view to a given place and zoom
var map2 = L.map('map2').setView([48.858190, 2.294470], 16);

L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map2);

L.marker([48.858190, 2.294470]).addTo(map2)
    .bindPopup('Netmatters - Great Yarmouth')
    .openPopup();

/*=============================================================================*/
