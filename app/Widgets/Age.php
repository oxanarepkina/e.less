<?php

namespace App\Widgets;

use App\Form;

class Age implements Widget
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
        echo '<label class="control-label col-sm-3" for="' . $this->name . '">' . $this->name . '</label><div class="col-sm-8">';

        echo '<input type="text" name="' . $this->name . '" value="19__">
              <input type="text" name="number" style="display:none;">';

        echo '</div><div class="col-sm-1 status"></div></div>';
    }
}