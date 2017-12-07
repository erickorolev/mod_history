<?php
/**
 * Шаблон модуля "Топ по опыту".
 */
 
 defined('_JEXEC') or die; ?>
 
 <?php
// Подключение jquery для скрытия/раскрытия строк таблицы.
$document = JFactory::getDocument();
$document->addScript('/modules/mod_rating/js/hide.js');
 // Подключение css стиля модуля
 $document->addStyleSheet('/modules/mod_status/css/tooltips.css');
?>

<table id="practice">
<tbody>
<tr>
<td style="width: 33px;" align="center"><strong>№</strong></td>
<td style="width: 148px;"><strong>Ник</strong></td>
<td style="width: 107px;"><strong><span data-tooltip="+ 1 за подход, + 10 за свидание, + 100 за секс. Опыт подтверждается аудиозаписью">Опыт</span></strong></td>
</tr>
<?php

$position = 1;	

	foreach ($rating as $row) {
		echo '<tr>';
		echo '<td>' . $position . '</td>';
        echo '<td>' . $row['0'] . '</td>';
		echo '<td>' . $row['1'] . '</td>';
		echo '</tr>';
		$position ++;
	}
?>
</table>
<input id="show_2" type="button" value="Раскрыть">
<input id="hide_2" type="button" value="Скрыть">