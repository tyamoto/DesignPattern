<?php
require_once 'OrderDao.class.php';
require_once 'Order.class.php';
?>
<?php
class MockOrderDao implements OrderDao {
    public function findById($order_id) {
        $order = new Order('999');
        $order->addItem(new Item('99', '���ߡ�����'));
        $order->addItem(new Item('99', '���ߡ�����'));
        $order->addItem(new Item('98', '�ƥ��Ⱦ���'));

        return $order;
    }
}
?>
