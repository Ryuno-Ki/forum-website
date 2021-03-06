<?php
/** 
*
* search [Ελληνικά (Ελλάδα)]
*
* @package language
* @version $Id: search.php 8479 2008-03-29 00:22:48Z naderman $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
* Ελληνική μετάφραση από τον Γιάννη Ορφανίδη (Jorfan81@hotmail.com) και την ομάδα μετάφρασης του phpbb2.gr:
* (http://phpbb2.gr/groupcp.php?g=322&sid=7acc2b540cebf07b063274dde036a3ac)
* Giannis Orfanidis Athanasios Ziouzios Panagioths Mixas Konstantakelhs Panagioths
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
// Version: 1.0.4
// Date: 09/04/2008 22:29:44
// Author: phpBB.fr
// Website: http://www.phpbb.fr/
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
	'ALL_AVAILABLE'			=> 'Όλα τα διαθέσιμα',
	'ALL_RESULTS'			=> 'Επιλογή χρονικού ορίου',

	'DISPLAY_RESULTS'		=> 'Εμφάνιση αποτελεσμάτων κατά',

	'FOUND_SEARCH_MATCH'	=> 'Η αναζήτηση βρήκε %d εγγραφή',
	'FOUND_SEARCH_MATCHES'	=> 'Η αναζήτηση βρήκε %d εγγραφές',
	'FOUND_MORE_SEARCH_MATCHES'	=> 'Αναζήτηση για περισσότερες %d εγγραφές',

	'GLOBAL'				=> 'Γενική Ανακοίνωση',

	'IGNORED_TERMS'			=> 'αγνοήστε',
	'IGNORED_TERMS_EXPLAIN'	=> 'Οι ακόλουθες λέξεις στην ερώτηση αναζήτησής σας αγνοήθηκαν επειδή υπάρχουν πάρα πολύ κοινές λέξεις : <strong>%s</strong>',

	'JUMP_TO_POST'			=> 'Μετάβαση στη δημοσίευση',

	'LOGIN_EXPLAIN_EGOSEARCH'	=> 'Η κοινότητα απαιτεί να εγγραφείτε ή να συνδεθείτε για να δείτε τις δημοσιεύσεις σας.',
	'MAX_NUM_SEARCH_KEYWORDS_REFINE'   => 'Ορίσατε πολλές λέξεις για την αναζήτηση σας. Παρακαλώ μή χρησιμοποιείτε περισσότερες απο %1$d λέξεις.',

	'NO_KEYWORDS'			=> 'Πρέπει να διευκρινίσετε τουλάχιστον μια λέξη στην αναζήτηση. Κάθε λέξη πρέπει να αποτελείτε από τουλάχιστον %d χαρακτήρες και δεν πρέπει να περιέχει περισσότερο από %d χαρακτήρες αποκλείοντας τους μπαλαντέρ.',
	'NO_RECENT_SEARCHES'	=> 'Καμία αναζήτηση δεν έχει πραγματοποιηθεί πρόσφατα',
	'NO_SEARCH'				=> 'Συγνώμη αλλά δεν σας επιτρέπετε να χρησιμοποιήσετε το σύστημα αναζήτησης.',
	'NO_SEARCH_RESULTS'		=> 'Καμία κατάλληλη αντιστοιχία δεν βρέθηκε.',
	'NO_SEARCH_TIME'		=> 'Συγνώμη αλλά δεν μπορείτε να χρησιμοποιήσετε την αναζήτηση αυτή την στιγμή. Προσπαθήστε πάλι σε λίγα λεπτά.',
	'WORD_IN_NO_POST'		=> 'Καμία δημοσίευση δεν βρέθηκε επειδή η λέξη <strong>%s</strong> δεν περιλαμβάνεται σε οποιαδήποτε δημοσίευση.',
	'WORDS_IN_NO_POST'		=> 'Καμία δημοσίευση δεν βρέθηκε επειδή οι λέξεις <strong>%s</strong> δεν περιλαμβάνονται σε οποιαδήποτε δημοσίευση',

	'POST_CHARACTERS'		=> 'Χαρακτήρες δημοσίευσης',

	'RECENT_SEARCHES'		=> 'Πρόσφατες αναζητήσεις',
	'RESULT_DAYS'			=> 'Εμφάνιση αποτελεσμάτων πρίν',
	'RESULT_SORT'			=> 'Ταξινόμηση αποτελεσμάτων κατά',
	'RETURN_FIRST'			=> 'Εμφάνιση των πρώτων',
	'RETURN_TO_SEARCH_ADV'	=> 'Επιστροφή στην Ειδική αναζήτηση',
	
	'SEARCHED_FOR'			=> 'Αναζήτησε χρησιμοποιούμενους όρους',
	'SEARCHED_TOPIC'		=> 'Αναζήτησε θέμα',
	'SEARCH_ALL_TERMS'		=> 'Αναζήτησε όλους τους όρους',
	'SEARCH_ANY_TERMS'		=> 'Αναζήτησε όλους τους όρους',
	'SEARCH_AUTHOR'			=> 'Αναζήτηση αποστολέα',
	'SEARCH_AUTHOR_EXPLAIN'	=> 'Ο χαρακτήρας * χρησιμοποιείται ως μπαλαντέρ',
	'SEARCH_FORUMS'			=> 'Αναζήτηση στην Δ. Συζήτηση',
	'SEARCH_FIRST_POST'		=> 'Στην πρώτη δημοσίευση του θέματος μόνο',
	'SEARCH_FORUMS_EXPLAIN'	=> 'Επιλέξτε την Δ. Συζήτηση ή τις Δ. Συζητήσεις που θέλετε να αναζητήσετε. Για ταχύτητα όλες οι υπό-συζητήσεις μπορούν να αναζητηθούν με την επιλογή του γονέα, επιλέγοντας την ποιο κάτω επιλογή.',
	'SEARCH_IN_RESULTS'		=> 'Αναζητήστε αυτά τα αποτελέσματα',
	'SEARCH_KEYWORDS'		=> 'Αναζήτηση λέξεων κλειδιών',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'Μπορείτε να χρησιμοποιήσετε το <u>+</u> Για να συμπεριλάβετε τις λέξεις που πρέπει να βρίσκονται στο αποτέλεσμα, <u>-</u> Για να συμπεριλάβετε τις λέξεις που μπορούν να βρίσκονται στο αποτέλεσμα <u>|</u> Για να συμπεριλάβετε τις λέξεις που δεν πρέπει να βρίσκονται στο αποτέλεσμα. Ο χαρακτήρας * χρησιμοποιείται ως μπαλαντέρ',
	'SEARCH_MSG_ONLY'		=> 'Αναζήτησε μόνο στο κείμενο του μηνύματος',
	'SEARCH_OPTIONS'		=> 'Ρυθμισεις αναζητησης',
	'SEARCH_QUERY'			=> 'Ερωτημα αναζητησης',
	'SEARCH_SUBFORUMS'		=> 'Αναζήτηση υπό-φορουμ',
	'SEARCH_TITLE_MSG'		=> 'Τίτλο θέματος και κείμενο μηνύματος',
	'SEARCH_TITLE_ONLY'		=> 'Τίτλο θέματος μόνο',
	'SEARCH_WITHIN'			=> 'Αναζήτηση σε',
	'SORT_ASCENDING'		=> 'Αύξουσα',
	'SORT_AUTHOR'			=> 'Συγγραφέας',
	'SORT_DESCENDING'		=> 'Φθίνουσα',
	'SORT_FORUM'			=> 'Δ. Συζήτηση',
	'SORT_POST_SUBJECT'		=> 'Θέμα δημοσίευσης',
	'SORT_TIME'				=> 'Ώρα δημοσίευσης',
	
	'TOO_FEW_AUTHOR_CHARS'	=> 'Πρέπει να διευκρινίσετε τουλάχιστον τους τελευταίους %d χαρακτήρες του ονόματος του συγγραφέα.',	
));

?>
