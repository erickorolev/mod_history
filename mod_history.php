<?php
/**
 * Модуль "История школы в статистике".
 */

defined('_JEXEC') or die;

require_once dirname(__FILE__) . '/helper.php';

$rating = ModRatingHelper::getRating();

require JModuleHelper::getLayoutPath('mod_history');