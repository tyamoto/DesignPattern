<?php
require_once('Text.class.php');
?>
<?php
/**
 * Text���饹�򽤾�����Decorator�Ǥ�
 */
abstract class TextDecorator implements Text {

    /**
     * Text�����ѿ��Ǥ�
     */
    private $text;

    /**
     * ���󥹥��󥹤��������ޤ�
     */
    public function __construct(Text $target) {
        $this->text = $target;
    }

    /**
     * ���󥹥��󥹤��ݻ�����ʸ������֤��ޤ�
     */
    public function getText() {
        return $this->text->getText();
    }

    /**
     * ���󥹥��󥹤�ʸ����򥻥åȤ��ޤ�
     */
    public function setText($str) {
        $this->text->setText($str);
    }
}
?>
