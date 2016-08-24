<?php
	namespace Home\Event;
class UserEvent {
	$User = new \Home\Controller\UserController();
    public function login(){
        echo 'login event';
    }

    public function logout(){
        echo 'logout event';
    }
}
?>