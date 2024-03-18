<?php
    include ('dbCon.php');
    $qw = 'SELECT * From tblcategory';
    $rft = $dbCon->query($qw);
?>