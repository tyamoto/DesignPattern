<?php
require_once 'UserState.class.php';
require_once 'AuthorizedState.class.php';
?>
<?php
/**
 * ConcreteState���饹����������
 * ̤ǧ�ڤξ��֤�ɽ�����饹
 */
class UnauthorizedState implements UserState
{
    private static $singleton = null;

    private function __construct() {
    }

    public static function getInstance() {
        if (self::$singleton === null) {
            self::$singleton = new UnauthorizedState();
        }
        return self::$singleton;
    }

    public function isAuthenticated() {
        return false;
    }

    public function nextState() {
        // ���ξ��֡�ǧ�ڡˤ��֤�
        return AuthorizedState::getInstance();
    }

    public function getMenu() {
        $menu = '<a href="?mode=state">������</a>';
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
