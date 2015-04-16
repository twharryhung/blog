<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @author      OA Wu <comdan66@gmail.com>
 * @copyright   Copyright (c) 2015 OA Wu Design
 */

class Main extends Site_controller {

  public function __construct () {
    parent::__construct ();
  }

  public function index () {
    $this->load_view (null);
  }

  public function add () {
    $this->load_view ();
  }

  public function create () {
    $account = $this->input_post ('account');
    $password = $this->input_post ('password');
    $name = $this->input_post ('name');

    // 過濾
    $account = filter_var($account, FILTER_SANITIZE_STRING);
    $password = filter_var($password, FILTER_SANITIZE_STRING);
    $name = filter_var($name, FILTER_SANITIZE_STRING);

    if (!$account || !$password || !$name) {
      // 檢查是否有錯誤

      redirect (array ('main', 'index'));
    }

    if (verifyCreateOrm (User::create (array('account' => $account, 'password' => $password, 'name' => $name)))) {
      redirect (array('main', 'index', '註冊成功'));
    } else {
      redirect (array('main', 'index', '註冊失敗'));

    }
  }
}
