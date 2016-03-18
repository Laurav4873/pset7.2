<?php
    // This displays the current information about the specified stock
    print("symbol : ". $stock["symbol"]);
    print("<br>");
    print("name : ". $stock["name"]);
    print("<br>");
	print("price : ". number_format($stock["price"], 3))
?>