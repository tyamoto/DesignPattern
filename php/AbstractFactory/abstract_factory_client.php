<?php
    if (isset($_POST['factory'])) {
        $factory = $_POST['factory'];

        switch ($factory) {
        case 1:
            include_once 'DbFactory.class.php';
            $factory = new DbFactory();
            break;
        case 2:
            include_once 'MockFactory.class.php';
            $factory = new MockFactory();
            break;
        }

        $item_id = 1;
        $item_dao = $factory->createItemDao();
        $item = $item_dao->findById($item_id);
        echo 'ID=' . $item_id . '�ξ��ʤϡ�' . $item->getName() . '�פǤ�<br>';

        $order_id = 3;
        $order_dao = $factory->createOrderDao();
        $order = $order_dao->findById($order_id);
        echo 'ID=' . $order_id . '����ʸ����ϼ����̤�Ǥ���';
        echo '<ul>';
        foreach ($order->getItems() as $item) {
            echo '<li>' . $item['object']->getName();
        }
        echo '</ul>';
    }
?>
<hr>
<form action="" method="post">
  <div>
    DaoFactory�μ��ࡧ
    <input type="radio" name="factory" value="1">DbFactory
    <input type="radio" name="factory" value="2">MockFactory
  </div>
  <div>
    <input type="submit">
  </div>
</form>
