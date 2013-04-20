<?php
require_once 'DataSource.class.php';
?>
<?php
/**
 * Implementor���饹���������Ƥ��뵡ǽ���������
 * ConcreteImplementor����������
 */
class FileDataSource implements DataSource {

    /**
     * ������̾
     */
    private $source_name;

    /**
     * �ե�����ϥ�ɥ�
     */
    private $handler;

    /**
     * ���󥹥ȥ饯��
     * @param $source_name �ե�����̾
     */
    function __construct($source_name) {
        $this->source_name = $source_name;
    }

    /**
     * �ǡ����������򳫤�
     * @throws Exception
     */
    function open() {
        if (!is_readable($this->source_name)) {
            throw new Exception('�ǡ��������������Ĥ���ޤ���');
        }
        $this->handler = fopen($this->source_name, 'r');
        if (!$this->handler) {
            throw new Exception('�ǡ����������Υ����ץ�˼��Ԥ��ޤ���');
        }
    }

    /**
     * �ǡ�������������ǡ������������
     * @return string �ǡ���ʸ����
     */
    function read() {
        $buffer = array();
        while (!feof($this->handler)) {
            $buffer[] = fgets($this->handler);
        }
        return join($buffer);
    }

    /**
     * �ǡ������������Ĥ���
     */
    function close() {
        if (!is_null($this->handler)) {
            fclose($this->handler);
        }
    }
}
?>
