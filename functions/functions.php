<?php

/*
    connection variable receives four parameters:

    1.- server
    2.- user
    3.- password of user
    4.- name of database

*/
$con = mysqli_connect("localhost","root","","ecommerce");

// getting the categories

function getCats(){

    //to make useful the variable connection inside function
    global $con;
    $get_cats = "select * from categories";
    /*

        query in the database receives two parameters:

        1.- connection
        2.- MySQL query

    */
    $run_cats = mysqli_query($con, $get_cats);

    while($row_cats = mysqli_fetch_array($run_cats)){

        $cat_id = $row_cats['cat_id'];
        $cat_title = $row_cats['cat_title'];

        echo "<li><a href='#'>$cat_title</a></li>";

    }

}

//getting brands

function getBrands(){

    //to make useful the variable connection inside function
    global $con;
    $get_brands = "select * from brands";
    /*

        query in the database receives two parameters:

        1.- connection
        2.- MySQL query

    */
    $run_brands = mysqli_query($con, $get_brands);

    while($row_brands = mysqli_fetch_array($run_brands)){

        $brand_id = $row_brands['brand_id'];
        $brand_title = $row_brands['brand_title'];

        echo "<li><a href='#'>$brand_title</a></li>";

    }

}







?>
