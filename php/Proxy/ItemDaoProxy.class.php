<?php
class ItemDaoProxy {
    private $dao;
    private $cache;
    public function __construct(ItemDao $dao) {
        $this->dao = $dao;
        $this->cache = array();
    }
    public function findById($item_id) {
        if (array_key_exists($item_id, $this->cache)) {
            echo '<font color="#dd0000">Proxy���ݻ����Ƥ��륭��å��夫��ǡ������֤��ޤ�</font><br>';
            return $this->cache[$item_id];
        }

        $this->cache[$item_id] = $this->dao->findById($item_id);
        return $this->cache[$item_id];
    }
}
?>
