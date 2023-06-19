fetch("assets/json/newsfeed.json")
    .then (res => res.json())
    .then (data => {
        const content = document.getElementById('content');
        data.forEach(item => {
            const div = document.createElement('div');
            div.className = 'box';

            console.log(item.newsID);

            const divimg = document.createElement('div');
            divimg.className ='img';
            div.appendChild(divimg);

            const img = document.createElement('img');
            img.src = item.newsCover;
            divimg.appendChild(img);

            const divtext = document.createElement('div');
            divtext.className = 'text';
            div.appendChild(divtext);

            const span = document.createElement('span');
            span.textContent = item.newsDate;
            divtext.appendChild(span);

            const title = document.createElement('a');
            title.className = 'title';
            title.href = 'index.php?bt&id=' + item.newsID;
            title.textContent = item.newsTitle;
            divtext.appendChild(title);

            const abstract = document.createElement('p');
            abstract.className = 'abstract';
            abstract.textContent = item.newsContent;
            divtext.appendChild(abstract);

            const readmore = document.createElement('a');
            readmore.href = 'index.php?bt&id=' + item.newsID;
            readmore.innerHTML = 'Read more  ' + '&#x2192;';
            divtext.appendChild(readmore);

            content.appendChild(div);               
            
        });
    })
    .catch(error => {
        console.error('Error:', error);
    });