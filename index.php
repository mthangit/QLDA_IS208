<?php

require_once 'assets/php/functions.php';
if(isset($_GET['newfp'])){
    unset($_SESSION['auth_temp']);
    unset($_SESSION['forgot_email']);
    unset($_SESSION['forgot_code']);
}
if(isset($_SESSION['Auth'])){
    $user = getUser($_SESSION['userdata']['id']);
    $posts = filterPosts();
    $follow_suggestions = filterFollowSuggestion();
}

$pagecount = count($_GET);


//manage pages
if(isset($_SESSION['Auth']) && $user['ac_status']==1 && !$pagecount){
    showPage('/user/header',['page_title'=>'Home']);
    showPage('/user/home');
    showPage('/user/footer');
}
elseif(isset($_SESSION['Auth']) && $user['ac_status']==3 && !$pagecount){
  //  showPage('/user/header',['page_title'=>'Home']);
    showPage('/admin/home');
  //  showPage('/user/footer');
}//elseif(isset($_SESSION['Auth']) && $user['ac_status']==0 && !$pagecount){
//
  //  showPage('header',['page_title'=>'Verify Your Email']);
  //  showPage('verify_email');}
elseif(isset($_SESSION['Auth']) && $user['ac_status']==2 && !$pagecount){
    showPage('header',['page_title'=>'Blocked']);
    showPage('blocked');
}elseif(isset($_SESSION['Auth']) && isset($_GET['editprofile']) && $user['ac_status']==1){
    showPage('header',['page_title'=>'Edit Profile']);
  //  showPage('navbar');
    showPage('edit_profile');
}
elseif(isset($_SESSION['Auth']) && isset($_GET['thongbao']) && $user['ac_status']==1){
    showPage('/user/header',['page_title'=>'Thong bao']);
 //   showPage('navbar');
    showPage('/user/thongbao/thongbao');
    showPage('/user/footer');
}
elseif(isset($_SESSION['Auth']) && isset($_GET['bangtin']) && $user['ac_status']==1){
    showPage('/user/header',['page_title'=>'  Bảng tin']);
  //  showPage('navbar');
    showPage('/user/bangtin/bangtin');
    showPage('/user/footer');
}
elseif(isset($_SESSION['Auth']) && isset($_GET['truyenthong']) && $user['ac_status']==1){
    showPage('/user/header',['page_title'=>'  Truyền thông']);
   // showPage('navbar');
    showPage('/user/truyenthong/truyenthong');
    showPage('/user/footer');
}
elseif(isset($_SESSION['Auth']) && isset($_GET['lieclac']) && $user['ac_status']==1){
    showPage('/user/header',['page_title'=>'  Liên lạc']);
   // showPage('navbar');
    showPage('/user/lienlac/lienlac');
    showPage('/user/footer');
}
elseif(isset($_SESSION['Auth']) && isset($_GET['yeucauliendonvi']) && $user['ac_status']==1){
  //  showPage('/user/header',['page_title'=>'liên đơn vị']);
  //  showPage('navbar');
    showPage('/user/liendonvi/liendonvi');
    showPage('/user/footer');
}
elseif(isset($_SESSION['Auth']) && isset($_GET['thuvien']) && $user['ac_status']==1){
    showPage('/user/header',['page_title'=>'  Thư viện']);
 //   showPage('navbar');
    showPage('/user/thuvien/thuvien');
    
}
elseif(isset($_SESSION['Auth']) && isset($_GET['cocautochuc']) && $user['ac_status']==1){
    showPage('/user/header',['page_title'=>'  Cơ cấu tổ chức']);
   // showPage('navbar');
    showPage('/user/cocautochuc/cocautochuc');
    showPage('/user/footer');
}
elseif(isset($_SESSION['Auth']) && isset($_GET['lichphonghop']) && $user['ac_status']==1){
    showPage('/user/header',['page_title'=>'  Lịch phòng họp']);
   // showPage('navbar');
    showPage('/user/lichphonghop/lichphonghop');
    showPage('/user/footer');
}







elseif(isset($_SESSION['Auth']) && isset($_GET['home']) && $user['ac_status']==3){
    // showPage('/user/header',['page_title'=>'Thong bao']);
  //   showPage('admin/nav');
  //   showPage('admin/sidebar');
     showPage('/admin/home');
   //  showPage('/user/footer');
 }
