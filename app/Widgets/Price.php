<?php

namespace App\Widgets;

use App\Form;

class Price implements Widget
{
    private $name;

    /**
     * Radio constructor.
     */
    public function __construct($data)
    {
        $this->name = $data['name'];
    }

    private function getFormattedName()
    {
        return str_replace(' ', '', $this->name);
    }


    public function execute()
    {
        echo '<div class="form-group">';
        echo '<label class="control-label col-sm-3" for="' . $this->name . '">' . $this->name . '</label><div class="col-sm-8">';
        echo '<span class="input-euro right"><input type="number" name="' . $this->getFormattedName() . '" value="1000" min="0"  step="1" data-number-to-fixed="2" data-number-stepfactor="100"/></span>';
        echo '</div><div class="col-sm-1 status"></div></div>';
    }
}