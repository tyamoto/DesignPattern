<?php
require_once 'AbstractDisplay.class.php';
?>
<?php
/**
 * ConcreteClass���饹����������
 */
class ListDisplay extends AbstractDisplay {

    /**
     * �إå���ɽ������
     */
    protected function displayHeader() {
        echo '<dl>';
    }

    /**
     * �ܥǥ��ʥ��饤����Ȥ����Ϥ��줿���ơˤ�ɽ������
     */
    protected function displayBody() {
        foreach ($this->getData() as $key => $value) {
            echo '<dt>Item ' . $key . '</dt>';
            echo '<dd>' . $value . '</dd>';
        }
    }

    /**
     * �եå���ɽ������
     */
    protected function displayFooter() {
        echo '</dl>';
    }
}
?>
