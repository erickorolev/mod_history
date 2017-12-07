<?php
/**
 * Вспомогательный класс для модуля "История школы в статистике".
 */
 
class ModHistoryHelper
{ 
    /**
      * Метод считает количество учеников.
      * Ученик - это зарегистрированный пользователь, который оплатил обучение.
      * Оплата обучения - это в столбце количество пожертвований(donat) больше нуля.
      */
    public static function countStudents()
    {
        $db = JFactory::getDbo();

		$query = $db->getQuery(true);

		$query->select('COUNT(email)');
		$query->from($db->quoteName('#__users'));
		$query->where($db->quoteName('donat') . ' > ' . $db->quote('0'));

		$db->setQuery($query);

		$result = $db->loadResult();

		return $result;
    }

    /**
     * Метод считает количество уникальных стран учеников.
     * Есть ученики с незаполненной графой "страна" из-за чего значение = " ".
     * Фильтруется значение " ", чтобы не считать его еще одной уникальной страной.
     */
    public static function countCountries()
    {
        $db = JFactory::getDbo();

        $query = $db->getQuery(true);

        $query->select('COUNT(DISTINCT country)');
        $query->from($db->quoteName('#__users'));
        $query->where($db->quoteName('country') . ' != ' . $db->quote(' '));

        $db->setQuery($query);

        $result = $db->loadResult();

        return $result;
    }

    /**
     * Метод считает количество уникальных городов учеников.
     * Есть ученики с незаполненной графой "город" из-за чего значение = " ".
     * Фильтруется значение " ", чтобы не считать его еще одной уникальным городом.
     */
    public static function countCities()
    {
        $db = JFactory::getDbo();

        $query = $db->getQuery(true);

        $query->select('COUNT(DISTINCT city)');
        $query->from($db->quoteName('#__users'));
        $query->where($db->quoteName('city') . ' != ' . $db->quote(' '));

        $db->setQuery($query);

        $result = $db->loadResult();

        return $result;
    }

    /**
     * Метод считает количество подходов, совершенных всеми учениками.
     */
    public static function countContacts()
    {
        $db = JFactory::getDbo();

        $query = $db->getQuery(true);

        $query->select('SUM(num_contacts)');
        $query->from($db->quoteName('#__users'));

        $db->setQuery($query);

        $result = $db->loadResult();

        return $result;
    }

    /**
     * Метод считает количество свиданий, совершенных всеми учениками.
     */
    public static function countDates()
    {
        $db = JFactory::getDbo();

        $query = $db->getQuery(true);

        $query->select('SUM(num_dates)');
        $query->from($db->quoteName('#__users'));

        $db->setQuery($query);

        $result = $db->loadResult();

        return $result;
    }

    /**
     * Метод считает количество секса, совершенных всеми учениками.
     */
    public static function countSex()
    {
        $db = JFactory::getDbo();

        $query = $db->getQuery(true);

        $query->select('SUM(num_closenesses)');
        $query->from($db->quoteName('#__users'));

        $db->setQuery($query);

        $result = $db->loadResult();

        return $result;
    }

    /**
     * Метод считает сумму пожертвований, совершенных всеми учениками.
     */
    public static function countDonat()
    {
        $db = JFactory::getDbo();

        $query = $db->getQuery(true);

        $query->select('SUM(donat)');
        $query->from($db->quoteName('#__users'));

        $db->setQuery($query);

        $result = $db->loadResult();

        return $result;
    }
}