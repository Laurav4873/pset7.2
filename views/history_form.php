    <table class="table table-striped">

    <thead>
        <tr>
            <th style= "color: blue; font-family: Verdana">Transaction</th>
            <th style= "color: red; font-family: Verdana">Date</th>
            <th style= "color: yellow; font-family: Verdana">Symbol</th>
            <th style= "color: green; font-family: Verdana">Shares</th>
            <th style= "color: blue; font-family: Verdana">Price</th>
        </tr>
    </thead>

    <tbody>
    <?php
	    foreach ($positions as $history)	
        {   
            echo("<tr>");
            echo("<td>" . $history["transaction"] . "</td>");
            echo("<td>" . $history["date"] . "</td>");
            echo("<td>" . $history["symbol"] . "</td>");
            echo("<td>" . $history["share"] . "</td>");
            echo("<td>$" . number_format($history["price"], 2) . "</td>");
            echo("</tr>");
        }
    ?>
    </tbody>

</table>
</div>