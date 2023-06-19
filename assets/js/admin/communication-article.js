const comid = document.getElementById('comid');
const comtitle = document.getElementById('comtitle');
const comdate = document.getElementById('comdate');
const comtype = document.getElementById('comtype');
const comcontent = document.getElementById('comcontent');
const comcover = document.getElementById('comcover');

var comID = localStorage.getItem('comID');
var comTitle = localStorage.getItem('comTitle');
var comDate = localStorage.getItem('comDate');
var comType = localStorage.getItem('comType');
var comContent = localStorage.getItem('comContent');
var comCover = localStorage.getItem('comCover');

comid.value = comID;
comtitle.value = comTitle;
comdate.value = comDate;
comtype.value = comType;
comcontent.value = comContent;
comcover.value = comCover;