const urlParams = new URLSearchParams(window.location.search);
const id = urlParams.get('id');

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
    const article = document.getElementById('article');

    const articleHeader = document.createElement('section');
    articleHeader.className = 'article-header';
    
    const header = document.createElement('div');
    header.className = 'header-content article-container';

    const headerDate = document.createElement('h5');
    headerDate.className = 'header-date';
    headerDate.textContent = item.docDate;
    header.appendChild(headerDate);

    const headerTitle = document.createElement('h1');
    headerTitle.className = 'header-title';
    headerTitle.textContent = item.docTitle;
    header.appendChild(headerTitle);

    const headerImg = document.createElement('img');
    headerImg.className = 'header-img';
    headerImg.src = item.docCover;
    header.appendChild(headerImg);

    articleHeader.appendChild(header);
    article.appendChild(articleHeader);

    const articleContent = document.createElement('section');
    articleContent.className = 'article-content article-container';

    const articleText = document.createElement('p');
    articleText.className = 'article-text';
    articleText.textContent = item.docContent;
    articleContent.appendChild(articleText);

    const signature = document.createElement('p');
    signature.className = 'article-link';
    signature.textContent = 'Tải xuống để xem chi tiết mẫu biểu:';
    articleContent.appendChild(signature);

    const link = document.createElement('a');
    link.className = 'download-link';
    link.href = item.docSource;
    link.download = item.docTitle;
    link.innerHTML = '<ion-icon name="cloud-download-outline"></ion-icon> ' + item.docTitle;
    articleContent.appendChild(link);

    const linebreak = document.createElement('div');
    linebreak.className = 'line-break';
    articleContent.appendChild(linebreak);

    article.appendChild(articleContent);
}
