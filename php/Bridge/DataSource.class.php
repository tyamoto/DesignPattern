<?php
/**
 * Implementor����������
 * ���Υ���ץ�Ǥϡ����󥿡��ե������Ȥ��Ƽ���
 */
interface DataSource {
    public function open();
    public function read();
    public function close();
}
?>
