<?php

require_once "{$GLOBALS['config']['APP_DIR']}/forms/BaseForm.php";

class AddBookingForm extends BaseForm {
  public $date;
  public $time;
  public $name;
  public $phone;

  protected $rules = ['required' => ['date', 'time', 'name', 'phone']];

  public function __construct() {
    $this->action = "{$GLOBALS['config']['APP_URL']}/add";
  }
}
