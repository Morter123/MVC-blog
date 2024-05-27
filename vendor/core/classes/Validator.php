<?php

namespace vendor;

class Validator
{

    protected $errors = [];
    protected $rules_list = ['required', 'min', 'max', 'match', 'unique'];
    protected $messagesError= [ 
        'required' => 'Поле :fieldname обязательно для заполнения',
        'min' => 'Минимальное количество символов :rulevalue',
        'max' => 'Максимальное количество символов :rulevalue',
        'email' => 'Неверный email',
        'match' => 'Пароли не совпадают ',
        'unique' => ':fieldname уже существует',
    ];

    public function validate($data = [], $rules = [])
    {

        foreach ($data as $fieldname => $value) {
            if (isset($rules[$fieldname])) {
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

                    $this->addError($field['fieldname'], 
                    str_replace([':fieldname', ':rulevalue'], 
                    [$field['fieldname'], $rule_value], 
                    $this->messagesError[$rule]));

                } else {

                }
            }
        }

    }

    // Функции валидации для call_user_func_array
    protected function required($value, $rule_value)
    {
        if ($rule_value == false) {
            return true;
        }
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

    public function listErrors($fieldname) {
        $output = '';
        if (isset($this->errors[$fieldname])) {
            $output .= '<div class="invalid-feedback d-block">';

            foreach ($this->errors[$fieldname] as $fieldname => $error) {
                $output .= "<li>{$error}</li>";
            }
            $output .= "</ul></div>";
        }
        return $output;
    }
}
