<?php
/**
 * Модуль "История школы в статистике".
 * Модуль отображает следующий текст,
 * динамически подставляя цифры и необходимые окончания к словам:
 * 222 ученик из 5 стран, 73 городов познакомились с 2296 девушками,
 * провели свидание с 232 девушками, занялись сексом с 222 девушками
 * и перевели 492368 рублей пожервований.
 */

defined('_JEXEC') or die;

require_once dirname(__FILE__) . '/helper.php';

$num_students = ModHistoryHelper::countStudents(); // количество учеников

$num_countries = ModHistoryHelper::countCountries(); // количество стран

$num_cities = ModHistoryHelper::countCities(); // количество городов

$num_contacts = ModHistoryHelper::countContacts(); // количество подходов

$num_dates = ModHistoryHelper::countDates(); // количество свиданий

$num_sex = ModHistoryHelper::countSex(); // количество секса

$num_donat = ModHistoryHelper::countDonat(); // сумма пожертвований

require JModuleHelper::getLayoutPath('mod_history');