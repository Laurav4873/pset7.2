<form action="buy.php" method="post">
    <fieldset>
        <div class="form-group">
            <input autofocus class="form-control" value="<?= $symbol ?>" name="symbol" placeholder="symbol" type="text"/>
        </div>
         <div class="form-group">
            <input autofocus class="form-control" name="shares" placeholder="shares" type="int"/>
        </div>
            <button type="submit" class="btn btn-default">Buy</button>
        </div>
    </fieldset>
</form>