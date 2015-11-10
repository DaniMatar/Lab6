<?php
header("Cache-Control: no-cache");

$results = "";
$searchExpr = "";


if(!empty($_GET['searchExpr'])) {
    include("dbConn.php");
    connectToDB();
    $searchExpr = $_GET['searchExpr'];



    if (strpos($searchExpr,'~') !== false) {

        $str = '::f:o:';
        $str = ltrim($searchExpr, '~');


        selectFilmsWithNameStartingWith($str);

        while ($row = fetchFilms()) {
            $results .=  "EmpID : "  . $row['emp_no'] . "<br/>";
        }

        closeDB();
        echo $results;



    }

    else {

        selectFilmsWithNameStartingWith($searchExpr);

        while ($row = fetchFilms()) {
            $results .= $row['first_name'] . "  " . $row['last_name'] . "<br/>";
        }

        closeDB();
        echo $results;

    }

}


else{


}

?>
















