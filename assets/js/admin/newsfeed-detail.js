const urlParams = new URLSearchParams(window.location.search);
const id = urlParams.get('id');

const newsid = document.getElementById('newsid');
const newstitle = document.getElementById('newstitle');
const newsdate = document.getElementById('newsdate');
const newscontent = document.getElementById('newscontent');
const newscover = document.getElementById('newscover');

fetch('assets/json/newsfeed.json')
    .then(response => response.json())
    .then(data => {
        const item = data.find(item => item.newsID === id);
        displayData(item);
    })
    .catch(error => {
        console.error('Error:', error);
    });

function displayData(item) {
    newsid.value = item.newsID;
    newstitle.value = item.newsTitle;
    newsdate.value = item.newsDate;
    newscontent.value = item.newsContent;
    newscover.value = item.newsCover;
}