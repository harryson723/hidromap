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
                        <form class="point-update">
                            <div>
                                <label>NOMBRE:</label>
                                <input value="${e.name}"/>
                            </div>
                            <div>
                                <label>DIRECCIÓN:</label>
                                <input value="${provider.address}" disabled/>
                            </div>
                            <span>INFORMACIÓN DE CONTACTO: </span>
                            <div>
                                <label>TELEFONO:</label>
                                <input value="${provider.phone}" disabled/>
                            </div>
                            <div>
                                <label>CORREO:</label>
                                <input value="${user.email}" disabled/>
                            </div>
                            <input class="hidden" value=${e.id}/>
                            <div class="card-options">
                                <button class="btn-update">EDITAR</button>
                                <button class="btn-delete">ELIMINAR</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-img">
                        <img src="${provider.image}" alt="" srcset="">
                    </div>
                </div>
            </div>
        `;
    });
    document.querySelector('.cards-container').innerHTML = text;

    document.querySelectorAll('.point-update').forEach(f => {
        f.addEventListener('submit', e => {
            e.preventDefault();
        });
    });
    document.querySelectorAll('.btn-update').forEach(f => {
        f.addEventListener('click', async e => {
            e.preventDefault();
            let form = e.target.parentElement.parentElement;
            let name = form.querySelectorAll('div input')[0].value;
            let id = form.querySelectorAll('div input')[4].value.substring(0, 1);
            const formData = new FormData();
            formData.append('id', id);
            formData.append('name', name);
            let res = await fetch('api/point/' + id, {
                method: 'POST',
                body: formData
            });
            let data = await res.json();
            console.log(data);
        });
    });
    document.querySelectorAll('.btn-delete').forEach(f => {
        f.addEventListener('click', async e => {
            e.preventDefault();
            let form = e.target.parentElement.parentElement;
            let id = form.querySelectorAll('div input')[4].value.substring(0, 1)
            let res = await fetch('api/point/' + id, {
                method: 'DELETE'
            });
            let data = await res.json();
            console.log(data);
            if (data.message == 'Registro eliminado correctamente') {
                location.reload();
            } else {
                alert(data.message);
            }
        });
    });
}

getPoints();