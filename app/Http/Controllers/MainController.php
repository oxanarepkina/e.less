<?php

namespace App\Http\Controllers;

use App\Feedback;
use App\Form;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function display()
    {
        $form = new Form();

        $form_fields = $form->getFormFields();

        return view('form', ['fields' => $form_fields]);
    }

    public function submit(Request $request)
    {
        $feedback = new Feedback();

        $feedback->gender = $request->input('Geschlecht');
        $feedback->age = $request->input('Alter');
        $feedback->product = $request->get('Produkt');
        $feedback->cost = $request->input('MonatlicheKosten');
        $feedback->rating = $request->input('Bewertung');
        $feedback->residence = $request->input('Wohnort');;

        $feedback->save();

        return redirect('/success');
    }
}