elseif(isset($_SESSION['Auth']) && isset($_GET['thongbao']) && $user['ac_status']==3){
   // showPage('/user/header',['page_title'=>'Thong bao']);
 //   showPage('admin/nav');
 //   showPage('admin/sidebar');
    showPage('/admin/thongbao/thongbao');
  //  showPage('/user/footer');
}
elseif(isset($_SESSION['Auth']) && isset($_GET['bangtin']) && $user['ac_status']==3){
 //   showPage('/user/header',['page_title'=>'  Bảng tin']);
  //  showPage('navbar');
    showPage('/admin/bangtin/bangtin');
 //   showPage('/user/footer');
}
elseif(isset($_SESSION['Auth']) && isset($_GET['truyenthong']) && $user['ac_status']==3){
 //   showPage('/user/header',['page_title'=>'  Truyền thông']);
   // showPage('navbar');
    showPage('/admin/truyenthong/truyenthong');
 //   showPage('/user/footer');
}
elseif(isset($_SESSION['Auth']) && isset($_GET['truyenthong-article']) && $user['ac_status']==3){
    //   showPage('/user/header',['page_title'=>'  Truyền thông']);
      // showPage('navbar');
       showPage('/admin/truyenthong/truyenthong-article');
    //   showPage('/user/footer');
   }
elseif(isset($_SESSION['Auth']) && isset($_GET['lieclac']) && $user['ac_status']==3){
//    showPage('/user/header',['page_title'=>'  Liên lạc']);
   // showPage('navbar');
    showPage('/admin/lienlac/lienlac');
 //   showPage('/user/footer');
}
elseif(isset($_SESSION['Auth']) && isset($_GET['liendonvi']) && $user['ac_status']==3){
  //  showPage('/user/header',['page_title'=>'liên đơn vị']);
  //  showPage('navbar');
    showPage('/admin/liendonvi/liendonvi');
 //   showPage('/user/footer');
}
elseif(isset($_SESSION['Auth']) && isset($_GET['thuvien']) && $user['ac_status']==3){
   // showPage('/user/header',['page_title'=>'  Thư viện']);
 //   showPage('navbar');
    showPage('/admin/thuvien/thuvien');
    
}
elseif(isset($_SESSION['Auth']) && isset($_GET['taikhoan']) && $user['ac_status']==3){
    // showPage('/user/header',['page_title'=>'  Thư viện']);
  //   showPage('navbar');
     showPage('/admin/taikhoan/taikhoan');
     
 }
 elseif(isset($_SESSION['Auth']) && isset($_GET['truyenthong-add']) && $user['ac_status']==3){
    // showPage('/user/header',['page_title'=>'  Thư viện']);
  //   showPage('navbar');
     showPage('/admin/truyenthong/truyenthong-add');
     
 }
 elseif(isset($_SESSION['Auth']) && isset($_GET['truyenthong-article']) && $user['ac_status']==3){
    // showPage('/user/header',['page_title'=>'  Thư viện']);
  //   showPage('navbar');
     showPage('/admin/truyenthong/truyenthong-article');
     
 }
 elseif(isset($_SESSION['Auth']) && isset($_GET['thuvien-article']) && $user['ac_status']==3){
    // showPage('/user/header',['page_title'=>'  Thư viện']);
  //   showPage('navbar');
     showPage('/admin/thuvien/thuvien-article');
     
 }
 elseif(isset($_SESSION['Auth']) && isset($_GET['thuvien-add']) && $user['ac_status']==3){
    // showPage('/user/header',['page_title'=>'  Thư viện']);
  //   showPage('navbar');
     showPage('/admin/thuvien/thuvien-add');
     
 }
 elseif(isset($_SESSION['Auth']) && isset($_GET['bangtin-article']) && $user['ac_status']==3){
    // showPage('/user/header',['page_title'=>'  Thư viện']);
  //   showPage('navbar');
     showPage('/admin/bangtin/bangtin-article');
     
 }
 elseif(isset($_SESSION['Auth']) && isset($_GET['bangtin-add']) && $user['ac_status']==3){
    // showPage('/user/header',['page_title'=>'  Thư viện']);
  //   showPage('navbar');
     showPage('/admin/bangtin/bangtin-add');
     
 }
 elseif(isset($_SESSION['Auth']) && isset($_GET['thongbao-article']) && $user['ac_status']==3){
    // showPage('/user/header',['page_title'=>'  Thư viện']);
  //   showPage('navbar');
     showPage('/admin/thongbao/thongbao-article');
     
 }
 elseif(isset($_SESSION['Auth']) && isset($_GET['thongbao-add']) && $user['ac_status']==3){
    // showPage('/user/header',['page_title'=>'  Thư viện']);
  //   showPage('navbar');
     showPage('/admin/thongbao/thongbao-add');
     
 }











