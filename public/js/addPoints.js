 // Crea un mapa en el contenedor con ID 'map'
 const map = L.map('map').setView([4.3095, -74.3005], 16);

 // Agrega una capa de OpenStreetMap al mapa
 L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
     attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
 }).addTo(map);

 const chargeMap = async () => {
     let res = await fetch('api/points');
     let data = await res.json();
     console.log(data);
     if (data.length > 0) {
         data.forEach(e => {
             let marker = L.marker([e.latitude, e.longitud]).addTo(map); // Coordenadas del marcador
             marker.bindPopup(`
                 <b>${e.name}</b>
                 <br />
                 <b>${e.description}</b>
             `);
         });
     }
 };

 chargeMap();