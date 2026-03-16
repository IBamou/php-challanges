<?php
include 'main.php';
try {
    $sql = 'SELECT * FROM categories';
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $e) {
    echo ''. $e->getMessage() .'';
}
?>

<h2>Categories</h2>
<select name="" id="">
    <?php foreach ($result as $row): ?>
        <option value="<?= $row['id'] ?>"><?= $row['name'] ?></option>
    <?php endforeach;?>
</select>