<?php
require_once 'ItemPrototype.class.php';
?>
<?php
/**
 * ConcretePrototype���饹����������
 */
class ShallowCopyItem extends ItemPrototype {

    /**
     * �������ԡ���Ԥ��Τǡ����μ�����Ԥ�
     */
    protected function __clone() {
    }
}
?>
