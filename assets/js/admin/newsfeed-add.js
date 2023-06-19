document.getElementById("form").addEventListener("submit", function(event){
    event.preventDefault();

    var newsid = document.getElementById("newsid").value;
    var newstitle = document.getElementById("newstitle").value;
    var newsdate = document.getElementById("newsdate").value;
    var newscontent = document.getElementById("newscontent").value;
    var newscover = document.getElementById("newscover").value;

    localStorage.setItem('newsID', newsid);
    localStorage.setItem('newsTitle', newstitle);
    localStorage.setItem('newsDate', newsdate);
    localStorage.setItem('newsContent', newscontent);
    localStorage.setItem('newsCover', newscover);

    alert("Thêm bảng tin thành công!");

    window.location.href = 'index.php?bangtin';
})
