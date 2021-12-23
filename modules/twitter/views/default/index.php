<?php

use DG\Twitter\Twitter;

/**
 * @var array $tweets
 * @var string $twitterName
 */

$this->title = 'Список твитов';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="twitter-default-index">
    <h1>Последние твиты <?= $twitterName ?></h1>
    <div class="row">
        <?php if (!empty($tweets)): ?>
            <?php foreach ($tweets as $tweet): ?>
                <div class="col-lg-4">
                    <h2><?= $tweet->created_at ?></h2>
                    <p><?= Twitter::clickable($tweet) ?></p>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="alert alert-danger">
                Твитов не найдено
            </div>
        <?php endif; ?>
    </div>
</div>
