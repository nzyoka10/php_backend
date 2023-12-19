<?php

    # if statement to print age
    $age = 5;

    if($age <= 11)
    {
        # when age is zero to 11 years Equals CHILD
        echo 'Child';
    }
    elseif($age <= 17)
    {
        # Age is between 12 to 17 year Equals Junior youth
        echo 'Junior Youth';
    }
    elseif($age <= 23)
    {
        # Age between 18 to 23 years Equals senior youth
        echo 'Senior Youth';
    }
    else{
        echo 'Adult';
    }