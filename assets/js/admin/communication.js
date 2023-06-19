fetch ('assets/json/communication.json')
    .then(response => response.json())
    .then(data => {
        var table = document.getElementById('detail');

        data.forEach(item => {
            var row = table.insertRow();
            row.insertCell().innerText = item.comID;
            row.insertCell().innerText = item.comTitle;
            row.insertCell().innerText = item.comDate;

            var insert = row.insertCell();

            var editbtn = document.createElement('a');
            editbtn.classList.add('btn', 'btn-edit');
            editbtn.href = 'index.php?truyenthong-detail&id=' + item.comID;
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
    var comID = localStorage.getItem('comID');
    var comTitle = localStorage.getItem('comTitle');
    var comDate = localStorage.getItem('comDate');
    var comType = localStorage.getItem('comType');
    var comContent = localStorage.getItem('comContent');
    var comCover = localStorage.getItem('comCover');

    if (comID){
        var table = document.getElementById('detail');
        var row = table.insertRow();
        row.insertCell().innerText = comID;
        row.insertCell().innerText = comTitle;
        row.insertCell().innerText = comDate;

        var insert = row.insertCell();
        var editbtn = document.createElement('a');
        editbtn.classList.add('btn', 'btn-edit');
        editbtn.href = 'index.php?truyenthong-article';
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