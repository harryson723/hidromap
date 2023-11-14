const getProviders = async () => {
    let res = await fetch('api/providers');
    let data = await res.json();
    text = '';
    data.forEach(e => {
        text += `
                <div class="card">
                <div class="card-detail">
                    <div class="card-info">
                        <form class="point-update">
                            <div>
                                <label>NOMBRE:</label>
                                <input value="${e.user.name}"/>
                            </div>
                            <div>
                                <label>DIRECCIÓN:</label>
                                <input value="${e.address}"/>
                            </div>
                            <span>INFORMACIÓN DE CONTACTO: </span>
                            <div>
                                <label>TELEFONO:</label>
                                <input value="${e.phone}"/>
                            </div>
                            <div>
                                <label>CORREO:</label>
                                <input value="${e.user.email}"/>
                            </div>
                            <input class="hidden" value=${e.id}/>
                            <div class="card-options">
                                <button class="btn-update">EDITAR</button>
                                <button class="btn-delete">ELIMINAR</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-img">
                        <img src="${e.image}" alt="" srcset="">
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
            let address = form.querySelectorAll('div input')[1].value;
            let phone = form.querySelectorAll('div input')[2].value;
            let email = form.querySelectorAll('div input')[3].value;
            let id = form.querySelectorAll('div input')[4].value.substring(0, 1);
            const formData = new FormData();
            formData.append('id', id);
            formData.append('name', name);
            formData.append('address', address);
            formData.append('phone', phone);
            formData.append('email', email);
            let res = await fetch('api/providers/update', {
                method: 'POST',
                body: formData
            });
            try {
                let data = await res.json();
                if (data.id) alert('Actualizacion exitosa');
                else alert('Error en la actualizacion');
            } catch (error) {
                alert('Error interno de servidor');
            }
        });
    });
    document.querySelectorAll('.btn-delete').forEach(f => {
        f.addEventListener('click', async e => {
            e.preventDefault();
            let form = e.target.parentElement.parentElement;
            let id = form.querySelectorAll('div input')[4].value.substring(0, 1)
            let res = await fetch('api/providers/' + id, {
                method: 'DELETE'
            });
            let data = await res.json();
            if (data.message == 'Registro eliminado correctamente') {
                let res = await fetch('api/user/updateRol/' + id + '/usuario', {
                    method: 'get'
                });
                location.reload();
            } else {
                alert(data.message);
            }
        });
    });
}

getProviders();