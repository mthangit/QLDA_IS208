const docid = document.getElementById('docid');
const doctitle = document.getElementById('doctitle');
const docdate = document.getElementById('docdate');
const doctype = document.getElementById('doctype');
const doccover = document.getElementById('doccover');
const doccontent = document.getElementById('doccontent');
const docsource = document.getElementById('docsource');

var docID = localStorage.getItem('docID');
var docTitle = localStorage.getItem('docTitle');
var docDate = localStorage.getItem('docDate');
var docType = localStorage.getItem('docType');
var docCover = localStorage.getItem('docCover');
var docContent = localStorage.getItem('docContent');
var docSource = localStorage.getItem('docSource');

docid.value = docID;
doctitle.value = docTitle;
docdate.value = docDate;
doctype.value = docType;
doccover.value = docCover;
doccontent.value = docContent;
docsource.value = docSource;
