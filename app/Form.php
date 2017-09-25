<?php

namespace App;

use App\Widgets\Age;
use App\Widgets\Checkbox;
use App\Widgets\Input;
use App\Widgets\Price;
use App\Widgets\Radio;
use App\Widgets\Rating;
use App\Widgets\Select;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Form extends Model
{
    public function getFormFields()
    {
        $form_fields = DB::table('form_fields')
            ->leftjoin('datatypes', 'datatypes.id', '=', 'form_fields.datatype_id')
            ->leftjoin('form_values', 'form_values.field_id', '=', 'form_fields.id')
            ->select('form_fields.name as name', 'datatypes.name as input_type', 'form_values.value as value')
            ->get();

        $fields = [];

        foreach ($form_fields as $field) {
            $fields[$field->name]['name'] = $field->name;
            $fields[$field->name]['input_type'] = $field->input_type;
            $fields[$field->name]['values'][] = $field->value;
        }

        $result = [];
        foreach ($fields as $field) {
            switch ($field['input_type']) {
                case 'radio':
                    $result[] = new Radio($field);
                    break;
                case 'age':
                    $result[] = new Age($field);
                    break;
                case 'select':
                    $result[] = new Select($field);
                    break;
                case 'price':
                    $result[] = new Price($field);
                    break;
                case 'checkbox':
                    $result[] = new CheckBox($field);
                    break;
                case 'rating':
                    $result[] = new Rating($field);
                    break;
                case 'input':
                    $result[] = new Input($field);
                    break;
            }


        }

        return $result;
    }
}
