<?php

namespace App\Widgets;

use App\Form;

class Radio implements Widget
{
    private $name;
    private $values;

    /**
     * Radio constructor.
     */
    public function __construct($data)
    {
        $this->name = $data['name'];
        $this->values = $data['values'];
    }

    public function execute()
    {
        echo '<div class="form-group">';
        echo '<label class="control-label col-sm-3" for="' . $this->name . '">' . $this->name . '</label><div class="col-sm-8">';
        foreach ($this->values as $value) {
//            echo '<label for="' . $this->name . '">' . $value . '</label>';
//            echo '<input name="' . $this->name . '" type="radio" value="' . $value . '">';

            echo '<label class="radio-inline"><input type="radio" name="' . $this->name . '" value="' . $value . '">' . $value . '</label>';

        }
        echo '</div><div class="col-sm-1 status"></div></div>';
    }
}