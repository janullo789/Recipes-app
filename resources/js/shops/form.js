import $ from 'jquery';
import L from 'leaflet';

window.MapConfig = {
    center: {
        latitude: parseFloat(document.getElementById('mapid').getAttribute('data-map-center-latitude')),
        longitude: parseFloat(document.getElementById('mapid').getAttribute('data-map-center-longitude'))
    },
    zoomLevel: parseInt(document.getElementById('mapid').getAttribute('data-zoom-level'))
};
document.addEventListener('DOMContentLoaded', function () {
    const mapCenter = [MapConfig.center.latitude, MapConfig.center.longitude];
    const map = L.map('mapid').setView(mapCenter, MapConfig.zoomLevel);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    const marker = L.marker(mapCenter).addTo(map);
    function updateMarker(lat, lng) {
        marker
            .setLatLng([lat, lng])
            .bindPopup("Twoja lokalizacja:  " + lat + " " + lng)
            .openPopup();
        return false;
    }

    map.on('click', function (e) {
        const latitude = e.latlng.lat.toString().substring(0, 15);
        const longitude = e.latlng.lng.toString().substring(0, 15);
        $('#latitude').val(latitude);
        $('#longitude').val(longitude);
        updateMarker(latitude, longitude);
    });

    const updateMarkerByInputs = function () {
        return updateMarker($('#latitude').val(), $('#longitude').val());
    }
    $('#latitude').on('input', updateMarkerByInputs);
    $('#longitude').on('input', updateMarkerByInputs);
});
