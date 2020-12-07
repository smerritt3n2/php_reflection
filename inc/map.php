<!--==============================================================================================================-->
<!-- Additional Details Section -->
<!--==============================================================================================================-->
    <div class="subject-container" style="justify-content:center;">
    <div class="row1">
        <div class="map-container">
            <i class="fas fa-home"></i>
            <h2>Netmatters Office: Wymondham</h2>
            <hr>
            <p>Netmatters</p>
            <p>11 Penfold Drive</p>
            <p>Wymondham</p>
            <p>Norfolk</p>
            <p>NR18 0WZ</p>
            <div id="map" style=""></div>
        </div>
        <div class="map-container">
            <i class="fas fa-road"></i>
            <h2>Netmatters Office: Gorleston, Great Yarmouth</h2>
            <hr>
            <p>Netmatters - Great Yarmouth</p>
            <p>Suite F23 Beacon Innovation Centre, Beacon Park</p>
            <p>Gorleston, Great Yarmouth</p>
            <p>Norfolk</p>
            <p>NR31 7RA</p>
            <div id="map2"></div>
        </div>
    </div>
</div>

    <script src="https://d19vzq90twjlae.cloudfront.net/leaflet-0.7/leaflet.js">
    </script>

    <script>
        var map = L.map('map').setView([-41.2858, 174.78682], 14);
        mapLink = '<a href="http://openstreetmap.org">OpenStreetMap</a>';
        L.tileLayer(
            'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; ' + mapLink + ' Contributors',
            maxZoom: 18,
            }).addTo(map);

            L.marker([48.858190, 2.294470]).addTo(map)
                .bindPopup('Netmatters')
                .openPopup();

        var map2 = L.map('map2').setView([-41.2858, 174.78682], 14);
        mapLink = '<a href="http://openstreetmap.org">OpenStreetMap</a>';
        L.tileLayer(
            'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; ' + mapLink + ' Contributors',
            maxZoom: 18,
            }).addTo(map2);

            L.marker([48.858190, 2.294470]).addTo(map2)
                .bindPopup('Netmatters - Great Yarmouth')
                .openPopup();
    </script>
<!--==============================================================================================================-->
<!--==============================================================================================================-->