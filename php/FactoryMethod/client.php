<html lang='ja'>
<head>
<title>��ʲȤȺ��ʤ���</title>
</head>
<body>
<?php
    $column = 0;
    $tmp = '';

    $handle = fopen('music.csv','r');

    /**
     * Linux�Ķ��ξ�硢������Ŭ��setlocale�ؿ�����Ѥ���
     * ����������ꤷ�Ƥ�������
     * ���setlocale(LC_ALL, 'ja_JP.ujis');
     */
    while ($data = fgetcsv ($handle, 4096, ',')) {
        $num = count ($data);
        for ($i = 0; $i < $num; $i++) {
            if ($i == 0) {
                if ($column != 0 && $data[$i] != $tmp) {
                    echo '</ul>';
                }
                if ($data[$i] != $tmp) {
                    $tmp = $data[$i];
                    echo '<b>' . $tmp . '</b>';
                    echo '<ul>';
                }
            } else {
                echo '<li>';
                echo $data[$i];
                echo '</li>';
            }
        }
        $column++;
     }
    echo '</ul>';

    fclose($handle);
?>
</body>
</html>
