<?php
class SingletonSample {

    /**
     * �����o�[�ϐ�
     */
    private $id;

    /**
     * �B��̃C���X�^���X��ێ�����ϐ�
     */
    private static $instance;

    /**
     * �R���X�g���N�^
     * ID�Ƃ��āA���������̃n�b�V���l���쐬
     */
    private function __construct() {
        $this->id = md5(date('r') . mt_rand());
    }

    /**
     * �B��̃C���X�^���X��Ԃ����߂̃��\�b�h
     * @return SingletonSample�C���X�^���X
     */
    public static function getInstance() {
        if (!isset(self::$instance)) {
            self::$instance = new SingletonSample();
            echo 'a SingletonSample instance was created !';
        }

        return self::$instance;
    }

    /**
     * ID��Ԃ�
     * @return �C���X�^���X��ID
     */
    public function getID() {
        return $this->id;
    }

    /**
     * ���̃C���X�^���X�̕����������Ȃ��悤�ɂ���
     * @throws RuntimeException
     */
    public final function __clone() {
        throw new RuntimeException ('Clone is not allowed against ' . get_class($this));
    }
}
?>
