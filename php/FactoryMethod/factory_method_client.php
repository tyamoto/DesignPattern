<?php
require_once 'ReaderFactory.class.php';
?>
<html lang='ja'>
<head>
<title>��ʲȤȺ��ʤ���</title>
</head>
<body>
<?php
    /**
     * ���ϥե�����
     */
//    $filename = 'music.csv';
    $filename = 'music.xml';

    $factory = new ReaderFactory();
    $data = $factory->create($filename);
    $data->read();
    $data->display();
?>
</body>
</html>
