<?php
require_once 'Order.class.php';
?>
<?php
class OrderDao {
    public static function createOrder(Order $order) {
        echo '�ʲ������Ƥ���ʸ�ǡ�����������ޤ���';

        echo '<table border="1">';
        echo '<tr>';
        echo '<th>�����ֹ�</th>';
        echo '<th>����̾</th>';
        echo '<th>ñ��</th>';
        echo '<th>����</th>';
        echo '<th>���</th>';
        echo '</tr>';

        foreach ($order->getItems() as $order_item) {
            echo '<tr>';
            echo '<td>' . $order_item->getItem()->getId() . '</td>';
            echo '<td>' . $order_item->getItem()->getName() . '</td>';
            echo '<td>' . $order_item->getItem()->getPrice() . '</td>';
            echo '<td>' . $order_item->getAmount() . '</td>';
            echo '<td>' . ($order_item->getItem()->getPrice() * $order_item->getAmount()) . '</td>';
            echo '</tr>';
        }
        echo '</table>';
    }
}
?>
