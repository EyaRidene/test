<?php
session_start();
if(isset($_SESSION['nbre']))
{
    $_SESSION['nbre']++;
    echo"Bienvenu c'est votre ${_SESSION['nbre']}";

}
else {
    $_SESSION['nbre']=1;
    echo "Bienvenu c'est votre premiere visite";
}
