<?php
require_once 'ValidationHandler.class.php';
?>
<?php
/**
 * ConcreteHandler���饹����������
 */
class AlphabetValidationHandler extends ValidationHandler {

    /**
     * �����饹��ô�����������¹�
     */
    protected function execValidation($input) {
        return preg_match('/^[a-z]*$/i', $input);
    }

    /**
     * �������Ի��Υ�å��������������
     */
    protected function getErrorMessage() {
        return 'Ⱦ�ѱѻ������Ϥ��Ƥ�������';
    }
}
?>
