<?php

namespace app\modules\twitter\services;

use DG\Twitter\Twitter;
use Yii;

class TwitterService
{
    public function getTweets(string $username, int $count = 10)
    {
        return Yii::$app->twitter->load(Twitter::ME, $count, [
            'screen_name' => $username,
        ]);
    }
}
