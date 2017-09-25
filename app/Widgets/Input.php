<?php

namespace App\Widgets;

use App\Form;

class Input implements Widget
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


            echo '<input name="' . $this->name . '" type="text" value="">';

        echo '</div><div class="col-sm-1 status"></div></div>';
    }
}