<?php
require_once 'CartListener.class.php';
?>
<?php
/**
 * ConcreteObserverƒNƒ‰ƒX‚É‘Š“–‚·‚é
 */
class LoggingListener implements CartListener {

    public function __construct() {
    }

    public function update(Cart $cart) {
		echo '<pre>';
        var_dump($cart->getItems());
		echo '</pre>';
    }
}
?>
