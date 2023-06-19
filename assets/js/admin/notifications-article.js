const notiid = document.getElementById('notiid');
const notititle = document.getElementById('notititle');
const notidate = document.getElementById('notidate');
const noticontent = document.getElementById('noticontent');
const noticover = document.getElementById('noticover');

var notiID = localStorage.getItem('notiID');
var notiTitle = localStorage.getItem('notiTitle');
var notiDate = localStorage.getItem('notiDate');
var notiContent = localStorage.getItem('notiContent');
var notiCover = localStorage.getItem('notiCover');

notiid.value = notiID;
notititle.value = notiTitle;
notidate.value = notiDate;
noticontent.value = notiContent;
noticover.value = notiCover;
