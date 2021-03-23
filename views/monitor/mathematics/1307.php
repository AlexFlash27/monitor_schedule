<?php

/* @var $this yii\web\View */

$title = '1307'; //НОМЕР КАБИНЕТА
$room_lesson = 'КАБИНЕТ МАТЕМАТИКИ'; //НАЗВАНИЕ КАБИНЕТА
$l_block = 'РАСПИСАНИЕ'; //ЛЕВЫЙ БЛОК
$r_block = 'В ЭТОТ ДЕНЬ РОДИЛИСЬ'; //ПРАВЫЙ БЛОК
$m_block_1 = 'КРАСОТА МАТЕМАТИКИ'; //СРЕДНИЙ БЛОК 1
$m_block_2 = 'ИНТЕРЕСНЫЕ ФАКТЫ'; //СРЕДНИЙ БЛОК 2
$fs_block = ''; //ОТВЕТСТВЕННЫЙ ЗА ПОЖАРНУЮ БЕЗОПАСНОСТЬ

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
            <div id="2" style="color: #ff0; font-size: 35px;"><?= $r_block ?></div>
            </p>
            <img id="slide" height="700px">
        </div>

        <div class="tasks_block">
            <div id="3" style="color: #ff0; font-size: 35px;"><?= $m_block_1 ?></div>
            <video id="video" autoplay loop muted style="width: 98%; height: 45%;">
                <source src= <?= Yii::getAlias('@web') . "/img/vid2.mp4" ?>>
            </video>

            <div id="4" style="color: #ff0;"><?= $m_block_2 ?></div>

            <marquee behavior="" ; direction="up" ; scrollamount="2" height="40%">
                <ul>
                    <li>
                        Среди всех фигур с одинаковым периметром, у круга будет самая большая площадь. И наоборот, среди
                        всех
                        фигур с одинаковой площадью, у круга будет самый маленький периметр.
                    </li>
                    <li>
                        Ноль – единственное в математике число, которое нельзя написать римскими цифрами.
                    </li>
                    <li>
                        Число 18 – единственное кроме нуля, сумма цифр которого в два раза меньше него самого.
                    </li>
                    <li>
                        Сумма чисел от 1 до 100 составляет 5050.
                    </li>
                </ul>
            </marquee>

        </div>
    </div>
</div>

<div class="fire-safety_block">
    <b>&nbsp;Ответственный за пожарную безопасность:</b> <?= $fs_block ?>
</div>
