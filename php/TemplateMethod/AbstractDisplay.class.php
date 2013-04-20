<?php
/**
 * AbstractClass���饹����������
 */
abstract class AbstractDisplay {

    /**
     * ɽ������ǡ���
     */
    private $data;

    /**
     * ���󥹥ȥ饯��
     * @param mixed ɽ������ǡ���
     */
    public function __construct($data) {
        if (!is_array($data)) {
            $data = array($data);
        }
        $this->data = $data;
    }

    /**
     * template method����������
     */
    public function display() {
        $this->displayHeader();
        $this->displayBody();
        $this->displayFooter();
    }

    /**
     * �ǡ������������
     */
    public function getData() {
        return $this->data;
    }

    /**
     * �إå���ɽ������
     * ���֥��饹�˼�����Ǥ������ݥ᥽�å�
     */
    protected abstract function displayHeader();

    /**
     * �ܥǥ��ʥ��饤����Ȥ����Ϥ��줿���ơˤ�ɽ������
     * ���֥��饹�˼�����Ǥ������ݥ᥽�å�
     */
    protected abstract function displayBody();

    /**
     * �եå���ɽ������
     * ���֥��饹�˼�����Ǥ������ݥ᥽�å�
     */
    protected abstract function displayFooter();

}
?>
