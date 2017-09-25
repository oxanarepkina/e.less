<?php

namespace App\Widgets;

use App\Form;

class Select implements Widget
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
        echo '<label class="control-label col-sm-3" for="' . $this->name . '">' . $this->name . ':</label><div class="col-sm-8"><select class="form-control" name="' . $this->name . '">';
        foreach ($this->values as $value) {
            echo '<option value="' . $value . '">' . $value . '</option>';
        }
        echo '</select></div><div class="col-sm-1 status"></div></div>';
    }
}