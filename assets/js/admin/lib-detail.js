const urlParams = new URLSearchParams(window.location.search);
const id = urlParams.get('id');

const docid = document.getElementById('docid');
const doctitle = document.getElementById('doctitle');
const docdate = document.getElementById('docdate');
const doctype = document.getElementById('doctype');
const doccover = document.getElementById('doccover');
const doccontent = document.getElementById('doccontent');
const docsource = document.getElementById('docsource');

fetch('assets/json/doclibrary.json')
    .then(response => response.json())
    .then(data => {
        const item = data.find(item => item.docID === id);
        displayData(item);
    })
    .catch(error => {
        console.error('Error:', error);
    });

function displayData(item) {
    docid.value = item.docID;
    doctitle.value = item.docTitle;
    docdate.value = item.docDate;
    doctype.value = item.docType;
    doccover.value = item.docCover;
    doccontent.value = item.docContent;
    docsource.value = item.docSource;
}