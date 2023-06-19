const urlParams = new URLSearchParams(window.location.search);
const id = urlParams.get('id');

const avatar = document.getElementById('avatar');
const userid = document.getElementById('userid');
const username = document.getElementById('username');
const userdob = document.getElementById('userdob');
const usercid = document.getElementById('usercid');
const userphone = document.getElementById('userphone');
const useraddress = document.getElementById('useraddress');
const useremail = document.getElementById('useremail');
const userdid = document.getElementById('userdid');
const userrole = document.getElementById('userrole');

fetch('assets/json/user.json')
    .then(response => response.json())
    .then(data => {
        const item = data.find(item => item.userID === id);
        displayData(item);
    })
    .catch(error => {
        console.error('Error:', error);
    });

function displayData(item) {
    const avatarimg = document.createElement('img');
    avatarimg.className = 'avatar-img';
    avatarimg.src = item.userAvatar;
    avatar.appendChild(avatarimg);

    userid.value = item.userID;
    username.value = item.userName;
    userdob.value = item.userDOB;
    usercid.value = item.userCID;
    userphone.value = item.userPhone;
    useraddress.value = item.userAddress;
    useremail.value = item.userEmail;
    userdid.value = item.userDepartmentID;
    userrole.value = item.userRole;
}

document.getElementById("form").addEventListener("submit", function(event){
    event.preventDefault();

    var username = document.getElementById('username').value;
    var userdob = document.getElementById('userdob').value;
    var usercid = document.getElementById('usercid').value;
    var userphone = document.getElementById('userphone').value;
    var useraddress = document.getElementById('useraddress').value;
    var useremail = document.getElementById('useremail').value;
    var userdid = document.getElementById('userdid').value;
    var userrole = document.getElementById('userrole').value;

    localStorage.setItem('username', username);
    localStorage.setItem('userdob', userdob);
    localStorage.setItem('usercid', usercid);
    localStorage.setItem('userphone', userphone);
    localStorage.setItem('useraddress', useraddress);
    localStorage.setItem('useremail', useremail);
    localStorage.setItem('userdid', userdid);
    localStorage.setItem('userrole', userrole);

    alert("Cập nhật thông tin tài khoản thành công!");

    var userName = localStorage.getItem('username');
    var userDOB = localStorage.getItem('userdob');
    var userCID = localStorage.getItem('usercid');
    var userPhone = localStorage.getItem('userphone');
    var userAddress = localStorage.getItem('useraddress');
    var userEmail = localStorage.getItem('useremail');
    var userDID = localStorage.getItem('userdid');
    var userRole = localStorage.getItem('userrole');

    username.value = userName;
    userdob.value = userDOB;
    usercid.value = userCID;
    userphone.value = userPhone;
    useraddress.value = userAddress;
    useremail.value = userEmail;
    userdid.value = userDID;
    userrole.value = userRole;

    var test = JSON.stringify(localStorage);
    console.log(test);
})