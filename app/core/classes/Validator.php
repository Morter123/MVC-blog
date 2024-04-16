<?php

class Validator
{

    protected $errors = [];
    protected $rules_list = ['required', 'min', 'max',];
    protected $messagesError = [
        'required' => 'Поле :fieldname обязательно для заполнения',
        'min' => 'В поле :fieldname минимальное кол-во символов :rulevalue',
        'max' => 'В поле :fieldname максимальное кол-во символов :rulevalue',
    ];

    public function validate($data = [], $rules = [])
    {

        foreach ($data as $fieldname => $value) {
            if (in_array($fieldname, array_keys($rules))) {
                $this->check([
                    'fieldname' => $fieldname,
                    'value' => $value,
                    'rules' => $rules[$fieldname],
                ]);
            }
        }
        return $this;
    }

    protected function check($field)
    {

        foreach ($field['rules'] as $rule => $rule_value) {
            if (in_array($rule, $this->rules_list)) {
                if (!call_user_func_array([$this, $rule], [$field['value'], $rule_value])) {
                    // echo "Поле {$field['fieldname']} не прошло проверку по правилу {$rule}<br>";
                    $this->addError($field['fieldname'], str_replace([':fieldname', ':rulevalue'], [$field['fieldname'], $rule_value], $this->messagesError[$rule]));
                } else {
                    // echo "Поле {$field['fieldname']} прошло проверку по правилу {$rule}<br>";
                }
            }
        }

    }

    // Функции валидации для call_user_func_array
    protected function required($value, $rule_value)
    {
        return !empty(trim($value));
    }

    protected function min($value, $rule_value)
    {
        return mb_strlen($value) >= $rule_value;
    }

    protected function max($value, $rule_value)
    {
        return mb_strlen($value) <= $rule_value;
    }


    protected function addError($fieldname, $error)
    {
        $this->errors[$fieldname][] = $error;
    }

    public function getErrors() {
        return $this->errors;
    }

    public function hasErrors() {
        return !empty($this->getErrors());
    }
}
