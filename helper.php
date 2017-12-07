<?php
/**
 * Вспомогательный класс для модуля "История школы в статистике".
 */
 
class ModRatingHelper
{ 
    public static function getRating()
    {
        $db = JFactory::getDbo();

		$query = $db->getQuery(true);

		$query->select('username,(num_contacts + (num_dates * 10 ) + (num_closenesses * 100)) AS Practice');
		$query->from($db->quoteName('#__users'));
		$query->where($db->quoteName('num_contacts') . ' > '. $db->quote('0'));
		$query->order('Practice DESC');

		$db->setQuery($query);

		$result = $db->loadRowList();

		return $result;
    }
}