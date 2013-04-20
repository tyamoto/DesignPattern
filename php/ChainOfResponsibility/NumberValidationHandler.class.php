<?php
require_once 'ValidationHandler.class.php';
?>
<?php
/**
 * ConcreteHandler���饹����������
 */
class NumberValidationHandler extends ValidationHandler {

    /**
     * �����饹��ô�����������¹�
     */
    protected function execValidation($input) {
        return (preg_match('/^[0-9]*$/', $input) > 0);
    }

    /**
     * �������Ի��Υ�å��������������
     */
    protected function getErrorMessage() {
        return 'Ⱦ�ѿ��������Ϥ��Ƥ�������';
    }
}
?>
