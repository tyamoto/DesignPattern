<?php
require_once 'UserState.class.php';
require_once 'UnauthorizedState.class.php';
?>
<?php
/**
 * ConcreteState���饹����������
 * ǧ�ڸ�ξ��֤�ɽ�����饹
 */
class AuthorizedState implements UserState {

    private static $singleton = null;

    private function __construct() {
    }

    public static function getInstance() {
        if (self::$singleton == null) {
            self::$singleton = new AuthorizedState();
        }
        return self::$singleton;
    }

    public function isAuthenticated() {
        return true;
    }

    public function nextState()    {
        // ���ξ��֡�̤ǧ�ڡˤ��֤�
        return UnauthorizedState::getInstance();
    }

    public function getMenu() {
        $menu = '<a href="?mode=inc">������ȥ��å�</a> | '
              .    '<a href="?mode=reset">�ꥻ�å�</a> | '
              .    '<a href="?mode=state">��������</a>';
        return $menu;
    }

    /**
     * ���Υ��󥹥��󥹤�ʣ������Ĥ��ʤ��褦�ˤ���
     * @throws RuntimeException
     */
    public final function __clone() {
        throw new RuntimeException ('Clone is not allowed against ' . get_class($this));
    }
}
?>
