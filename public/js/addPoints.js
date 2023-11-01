// Crea un mapa en el contenedor con ID 'map'
const map = L.map('map').setView([4.3095, -74.3005], 16);

// Agrega una capa de OpenStreetMap al mapa
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

const chargeMap = async () => {
    let res = await fetch('api/points');
    let data = await res.json();
    if (data.length > 0) {
        data.forEach(async (e, i) => {
            res = await fetch('api/providers/' + e.FK_id_provider);
            let provider = await res.json();
            let marker = L.marker([e.latitude, e.longitud]).addTo(map); // Coordenadas del marcador
            marker.bindPopup(`
                 <b>${e.name}</b>
                 <br />
                 <b>${e.description}</b>
                 <b>${provider.phone}</b>
                 <br />
                 <b>${provider.address}</b>
             `);
        });
    }
};

chargeMap();