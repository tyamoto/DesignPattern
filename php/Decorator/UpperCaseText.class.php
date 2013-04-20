<?php
require_once('TextDecorator.class.php');
?>
<?php
/**
 * TextDecorator���饹�μ������饹�Ǥ�
 */
class UpperCaseText extends TextDecorator {

    /**
     * ���󥹥��󥹤��������ޤ�
     */
    public function __construct(Text $target) {
        parent::__construct($target);
    }

    /**
     * Ⱦ�Ѿ�ʸ����Ⱦ����ʸ�����Ѵ������֤��ޤ�
     */
    public function getText() {
        $str = parent::getText();
        $str = strtoupper($str);
        return $str;
    }
}
?>
