<?php
require_once 'ValidationHandler.class.php';
?>
<?php
/**
 * ConcreteHandler���饹����������
 */
class MaxLengthValidationHandler extends ValidationHandler {

    private $max_length;

    public function __construct($max_length = 10) {
        parent::__construct();
        if (preg_match('/^[0-9]{,2}$/', $max_length)) {
            throw new RuntimeException('max length is invalid (0-99) !');
        }
        $this->max_length = (int)$max_length;
    }

    /**
     * �����饹��ô�����������¹�
     */
    protected function execValidation($input) {
        return (strlen($input) <= $this->max_length);
    }

    /**
     * �������Ի��Υ�å��������������
     */
    protected function getErrorMessage() {
        return $this->max_length . '�Х��Ȱ�������Ϥ��Ƥ�������';
    }
}
?>
