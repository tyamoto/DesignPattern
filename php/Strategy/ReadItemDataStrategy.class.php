<?php
/**
 * Strategy����������
 */
abstract class ReadItemDataStrategy {

    private $filename;

    /**
     * ���󥹥ȥ饯��
     */
    public function __construct($filename) {
        $this->filename = $filename;
    }

    /**
     * �ǡ����ե�������ɤ߹��ߡ����֥������Ȥ�������֤�
     * Context���󶡤���᥽�å�
     * @param string �ǡ����ե�����̾
     * @return �ǡ������֥������Ȥ�����
     */
    public function getData() {
        if (!is_readable($this->getFilename())) {
            throw new Exception('file [' . $this->getFilename() . '] is not readable !');
        }

        return $this->readData($this->getFilename());
    }

    /**
     * �ե�����̾���֤�
     * @return �ե�����̾
     */
    public function getFilename() {
        return $this->filename;
    }

    /**
     * ConcreteStrategy���饹�˼���������᥽�å�
     * @param string �ǡ����ե�����̾
     * @return �ǡ������֥������Ȥ�����
     */
    protected abstract function readData($filename);
}
?>
