import L from 'leaflet';
import axios from 'axios';

document.addEventListener('DOMContentLoaded', function () {
    const mapElement = document.getElementById('mapid');

    const mapCenter = [
        parseFloat(mapElement.getAttribute('data-map-center-latitude')),
        parseFloat(mapElement.getAttribute('data-map-center-longitude'))
    ];
    const zoomLevel = parseInt(mapElement.getAttribute('data-zoom-level'));
    const shopsIndexRoute = mapElement.getAttribute('data-shops-index-route');
    const isAdmin = mapElement.hasAttribute('data-is-admin');
    const shopCreateRoute = mapElement.getAttribute('data-shop-create-route');

    const map = L.map('mapid').setView(mapCenter, zoomLevel);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    axios.get(shopsIndexRoute)
        .then(function (response) {
            L.geoJSON(response.data, {
                pointToLayer: function (geoJsonPoint, latlng) {
                    return L.marker(latlng);
                }
            })
                .bindPopup(function (layer) {
                    return layer.feature?.properties?.map_popup_content || 'Brak informacji';
                }).addTo(map);
        })
        .catch(function (error) {
            console.error(error);
        });

    if (isAdmin) {
        let theMarker;

        map.on('click', function(e) {
            const { lat, lng } = e.latlng;
            let latitude = lat.toString().substring(0, 15);
            let longitude = lng.toString().substring(0, 15);

            if (theMarker) {
                map.removeLayer(theMarker);
            }

            let popupContent = `Twoja lokalizacja: ${latitude}, ${longitude}. `;
            popupContent += `<br><a href="${shopCreateRoute}?latitude=${latitude}&longitude=${longitude}">Add new shop here</a>`;

            theMarker = L.marker([latitude, longitude]).addTo(map);
            theMarker.bindPopup(popupContent).openPopup();
        });
    }
});
