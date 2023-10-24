const getPoints = async () => {
    let res = await fetch('api/point/' + idProvider);
    let data = await res.json();
    res = await fetch('api/user/' + idProvider);
    let user = await res.json();
    res = await fetch('api/providers/' + idProvider);
    let provider = await res.json();
    text = '';
    data.forEach(e => {
        text += `
                <div class="card">
                <div class="card-detail">
                    <div class="card-info">
                        <span>NOMBRE: ${e.name}</span>
                        <span>DIRECCION: ${provider.address}</span>
                        <span>INFORMACIÓN DE CONTACTO: </span>
                        <span>TELEFONO: ${provider.phone}</span>
                        <span>CORREO: ${user.email}</span>
                    </div>
                    <div class="card-img">
                        <img src="" alt="" srcset="">
                    </div>
                </div>
                <div class="card-options">
                    <button>EDITAR</button>
                    <button>ELIMINAR</button>
                </div>
            </div>
        `;
    });
    document.querySelector('.cards-container').innerHTML = text;
}

getPoints();