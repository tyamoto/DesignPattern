<?php
require_once 'Cart.class.php';
require_once 'PresentListener.class.php';
require_once 'LoggingListener.class.php';
?>
<?php
function createCart() {
    $cart = new Cart();
    $cart->addListener(new PresentListener());
    $cart->addListener(new LoggingListener());

    return $cart;
}
?>
<?php
    session_start();

    $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : null;
    if (is_null($cart)) {
        $cart = createCart();
    }

    $item = (isset($_POST['item']) ? $_POST['item'] : '');
    $mode = (isset($_POST['mode']) ? $_POST['mode'] : '');
    switch ($mode) {
    case 'add':
        echo '<p style="color: #aa0000">�ɲä��ޤ���</p>';
        $cart->addItem($item);
        break;
    case 'remove':
        echo '<p style="color: #008800">������ޤ���</p>';
        $cart->removeItem($item);
        break;
    case 'clear':
        echo '<p style="color: #008800">���ꥢ���ޤ���</p>';
        $cart = createCart();
        break;
    }

    $_SESSION['cart'] = $cart;

    echo '<h1>���ʰ���</h1>';
    echo '<ul>';
    foreach ($cart->getItems() as $item_name => $quantity) {
        echo '<li>' . $item_name . ' ' . $quantity . '��</li>';
    }
?>
<form action="" method="post">
<select name="item">
<option value="10:T�����">T�����</option>
<option value="20:�̤������">�̤������</option>
<option value="30:���å������å�">���å������å�</option>
</select>
<input type="submit" name="mode" value="add">
<input type="submit" name="mode" value="remove">
<input type="submit" name="mode" value="clear">
</form>
