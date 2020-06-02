<form method="POST" action="?action=edit">

    <?php

    // print_r($data);

    foreach ($data as $key => $value) {
        echo "<input type='text' name='$key' value='$value'> <br>";
    }

    ?>
    <input type="hidden" name="id" value="<?= $id ?>">
    <input type="submit" value="Ok">
</form>