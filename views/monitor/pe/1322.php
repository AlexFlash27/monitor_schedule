<?php

/* @var $this yii\web\View */

$title = '1322'; //НОМЕР КАБИНЕТА
$room_lesson = 'СЕВЕРНЫЙ ЗАЛ'; //НАЗВАНИЕ КАБИНЕТА
$l_block = 'РАСПИСАНИЕ'; //ЛЕВЫЙ БЛОК
$r_block = 'СПОРТСМЕНЫ УДМУРТИИ'; //ПРАВЫЙ БЛОК
$m_block_1 = 'НОРМАТИВЫ ГТО'; //СРЕДНИЙ БЛОК 1
$m_block_2 = 'ПРАВИЛА ПОВЕДЕНИЯ И ТЕХНИКА БЕЗОПАСНОСТИ'; //СРЕДНИЙ БЛОК 2
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
            <center>
                <div id="1" style="color: #ff0; font-size: 35px;"><?= $l_block ?></div>
            </center>
            </p>

            <?php foreach ($lessons as $lesson): ?>

                <?php if ($lesson->getRoomNumber() == $title) { ?>
                    <p style="text-align: center;"> <?php echo $lesson->subject_seq . '. '; ?><?php echo $lesson->subject_name; ?>
                        <?php echo '(' . $lesson->getClassName() . ')'; ?></p>
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
            <img id="sportmans" height="626px">
        </div>
    </div>
</div>

<div class="tasks_block">
    <center>
        <div id="3" style="color: #ff0;"><?= $m_block_1 ?></div>
    </center>
    </p>

    <center>
        <img id="gto1" style="width: 30%; margin-right: 10%">
        <img id="gto2" style="width: 30%;">
    </center>

    </p>
    <center>
        <div id="4" style="color: #ff0;"><?= $m_block_2 ?></div>
    </center>
    <marquee behavior="" ; direction="up" ; scrollamount="1" height="230vh">
        <ul>
            <li>
                Спортзал учащиеся посещают по расписанию уроков физической культуры и секций.
            </li>
            <li>
                В спортзал входят только по расписанию.
            </li>
            <li>
                Занимающиеся должны быть в спортивной форме.
            </li>
            <li>
                Без разрешения учителя спортивный инвентарь брать не разрешается.
            </li>
            <li>
                Категорически запрещается выполнять упражнения на снарядах без учителя.
            </li>
            <li>
                При выполнении упражнений на снарядах уметь использовать приёмы страховки и самостраховки.
            </li>
            <li>
                Перед занятиями следует снимать часы, цепочки, серьги и другие металлические предметы.
            </li>
            <li>
                Категорически запрещается портить школьное имущество.
            </li>
            <li>
                Со звонком на урок учащиеся собираются на построение в спортивном зале. В случаях, когда занятия
                проводятся на улице, учащиеся не выходят из помещения без сопровождения учителя физкультуры.
            </li>
            <li>
                Запрещается жевать жевательную резинку на уроках физкультуры.
            </li>
        </ul>
    </marquee>
</div>

<div style="margin-top: 1rem !important;" class="fire-safety_block">
    <b>&nbsp;Ответственный за пожарную безопасность:</b> <?= $fs_block ?>
</div>
