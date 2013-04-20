<?php
require_once 'DataSource.class.php';

class Listing {
    private $data_source;

    /**
     * ���󥹥ȥ饯��
     * @param $source_name �ե�����̾
     */
    function __construct($data_source) {
        $this->data_source = $data_source;
    }

    /**
     * �ǡ����������򳫤�
     */
    function open() {
        $this->data_source->open();
    }

    /**
     * �ǡ�������������ǡ������������
     * @return array �ǡ���������
     */
    function read() {
        return $this->data_source->read();
    }

    /**
     * �ǡ������������Ĥ���
     */
    function close() {
        $this->data_source->close();
    }
}
?>
