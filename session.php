<?php

    if ($page == 'login')
    {
        $_SESSION['login'] = false;
        $error = false;
    }
    if(isset($_POST['login'])){
        $login = $_POST['login'];
        // msisdn format check
        switch (strlen($login)) {
            case 9:
                $login = PREFIX.$login;
                break;
            case 10:
                $login = substr($login,1);
                $login = PREFIX.$login;
                break;
            case 11:
                $login = substr($login,2);
                $login = PREFIX.$login;
                break;
            case 12:
                $login = substr($login,3);
                $login = PREFIX.$login;
                break;
            case 13:
                $login = substr($login,4);
                $login = PREFIX.$login;
                break;
        }
        $curl_handle=curl_init();
        curl_setopt($curl_handle,CURLOPT_URL,LOGINURL."?msisdn=$login&contentUrl=".DOMAIN);
        curl_setopt($curl_handle,CURLOPT_CONNECTTIMEOUT,0);
        curl_setopt($curl_handle,CURLOPT_RETURNTRANSFER,1);
        $buffer = curl_exec($curl_handle);
        curl_close($curl_handle);
        
        $result = substr($buffer,0,4);
        if ($result == 'true'){
            $_SESSION['login']=true;
            $error=false;
            //header("Location: index.php?page=home");
            $page="home";
        }
        else {
            $error=true;
        }
    }
?>