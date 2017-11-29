<?php
    session_start();

    if ($_SESSION) {
        session_destroy();
        header("location: ../views/index.php");
    }

    header("location: ../views/index.php");
?>