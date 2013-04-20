<?php
require_once 'ValidationHandler.class.php';
?>
<?php
/**
 * ConcreteHandler���饹����������
 */
class NotNullValidationHandler extends ValidationHandler {

    /**
     * �����饹��ô�����������¹�
     */
    protected function execValidation($input) {
        return (is_string($input) && $input !== '');
    }

    /**
     * �������Ի��Υ�å��������������
     */
    protected function getErrorMessage() {
        return '���Ϥ���Ƥ��ޤ���';
    }
}
?>
