const getUsers = async () => {
    let res = await fetch('api/user');
    let data = await res.json();
    let text = '';
    console.log(data)
    data.forEach(e => {
        if (e.rol == 'usuario')
            text += `
            <option value="${e.id}">${e.name}</option>
        `;
    });
    document.getElementById('email').value = data[0].email;
    document.getElementById('name').innerHTML = text;
    document.getElementById('name').addEventListener('click', e => {
        console.log(e.target.selectedIndex);
        document.getElementById('email').value = data[e.target.selectedIndex].email
    });
}

getUsers();