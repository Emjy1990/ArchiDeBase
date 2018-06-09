<?php


namespace TESTRESET\Controllers;

use League\Plates\Engine as Plates;
use TESTRESET\Application;

abstract class CoreController {

	protected $templateEngine;

	public function __construct(Application $app) {
        // Create new Plates instance
        $this->templateEngine = new Plates(__DIR__.'/../Views');

        // On transmet des données à toutes les views
        $this->templateEngine->addData([
            'router' => $app->getRouter() // => $router dans toutes les views
        ]);
    }

	protected function show(string $templateName, array $dataToViews=[]) {
        $viewFolder = '';
        // TODO récupérer dynamiquement le répertoire de la view
        // Render a template
        echo $this->templateEngine->render($viewFolder.$templateName, $dataToViews);
    }

		protected static function sendJson($data) {
        header('Content-Type: application/json');
        echo json_encode($data);
        exit;
    }

		public static function sendHttpError($errorCode, $htmlContent='') {
        // Erreur 404 not found
        if ($errorCode == 404) {
            header("HTTP/1.0 404 Not Found");
            echo $htmlContent;
            exit;
        }
    }
}
