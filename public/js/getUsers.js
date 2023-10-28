const getUsers = async () => {
    let res = await fetch('api/user');
    let data = await res.json();
    let text = '';
    data.forEach(e => {
        if (e.rol == 'usuario')
            text += `
            <option value="${e.id}">${e.name}</option>
        `;
    });
    if (data[0].rol == 'usuario') {
        document.getElementById('email').value = data[0].email;
        document.getElementById('name').innerHTML = text;
    }
    document.getElementById('name').addEventListener('click', e => {
        console.log(e.target.value);
        // document.getElementById('email').value = data[e.target.seletedIndex]
    });
}

getUsers();