<?php
session_start();
error_reporting(0);
function checkUser(){
    if(!empty($_SESSION['user_name'])){
    }else {
      header('location: index.php');
    }
  
  }
  function log_out(){
    if(isset($_POST['log_out'])){
  session_start();
  session_destroy();
  session_unset();
  unset($_SESSION['user_name']);
    header('location: index.php');
  }
}
function login(){
  if(isset($_POST['login'])){
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    $login = new login($user_name,$password);
    if($login->loginUser()){
    }else {
      echo  "<script>alert('Invalid Details');</script>"; 
    }
  }
}
function add_emp(){
  if(isset($_POST['submit'])){
    $emp_id = $_POST['emp_id'];
    $L_name = $_POST['L_name'];
    $F_name = $_POST['F_name'];
    $M_name = $_POST['M_name'];
    $age = $_POST['age'];
    $date_birth = $_POST['date_birth'];
    $gender = $_POST['gender'];
    $c_status = $_POST['c_status'];
    $H_address = $_POST['H_address'];
    $contact_number = $_POST['contact_number'];
    $email_add = $_POST['email_add'];
    $position = $_POST['position'];
    $dept = $_POST['dept'];
    $date_hired = $_POST['date_hired'];
    $emp_status = $_POST['emp_status'];
    $rank = $_POST['rank'];
    $salary = $_POST['salary'];
    $date_permanency = $_POST['date_permanency'];
    $sss = $_POST['sss'];
    $philh = $_POST['philh'];
    $pag_ibig = $_POST['pag_ibig'];
    $tin = $_POST['tin'];
    $B_degree = $_POST['B_degree'];
    $major = $_POST['major'];
    $H_received = $_POST['H_received'];
    $M_degree = $_POST['M_degree'];
    $D_degree = $_POST['D_degree'];
    $license = $_POST['license'];
    $v_leave  = $_POST['v_leave'];
    $s_leave = $_POST['s_leave'];
    $e_leave = $_POST['e_leave'];
    $mp_leave = $_POST['mp_leave'];
    $sp_leave = $_POST['sp_leave'];
    $others = $_POST['others'];
    $emgncy_person = $_POST['emgncy_person'];
    $emgncy_relation = $_POST['emgncy_relation'];
    $emgncy_contactnumber = $_POST['emgncy_contactnumber'];
    $emgncy_address = $_POST['emgncy_address'];
    $add_employee = new add_employee($emp_id,$L_name,$F_name,$M_name,$age,$date_birth,$gender,$c_status,$H_address,$contact_number,$email_add,$position,$dept,$date_hired,$emp_status,$rank,$salary,$date_permanency,$sss,$philh,$pag_ibig,$tin,$B_degree,
    $major,$H_received,$M_degree,$D_degree,$license,$v_leave,$s_leave,$e_leave,$mp_leave,$sp_leave,$others,$emgncy_person,$emgncy_relation,$emgncy_contactnumber,$emgncy_address,);
    if($add_employee->add_emps()){
      echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
      Successfully Add!
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';
    }else{
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Failed to Add!
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';
    }

  }
}

?>