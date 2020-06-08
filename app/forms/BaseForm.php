<?php

require_once "{$GLOBALS['config']['APP_DIR']}/functions/string/functions.php";

class BaseForm {
  public $action;

  public $isValid = false;
  public $errors = [];

  protected $initialValues;
  protected $rules;

  public function setData($formValues) {
    $this->initialValues = $formValues;

    foreach ($formValues as $key => $value) {
      $this->{$key} = $this->sanitize($value);
    }
  }

  public function validate() {
    foreach ($this->rules as $rule => $valuesNames) {
      foreach ($valuesNames as $valueName) {
        $this->applyRule($valueName, $this->{$valueName}, $rule);
      }
    }

    if (empty($this->errors)) {
      $this->isValid = true;
    }
  }

  protected function applyRule($valueName, $value, $rule) {
    switch ($rule) {
      case 'required':
        if (isNullOrEmptyString($value)) {
          $translatedValueName = $this->translateValueName($valueName);
          $this->errors[$valueName]['required'] = "Поле \"$translatedValueName\" обязательно";
        }
        break;
    }
  }

  protected function sanitize($value) {
    return htmlspecialchars(trim($value));
  }

  private function translateValueName($valueName) {
    $valuesNamesDict = ['date' => 'дата', 'time' => 'время', 'name' => 'имя', 'phone' => 'телефон'];
    $translated = $valuesNamesDict[$valueName];

    return $translated;
  } 
}