// //elseif (isset($_GET['id']) && $user['ac_status'] == 1) {
//  //   $id = $_GET['id'];
// //
//  //   showPage('/user/header', ['page_title' => 'Thông báo a']);
//     showPage('/user/thongbao/thongbao-article', ['id' => $id]);
//     showPage('/user/footer');
// }
// elseif (isset($_GET['id']) && $user['ac_status'] == 1) {
//     $id = $_GET['id'];

//     showPage('/user/header', ['page_title' => 'Bảng tin a']);
//     showPage('/user/bangtin/bangtin-article', ['id' => $id]);
//     showPage('/user/footer');
// }
elseif (isset($_GET['id'])) {
    $id = $_GET['id'];

    if (isset($_GET['tb'])) {
        // Xử lý trường hợp thông báo
        // ...
        showPage('/user/header', ['page_title' => 'Thông báo a']);
        showPage('/user/thongbao/thongbao-article', ['id' => $id]);
        showPage('/user/footer');
    } elseif (isset($_GET['bt'])) {
        // Xử lý trường hợp bảng tin
        // ...
        showPage('/user/header', ['page_title' => 'Bảng tin a']);
        showPage('/user/bangtin/bangtin-article', ['id' => $id]);
        showPage('/user/footer');
    }
    elseif (isset($_GET['tv'])) {
        // Xử lý trường hợp bảng tin
        // ...
        showPage('/user/header', ['page_title' => 'Thư viện a']);
        showPage('/user/thuvien/thuvien-article', ['id' => $id]);
        showPage('/user/footer');
    }
    elseif (isset($_GET['tt'])) {
        // Xử lý trường hợp truyền thông
        // ...
        showPage('/user/header', ['page_title' => 'Truyền thông a']);
        showPage('/user/truyenthong/truyenthong-article', ['id' => $id]);
        showPage('/user/footer');
    }










    elseif (isset($_GET['thuvien-detail'])) {
       
       
        showPage('/user/thuvien/thuvien-detail', ['id' => $id]);
    }
    elseif (isset($_GET['taikhoan-edit'])) {    
        showPage('/admin/taikhoan/taikhoan-edit', ['id' => $id]);
    }
    elseif (isset($_GET['truyenthong-detail'])) {    
         showPage('/admin/truyenthong/truyenthong-detail', ['id' => $id]);
    }
    elseif (isset($_GET['bangtin-detail'])) {    
        showPage('/admin/bangtin/bangtin-detail', ['id' => $id]);
   }
   elseif (isset($_GET['thongbao-detail'])) {    
    showPage('/admin/thongbao/thongbao-detail', ['id' => $id]);
}
 
     
        
    
















}


elseif(isset($_SESSION['Auth']) && isset($_GET['u']) && $user['ac_status']==1){
    $profile = getUserByUsername($_GET['u']);
    if(!$profile){
        showPage('header',['page_title'=>'User Not Found']);
        showPage('navbar');
        showPage('user_not_found');

    }else{
     $profile_post = getPostById($profile['id']);  
     $profile['followers']=getFollowers($profile['id']);
     $profile['following']=getFollowing($profile['id']);
        showPage('header',['page_title'=>$profile['first_name'].' '.$profile['last_name']]);
        showPage('navbar');
        showPage('profile');
        showPage('footer');
    }
  
}elseif(isset($_GET['signup'])){
    showPage('header',['page_title'=>'PingGroup - SignUp']);
    showPage('signup');
}elseif(isset($_GET['login'])){
   
    showPage('header',['page_title'=>'PingGroup - Login']);
    showPage('login');
}elseif(isset($_GET['forgotpassword'])){
    
    showPage('header',['page_title'=>'PingGroup - Forgot Password']);
    showPage('forgot_password');
}




























else{
    if(isset($_SESSION['Auth']) && $user['ac_status']==1){
        showPage('header',['page_title'=>'Home']);
        showPage('navbar');
        showPage('wall');
    }
    if(isset($_SESSION['Auth']) && $user['ac_status']==3){
        showPage('header',['page_title'=>'Home']);
        showPage('navbar');
        showPage('wall');
    }
  //  elseif(isset($_SESSION['Auth']) && $user['ac_status']==0){

  //      showPage('header',['page_title'=>'Verify Your Email']);
 //       showPage('verify_email');
  //  }
    elseif(isset($_SESSION['Auth']) && $user['ac_status']==2){
        showPage('header',['page_title'=>'Blocked']);
        showPage('blocked');
    }else{
        showPage('header',['page_title'=>'PingGroup - Login']);
        showPage('login');
    }
  
}

































unset($_SESSION['error']);
unset($_SESSION['formdata']);







