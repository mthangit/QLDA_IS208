fetch ('assets/json/user.json')
    .then(response => response.json())
    .then(data => {
        var table = document.getElementById('detail');

        data.forEach(item => {
            var row = table.insertRow();
            row.insertCell().innerText = item.userID;
            row.insertCell().innerText = item.userName;
            row.insertCell().innerText = item.userEmail;

            var insert = row.insertCell();

            var editbtn = document.createElement('a');
            editbtn.classList.add('btn', 'btn-edit');
            editbtn.href = 'index.php?taikhoan-edit&id=' + item.userID;
            editbtn.innerText = 'Edit';

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

    function deleteRow() {
        var row = this.parentNode.parentNode; 
        row.parentNode.removeChild(row); 
    }