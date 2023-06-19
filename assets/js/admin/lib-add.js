document.getElementById("form").addEventListener("submit", function(event){
    event.preventDefault();

    var docid = document.getElementById("docid").value;
    var doctitle = document.getElementById("doctitle").value;
    var docdate = document.getElementById("docdate").value;
    var doctype = document.getElementById("doctype").value;
    var doccover = document.getElementById("doccover").value;
    var doccontent = document.getElementById("doccontent").value;
    var docsource = document.getElementById("docsource").value;

    localStorage.setItem('docID', docid);
    localStorage.setItem('docTitle', doctitle);
    localStorage.setItem('docDate', docdate);
    localStorage.setItem('docType', doctype);
    localStorage.setItem('docCover', doccover);
    localStorage.setItem('docContent', doccontent);
    localStorage.setItem('docSource', docsource);

    alert("Thêm tài liệu thành công!");

    window.location.href = 'index.php?thuvien';
})