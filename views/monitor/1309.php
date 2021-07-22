<?php

/* @var $this yii\web\View */

$title = '1309'; //НОМЕР КАБИНЕТА
$room_lesson = 'КАБИНЕТ ИЗО'; //НАЗВАНИЕ КАБИНЕТА
$l_block = 'РАСПИСАНИЕ'; //ЛЕВЫЙ БЛОК
$r_block = 'ВЕЛИКИЕ ХУДОЖНИКИ'; //ПРАВЫЙ БЛОК
$m_block_1 = 'КРАСОТА ГРАФИЧЕСКОГО РИСУНКА'; //СРЕДНИЙ БЛОК 1
$m_block_2 = 'ИНТЕРЕСНЫЕ ФАКТЫ ИЗ ЖИЗНИ ВЕЛИКИХ ХУДОЖНИКОВ'; //СРЕДНИЙ БЛОК 2
$fs_block = 'Э.Ш. Галиева'; //ОТВЕТСТВЕННЫЙ ЗА ПОЖАРНУЮ БЕЗОПАСНОСТЬ

$this->title = $title;
?>

<div class="container-fluid">
    <div class="row">
        <div class="room_block">
            <div class="room_number"><?= $title ?></div>
            <div class="room_name"><?= $room_lesson ?></div>
        </div>

        <div class="schedule_block">
            <div id="1" style="color: #ff0; font-size: 35px;"><?= $l_block ?></div>
            </p>

            <?php foreach ($lessons as $lesson): ?>

                <?php if ($lesson->getRoomNumber() == $title) { ?>
                    <p> <?php echo $lesson->subject_seq . '. '; ?><?php echo $lesson->subject_name; ?>
                        <?php echo '(' . $lesson->getClassName() . ')'; ?></p>
                    <?php /*echo $lesson->getRoomNumber(); */ ?>

                <?php } ?>

            <?php endforeach; ?>

            </p>
            <div id="lesson" style="color: #ff0;">Идет - урок</div>
            <div id="lesson-time" style="color: #ff0;">До окончания: -- минут</div>
        </div>

        <div class="info_block">
            <div id="2" style="color: #ff0;"><?= $r_block ?></div>
            </p>
            <img id="slide" height="626px">
        </div>
    </div>
</div>

<div class="tasks_block">
    <div id="3" style="color: #ff0;"><?= $m_block_1 ?></div>
    <video id="video" autoplay muted style="width: 100%; height: 55%;" onended="run()">
        <!--<source src= --><? /*= Yii::getAlias('@web') . "/img/art.mp4" */ ?>>
    </video>

    <script>
        var video_count = 0;
        var videoPlayer = document.getElementById("video");
        var array_video = [
            <?php
            $dir = Yii::getAlias('@web') . 'img/art/video';
            if ($handle = opendir($dir)) {
                while (false !== ($file = readdir($handle))) {
                    if ($file != "." && $file != "..") {
                        $array = explode('.', $file);
                        if (count($array) == 2) {
                            if ($array[1] == "mp4") echo '"/img/art/video/' . $file . '",';
                        }
                    }
                }
            }
            ?>
        ];

        run();

        function run() {
            if (video_count === array_video.length - 1) location.reload();
            videoPlayer.src = array_video[video_count];
            videoPlayer.play();
            video_count++;
        }
    </script>

    <div id="4" style="color: #ff0;"><?= $m_block_2 ?></div>

    <marquee behavior="" ; direction="up" ; scrollamount="2" height="30%">
        <ul>
            <li>
                В каждой из работ Дали есть либо его портрет, либо силуэт.
            </li>
            <li>
                Идея мягких часов пришла к Дали, когда он наблюдал, как плавится сыр Камамбер на солнце.
            </li>
            <li>
                Темой всех работ художника Марселя Дюшан была повседневность. Самая знаменитая его работа, носит
                название «Фонтан», и есть ничто иное, как извергающаяся моча самого художника.
            </li>
            <li>
                Работа Анри Матисса, «Лодка», в течение 46 дней провисела верх на выставке в Нью Йорке, прежде чем
                кто-то заметил. Картину успели оценить 1600 посетителей.
            </li>
            <li>
                Джексон Поллок часто писал свои картины сигаретами.
            </li>
            <li>
                Работа художника Огюста Родена, «Бронзовый век», была настолько реалистичной, что людям казалось, будто
                внутри скульптуры живой человек.
            </li>
            <li>
                Рубенс был возведен в рыцари и Филиппом IV, Королем Испании, Чарльзом I, Королем Англии.
            </li>
        </ul>
    </marquee>

</div>

<div class="fire-safety_block">
    <b>&nbsp;Ответственный за пожарную безопасность:</b> <span id="fs" style="color: #ffffff;"><?= $fs_block ?></span>
</div>
