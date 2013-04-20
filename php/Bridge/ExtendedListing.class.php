<?php
require_once 'Listing.class.php';
?>
<?php
/**
 * Listing���饹���󶡤���Ƥ��뵡ǽ���ĥ����
 * RefinedAbstraction����������
 */
class ExtendedListing extends Listing {

    /**
     * ���󥹥ȥ饯��
     * @param $source_name �ե�����̾
     */
    function __construct($data_source) {
        parent::__construct($data_source);
    }

    /**
     * �ǡ������ɤ߹���ݡ��ǡ�������ü�ʸ�����Ѵ�����
     * @return �Ѵ����줿�ǡ���
     */
    function readWithEncode() {
        return htmlspecialchars($this->read(), ENT_QUOTES);
    }

}
?>
