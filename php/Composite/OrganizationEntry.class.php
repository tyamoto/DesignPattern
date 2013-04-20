<?php
/**
 * Component���饹����������
 */
abstract class OrganizationEntry {

    private $code;
    private $name;

    public function __construct($code, $name) {
        $this->code = $code;
        $this->name = $name;
    }

    public function getCode() {
        return $this->code;
    }

    public function getName() {
        return $this->name;
    }

    /**
     * �����Ǥ��ɲä���
     * �����Ǥ���ݥ᥽�åɤȤ����Ѱ�
     */
    public abstract function add(OrganizationEntry $entry);

    /**
     * �ȿ��ĥ꡼��ɽ������
     * ����ץ�Ǥϡ��ǥե���Ȥμ������Ѱ�
     */
    public function dump() {
        echo $this->code . ":" . $this->name . "<br>\n";
    }
}
?>
