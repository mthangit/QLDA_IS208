document.getElementById("form").addEventListener("submit", function(event){
    event.preventDefault();

    var notiid = document.getElementById("notiid").value;
    var notititle = document.getElementById("notititle").value;
    var notidate = document.getElementById("notidate").value;
    var noticontent = document.getElementById("noticontent").value;
    var noticover = document.getElementById("noticover").value;

    localStorage.setItem('notiID', notiid);
    localStorage.setItem('notiTitle', notititle);
    localStorage.setItem('notiDate', notidate);
    localStorage.setItem('notiContent', noticontent);
    localStorage.setItem('notiCover', noticover);

    alert("Thêm thông báo thành công!");

    window.location.href = 'index.php?thongbao';
})
