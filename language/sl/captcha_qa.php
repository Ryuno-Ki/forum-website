<?php
/**
*
* captcha_qa [U.S. English]
*
* @package language
* @version $Id: captcha_qa.php 9966 2009-08-12 15:12:03Z Kellanved $
* @copyright (c) 2009 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

//
// TRANSLATION DETAILS
//
// Author: Maël Soucaze
// E-mail: maelsoucaze@gmail.com
// Website: http://twitter.com/maelsoucaze
//
// TRANSLATION LICENSE
//
// This program is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, version 2 of the License.
//
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with this program. If not, see http://opensource.org/licenses/gpl-license.php.
//
// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//

$lang = array_merge($lang, array(
	'CAPTCHA_QA'				=> 'Q&amp;A CAPTCHA',
	'CONFIRM_QUESTION_EXPLAIN'	=> 'This question is a means of identifying and preventing automated submissions.',
	'CONFIRM_QUESTION_WRONG'	=> 'You have provided an invalid answer to the confirmation question.',

	'QUESTION_ANSWERS'			=> 'Answers',
	'ANSWERS_EXPLAIN'			=> 'Please enter valid answers to the question, one per line.',
	'CONFIRM_QUESTION'			=> 'Question',

	'ANSWER'					=> 'Answer',
	'EDIT_QUESTION'				=> 'Edit Question',
	'QUESTIONS'					=> 'Questions',
	'QUESTIONS_EXPLAIN'			=> 'During registration, users will be asked one of the questions specified here. To use this plugin, at least one question must be set in the default language. These questions should be easy for your target audience to answer, but beyond the ability of a bot capable of running a Google™ search. Using a large and regulary changed set of questions will yield the best results. Enable the strict setting if your question relies on punctuation or capitalisation.',
	'QUESTION_DELETED'			=> 'Question deleted',
	'QUESTION_LANG'				=> 'Language',
	'QUESTION_LANG_EXPLAIN'		=> 'The language that this question and its answers are written in.',
	'QUESTION_STRICT'			=> 'Strict check',
	'QUESTION_STRICT_EXPLAIN'	=> 'If enabled, capitalisation and whitespace will also be enforced.',

	'QUESTION_TEXT'				=> 'Question',
	'QUESTION_TEXT_EXPLAIN'		=> 'The question that will be asked on registration.',

	'QA_ERROR_MSG'				=> 'Please fill in all fields and enter at least one answer.',
));

?>