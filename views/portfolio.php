    <h2><?= $user["username"] ?></h2>
    <h1><?= $user["name"] ?></h1>
    <h1><?= $user["last_name"] ?></h1>
    
   <table class="table table-striped">

    <thead>
        <tr>
            <th>Symbol</th>
            <th>Name</th>
            <th>Shares</th>
            <th>Price</th>
            <th>TOTAL</th>
        </tr>
    </thead>

    <tbody>
    <?php
	    foreach ($positions as $portfolio)	
        {   
            echo("<tr>");
            echo("<td>" . $portfolio["symbol"] . "</td>");
            echo("<td>" . $portfolio["name"] . "</td>");
            echo("<td>" . $portfolio["last_nae"] . "</td>");
            echo("<td>" . $portfolio["shares"] . "</td>");
            echo("<td>$" . number_format($portfolio["price"], 2) . "</td>");
            echo("<td>$" . number_format($portfolio["total"], 2) . "</td>");
            echo("</tr>");
        }
    ?>

    <tr>
        <td>CASH</td>
        <td>$<?=number_format($user["cash"], 2)?></td>
    </tr>

    </tbody>

</table>
</div>