<?php
case 'profile':
    include_once "../Templates/member/profile.php";
    break; 

case 'editprofile':
    $titleSuffix = ' | Profile';

    if(isset($_POST['profile'])) {
        $result = changeProfile();
        if(result===true) {
            header(string: "Location: /member/profile");
        } else {
            $message="Niet alle velden correct ingevult";
            include_once "../Templates/member/editprofile.php";
        }
        break;
    } else {
        include_once "../Templates/member/editprofile.php";
    }
    break;
?>