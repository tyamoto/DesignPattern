<?php
require_once 'CartListener.class.php';
?>
<?php
/**
 * ConcreteObserver���饹����������
 */
class PresentListener implements CartListener {

    private static $PRESENT_TARGET_ITEM = '30:���å������å�';
    private static $PRESENT_ITEM = '99:�ץ쥼���';

    public function __construct() {
    }

    public function update(Cart $cart) {
        if ($cart->hasItem(self::$PRESENT_TARGET_ITEM) &&
            !$cart->hasItem(self::$PRESENT_ITEM)) {
            $cart->addItem(self::$PRESENT_ITEM);
        }
        if (!$cart->hasItem(self::$PRESENT_TARGET_ITEM) &&
            $cart->hasItem(self::$PRESENT_ITEM)) {
            $cart->removeItem(self::$PRESENT_ITEM);
        }
    }
}
?>
