<?php
require_once 'menu.php';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>注文画面</title>
</head>
<body>
    <h1>メニュー注文</h1>
    <form action="confirm.php" method="post">
        <label for="menu">商品を選択:</label>
        <select name="menu" id="menu">
            <?php foreach ($menus as $item): ?>
                <option value="<?php echo htmlspecialchars($item['name']); ?>">
                    <?php echo htmlspecialchars($item['name']) . " (" . $item['price'] . "円)"; ?>
                </option>
            <?php endforeach; ?>
        </select>
        <br><br>
        <label for="quantity">数量:</label>
        <input type="number" name="quantity" id="quantity" value="1" min="1">
        <br><br>
        <button type="submit">注文確認へ</button>
    </form>
</body>
</html>