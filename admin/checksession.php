<?php
session_start();
if(!isset($_SESSION['usr']) && !isset($_SESSION['pas'] ))
{
    header('Location: index.php');
}
?> 