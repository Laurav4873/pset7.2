<form action="sell.php" method="post">
    <fieldset>
        <div class="control-group">
            <select class="form-control", name = "symbol">
                <option value = "symbol">symbol</option>
                <?php
                    foreach($symbols as $symbol)
                    {
                        print('<option value="'.$symbol["symbol"].'">'.$symbol["name"].'</option>');
                    }
                ?>
            </select>
        </div>
        <div class="form-group">
            <input autofocus class="form-control" name="shares" placeholder="shares" type="int"/>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default">Sell</button>
        </div>
    </fieldset>
</form>