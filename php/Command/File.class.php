<?php
/**
 * Receiver���饹����������
 */
class File {
    private $name;
    public function __construct($name) {
        $this->name = $name;
    }
    public function getName() {
        return $this->name;
    }
    public function decompress() {
        echo $this->name . '��Ÿ�����ޤ���<br>';
    }
    public function compress() {
        echo $this->name . '�򰵽̤��ޤ���<br>';
    }
    public function create() {
        echo $this->name . '��������ޤ���<br>';
    }
}
?>
