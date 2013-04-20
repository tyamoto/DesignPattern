<?php
require_once 'ItemFactory.class.php';
?>
<?php
function dumpData($data) {
    echo '<dl>';
    foreach ($data as $object) {
        echo '<dt>' . htmlspecialchars($object->getName(), ENT_QUOTES) . '</dt>';
        echo '<dd>�����ֹ桧' . $object->getCode() . '</dd>';
        echo '<dd>\\' . number_format($object->getPrice()) . '-</dd>';
    }
    echo '</dl>';
}
?>
<?php
    $factory = ItemFactory::getInstance('data.txt');

    /**
     * �ǡ������������
     */
    $items = array();
    $items[] = $factory->getItem('ABC0001');
    $items[] = $factory->getItem('ABC0002');
    $items[] = $factory->getItem('ABC0003');

    if ($items[0] === $factory->getItem('ABC0001')) {
        echo 'Ʊ��Υ��֥������ȤǤ�';
    } else {
        echo 'Ʊ��Υ��֥������ȤǤϤ���ޤ���';
    }

    dumpData($items);

?>
