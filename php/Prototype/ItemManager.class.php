<?php
require_once 'ItemPrototype.class.php';
?>
<?php
/**
 * Client�N���X�ɑ�������
 * ���̃N���X�����ConcretePrototype�N���X�͌����Ă��Ȃ�
 */
class ItemManager {
    private $items;

    public function __construct() {
        $this->items = array();
    }

    public function registItem(ItemPrototype $item) {
        $this->items[$item->getCode()] = $item;
    }

    /**
     * Prototype�N���X�̃��\�b�h���g���āA�V�����C���X�^���X���쐬
     */
    public function create($item_code) {
        if (!array_key_exists($item_code, $this->items)) {
            throw new Exception('item_code [' . $item_code . '] not exists !');
        }
        $cloned_item = $this->items[$item_code]->newInstance();

        return $cloned_item;
    }
}
?>
