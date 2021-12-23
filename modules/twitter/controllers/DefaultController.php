<?php

namespace app\modules\twitter\controllers;

use app\modules\twitter\services\TwitterService;
use Yii;
use yii\web\Controller;

/**
 * Default controller for the `twitter` module
 */
class DefaultController extends Controller
{
    private TwitterService $twitterService;

    public function __construct($id, $module, TwitterService $twitterService, $config = [])
    {
        $this->twitterService = $twitterService;
        parent::__construct($id, $module, $config);
    }

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex(): string
    {
        $twitterName = Yii::$app->params['twitter']['username'];
        $tweets = $this->twitterService->getTweets($twitterName);

        return $this->render('index', compact('tweets', 'twitterName'));
    }
}
