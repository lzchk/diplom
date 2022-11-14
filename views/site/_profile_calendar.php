<?
/**
 * @var $schedule \app\models\Schedule
 */
?>
<div class="schedule">
    <div class="weather flex-row">
        <?php

        // API ключ
        use yii\db\Expression;

        $apiKey = "fe57b721fd47b8600afac45a7829c1ea";
        // Город погода которого нужна
        $city = "St. Petersburg";
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



        $after = '';

        if(count($schedule) < 5){
            $count = 5 - count($schedule);
            for($i = $count; $i <= 5; $i++){
                $after = $after."<div class='schedule_body'>$i</div>";
            }

        }




        ?>

        <div class="weather_name">Санкт-Петербург:</div>
        <div class="weather_temp"><?php echo $data->main->temp_min; ?>°C <img src="img/weather.svg"></div>
        <!--            <div class="weather_img"><img src="img/weather.svg"></div>-->
        <!--            <h2>Погода в городе --><?php //echo $data->name; ?><!--</h2>-->
        <!--            <p>Погода: --><?php //echo $data->main->temp_min; ?><!--°C</p>-->
        <!--            <p>Влажность: --><?php //echo $data->main->humidity; ?><!-- %</p>-->
        <!--            <p>Ветер: --><?php //echo $data->wind->speed; ?><!-- км/ч</p>-->
    </div>

    <div class="schedule-of-classes">
        <div class="schedule_header">
            <div class="schedule_date">
                <?= $dayOfTheWeek ?>, <?=date("d")?> <?=$dayOfTheMonth?>
            </div>
            <div class="number-week">
                Числитель
            </div>
        </div>
        <div class="schedule_body">
            <?php




            for ($i=0;$i<5; $i++){
                $item = $schedule[$i];
                var_dump($item->num_lesson);
                if (is_null($item)){
                    echo 'Нет пары';
                    echo ($item->num_lesson).'<br>';
                } else {
                    echo ($i+1).$item->discipline->name.'<br>';
                }
//                if($item->num_lesson)












            }
//            foreach ($schedule as $item) {
//                if (item[7] == 1){
//                    echo '<div>'.($item->discipline->name).'<br>'.'</div>';
//                    echo ($item->room->number).'<br>';
//                }
//
//            }

            ?>
        </div>

    </div>

    <div class="time-schedule"></div>

</div>