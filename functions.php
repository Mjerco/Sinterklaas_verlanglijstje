<?php
    function sanatize($raw_data) {
        global $conn;
        $data = mysqli_real_escape_string($conn, $raw_data);
        return $data;
    }
?>