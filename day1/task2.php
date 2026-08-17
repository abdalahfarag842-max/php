<?php

$data=[
    ["name"=>"basmala",
    "address"=>"cairo"]
    ,
     ["name"=>"habiba",
    "address"=>"sadat"]
    ,
     ["name"=>"mohammed",
    "address"=>"menoufia"]
];

echo "<table class='table table-bordered table-striped'>";

echo "<thead>";
echo "<tr>";
echo "<th>name</th>";
echo "<th>address</th>";
echo "</tr>";
echo "</thead>";

echo "<tbody>";

foreach ($data as $row) {

    echo "<tr>";

    echo "<td>" . $row["name"] . "</td>";
    echo "<td>" . $row["address"] . "</td>";

    echo "</tr>";
}

echo "</tbody>";

echo "</table>";