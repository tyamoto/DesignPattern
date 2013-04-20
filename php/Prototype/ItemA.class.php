<?php
require_once 'ItemPrototype.class.php';
?>
<?php
/**
 * ConcretePrototype���饹����������
 */
class ItemA extends ItemPrototype {
    private $detail;

    public function setDetail(stdClass $detail) {
        $this->detail = $detail;
    }

    public function getDetail() {
        return $this->detail;
    }

    /**
     * �������ԡ���Ԥ�����μ���
     * �������ݻ����Ƥ��륪�֥������Ȥ⥳�ԡ�
     */
    protected function __clone() {
        $this->detail = clone $this->detail;
    }

    public function dumpData() {
        echo '<dl>';
        echo '<dt>' . $this->getName() . '</dt>';
        echo '<dd>�����ֹ桧' . $this->getCode() . '</dd>';
        echo '<dd>\\' . number_format($this->getPrice()) . '-</dd>';
        echo '<dd>' . $this->detail->comment . '</dd>';
        echo '<dd>' . $this->detail->create_date . '</dd>';
        echo '</dl>';
    }
}
?>