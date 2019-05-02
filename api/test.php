<?php
    include_once("user.php");
?>
<?php

    $testuser = new Admin('admin1', 'Admin 1', 'Cibanteng', '1nimda', '150k', '0853', 'admin');
    // $testuser = new Customer('0853', 'user', TRUE);
    foreach ($testuser->getData() as $data) {
        echo $data . ' | ';
    }

?>