<?php
require_once 'other_db';

if(isset($_POST['action']) && $_POST['action'] == "insert_account"){
    $user_name = $_POST['user_name'];
    $pass_word = $_POST['pass_word'];

    $db->inser_account($user_name,$pass_word);
}
?>