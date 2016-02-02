<?php

namespace MyApp\Exception;

class EmptyPost extends \Exception{
  protected $message = 'アドレス、パスワードを入力してください。';
}
