<?php

namespace MyApp\Exception;

class InvalidPassword extends \Exception{
  protected $message = 'パスワードを正しく入力してください。';
}
