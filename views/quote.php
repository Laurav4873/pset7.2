<?php
    // This displays the current information about the specified stock
    print("symbol : ". $stock["symbol"]);
    print("<br>");
    print("name : ". $stock["name"]);
    print("<br>");
	
?>
    <h1>Price: $<?= number_format($stock["price"], 3) ?></h1>
	 <div class="form-group">
        <a class="btn btn-default" href= "buy.php?symbol=<?= $stock["symbol"] ?>" type="submit">Buy</a>
    </div>
