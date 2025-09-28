document.getElementById('prenotazioneForm').addEventListener('submit', function (e) {
    e.preventDefault();

    const nome = document.getElementById('nome').value;
    const cognome = document.getElementById('cognome').value;
    const email = document.getElementById('email').value;
    const telefono = document.getElementById('telefono').value;
    const arrivo = document.getElementById('arrivo').value;
    const partenza = document.getElementById('partenza').value;
    const adulti = document.getElementById('adulti').value;
    const bambini = document.getElementById('bambini').value;
    const note = document.getElementById('note').value;

    const subject = `Richiesta prenotazione da ${nome} ${cognome}`;
    const body = `
Nome: ${nome}
Cognome: ${cognome}
Email: ${email}
Telefono: ${telefono}
Data arrivo: ${arrivo}
Data partenza: ${partenza}
Adulti: ${adulti}
Bambini: ${bambini}
Note: ${note}
    `;

    window.location.href = `mailto:info@hotelampgarden.it?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(body)}`;
});
