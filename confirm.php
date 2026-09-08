<?php
$menu = isset($_POST['menu']) ? htmlspecialchars($_POST['menu']) : '未選択';
$quantity = isset($_POST['quantity']) ? (int)$_POST['quantity'] : 0;
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>注文確認</title>
</head>
<body>
    <h1>ご注文の確認</h1>
    <p>商品: <?php echo $menu; ?></p>
    <p>数量: <?php echo $quantity; ?> 個</p>
    <p>上記の内容で注文を承りました！</p>
    <br>
    <a href="order.php">注文画面へ戻る</a>
</body>
</html>