<?php
/**
 * @var $calendarString Calendar::getMonth string
 */
?>


<div class="title">
    Профиль
</div>


<div class="flex-row space-between">

    <div class="user-account">

        <div class="user-header">
            <?php
            $today = getdate();
            $hour = $today['hours'];

            $welcome = ''; // инициализация переменной для приветствия ($welcome можно здесь и не обьявлять)

            if ($hour > 0 && $hour < 6) {
                $welcome = 'Доброй ночи, Эмилия';
            } elseif ($hour >= 6 && $hour < 12) {
                $welcome = 'Доброе утро, Эмилия';
            } elseif ($hour >= 12 && $hour < 18) {
                $welcome = 'Добрый день, Эмилия';
            } elseif ($hour >= 18 && $hour < 23) {
                $welcome = 'Добрый вечер, Эмилия';
            } else {
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
                        ФИО: Кларк Эмилия Валерьевна
                    </div>
                    <div class="user_status">
                        Статус: студентка
                    </div>
                </div>
            </div>

            <div class="account_edit">
                <button class="edit">Редактировать</button>
                <br>
                <button class="theme">Изменить тему</button>
            </div>
        </div>

    </div>

    <div class="learning-progress">
        <?php
        //                function date_progress($start, $end, $date = null) {
        //                    $date = $date ?: time();
        //                    return (($date - $start) / ($end - $start)) * 100;
        //                }

        $start = strtotime("2022-09-01");
        $end = strtotime("2023-06-30");
        $now = date("Y-m-d");
        $today = strtotime($now);

        $total_days = ($end - $start) / (60 * 60 * 24);
        $past_day = ($today - $start) / (60 * 60 * 24);
        $days_left = $total_days - $past_day;
        $percent = 100 * $past_day / $total_days;

        $result = round($percent, 0);
        ?>

        <div class="circle">
            <div class="pie" style="--p:<?= $result ?>;--b:1.4vw;--c:#4184F4; top: -1.4vw;left: -1.3vw;">
                <?= $result ?>%
            </div>
            <!--                    <div class="days flex-row">-->
            <!--                        <div class="point"></div>-->
            <!--                        <div>пройдено: --><? //= $past_day ?><!-- дней</div>-->
            <!--                    </div>-->
            <!--                    <hr>-->
            <div class="days flex-row">
                <div class="point"></div>
                Осталось: <?= $days_left ?> дней
            </div>
        </div>


    </div>

</div>


<div class="flex-row space-between" style="margin-top: 2.6vw;">
    <div class="calendar">
        <div class="indicators flex-row">
            <div class="indicator flex-row">
                <div class="weekend"></div>
                Выходной день
            </div>

            <div class="indicator flex-row">
                <div class="sdo"></div>
                СДО
            </div>

            <div class="indicator flex-row">
                <div class="study"></div>
                Учебный день
            </div>
        </div>

        <div class="calendar-content">
            <?= $calendarString ?>
        </div>
    </div>

    <div class="schedule">
        <?php
        // API ключ
        $apiKey = "fe57b721fd47b8600afac45a7829c1ea";
        // Город погода которого нужна
        $city = "Moscow";
        // Ссылка для отправки
        $url = "http://api.openweathermap.org/data/2.5/weather?q=" . $city . "&lang=ru&units=metric&appid=" . $apiKey;
        // Создаём запрос
        $ch = curl_init();

        // Настройка запроса
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, $url);

        // Отправляем запрос и получаем ответ
        $data = json_decode(curl_exec($ch));

        // Закрываем запрос
        curl_close($ch);
        ?>
        <div class="weather">
            <h2>Погода в городе <?php echo $data->name; ?></h2>
            <p>Погода: <?php echo $data->main->temp_min; ?>°C</p>
            <p>Влажность: <?php echo $data->main->humidity; ?> %</p>
            <p>Ветер: <?php echo $data->wind->speed; ?> км/ч</p>
        </div>
    </div>

    <div class="time-schedule"></div>

</div>

<div class="row">
</div>

