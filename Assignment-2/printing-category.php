#! /usr/bin/env php
<?php
    $list = array(
        "Type,category",
        "Income,Salary",
        "Income,Business",
        "Income,Rent",
        "Expense,Family",
        "Expense,Personal",
        "Expense,Recreation",
        "Expense,Sadakah",
        "Expense,Gift",
    );
    $file = fopen("categories.csv","w");
    foreach ($list as $line)
    {
        fputcsv($file,explode(',',$line));
    }
    fclose($file);
?>