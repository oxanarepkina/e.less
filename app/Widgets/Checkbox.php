<?php

namespace App\Widgets;

use App\Form;

class Checkbox implements Widget
{
    private $name;

    /**
     * Radio constructor.
     */
    public function __construct($data)
    {
        $this->name = $data['name'];
    }

    public function execute()
    {
        echo '<div class="form-group">';
        echo '<label class="control-label col-sm-3" for="' . $this->name . '"></label><div class="col-sm-8">';


            echo '<div class="checkbox"><label><input type="checkbox" name="checkbox" value="">I agree</label></div>';

        echo '</div><div class="col-sm-1 status"></div></div>';
    }
}