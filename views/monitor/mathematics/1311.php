<?php

/* @var $this yii\web\View */

$title = '1311'; //НОМЕР КАБИНЕТА
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

        <div class="schedule_block" style="font-size: 24px">
            <center>
                <div id="1" style="color: #ff0; font-size: 35px;"><?= $l_block ?></div>
            </center>
            </p>

            <?php foreach ($lessons as $lesson): ?>

                <?php if ($lesson->getRoomNumber() == $title) { ?>

                    <p style="text-align: center;"> <?php echo $lesson->subject_seq . '. '; ?><?php echo $lesson->subject_name; ?>
                        <?php echo '(' . $lesson->getClassName() . ')'; ?>

                    <?php /*echo $lesson->getRoomNumber(); */ ?>

                <?php } ?>

            <?php endforeach; ?>

            </p>
            <center>
                <div id="lesson" style="color: #ff0;">Идет - урок</div>
            </center>
            <center>
                <div id="lesson-time" style="color: #ff0;">До окончания: -- минут</div>
            </center>
        </div>

        <div class="info_block">
            <center>
                <div id="2" style="color: #ff0;"><?= $r_block ?></div>
            </center>
            <br>
            <img id="slide" height="626px">
        </div>
    </div>
</div>

<div class="tasks_block">
    <center>
        <div id="3" style="color: #ff0;"><?= $m_block_1 ?></div>
    </center>
    <video id="video" autoplay loop muted style="width: 98%; height: 50%;">
        <source src = <?= Yii::getAlias('@web') . "/img/vid2.mp4" ?>>
    </video>

    <center>
        <div id="4" style="color: #ff0;"><?= $m_block_2 ?></div>
    </center>
    <marquee behavior="" ; direction="up" ; scrollamount="2" height="34%">
        <ul>
            <li>
                Среди всех фигур с одинаковым периметром, у круга будет самая большая площадь. И наоборот, среди всех
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

<div class="fire-safety_block">
    <b>&nbsp;Ответственный за пожарную безопасность:</b> <?= $fs_block ?>
</div>
