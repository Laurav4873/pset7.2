    <table class="table table-striped">

    <thead>
        <tr>
            <th>Transaction</th>
            <th>Date</th>
            <th>Symbol</th>
            <th>Shares</th>
            <th>Price</th>
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