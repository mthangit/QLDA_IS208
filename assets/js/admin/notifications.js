fetch ('assets/json/notifications.json')
    .then(response => response.json())
    .then(data => {
        var table = document.getElementById('detail');

        data.forEach(item => {
            var row = table.insertRow();
            row.insertCell().innerText = item.notiID;
            row.insertCell().innerText = item.notiTitle;
            row.insertCell().innerText = item.notiDate;

            var insert = row.insertCell();

            var editbtn = document.createElement('a');
            editbtn.classList.add('btn', 'btn-edit');
            editbtn.href = 'index.php?thongbao-detail&id=' + item.notiID;
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
        var notiID = localStorage.getItem('notiID');
        var notiTitle = localStorage.getItem('notiTitle');
        var notiDate = localStorage.getItem('notiDate');
        var notiContent = localStorage.getItem('notiContent');
        var notiCover = localStorage.getItem('notiCover');
    
        if (notiID){
            var table = document.getElementById('detail');
            var row = table.insertRow();
            row.insertCell().innerText = notiID;
            row.insertCell().innerText = notiTitle;
            row.insertCell().innerText = notiDate;
        
            var insert = row.insertCell();
        
            var editbtn = document.createElement('a');
            editbtn.classList.add('btn', 'btn-edit');
            editbtn.href = 'index.php?thongbao-article';
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