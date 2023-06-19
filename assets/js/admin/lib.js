fetch ('assets/json/doclibrary.json')
    .then(response => response.json())
    .then(data => {
        var table = document.getElementById('detail');

        data.forEach(item => {
            var row = table.insertRow();
            row.insertCell().innerText = item.docID;
            row.insertCell().innerText = item.docTitle;
            row.insertCell().innerText = item.docType;
            row.insertCell().innerText = item.docDate;
            
            var link = row.insertCell();
            var downloadlink = document.createElement('a');
            downloadlink.className = 'link-download';
            downloadlink.href = item.docSource;
            downloadlink.innerHTML = '<ion-icon name="cloud-download-outline"></ion-icon> ' + 'Link';
            link.appendChild(downloadlink);


            var insert = row.insertCell();
            var editbtn = document.createElement('a');
            editbtn.classList.add('btn', 'btn-edit');
            editbtn.href = 'index.php?thuvien-detail&id=' + item.docID;
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
        var docID = localStorage.getItem('docID');
        var docTitle = localStorage.getItem('docTitle');
        var docDate = localStorage.getItem('docDate');
        var docType = localStorage.getItem('docType');
        var docCover = localStorage.getItem('docCover');
        var docContent = localStorage.getItem('docContent');
        var docSource = localStorage.getItem('docSource');
        
        if (docID){
            var table = document.getElementById('detail');
            var row = table.insertRow();
            row.insertCell().innerText = docID;
            row.insertCell().innerText = docTitle;
            row.insertCell().innerText = docType;
            row.insertCell().innerText = docDate;
            
            var link = row.insertCell();
            var downloadlink = document.createElement('a');
            downloadlink.className = 'link-download';
            downloadlink.href = docSource;
            downloadlink.innerHTML = '<ion-icon name="cloud-download-outline"></ion-icon> ' + 'Link';
            link.appendChild(downloadlink);
        
            var insert = row.insertCell();
        
            var editbtn = document.createElement('a');
            editbtn.classList.add('btn', 'btn-edit');
            editbtn.href = 'index.php?thuvien-article';
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