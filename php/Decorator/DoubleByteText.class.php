<?php
require_once('TextDecorator.class.php');
?>
<?php
/**
 * TextDecorator���饹�μ������饹�Ǥ�
 */
class DoubleByteText extends TextDecorator {

    /**
     * ���󥹥��󥹤��������ޤ�
     */
    public function __construct(Text $target) {
        parent::__construct($target);
    }

    /**
     * �ƥ����Ȥ�����ʸ�����Ѵ������֤��ޤ�
     * Ⱦ�ѱѻ������������ڡ������������ʤ����Ѥˡ�
     * �����դ���ʸ�����ʸ�����Ѵ����ޤ�
     */
    public function getText() {
        $str = parent::getText();
        $str = mb_convert_kana($str,"RANSKV");
        return $str;
    }
}
?>
