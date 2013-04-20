<?php
require_once 'Listing.class.php';
require_once 'ExtendedListing.class.php';
require_once 'FileDataSource.class.php';
?>
<?php
    /**
     * Listing���饹��ExtendedListing���饹�򥤥󥹥��󥹲����롣
     * ����Ū�ʽ������饹�Ȥ��ơ�FileDataSource���饹��Ȥ���
     * �ǡ����ե�����ϡ�data.txt
     */
    $list1 = new Listing(new FileDataSource('data.txt'));
    $list2 = new ExtendedListing(new FileDataSource('data.txt'));

    try {
        $list1->open();
        $list2->open();
    }
    catch (Exception $e) {
        die($e->getMessage());
    }

    /**
     * ���������ǡ�����ɽ����read�᥽�åɡ�
     */
    $data = $list1->read();
    echo $data;

    /**
     * ���������ǡ�����ɽ����readWithEncode�᥽�åɡ�
     */
    $data = $list2->readWithEncode();
    echo $data;


    $list1->close();
    $list2->close();
?>
