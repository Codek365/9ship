<?php

use yii\helpers\Html;
use yii\helpers\Url;

/**
 * @var string $subject
 * @var \@frontend\modules\user\models\User $user
 * @var \@frontend\modules\user\models\Profile $profile
 * @var \@frontend\modules\user\models\UserToken $userToken
 */

$url = Url::toRoute(["/user/confirm", "token" => $userToken->token], true);
?>

<h3><?= $subject ?></h3>

<p><?= Yii::t("user", "Please confirm your email address by clicking the link below:") ?></p>

<p><?= Html::a($url, $url) ?></p>