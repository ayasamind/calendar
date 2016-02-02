<?php

namespace MyApp\Exception;

class UnmatchEmailOrPassword extends \Exception{
  protected $message = 'アドレスもしくはパスワードが間違っています。';
}
