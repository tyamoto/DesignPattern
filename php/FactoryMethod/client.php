<html lang='ja'>
<head>
<title>作曲家と作品たち</title>
</head>
<body>
<?php
    $column = 0;
    $tmp = '';

    $handle = fopen('music.csv','r');

    /**
     * Linux環境の場合、事前に適宜setlocale関数を使用して
     * ロケールを設定してください
     * 例）setlocale(LC_ALL, 'ja_JP.ujis');
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
