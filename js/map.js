
var mymap = L.map('mapid').setView([8.75659, -75.87999], 16);
L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
maxZoom: 18,
id: 'mapbox.streets',
accessToken: 'pk.eyJ1IjoibHVpc21pMTI0NSIsImEiOiJjamx2NmR0MWYwZW03M3FxdHlsbXc0Mml5In0.N-9zq79WJJet4oFHYPtFgg'
}).addTo(mymap);
var marker = L.marker([8.75659, -75.87999]).addTo(mymap);
var circle = L.circle([8.75659, -75.87999], {
color: 'red',
fillColor: '#f03',
fillOpacity: 0.5,
radius: 500
}).addTo(mymap);
var polygon = L.polygon([
[8.75659, -75.87999],
[8.75659, -75.87999],
[8.75659, -75.87999]
]).addTo(mymap);
marker.bindPopup("<b>Oficina Principal Ticstark</b><br>Cra 9 #34-30").openPopup();
circle.bindPopup("I am a circle.");
polygon.bindPopup("I am a polygon.");