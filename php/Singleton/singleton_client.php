<?php
require_once 'SingletonSample.class.php';
?>
<?php
    /**
     * ���󥹥��󥹤�2�ļ�������
     */
    $instance1 = SingletonSample::getInstance();
    sleep(1);
    $instance2 = SingletonSample::getInstance();

    echo '<hr>';

    /**
     * 2�ĤΥ��󥹥��󥹤�Ʊ��ID���ɤ������ǧ����
     */
    echo 'instance ID : ' . $instance1->getID() . '<br>';
    echo '$instance1->getID() === $instance2->getID() : ' . ($instance1->getID() === $instance2->getID() ? 'true' : 'false');
    echo '<hr>';

    /**
     * 2�ĤΥ��󥹥��󥹤�Ʊ�줫�ɤ������ǧ����
     */
    echo '$instance1 === $instance2 : ' . ($instance1 === $instance2 ? 'true' : 'false');
    echo '<hr>';

    /**
     * ʣ���Ǥ��ʤ����Ȥ��ǧ����
     */
    $instance1_clone = clone $instance1;

?>
