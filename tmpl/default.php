<?php
/**
 * Шаблон модуля "История в статистике".
 */
 
 defined('_JEXEC') or die; ?>

<?php

// Массивы с окончаниями слов для чисел (1, 4, 5) для метода ModHistoryHelper::getNumEnding()
$ending_student = ["ученик", "ученика", "учеников"];
$ending_country = ["страны", "стран", "стран"];
$ending_city = ["города", "городов", "городов"];
$ending_girl = ["девушкой", "девушками", "девушками"];
$ending_rubles = ["рубль", "рубля", "рублей"];

?>

<!--
Следующий параграф воспроизводит следующий текст,
динамически подставляя цифры и необходимые окончания к словам:
222 ученик
из 5 стран,
73 городов
познакомились с 2296 девушками,
провели свидание с 232 девушками,
занялись сексом с 222 девушками
и перевели 492368 рублей пожервований.
-->

<p>
    <?php echo $num_students; ?>
    <?php echo ModHistoryHelper::getNumEnding($num_students, $ending_student); ?>
    из
    <?php echo $num_countries; ?>
    <?php echo ModHistoryHelper::getNumEnding($num_countries, $ending_country); ?>,
    <?php echo $num_cities; ?>
    <?php echo ModHistoryHelper::getNumEnding($num_cities, $ending_city); ?>
    познакомились с
    <?php echo $num_contacts; ?>
    <?php echo ModHistoryHelper::getNumEnding($num_contacts, $ending_girl); ?>,
    провели свидание с
    <?php echo $num_dates; ?>
    <?php echo ModHistoryHelper::getNumEnding($num_dates, $ending_girl); ?>,
    занялись сексом с
    <?php echo $num_sex; ?>
    <?php echo ModHistoryHelper::getNumEnding($num_sex, $ending_girl); ?>
    и перевели
    <?php echo $num_donat; ?>
    <?php echo ModHistoryHelper::getNumEnding($num_donat, $ending_rubles); ?>
    пожервований.
</p>