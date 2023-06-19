const newsid = document.getElementById('newsid');
const newstitle = document.getElementById('newstitle');
const newsdate = document.getElementById('newsdate');
const newscontent = document.getElementById('newscontent');
const newscover = document.getElementById('newscover');

    var newsID = localStorage.getItem('newsID');
    var newsTitle = localStorage.getItem('newsTitle');
    var newsDate = localStorage.getItem('newsDate');
    var newsContent = localStorage.getItem('newsContent');
    var newsCover = localStorage.getItem('newsCover');

    newsid.value = newsID;
    newstitle.value = newsTitle;
    newsdate.value = newsDate;
    newscontent.value = newsContent;
    newscover.value = newsCover;
