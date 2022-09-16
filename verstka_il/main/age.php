<?php
function age(){

    if($_SESSION['age'] >= 18){
        return 1;
    }
    elseif($_SESSION['age'] >= 5 && $_SESSION['age'] < 18){
        return 2;
    }
    else{
        return 3;
    }
}