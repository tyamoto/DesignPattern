<?php
/**
 * Context����������
 */
class ItemDataContext {

    private $strategy;

    /**
     * ���󥹥ȥ饯��
     * @param ReadItemDataStrategy ReadItemDataStrategy���֥�������
     */
    public function __construct(ReadItemDataStrategy $strategy) {
        $this->strategy = $strategy;
    }

    /**
     * ���ʾ���򥪥֥������Ȥ�������֤�
     * @return �ǡ������֥������Ȥ�����
     */
    public function getItemData() {
        return $this->strategy->getData();
    }

}
?>
