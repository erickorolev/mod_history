<?php
/**
 * Модуль "История школы в статистике".
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