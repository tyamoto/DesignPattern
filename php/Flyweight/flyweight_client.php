<?php
require_once 'ItemFactory.class.php';
?>
<?php
function dumpData($data) {
    echo '<dl>';
    foreach ($data as $object) {
        echo '<dt>' . htmlspecialchars($object->getName(), ENT_QUOTES) . '</dt>';
        echo '<dd>商品番号：' . $object->getCode() . '</dd>';
        echo '<dd>\\' . number_format($object->getPrice()) . '-</dd>';
    }
    echo '</dl>';
}
?>
<?php
    $factory = ItemFactory::getInstance('data.txt');

    /**
     * データを取得する
     */
    $items = array();
    $items[] = $factory->getItem('ABC0001');
    $items[] = $factory->getItem('ABC0002');
    $items[] = $factory->getItem('ABC0003');

    if ($items[0] === $factory->getItem('ABC0001')) {
        echo '同一のオブジェクトです';
    } else {
        echo '同一のオブジェクトではありません';
    }

    dumpData($items);

?>
