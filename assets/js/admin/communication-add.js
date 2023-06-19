document.getElementById("form").addEventListener("submit", function(event){
    event.preventDefault();

    var comid = document.getElementById("comid").value;
    var comtitle = document.getElementById("comtitle").value;
    var comdate = document.getElementById("comdate").value;
    var comtype = document.getElementById("comtype").value;
    var comcontent = document.getElementById("comcontent").value;
    var comcover = document.getElementById("comcover").value;

    localStorage.setItem('comID', comid);
    localStorage.setItem('comTitle', comtitle);
    localStorage.setItem('comDate', comdate);
    localStorage.setItem('comType', comtype);
    localStorage.setItem('comContent', comcontent);
    localStorage.setItem('comCover', comcover);

    alert("Thêm bài truyền thông thành công!");

    window.location.href = 'index.php?truyenthong';
})