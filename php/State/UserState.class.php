<?php
/**
 * State���饹����������
 * �������ư������񤤤��������
 */
interface UserState {
    public function isAuthenticated();
    public function nextState();
    public function getMenu();
}
?>
