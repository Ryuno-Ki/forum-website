<?php
/**
*
* acp_profile [Italian]
*
* @package language
* @version $Id: profile.php 9916 2009-08-03 15:46:56Z Kellanved $
* @copyright (c) 2005 phpBB Group
* @copyright (c)  2009 phpBB.it - translated on 2009/11/18
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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

// Custom profile fields
$lang = array_merge($lang, array(
	'ADDED_PROFILE_FIELD'	=> 'Campo profilo personalizzato aggiunto.',
	'ALPHA_ONLY'			=> 'Solo alfanumerico',
	'ALPHA_SPACERS'			=> 'Alfanumerico e spazi',
	'ALWAYS_TODAY'			=> 'Sempre la data corrente',

	'BOOL_ENTRIES_EXPLAIN'	=> 'Inserisci le tue opzioni adesso',
	'BOOL_TYPE_EXPLAIN'		=> 'Definisci il tipo: checkbox o pulsanti di scelta. La checkbox sarà visualizzata solo se è stata selezionata per un dato utente. In quel caso la <strong>seconda</strong> opzione lingua sarà usata. I pulsanti di scelta saranno visualizzati indipendentemente dal loro valore.',

	'CHANGED_PROFILE_FIELD'		=> 'Campo profilo modificato.',
	'CHARS_ANY'					=> 'Qualsiasi carattere',
	'CHECKBOX'					=> 'Checkbox',
	'COLUMNS'					=> 'Colonne',
	'CP_LANG_DEFAULT_VALUE'		=> 'Valore predefinito',
	'CP_LANG_EXPLAIN'			=> 'Campo descrizione',
	'CP_LANG_EXPLAIN_EXPLAIN'	=> 'La spiegazione per questo campo come si presenta all’utente.',
	'CP_LANG_NAME'				=> 'Campo nome/titolo come si presenta all’utente',
	'CP_LANG_OPTIONS'			=> 'Opzioni',
	'CREATE_NEW_FIELD'			=> 'Crea nuovo campo',
	'CUSTOM_FIELDS_NOT_TRANSLATED'	=> 'Almeno un campo profilo personalizzato non è stato ancora tradotto. Inserisci le informazioni richieste cliccando sul link “Traduci”.',

	'DEFAULT_ISO_LANGUAGE'			=> 'Lingua predefinita [%s]',
	'DEFAULT_LANGUAGE_NOT_FILLED'	=> 'Le voci relative alla lingua predefinita per questo campo profilo non sono riempite.',
	'DEFAULT_VALUE'					=> 'Valore predefinito',
	'DELETE_PROFILE_FIELD'			=> 'Rimuovi campo profilo',
	'DELETE_PROFILE_FIELD_CONFIRM'	=> 'Sei sicuro di voler cancellare questo campo profilo?',
	'DISPLAY_AT_PROFILE'			=> 'Mostra nel pannello di controllo utente',
	'DISPLAY_AT_PROFILE_EXPLAIN'	=> 'L’utente è in grado di modificare questo campo del profilo dal pannello di controllo utente.',
	'DISPLAY_AT_REGISTER'			=> 'Mostra alla registrazione',
	'DISPLAY_AT_REGISTER_EXPLAIN'	=> 'Se questa opzione è abilitata, il campo verrà visualizzato al momento della registrazione.',
	'DISPLAY_ON_VT'                 => 'Visualizza nel profilo utente nella pagina argomento',
    'DISPLAY_ON_VT_EXPLAIN'         => 'se questa opzione è abilitata, il campo sarà visualizzato nel mini-profilo presente nella schermata dell’argomento.',
	'DISPLAY_PROFILE_FIELD'			=> 'Rendi visibile campo profilo',
	'DISPLAY_PROFILE_FIELD_EXPLAIN'	=> 'Il campo profilo sarà visualizzato in ogni posizione abilitata nelle impostazioni. Impostandolo su “No” nasconderà il campo negli argomenti, nel profilo e nella lista utenti.',
	'DROPDOWN_ENTRIES_EXPLAIN'		=> 'Inserisci le tue opzioni adesso, una per riga.',

	'EDIT_DROPDOWN_LANG_EXPLAIN'	=> 'Puoi cambiare il testo delle tue opzioni o aggiungerne di nuove alla fine. Si consiglia di non aggiungere nuove opzioni tra le opzioni esistenti perché potrebbe portare ad assegnare opzioni errate. Questo può anche avvenire se rimuovi le opzioni intermedie. Rimuovere le opzioni alla fine porta gli utenti ai quali è stato assegnato questo elemento a ritornare indietro a quelle predefinite.',
	'EMPTY_FIELD_IDENT'				=> 'Identificazione campi vuoti',
	'EMPTY_USER_FIELD_NAME'			=> 'Inserisci un campo nome/titolo',
	'ENTRIES'						=> 'Voci',
	'EVERYTHING_OK'					=> 'Tutto OK',

	'FIELD_BOOL'				=> 'Booleana (Sì/No)',
	'FIELD_DATE'				=> 'Data',
	'FIELD_DESCRIPTION'			=> 'Descrizione campo',
	'FIELD_DESCRIPTION_EXPLAIN'	=> 'La spiegazione per questo campo che si presenta all’utente.',
	'FIELD_DROPDOWN'			=> 'Menù a tendina',
	'FIELD_IDENT'				=> 'Identificazione campo',
	'FIELD_IDENT_ALREADY_EXIST'	=> 'Il campo di identificazione scelto esiste già. Scegli un altro nome.',
	'FIELD_IDENT_EXPLAIN'		=> 'Il campo di identificazione serve per identificare il campo profilo all’interno del database e degli stili.',
	'FIELD_INT'					=> 'Numeri',
	'FIELD_LENGTH'				=> 'Lunghezza della cartella di immissione',
	'FIELD_NOT_FOUND'			=> 'Campo profilo non trovato.',
	'FIELD_STRING'				=> 'Singolo campo di testo',
	'FIELD_TEXT'				=> 'Area di testo',
	'FIELD_TYPE'				=> 'Tipo di campo',
	'FIELD_TYPE_EXPLAIN'		=> 'Non sarete in grado di modificare il tipo di campo in seguito.',
	'FIELD_VALIDATION'			=> 'Convalida campo',
	'FIRST_OPTION'				=> 'Prima opzione',

	'HIDE_PROFILE_FIELD'			=> 'Nascondi campo profilo',
	'HIDE_PROFILE_FIELD_EXPLAIN'	=> 'Nascondi il campo profilo a tutti gli utenti, tranne agli amministratori e moderatori. Se l’opzione è disabilitata nel pannello di controllo utente, l’utente non sarà in grado di vedere o modificare questo campo e il campo può essere modificato solo dagli amministratori.',

	'INVALID_CHARS_FIELD_IDENT'	=> 'Il campo di identificazione può contenere solo minuscole a-z e _',
	'INVALID_FIELD_IDENT_LEN'	=> 'Il campo di identificazione può contenere solo 17 caratteri',
	'ISO_LANGUAGE'				=> 'Lingua [%s]',

	'LANG_SPECIFIC_OPTIONS'		=> 'Opzioni lingua specifica [<strong>%s</strong>]',

	'MAX_FIELD_CHARS'		=> 'Numero massimo di caratteri',
	'MAX_FIELD_NUMBER'		=> 'Numero massimo permesso',
	'MIN_FIELD_CHARS'		=> 'Numero minimo di caratteri',
	'MIN_FIELD_NUMBER'		=> 'Numero minimo permesso',

	'NO_FIELD_ENTRIES'			=> 'Nessuna voce definita',
	'NO_FIELD_ID'				=> 'Nessun campo id specificato.',
	'NO_FIELD_TYPE'				=> 'Nessun tipo di campo specificato.',
	'NO_VALUE_OPTION'			=> 'Opzione equivalente a valore non immesso',
	'NO_VALUE_OPTION_EXPLAIN'	=> 'Valore per nessuna voce. Se il campo è richiesto, l’utente riceverà un errore se sceglie l’opzione selezionata qui.',
	'NUMBERS_ONLY'				=> 'Solo numeri (0-9)',

	'PROFILE_BASIC_OPTIONS'		=> 'Opzioni di base',
	'PROFILE_FIELD_ACTIVATED'	=> 'Campo profilo attivato.',
	'PROFILE_FIELD_DEACTIVATED'	=> 'Campo profilo disattivato.',
	'PROFILE_LANG_OPTIONS'		=> 'Opzioni specifiche lingua',
	'PROFILE_TYPE_OPTIONS'		=> 'Opzioni specifiche tipo profilo',

	'RADIO_BUTTONS'				=> 'Pulsanti di scelta',
	'REMOVED_PROFILE_FIELD'		=> 'Campo profilo rimosso.',
	'REQUIRED_FIELD'			=> 'Campo richiesto',
	'REQUIRED_FIELD_EXPLAIN'	=> 'Forza l’utente a compilare il campo profilo richiesto. Se l’opzione è disabilitata al momento della registrazione, il campo sarà richiesto solo quando l’utente modifica il suo profilo.',
	'ROWS'						=> 'Righe',

	'SAVE'							=> 'Salva',
	'SECOND_OPTION'					=> 'Seconda opzione',
	'STEP_1_EXPLAIN_CREATE'			=> 'Qui puoi inserire i primi parametri di base del tuo nuovo campo profilo. Queste informazioni sono necessarie per il secondo passo quando sarai in grado di impostare le restanti opzioni e potrai vedere in anteprima il tuo campo profilo e migliorarlo, se vorrai, in seguito.',
	'STEP_1_EXPLAIN_EDIT'			=> 'Qui puoi cambiare i parametri di base del tuo campo profilo. Le opzioni relative sono ricalcolate nel secondo passo, quando potrai vedere l’anteprima e testare le impostazioni modificate.',
	'STEP_1_TITLE_CREATE'			=> 'Aggiungi campo profilo',
	'STEP_1_TITLE_EDIT'				=> 'Modifica campo profilo',
	'STEP_2_EXPLAIN_CREATE'			=> 'Qui puoi definire alcune opzioni comuni. In seguito potrai vedere in anteprima il campo da te generato, così come lo vedrà l’utente. Usa questa funzione finché non sei soddisfatto del risultato.',
	'STEP_2_EXPLAIN_EDIT'			=> 'Qui puoi definire alcune opzioni comuni.<br /><strong>Le modifiche ai campi del profilo non interesseranno i campi attuali di profili inseriti dai vostri utenti.</strong>',
	'STEP_2_TITLE_CREATE'			=> 'Opzioni specifiche tipo profilo',
	'STEP_2_TITLE_EDIT'				=> 'Opzioni specifiche tipo profilo',
	'STEP_3_EXPLAIN_CREATE'			=> 'Poiché hai più di una lingua installata sul forum, devi riempire anche i restanti elementi di lingua. Il campo profilo funzionerà con la lingua predefinita impostata, puoi riempire gli elementi di lingua rimanenti anche più tardi.',
	'STEP_3_EXPLAIN_EDIT'			=> 'Poiché hai più di una lingua installata sul forum, adesso puoi cambiare o aggiungere anche i restanti elementi di lingua. Il campo profilo funzionerà con la lingua predefinita impostata.',
	'STEP_3_TITLE_CREATE'			=> 'Restanti definizioni di lingua',
	'STEP_3_TITLE_EDIT'				=> 'Definizioni lingua',
	'STRING_DEFAULT_VALUE_EXPLAIN'	=> 'Inserisci una frase predefinita da mostrare, un valore predefinito. Lascia vuoto se vuoi mostrarlo vuoto al primo posto.',

	'TEXT_DEFAULT_VALUE_EXPLAIN'	=> 'Inserisci un testo predefinito da mostrare, un valore predefinito. Lascia vuoto se vuoi mostrarlo vuoto al primo posto.',
	'TRANSLATE'						=> 'Traduci',

	'USER_FIELD_NAME'	=> 'Nome/titolo campo che si presenta all’utente',

	'VISIBILITY_OPTION'				=> 'Opzioni di visualizzazione',
));

?>