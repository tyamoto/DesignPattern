<?php
require_once 'OrganizationEntry.class.php';
?>
<?php
/**
 * Leaf���饹����������
 */
class Employee extends OrganizationEntry {

    public function __construct($code, $name) {
        parent::__construct($code, $name);
    }

    /**
     * �����Ǥ��ɲä���
     * Leaf���饹�ϻ����Ǥ�����ʤ��Τǡ��㳰��ȯ�������Ƥ���
     */
    public function add(OrganizationEntry $entry) {
        throw new Exception('method not allowed');
    }
}
?>
