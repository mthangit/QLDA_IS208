const urlParams = new URLSearchParams(window.location.search);
const id = urlParams.get('id');

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
    const article = document.getElementById('article');

    const articleHeader = document.createElement('section');
    articleHeader.className = 'article-header';
    
    const header = document.createElement('div');
    header.className = 'header-content article-container';

    const headerDate = document.createElement('h5');
    headerDate.className = 'header-date';
    headerDate.textContent = item.newsDate;
    header.appendChild(headerDate);

    const headerTitle = document.createElement('h1');
    headerTitle.className = 'header-title';
    headerTitle.textContent = item.newsTitle;
    header.appendChild(headerTitle);

    const headerImg = document.createElement('img');
    headerImg.className = 'header-img';
    headerImg.src = item.newsCover;
    header.appendChild(headerImg);

    articleHeader.appendChild(header);
    article.appendChild(articleHeader);

    const articleContent = document.createElement('section');
    articleContent.className = 'article-content article-container';

    const articleText = document.createElement('p');
    articleText.className = 'article-text';
    articleText.textContent = item.newsContent;
    articleContent.appendChild(articleText);

    const signature = document.createElement('p');
    signature.className = 'article-signature';
    signature.innerHTML = 'PING GROUP';
    articleContent.appendChild(signature);

    article.appendChild(articleContent);
}
