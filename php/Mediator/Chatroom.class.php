<?php
require_once 'User.class.php';
?>
<?php
class Chatroom {
    private $users = array();
    public function login(User $user) {
        $user->setChatroom($this);
        if (!array_key_exists($user->getName(), $this->users)) {
            $this->users[$user->getName()] = $user;
            printf('<font color="#0000dd">%s�����������ޤ���</font><hr>', $user->getName());
        }
    }
    public function sendMessage($from, $to, $message) {
        if (array_key_exists($to, $this->users)) {
            $this->users[$to]->receiveMessage($from, $message);
        } else {
            printf('<font color="#dd0000">%s������������Ƥ��ʤ��褦�Ǥ�</font><hr>', $to);
        }
    }
}
?>
