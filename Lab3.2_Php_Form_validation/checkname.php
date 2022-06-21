<?php

    $name = $_POST['name'];
    //$i = sizeof($name);
    $fl= 0;

    if($name == null){
        echo "username cannot be empty";
    }
    elseif($name != null){
        if($name[0]==0 || $name[0]==1 || $name[0]==2 || $name[0]==3 || $name[0]==4 || $name[0]==5 || $name[0]==6 || $name[0]==7 || $name[0]==8 || $name[0]==9){
            echo "username must start with a letter";
        }
        else{
            for($j=0; $j<10; $j++){
                    if($name[$j] == " "){
                            $fl=1;
                            break;
                    }
            }
            if($fl!=1){
                echo "username should contain at least two words";
            }
            else{
                echo "your name is ".$name;
            }
        }
    }

?>