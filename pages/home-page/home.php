<?php
    if (str_contains($_SERVER["REQUEST_URI"], '/home')) {
        include("company-description/company-description.php");
    }
?>