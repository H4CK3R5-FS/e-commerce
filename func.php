<?php

function check_login($connect) 
{
    if(isset($_SESSION['id_user'])) 
    {
        $id = $_SESSION['id_user'];
        $query = "SELECT * from users where id_user = '$id' limit 1";
        $result = mysqli_query($connect,$query);
        if ($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }

    }
   
}

function random_num($length)
{
    $text = "";
    if($length < 5)
    {
        $length = 5;
    }
    $len = rand(4, $length);
    for ($i=0; $i < $len; $i++) { 
        $text .= rand(0,9);
    }
    return $text;
}
?>