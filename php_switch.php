<?php 
    # switch statement to garde students

    $grade = 67;

    switch($grade)
    {
        case $grade <= 49:
            echo 'Fail';
            break;

        case $grade <= 59:
            echo 'Pass';
            break;

        case $grade <= 69:
            echo 'V. Good';
            break;
        
        case $grade >= 70:
            echo 'Excellent <b>A</b> ';

        default:
        echo 'No Mark';
        break;
    }
?>