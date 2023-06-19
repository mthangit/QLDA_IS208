fetch("assets/json/doclibrary.json")
    .then (res => res.json())
    .then (data => {
        const content = document.getElementById('content');
        data.forEach(item => {
            const div = document.createElement('div');
            div.className = 'box';

            console.log(item.docID);

            const divimg = document.createElement('div');
            divimg.className ='img';
            div.appendChild(divimg);

            const img = document.createElement('img');
            img.src = item.docCover;
            divimg.appendChild(img);

            const divtext = document.createElement('div');
            divtext.className = 'text';
            div.appendChild(divtext);

            const span = document.createElement('span');
            span.textContent = item.docDate;
            divtext.appendChild(span);

            const title = document.createElement('a');
            title.className = 'title';
            title.href = 'index.php?tv&id=' + item.docID;
            title.textContent = item.docTitle;
            divtext.appendChild(title);

            const abstract = document.createElement('p');
            abstract.className = 'abstract';
            abstract.textContent = item.docContent;
            divtext.appendChild(abstract);

            const readmore = document.createElement('a');
            readmore.href = 'index.php?tv&id=' + item.docID;
            readmore.innerHTML = 'Read more  ' + '&#x2192;';
            divtext.appendChild(readmore);

            content.appendChild(div);               
            
        });
    })
    .catch(error => {
        console.error('Error:', error);
    });