@extends('./layouts/app')

@section('page-content')

<div class="container mt-5">
    <h1 class="text-center mb-6">Carte des sites de fouille en France</h1>
    <div id="mapid"></div>
</div>
<script>
    var map = L.map('mapid').setView([46.603354, 1.888334], 6); // Coordonnées du centre de la France et zoom initial
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);


    // Exemple de marqueur pour un site de fouille avec une photo
    var imageUrl = "{{ asset('img/s6.png') }}";
    var site1 = L.marker([48.8566, 2.3522]).addTo(map); // Paris
    site1.bindPopup('<b>Site 1</b><br>Paris, France<br><em>Découvertes importantes :</em><br>Objets archéologiques, vestiges historiques<br><img class="leaflet-popup-img" src="' + imageUrl + '" alt="Photo du site">');

    // Ajoutez d'autres marqueurs pour d'autres sites de fouille avec des informations supplémentaires
    var imageUrl = "{{ asset('img/s7.jpg') }}";
    var site2 = L.marker([43.6047, 1.4442]).addTo(map);// Toulouse
    site2.bindPopup('<b>Site 2</b><br>Toulouse, France<br><em>Découvertes importantes :</em><br>Vestiges préhistoriques, outils anciens<br><img class="leaflet-popup-img" src="' + imageUrl + '" alt="Photo du site">');

    var imageUrl = "{{ asset('img/s8.jpg') }}";
    var site3 = L.marker([48.1173, -1.6778]).addTo(map); // Rennes
    site3.bindPopup('<b>Site 3</b><br>Rennes, France<br><em>Découvertes importantes :</em><br>Architecture médiévale, artefacts antiques<br><img class="leaflet-popup-img" src="' + imageUrl + '" alt="Photo du site">');

    var imageUrl = "{{ asset('img/s9.jpg') }}";
    var site4 = L.marker([47.2184, -1.5536]).addTo(map); // Nantes
    site4.bindPopup('<b>Site 4</b><br>Nantes, France<br><em>Découvertes importantes :</em><br>Restes gallo-romains, céramiques anciennes<br><img class="leaflet-popup-img" src="' + imageUrl + '" alt="Photo du site">');

    var imageUrl = "{{ asset('img/s10.jpg') }}";
    var site5 = L.marker([49.8941, 2.2957]).addTo(map); // Amiens
    site5.bindPopup('<b>Site 6</b><br>Amiens, France<br><em>Découvertes importantes :</em><br>Artefacts médiévaux, vestiges romains<br><img class="leaflet-popup-img" src="' + imageUrl + '" alt="Photo du site">');

    var imageUrl = "{{ asset('img/s11.jpg') }}";
    var site6 = L.marker([47.4784, -0.5632]).addTo(map); // Angers
    site6.bindPopup('<b>Site 7</b><br>Angers, France<br><em>Découvertes importantes :</em><br>Architecture médiévale, objets celtiques<br><img class="leaflet-popup-img" src="' + imageUrl + '" alt="Photo du site">');

    var imageUrl = "{{ asset('img/s1.jpg') }}";
    var site7 = L.marker([49.1829, -0.3707]).addTo(map); // Caen
    site7.bindPopup('<b>Site 8</b><br>Caen, France<br><em>Découvertes importantes :</em><br>Restes gallo-romains, artéfacts viking<br><img class="leaflet-popup-img" src="' + imageUrl + '" alt="Photo du site">');

    var imageUrl = "{{ asset('img/s2.jpg') }}";
    var site8 = L.marker([50.6292, 3.0573]).addTo(map); // Lille
    site8.bindPopup('<b>Site 9</b><br>Lille, France<br><em>Découvertes importantes :</em><br>Architecture gothique, vestiges préhistoriques<br><img class="leaflet-popup-img" src="' + imageUrl + '" alt="Photo du site">');

    var imageUrl = "{{ asset('img/s12.jpg') }}";
    var site9 = L.marker([47.7489, -3.3709]).addTo(map); // Lorient
    site9.bindPopup('<b>Site 10</b><br>Lorient, France<br><em>Découvertes importantes :</em><br>Objets de la Seconde Guerre mondiale, restes nautiques<br><img class="leaflet-popup-img" src="' + imageUrl + '" alt="Photo du site">');

    var imageUrl = "{{ asset('img/s13.jpg') }}";
    var site10 = L.marker([43.7384, 7.4246]).addTo(map); // Monaco
    site10.bindPopup('<b>Site 11</b><br>Monaco, France<br><em>Découvertes importantes :</em><br>Architecture ancienne, vestiges romains<br><img class="leaflet-popup-img" src="' + imageUrl + '" alt="Photo du site">');
</script>
@endsection