<?php
require_once 'ItemPrototype.class.php';
?>
<?php
/**
 * ConcretePrototypeクラスに相当する
 */
class ShallowCopyItem extends ItemPrototype {

    /**
     * 浅いコピーを行うので、空の実装を行う
     */
    protected function __clone() {
    }
}
?>
