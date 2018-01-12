var locations = [
  ['Banani', 12.911717, 90.403381, 2],
  ['Banani-2', 77.637653, 90.405407, 1]
];

var map = new google.maps.Map(document.getElementById('map'), {
  zoom: 15,
  center: new google.maps.LatLng(12.911717, 77.637653),
  mapTypeId: google.maps.MapTypeId.ROADMAP
});

var infowindow = new google.maps.InfoWindow();

var marker, i;

for (i = 0; i < locations.length; i++) {
  marker = new google.maps.Marker({
    position: new google.maps.LatLng(locations[i][1], locations[i][2]),
    map: map,
    icon: "img/point.png"
  });

  google.maps.event.addListener(marker, 'click', (function(marker, i) {
    return function() {
      infowindow.setContent(locations[i][0]);
      infowindow.open(map, marker);
    }
  })(marker, i));
};
