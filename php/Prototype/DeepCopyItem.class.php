<?php
require_once 'ItemPrototype.class.php';
?>
<?php
/**
 * ConcretePrototype���饹����������
 */
class DeepCopyItem extends ItemPrototype {
    /**
     * �������ԡ���Ԥ�����μ���
     * �������ݻ����Ƥ��륪�֥������Ȥ⥳�ԡ�
     */
    protected function __clone() {
        $this->setDetail(clone $this->getDetail());
    }

}
?>
