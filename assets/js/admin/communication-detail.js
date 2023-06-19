const urlParams = new URLSearchParams(window.location.search);
const id = urlParams.get('id');

const comid = document.getElementById('comid');
const comtitle = document.getElementById('comtitle');
const comdate = document.getElementById('comdate');
const comtype = document.getElementById('comtype');
const comcontent = document.getElementById('comcontent');
const comcover = document.getElementById('comcover');

fetch('assets/json/communication.json')
    .then(response => response.json())
    .then(data => {
        const item = data.find(item => item.comID === id);
        displayData(item);
    })
    .catch(error => {
        console.error('Error:', error);
    });

function displayData(item){
    comid.value = item.comID;
    comtitle.value = item.comTitle;
    comdate.value = item.comDate;
    comtype.value = item.comType;
    comcontent.value = item.comContent;
    comcover.value = item.comCover;
}