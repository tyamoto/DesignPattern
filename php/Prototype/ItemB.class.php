<?php
require_once 'ItemPrototype.class.php';
?>
<?php
/**
 * ConcretePrototype���饹����������
 */
class ItemB extends ItemPrototype {

    /**
     * �������ԡ���Ԥ�ɬ�פ��ʤ��Τǡ����μ�����Ԥ�
     */
    protected function __clone() {
    }

    public function dumpData() {
        echo '<dl>';
        echo '<dt>' . $this->getName() . '</dt>';
        echo '<dd>�����ֹ桧' . $this->getCode() . '</dd>';
        echo '<dd>\\' . number_format($this->getPrice()) . '-</dd>';
        echo '</dl>';
    }

}
?>