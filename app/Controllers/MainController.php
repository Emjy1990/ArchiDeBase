<?php

namespace TESTRESET\Controllers;

class MainController extends CoreController {
    public function home() {

				$dataToViews = [
            'toto' => 'tata', // => $toto dans les views
            'titi' => 'tutu' // => $titi dans les views
        ];

        $this->show('main/home', $dataToViews);
    }
}
