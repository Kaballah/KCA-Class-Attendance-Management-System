<?php
    include('./dbconnect');

    $sql = 'INSERT INTO cbit_students ( SELECT * regNumber, name FROM test2.students_table';
?>