const urlParams = new URLSearchParams(window.location.search);
const id = urlParams.get('id');

const notiid = document.getElementById('notiid');
const notititle = document.getElementById('notititle');
const notidate = document.getElementById('notidate');
const noticontent = document.getElementById('noticontent');
const noticover = document.getElementById('noticover');

fetch('assets/json/notifications.json')
    .then(response => response.json())
    .then(data => {
        const item = data.find(item => item.notiID === id);
        displayData(item);
    })
    .catch(error => {
        console.error('Error:', error);
    });

function displayData(item) {
    notiid.value = item.notiID;
    notititle.value = item.notiTitle;
    notidate.value = item.notiDate;
    noticontent.value = item.notiContent;
    noticover.value = item.notiCover;
}