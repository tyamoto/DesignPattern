<?php
require_once 'ItemDao.class.php';
require_once 'Item.class.php';
?>
<?php
class MockItemDao implements ItemDao {
    public function findById($item_id) {
        $item = new Item($item_id, '���ߡ�����');
        return $item;
    }
}
?>
