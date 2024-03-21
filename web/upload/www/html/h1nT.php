<?php

if($_GET['action'] == "givemeresource"){
    highlight_file('index.php');
}
else{
     highlight_file(__File__);
}