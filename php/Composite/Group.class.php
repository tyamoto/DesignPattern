<?php
require_once 'OrganizationEntry.class.php';
?>
<?php
/**
 * Composite���饹����������
 */
class Group extends OrganizationEntry {

    private $entries;

    public function __construct($code, $name) {
        parent::__construct($code, $name);
        $this->entries = array();
    }

    /**
     * �����Ǥ��ɲä���
     */
    public function add(OrganizationEntry $entry) {
        array_push($this->entries, $entry);
    }

    /**
     * �ȿ��ĥ꡼��ɽ������
     * ��ʬ���Ȥ��ݻ����Ƥ�������Ǥ�ɽ��
     */
    public function dump() {
        parent::dump();
        foreach ($this->entries as $entry) {
            $entry->dump();
        }
    }
}
?>
