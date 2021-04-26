<?php

    session_start();
    session_unset();
    session_destroy();
    
		echo "<script>alert('Anda Telah Logout');window.location='../?page=home';</script>";
?>