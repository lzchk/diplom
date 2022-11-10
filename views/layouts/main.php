<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
<!--    <link href="../css/style.css">-->
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100" >
<?php $this->beginBody() ?>
<div class="wrapper">
    <div>
        <div class="side-menu lock">
            <div class="logo">
                <img src="img/logo.svg" alt="logo">
            </div>
            <div class="menu">
                <div class="menu-item flex-row cursor">
                    <img src="img/menu-item.svg" alt="menu-item" class="menu-item_img">
                    <div class="menu-item_text">
                        Отчеты
                    </div>
                </div>

                <div class="menu-item flex-row cursor">
                    <img src="img/menu-item.svg" alt="menu-item" class="menu-item_img">
                    <div class="menu-item_text">
                        Обсуждения
                    </div>
                </div>

                <div class="menu-item flex-row cursor">
                    <img src="img/menu-item.svg" alt="menu-item" class="menu-item_img">
                    <div class="menu-item_text">
                        Обсуждения
                    </div>
                </div>

                <div class="menu-item flex-row cursor">
                    <img src="img/menu-item.svg" alt="menu-item" class="menu-item_img">
                    <div class="menu-item_text">
                        Обсуждения
                    </div>
                </div>

                <div class="menu-item flex-row cursor">
                    <img src="img/menu-item.svg" alt="menu-item" class="menu-item_img">
                    <div class="menu-item_text">
                        Обсуждения
                    </div>
                </div>
            </div>

            <div class="exit flex-row cursor">
                <img src="img/exit.svg" alt="exit" class="exit_img">
                <div class="exit_text">
                    Выйти
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="user-account">
                <div class="user-header">
                    <?php
                    $today = getdate();
                    $hour = $today['hours'];

                    $welcome = ''; // инициализация переменной для приветствия ($welcome можно здесь и не обьявлять)

                    if ($hour > 0 && $hour < 6) {
                        $welcome = 'Доброй ночи, Эмилия';
                    }
                    elseif ($hour >= 6 && $hour < 12) {
                        $welcome = 'Доброе утро, Эмилия';
                    }
                    elseif ($hour >= 12 && $hour < 18) {
                        $welcome = 'Добрый день, Эмилия';
                    }
                    elseif ($hour >= 18 && $hour < 23) {
                        $welcome = 'Добрый вечер, Эмилия';
                    }
                    else {
                        $welcome = 'Доброй ночи, Эмилия';
                    }
                    echo $welcome;
                    ?>
                </div>

                <div class="user row">
                    <div class="user_info flex-row">
                        <img src="img/account_photo.png" alt="account_photo">
                        <div class="user-info flex-column">
                            <div class="user_group">
                                39-03
                            </div>
                            <div class="user_name">
                                ФИО:   Кларк Эмилия Валерьевна
                            </div>
                            <div class="user_status">
                                Статус:   студентка
                            </div>
                        </div>
                    </div>

                    <div class="account_edit">

                    </div>
                </div>
            </div>

            <div class="learning-progress">

            </div>
        </div>

        <div class="row">
            <div class="calendar">
                <div class="indicator">

                </div>

                <div class="calendar-content">

                </div>
            </div>

            <!--        расписание "Понедельник, 8 ноября" и тд-->
            <div class="schedule">

            </div>

            <div class="time-schedule">

            </div>
        </div>

        <div class="row">

        </div>
    </div>
</div>

<div class="row">

</div>




<!--<header>-->
<!--    --><?php
//    NavBar::begin([
//        'brandLabel' => Yii::$app->name,
//        'brandUrl' => Yii::$app->homeUrl,
//        'options' => [
//            'class' => 'navbar navbar-expand-md navbar-dark bg-dark fixed-top',
//        ],
//    ]);
//    echo Nav::widget([
//        'options' => ['class' => 'navbar-nav'],
//        'items' => [
//            ['label' => 'Home', 'url' => ['/site/index']],
//            ['label' => 'About', 'url' => ['/site/about']],
//            ['label' => 'Contact', 'url' => ['/site/contact']],
//            // ['label' => 'Work', 'url' => ['/work/index']],
//            ['label' => 'Discipline', 'url' => ['/discipline/index']],
//            ['label' => 'Room', 'url' => ['/room/index']],
//            ['label' => 'Specialty', 'url' => ['/specialty/index']],
//            ['label' => 'Teacher', 'url' => ['/teacher/index']],
//            ['label' => 'Schedule', 'url' => ['/schedule/index']],
//            // ['label' => 'Mark', 'url' => ['/mark/index']],
//            Yii::$app->user->isGuest ? (
//                ['label' => 'Login', 'url' => ['/site/login']]
//            ) : (
//                '<li>'
//                . Html::beginForm(['/site/logout'], 'post', ['class' => 'form-inline'])
//                . Html::submitButton(
//                    'Logout (' . Yii::$app->user->identity->username . ')',
//                    ['class' => 'btn btn-link logout']
//                )
//                . Html::endForm()
//                . '</li>'
//            )
//        ],
//    ]);
//    NavBar::end();
//    ?>
<!--</header>-->

<!--<main role="main" class="flex-shrink-0">-->
<!--    <div class="time">-->
<!--        --><?php
//        $now = time(); // or your date as well
//        $your_date = strtotime("2023-06-21");
//        $datediff = $your_date - $now;
//
//        echo round($datediff / (60 * 60 * 24));
//        ?>
<!--    </div>-->
<!---->
<!---->
<!--    <div class="container">-->
<!--        --><?//= Breadcrumbs::widget([
//            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
//        ]) ?>
<!--        --><?//= Alert::widget() ?>
<!--        --><?//= $content ?>
<!--    </div>-->
<!--</main>-->

<!--<footer class="footer mt-auto py-3 text-muted">-->
<!--    <div class="container">-->
<!--        <p class="float-left">&copy; My Company --><?//= date('Y') ?><!--</p>-->
<!--        <p class="float-right">--><?//= Yii::powered() ?><!--</p>-->
<!--    </div>-->
<!--</footer>-->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
