<?php

use yii\helpers\Html;
use yii\helpers\Url;

/**
 * @var string $subject
 * @var \frontend\modules\user\models\User $user
 * @var \frontend\modules\user\models\UserToken $userToken
 */

$url = Url::toRoute(["/user/login-callback", "token" => $userToken->token], true);
?>

<h3><?= $subject ?></h3>

<p><?= Html::a($url, $url) ?></p>