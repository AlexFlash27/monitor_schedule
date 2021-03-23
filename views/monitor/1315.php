<?php

/* @var $this yii\web\View */

$title = '1315'; //НОМЕР КАБИНЕТА
$room_lesson = 'ИНФОРМАЦИОННЫЙ ОТДЕЛ'; //НАЗВАНИЕ КАБИНЕТА
$l_block = 'ГРАФИК РАБОТЫ'; //ЛЕВЫЙ БЛОК
$r_block = 'ШКОЛА В СОЦСЕТЯХ'; //ПРАВЫЙ БЛОК
$m_block_1 = 'ТЕХНОЛОГИИ БУДУЩЕГО'; //СРЕДНИЙ БЛОК 1
$m_block_2 = '10 ПРАВИЛ БЕЗОПАСНОГО ПОВЕДЕНИЯ В ИНТЕРНЕТЕ'; //СРЕДНИЙ БЛОК 2
$fs_block = 'Арсланова Ю.А.'; //ОТВЕТСТВЕННЫЙ ЗА ПОЖАРНУЮ БЕЗОПАСНОСТЬ

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

            <p>
            <center>ПН-ПТ 08:30-17:30</center>
            </p>
            <p>
            <center>ОБЕД 11:30-12:30</center>
            </p>

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
            </p>
            <center>
                <img id="soc" height="480px" src=<?= Yii::getAlias('@web') . "/img/soc.png" ?>>
            </center>
        </div>
    </div>
</div>

<div class="tasks_block">
    <center>
        <div id="3" style="color: #ff0;"><?= $m_block_1 ?></div>
    </center>
    <video id="video" autoplay loop muted style="width: 100%; height: 50%;">
        <source src= <?= Yii::getAlias('@web') . "/img/it.mp4" ?>>
    </video>

    <center>
        <div id="4" style="color: #ff0;"><?= $m_block_2 ?></div>
    </center>
    <marquee behavior="" ; direction="up" ; scrollamount="2" height="37%">
        <ul>
            <li>
                Никогда не распространяться о личной информации — своей и семейной. Никому нельзя говорить свой адрес,
                адрес и номер Школы, свои настоящие фамилию и имя, имена родителей. Под запретом сведения о местах
                работы родителей, их трудовом графике. Никто не должен узнать, в какие Часы ребёнок дома один или в
                квартире вообще никого нет. Фото, даже вполне приличные, отправлять тоже не стоит.
            </li>
            <li>
                Родителям, особенно в первое время, нужно следить за тем, какие сайты посещает ребенок. Если среди них
                есть подозрительные, это повод провести беседу.
            </li>
            <li>
                Уделите внимание теме защиты от спама. Научите определять такие Сообщения и не отвечать на них, не
                переходить по подозрительным ссылкам.
            </li>
            <li>
                Придумайте и запомните хороший сложный пароль. Сообщите ребёнку, что его нельзя никому называть.
            </li>
            <li>Если выйти в Сеть пришлось с чужого устройства, потом обязательно стоит выйти из своих аккаунтов. Лучше
                ещё и почистить историю посещений.
            </li>
            <li>
                Нужно ограничивать время, которое младшеклассник проводит в Сети.
            </li>
            <li>
                Установите правило: перед продажей или покупкой в онлайн-режиме родителей нужно поставить в известность.
            </li>
            <li>
                Для начинающих блогеров особенно важно очертить круг запрещённых тем. Это все, что противоречит
                российскому законодательству, и, конечно, личные сведения.
            </li>
            <li>
                При использовании Инстаграма лучше никогда не указывать геолокацию. Конечно, это малореальное
                требование. Но вот местоположение домашних снимков нельзя отмечать точно.
            </li>
            <li>
                Нужно научиться определять фишинговые сайты. Ссылки на них часто приходят на электронную почту, но их
                можно и просто встретить в Сети. Такие сайты выманивают данные пользователей. Их адреса похожи на
                популярные веб-ресурсы, выглядят они как meil.ru, wk.ru, feisbook.com. Переходить по таким линкам
                опасно, как минимум, можно поймать вирус.
            </li>
        </ul>
    </marquee>
</div>

<div class="fire-safety_block">
    <b>&nbsp;Ответственный за пожарную безопасность:</b> <span id="fs" style="color: #ffffff;"><?= $fs_block ?></span>
</div>
