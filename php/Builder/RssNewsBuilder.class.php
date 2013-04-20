<?php
require_once 'News.class.php';
require_once 'NewsBuilder.class.php';
?>
<?php
/**
 * ConcreteBuilder���饹����������
 */
class RssNewsBuilder implements NewsBuilder {
    public function parse($url) {
        $data = simplexml_load_file($url);
        if ($data === false) {
            throw new Exception('read data [' .
                                htmlspecialchars($url, ENT_QUOTES)
                                . '] failed !');
        }

        $list = array();
        foreach ($data->item as $item) {
            $dc = $item->children('http://purl.org/dc/elements/1.1/');
            $list[] = new News($item->title,
                               $item->link,
                               $dc->date);
        }
        return $list;
    }
}
?>
