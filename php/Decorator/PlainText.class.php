<?php
require_once('Text.class.php');
?>
<?php
/**
 * �Խ����Υƥ����Ȥ�ɽ�����饹�Ǥ�
 */
class PlainText implements Text {

    /**
     * ���󥹥��󥹤��ݻ�����ʸ����Ǥ�
     */
    private $textString = null;

    /**
     * ���󥹥��󥹤��ݻ�����ʸ������֤��ޤ�
     */
    public function getText() {
        return $this->textString;
    }

    /**
     * ���󥹥��󥹤�ʸ����򥻥åȤ��ޤ�
     */
    public function setText($str) {
        $this->textString = $str;
    }
}
?>
