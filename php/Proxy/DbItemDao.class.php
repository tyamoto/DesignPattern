<?php
require_once 'ItemDao.class.php';
require_once 'Item.class.php';
?>
<?php
class DbItemDao implements ItemDao {
    public function findById($item_id) {
        $fp = fopen('item_data.txt', 'r');

        /**
         * ƒwƒbƒ_s‚ð”²‚­
         */
        $dummy = fgets($fp, 4096);

        $item = null;
        while ($buffer = fgets($fp, 4096)) {
            $id = trim(substr($buffer, 0, 10));
            $name = trim(substr($buffer, 10));

            if ($item_id === (int)$id) {
                $item = new Item($id, $name);
                break;
            }
        }

        fclose($fp);

        return $item;
    }
}
?>
