fetch("assets/json/communication.json")
    .then (res => res.json())
    .then (data => {
        const content = document.getElementById('content');
        data.forEach(item => {
            const div = document.createElement('div');
            div.className = 'box';

            console.log(item.comID);

            const divimg = document.createElement('div');
            divimg.className ='img';
            div.appendChild(divimg);

            const img = document.createElement('img');
            img.src = item.comCover;
            divimg.appendChild(img);

            const divtext = document.createElement('div');
            divtext.className = 'text';
            div.appendChild(divtext);

            const span = document.createElement('span');
            span.textContent = item.comDate;
            divtext.appendChild(span);

            const title = document.createElement('a');
            title.className = 'title';
            title.href = 'index.php?tt&id=' + item.comID;
            title.textContent = item.comTitle;
            divtext.appendChild(title);

            const abstract = document.createElement('p');
            abstract.className = 'abstract';
            abstract.textContent = item.comContent;
            divtext.appendChild(abstract);

            const readmore = document.createElement('a');
            readmore.href = 'index.php?tt&id=' + item.comID;
            readmore.innerHTML = 'Read more  ' + '&#x2192;';
            divtext.appendChild(readmore);

            content.appendChild(div);               
            
        });
    })
    .catch(error => {
        console.error('Error:', error);
    });