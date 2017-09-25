<?php

namespace App\Widgets;

use App\Form;

class Rating implements Widget
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
        echo '<input name="' . $this->name . '" type="hidden" value="">';

        echo '<div class="rating">
    <span><input type="radio" name="rating" id="str5" value="5"><label for="str5"><i class="fa fa-star fa-lg" aria-hidden="true"></i></label></span>
    <span><input type="radio" name="rating" id="str4" value="4"><label for="str4"><i class="fa fa-star fa-lg" aria-hidden="true"></i></label></span>
    <span><input type="radio" name="rating" id="str3" value="3"><label for="str3"><i class="fa fa-star fa-lg" aria-hidden="true"></i></label></span>
    <span><input type="radio" name="rating" id="str2" value="2"><label for="str2"><i class="fa fa-star fa-lg" aria-hidden="true"></i></label></span>
    <span><input type="radio" name="rating" id="str1" value="1"><label for="str1"><i class="fa fa-star fa-lg" aria-hidden="true"></i></label></span>
</div>';


//            echo '<input name="' . $this->name . '" type="text" value="19">';

        echo '</div><div class="col-sm-1 status"></div></div>';


    }
}