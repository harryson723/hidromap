const chargeSuggestion = async () => {
    const container = document.querySelector('.cards-container');
    let res = await fetch('api/suggestion');
    let data = await res.json();
    let text = '';
    data.forEach(e => {
        text += `
<div class="card">
        <div class="card-detail">
            <div class="card-info">
                <span>NOMBRE: ${e.name}</span>
                <span>CORREO: ${e.email}</span>
                <span>COMENTARIO: </span>
                <div class="comment">${e.comment}</div>
            </div>
        </div>
    </div>
`;
    });
    container.innerHTML = text;
}
chargeSuggestion();