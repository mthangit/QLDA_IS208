fetch ('assets/json/newsfeed.json')
    .then(response => response.json())
    .then(data => {
        var table = document.getElementById('detail');

        data.forEach(item => {
            var row = table.insertRow();
            row.insertCell().innerText = item.newsID;
            row.insertCell().innerText = item.newsTitle;
            row.insertCell().innerText = item.newsDate;

            var insert = row.insertCell();

            var editbtn = document.createElement('a');
            editbtn.classList.add('btn', 'btn-edit');
            editbtn.href = 'index.php?bangtin-detail&id=' + item.newsID;
            editbtn.innerText = 'Detail';

            var deletebtn = document.createElement('a');
            deletebtn.classList.add('btn', 'btn-delete');
            deletebtn.onclick = deleteRow;
            deletebtn.innerText = 'Delete';
            
            insert.appendChild(editbtn);
            insert.appendChild(document.createTextNode(' | '));
            insert.appendChild(deletebtn);
        });
    })
    .catch(error => {
        console.error('Error:', error);
    });

    document.addEventListener('DOMContentLoaded', function() {
        var newsID = localStorage.getItem('newsID');
        var newsTitle = localStorage.getItem('newsTitle');
        var newsDate = localStorage.getItem('newsDate');
        var newsContent = localStorage.getItem('newsContent');
        var newsCover = localStorage.getItem('newsCover');
    
        if (newsID){
            var table = document.getElementById('detail');
            var row = table.insertRow();
            row.insertCell().innerText = newsID;
            row.insertCell().innerText = newsTitle;
            row.insertCell().innerText = newsDate;
        
            var insert = row.insertCell();
        
            var editbtn = document.createElement('a');
            editbtn.classList.add('btn', 'btn-edit');
            editbtn.href = 'index.php?bangtin-article';
            editbtn.innerText = 'Detail';
        
            var deletebtn = document.createElement('a');
            deletebtn.classList.add('btn', 'btn-delete');
            deletebtn.onclick = deleteRow;
            deletebtn.innerText = 'Delete';
                    
            insert.appendChild(editbtn);
            insert.appendChild(document.createTextNode(' | '));
            insert.appendChild(deletebtn);
        }
    })

    function deleteRow() {
        var row = this.parentNode.parentNode; 
        row.parentNode.removeChild(row); 
    }