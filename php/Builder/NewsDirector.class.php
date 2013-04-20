<?php
require_once 'NewsBuilder.class.php';
?>
<?php
/**
 * Director���饹����������
 */
class NewsDirector {
    private $builder;
    private $url;

    public function __construct(NewsBuilder $builder, $url) {
        $this->builder = $builder;
        $this->url = $url;
    }

    public function getNews() {
        $news_list = $this->builder->parse($this->url);
        return $news_list;
    }
}
?>
