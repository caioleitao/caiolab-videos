<?php
        function thumb($arq){
            $url = "images/$arq";
            if(is_null($arq) || !file_exists($url)){
                return "images/notfound.png";
            } else{
                return $url;
            }
        }

        function logout(){
            unset($_SESSION['username']);
            unset($_SESSION['email']);
            unset($_SESSION['type']);
        }

        function is_logged(){
            if(empty($_SESSION['username'])){
                return false;
            } else{
                return true;
            }
        }

        function is_admin(){
            $t = $_SESSION['type'] ?? null;
            if(is_null($t)){
                return false;
            } else{
                if($t == 'admin'){
                    return true;
                } else{
                    return false;
                }
            }
        }   

        function is_user(){
            $t = $_SESSION['type'] ?? null;
            if(is_null($t)){
                return false;
            } else{
                if($t == 'user'){
                    return true;
                } else{
                    return false;
                }
            }
        }   

        function msg_success(){
            $resp = "<div class='success'></div>";
            return $resp;
        }

        function msg_notice(){

        }

        function msg_error(){

        }
    ?>