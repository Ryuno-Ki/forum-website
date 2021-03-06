<?php
/**
*
* ucp [Slovak]
*
* @package language
* @version $Id: ucp.php 8479 2008-03-29 00:22:48Z naderman $
* @copyright (c) 2005 phpBB Group
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

// Privacy policy and T&C
$lang = array_merge($lang, array(
	'TERMS_OF_USE_CONTENT'	=> 'Vstupom na “%1$s” (ďalej len “my”, “nás”, “náš”, “%1$s”, “%2$s”) súhlasíte s právnym vymedzením nasledujúcich podmienok. Ak nesúhlasíte s právnym vymedzením všetkých nasledujúcich podmienok, potom prosím, nevstupujte a/alebo nepoužívajte “%1$s”. Tieto podmienky môžeme kedykoľvek zmeniť a urobíme všetko preto, aby sme Vás informovali o týchto zmenách, avšak bude rozumné, ak tieto podmienky budete pravidelne kontrolovať počas používania “%1$s”, pretože musíte súhlasiť s každou zmenou týchto podmienok, ktoré budú aktualizované a/alebo upravené.<br />
	<br />
	Naše fórum beží na systéme phpBB (ďalej len “oni”, “im”, “ich”, “phpBB softvér”, “www.phpbb.com”, “phpBB Group”, “Tím phpBB”), čo je elektronický konferenčný systém vydávaný pod “<a href="http://opensource.org/licenses/gpl-license.html">General Public License (Všeobecnou zverejňovacou licenciou)</a>” (ďalej len “GPL”) a ktorý môže byť stiahnutý z <a href="http://www.phpbb.com/">www.phpbb.com</a>. Softvér phpBB umožňuje internetové diskusie, phpBB Group nie je zodpovedná za to, čo môžeme a/alebo nemôžeme v rámci povoleného obsahu a/alebo správy. Pre ďalšie informácie o phpBB, navštívte, prosím: <a href="http://www.phpbb.com/">http://www.phpbb.com/</a>.<br />
	<br />
	Súhlasíte s tým, že nebudete odosielať žiadne urážlivé, obscénne, vulgárne, ohováracie, nenávistné, výhražné, sexuálne orientované príspevky alebo posielať akýkoľvek iný materiál, ktorý môže porušovať ktorékoľvek zákony krajiny, v ktorej sa nachádzate Vy či v ktorej sa nachádza “%1$s” alebo medzinárodné právo. Takéto konanie môže viesť k okamžitému a trvalému vylúčeniu, s upozornením Vášho poskytovateľa internetového pripojenia, ak sa budeme domnievať, že to bude od nás požadované. IP adresa všetkých Vašich príspevkov je zaznamenávaná na pomoc vo vymožiteľnosti týchto podmienok. Súhlasíte s tým, že “%1$s” má právo kedykoľvek odstrániť, upraviť, presunúť alebo uzamknúť ktorúkoľvek tému, ktorá by porušovala tieto podmienky. Ako používateľ súhlasíte s ukladaním do databázy akejkoľvek informácie, ktorú vložíte. Hoci táto informácia nebude zverejnená/poskytnutá žiadnej tretej strane bez Vášho súhlasu, ani “%1$s” ani phpBB nenesú zodpovednosť za akýkoľvek pokus o prienik (hacking), ktorý môže viesť k zneužitiu týchto údajov.
	',

	'PRIVACY_POLICY'		=> 'Tieto zásady dopodrobna vysvetľujú ako “%1$s” spolu s pridruženými spoločnosťami (ďalej len “my”, “nás”, “náš”, “%1$s”, “%2$s”) a phpBB (ďalej len “oni”, “ich”, “im”, “phpBB softvér”, “www.phpbb.com”, “Skupina phpBB”, “Tím phpBB”) používajú akékoľvek údaje zhromaždené počas akéhokoľvek spojenia s Vami (ďalej len “Vaše údaje”).<br />
	<br />
	Vaše údaje sú zhromažďované dvomi spôsobmi. Najskôr, prehliadanie “%1$s” spôsobí, že phpBB softvér vytvorí určitý počet cookies, čo sú malé textové súbory, ktoré sú stiahnuté do Vášho PC na miesto, kde váš internetový prehliadač ukladá dočasné súbory. Prvé dva cookies obsahujú len informáciu na identifikáciu používateľa (ďalej len “používateľovo id”) a informáciu na identifikáciu anonymného spojenia (ďalej len “id spojenia”), ktoré Vám automaticky priradí phpBB softvér. Tretí súbor cookie bude vytvorený vtedy, keď zobrazíte témy na “%1$s” a tento je použitý na rozpoznanie, ktoré témy už boli zobrazené, čím sa zvýši komfort Vášho prehliadania.<br />
	<br />
	Môžeme tiež vytvárať cookies, ktoré sú mimo phpBB softvéru, počas prehliadania “%1$s”, avšak tieto sú mimo rámec tohto dokumentu, ktorého cieľom je pokryť stránky vytvárané prostredníctvom phpBB softvéru. Druhý spôsob, ktorým zhromažďujeme Vaše údaje, je prostredníctvom toho, čo nám sami odošlete. Toto môže byť, avšak nielen: odoslaním ako anonymný používateľ (ďalej len “anonymné príspevky”), registrovaný na “%1$s” (ďalej len “Váš účet”) a Vami odoslané príspevky po registrácii a počas prihlásenia (ďalej len “Vaše príspevky”).<br />
	<br />
	Váš účet bude bezpodmienečne obsahovať minimálne jednoznačne identifikovateľné meno (ďalej len “Vaše používateľské meno”), osobné heslo pre prihlásenie sa na Váš účet (ďalej len “Vaše heslo”) a osobnú, platnú e-mailovú adresu (ďalej len “Váš e-mail”). Vaše údaje pre Váš účet na “%1$s” sú chránené zákonom na ochranu údajov a dát, ktoré sú v platnosti v krajine, kde sme umiestnení. Akýkoľvek údaj navyše Vášho používateľského mena, Vášho hesla a Vášho e-mailu, ktorý je požadovaný “%1$s” počas registrácie vybočujú z toho, čo považujeme za povinné a čo za dobrovoľné. Vo všetkých prípadoch, máte možnosť určiť, ktorý údaj Vášho účtu bude verejne zobrazený. Okrem toho, vo Vašom účte máte možnosť zvoliť si alebo zrušiť možnosť automaticky generovaných e-mailov prostredníctvom phpBB softvéru.<br />
	<br />
	Vaše heslo je šifrované (jednosmerný hash), takže je zabezpečené. Napriek tomu je odporúčané, aby ste nepoužívali rovnaké heslo na rôznych internetových stránkach. Vaše heslo je možnosťou pre prístup k Vášmu účtu na “%1$s”, takže si ho, prosím, chráňte. Nik v spojitosti s “%1$s”, phpBB alebo akoukoľvek 3. stranou, nie je za žiadnych okolností oprávnený žiadať od Vás Vaše heslo. V prípade, že zabudnete svoje heslo na prístup k Vášmu účtu, môžete použiť funkciu “Zabudol som svoje heslo”, ktorá je dostupná v rámci phpBB softvéru. Tento proces bude od Vás vyžadovať vloženie Vášho používateľského mena a Vášho e-mailu, potom phpBB softvér vygeneruje nové heslo, ktoré Vám znovu umožní prístup k Vášmu účtu.<br />
	',
));

// Common language entries
$lang = array_merge($lang, array(
	'ACCOUNT_ACTIVE'				=> 'Váš účet bol teraz aktivovaný. Ďakujeme, že ste sa zaregistrovali.',
	'ACCOUNT_ACTIVE_ADMIN'			=> 'Účet bol teraz aktivovaný.',
	'ACCOUNT_ACTIVE_PROFILE'		=> 'Váš účet bol opätovne aktivovaný.',
	'ACCOUNT_ADDED'					=> 'Ďakujeme, že ste sa zaregistrovali, váš účet bol vytvorený. Teraz sa môžete prihlásiť pomocou svojho mena a hesla.',
	'ACCOUNT_COPPA'					=> 'Váš účet bol vytvorený, no musí byť schválený. Skontrolujte si svoju e-mailovú schránku, kde sa nachádzajú podrobnosti.',
	'ACCOUNT_EMAIL_CHANGED'			=> 'Váš účet bol aktualizovaný. Toto fórum však po zmene e-mailovej adresy vyžaduje opätovnú aktiváciu. Aktivačný kľúč bol odoslaný na novú e-mailovú adresu. Prosím, skontrolujte si svoju e-mailovú schránku.',
	'ACCOUNT_EMAIL_CHANGED_ADMIN'	=> 'Váš účet bol aktualizovaný. Toto fórum však po zmene e-mailovej adresy vyžaduje opätovnú aktiváciu administrátormi, ktorí boli na túto skutočnosť upozornení. O aktivovaní účtu budete informovaný.',
	'ACCOUNT_INACTIVE'				=> 'Váš účet bol vytvorený. Toto fórum však vyžaduje aktiváciu účtu, aktivačný kľúč bol zaslaný na e-mailovú adresu, ktorú ste poskytli počas registrácie. Skontrolujte si, prosím, svoju e-mailovú schránku, kde sa nachádzajú ďalšie informácie.',
	'ACCOUNT_INACTIVE_ADMIN'		=> 'Váš účet bol vytvorený. Toto fórum však vyžaduje aktiváciu účtu administrátormi, ktorí boli na túto skutočnosť upozornení. O aktivovaní účtu budete informovaný.',
	'ACTIVATION_EMAIL_SENT'			=> 'Aktivačný e-mail bol odoslaný na vašu e-mailovú adresu.',
	'ACTIVATION_EMAIL_SENT_ADMIN'	=> 'Aktivačný e-mail bol odoslaný na e-mailové adresy administrátorov.',
	'ADD'							=> 'Komu',
	'ADD_BCC'						=> 'Skrytá kópia',
	'ADD_FOES'						=> 'Pridať nových nepriateľov',
	'ADD_FOES_EXPLAIN'				=> 'Môžete zadať naraz niekoľkých používateľov, každého na samostatnom riadku.',
	'ADD_FOLDER'					=> 'Pridať priečinok',
	'ADD_FRIENDS'					=> 'Pridať nových priateľov',
	'ADD_FRIENDS_EXPLAIN'			=> 'Môžete zadať naraz niekoľkých používateľov, každého na samostatnom riadku',
	'ADD_NEW_RULE'					=> 'Pridať nové pravidlo',
	'ADD_RULE'						=> 'Pridať pravidlo',
	'ADD_TO'						=> 'Pridať [komu]',
	'ADMIN_EMAIL'					=> 'Administrátori mi môžu zasielať e-mailom informácie',
	'AGREE'							=> 'Súhlasím s podmienkami',
	'ALLOW_PM'						=> 'Umožniť používateľom odosielať vám súkromné správy',
	'ALLOW_PM_EXPLAIN'				=> 'Pamätajte, že administrátori a moderátori vám budú môcť vždy poslať správu.',
	'ALREADY_ACTIVATED'				=> 'Váš účet je už aktivované',
	'ATTACHMENTS_EXPLAIN'			=> 'Toto je zoznam príloh, ktoré ste vytvorili v príspevkoch v tomto fóre.',
	'ATTACHMENTS_DELETED'			=> 'Prílohy boli úspešne odstránené.',
	'ATTACHMENT_DELETED'			=> 'Príloha bola úspešne odstránená.',
	'AVATAR_CATEGORY'				=> 'Kategória',
	'AVATAR_EXPLAIN'				=> 'Maximálne rozmery; šírka: %1$d pixelov, výška: %2$d pixelov, veľkosť súboru %3$.2f KiB.',
	'AVATAR_FEATURES_DISABLED'		=> 'Obrázky postavičiek sú vypnuté.',
	'AVATAR_GALLERY'				=> 'Miestna galéria',
	'AVATAR_GENERAL_UPLOAD_ERROR'	=> 'Obrázok postavičky nie je možné odoslať do %s',
	'AVATAR_PAGE'					=> 'Stránka',

	'BACK_TO_DRAFTS'			=> 'Naspäť k uloženým konceptom',
	'BACK_TO_LOGIN'				=> 'Naspäť na prihlasovaciu obrazovku',
	'BIRTHDAY'					=> 'Deň narodenia',
	'BIRTHDAY_EXPLAIN'			=> 'Nastavením roka sa zobrazí váš vek, keď budete mať narodeniny.',
	'BOARD_DATE_FORMAT'			=> 'Môj formát dátumu',
	'BOARD_DATE_FORMAT_EXPLAIN'	=> 'Použitá syntax je totožná s PHP funkciou <a href="http://www.php.net/date">date()</a>',
	'BOARD_DST'					=> 'Letný čas je nastavený',
	'BOARD_LANGUAGE'			=> 'Môj jazyk',
	'BOARD_STYLE'				=> 'Môj štýl fóra',
	'BOARD_TIMEZONE'			=> 'Moje časové pásmo',
	'BOOKMARKS'					=> 'Záložky',
	'BOOKMARKS_EXPLAIN'			=> 'Môžete si v témach vytvárať záložky pre ďalšie vyhľadávanie. Označte začiarkavacie políčko pre každú záložku, ktorú chcete odstrániť a potom kliknite na tlačidlo <em>Odstrániť označené záložky</em>.',
	'BOOKMARKS_DISABLED'		=> 'Na tomto fóre sú záložky vypnuté.',
	'BOOKMARKS_REMOVED'			=> 'Záložky boli úspešne odstránené.',

	'CANNOT_EDIT_MESSAGE_TIME'	=> 'Túto správu už nemôžete upraviť alebo odstrániť',
	'CANNOT_MOVE_TO_SAME_FOLDER'=> 'Správy nemôžu byť presunuté do priečinka, ktorý chcete odstrániť.',
	'CANNOT_MOVE_FROM_SPECIAL'	=> 'Správy nemôžu byť presunuté z priečinka Odoslané.',
	'CANNOT_RENAME_FOLDER'		=> 'Tento priečinok nemôže byť premenovaný.',
	'CANNOT_REMOVE_FOLDER'		=> 'Tento priečinok nemôže byť odstránený.',
	'CHANGE_DEFAULT_GROUP'		=> 'Zmeniť predvolenú skupinu',
	'CHANGE_PASSWORD'			=> 'Zmeniť heslo',
	'CLICK_RETURN_FOLDER'		=> '%1$sNaspäť na priečinok “%3$s” %2$s',
	'CONFIRMATION'				=> 'Potvrdenie registrácie',
	'CONFIRM_CHANGES'			=> 'Potvrdiť zmeny',
	'CONFIRM_EMAIL'				=> 'Potvrdiť e-mailovú adresu',
	'CONFIRM_EMAIL_EXPLAIN'		=> 'Toto potrebujete zadať len v prípade, že si meníte e-mailovú adresu.',
	'CONFIRM_EXPLAIN'			=> 'Na zabránenie automatických registrácií fórum vyžaduje zadanie potvrdzovacieho kódu. Kód je zobrazený na obrázku. Ak ho nedokážete prečítať, kontaktujte %sadministrátora fóra%s.',

	'VC_REFRESH'						=> 'Obnoviť overovací kód',
	'VC_REFRESH_EXPLAIN'		=> 'Pokiaľ sa nedá prečítať overovací kód, vygenerujte si nový kliknutím na tlačidlo.',

	'CONFIRM_PASSWORD'			=> 'Potvrdiť nové heslo',
	'CONFIRM_PASSWORD_EXPLAIN'	=> 'Svoje heslo musíte potvrdiť len v prípade, že ste ho vyššie zmenili.',
	'COPPA_BIRTHDAY'			=> 'Ak chcete pokračovať v registrácii, zadajte kedy ste sa narodili.',
	'COPPA_COMPLIANCE'			=> 'COPPA povolenie',
	'COPPA_EXPLAIN'				=> 'Uvedomte si, že potvrdením vytvoríte svoj účet. Avšak, účet nemôže byť aktivovaný, pokiaľ vašu registráciu nepovolí váš rodič alebo zákonný zástupca. E-mailovou správou vám bude odoslaný potrebný formulár s podrobnosťami, kam ho poslať.',
	'CREATE_FOLDER'				=> 'Pridať priečinok…',
	'CURRENT_IMAGE'				=> 'Súčasný obrázok',
	'CURRENT_PASSWORD'			=> 'Aktuálne heslo',
	'CURRENT_PASSWORD_EXPLAIN'	=> 'Musíte zadať svoje aktuálne heslo, ak chcete zmeniť používateľské meno, e-mailovú adresu alebo heslo.',
	'CUR_PASSWORD_ERROR'		=> 'Aktuálne heslo, ktoré ste zadali, je nesprávne.',
	'CUSTOM_DATEFORMAT'			=> 'Vlastný…',

	'DEFAULT_ACTION'			=> 'Predvolená akcia',
	'DEFAULT_ACTION_EXPLAIN'	=> 'Táto akcia bude spustená, ak žiadna z vyššie uvedených nebude použiteľná.',
	'DEFAULT_ADD_SIG'			=> 'Štandardne vkladať môj podpis',
	'DEFAULT_BBCODE'			=> 'Štandardne povoliť BBCode',
	'DEFAULT_NOTIFY'			=> 'Štandardne ma upozorňovať na odpovede',
	'DEFAULT_SMILIES'			=> 'Štandardne aktivovať smajlíky',
	'DEFINED_RULES'				=> 'Definované pravidlá',
	'DELETED_TOPIC'				=> 'Téma bola odstránená',
	'DELETE_ATTACHMENT'			=> 'Odstrániť prílohu',
	'DELETE_ATTACHMENTS'		=> 'Odstrániť prílohy',
	'DELETE_ATTACHMENT_CONFIRM'	=> 'Naozaj chcete odstrániť túto prílohu?',
	'DELETE_ATTACHMENTS_CONFIRM'=> 'Naozaj chcete odstrániť tieto prílohy?',
	'DELETE_AVATAR'				=> 'Odstrániť obrázok',
	'DELETE_COOKIES_CONFIRM'	=> 'Naozaj chcete odstrániť všetky súbory cookie nastavené týmto fórom?',
	'DELETE_MARKED_PM'			=> 'Odstrániť označené správy',
	'DELETE_MARKED_PM_CONFIRM'	=> 'Naozaj chcete odstrániť všetky označené správy?',
	'DELETE_OLDEST_MESSAGES'	=> 'Odstrániť najstaršie správy',
	'DELETE_MESSAGE'			=> 'Odstrániť správu',
	'DELETE_MESSAGE_CONFIRM'	=> 'Naozaj chcete odstrániť túto súkromnú správu?',
	'DELETE_MESSAGES_IN_FOLDER'	=> 'Odstrániť všetky správy v odstraňovanom priečinku',
	'DELETE_RULE'				=> 'Odstrániť pravidlo',
	'DELETE_RULE_CONFIRM'		=> 'Naozaj chcete odstrániť toto pravidlo?',
	'DEMOTE_SELECTED'			=> 'Degradovať označené',
	'DISABLE_CENSORS'			=> 'Umožniť cenzúru slov',
	'DISPLAY_GALLERY'			=> 'Zobraziť galériu',
	'DOMAIN_NO_MX_RECORD_EMAIL'	=> 'Zadaná e-mailová doména nemá platný MX záznam.',
	'DOWNLOADS'					=> 'Stiahnuté',
	'DRAFTS_DELETED'			=> 'Všetky označené koncepty boli úspešne odstránené.',
	'DRAFTS_EXPLAIN'			=> 'Tu môžete zobraziť, upraviť a odstrániť vaše uložené koncepty.',
	'DRAFT_UPDATED'				=> 'Koncept bol úspešne aktualizovaný.',

	'EDIT_DRAFT_EXPLAIN'		=> 'Tu môžete upraviť váš koncept. Koncepty neobsahujú prílohu a informácie o ankete.',
	'EMAIL_BANNED_EMAIL'		=> 'E-mailová adresa, ktorú ste zadali, nie je povolená.',
	'EMAIL_INVALID_EMAIL'		=> 'E-mailová adresa, ktorú ste zadali, nie je platná.',
	'EMAIL_REMIND'				=> 'Toto musí byť e-mailová adresa priradená vášmu kontu. Ak ste ju nemenili v Ovládacom paneli používateľa, je to adresa zadaná pri registrácii.',
	'EMAIL_TAKEN_EMAIL'			=> 'Zadaná e-mailová adresa je už používaná.',
	'EMPTY_DRAFT'				=> 'Na potvrdenie zmien musíte zadať správu.',
	'EMPTY_DRAFT_TITLE'			=> 'Musíte zadať názov konceptu.',
	'EXPORT_AS_XML'				=> 'Exportovať ako XML',
	'EXPORT_AS_CSV'				=> 'Exportovať ako CSV',
	'EXPORT_AS_CSV_EXCEL'		=> 'Exportovať ako CSV (Excel)',
	'EXPORT_AS_TXT'				=> 'Exportovať ako TXT',
	'EXPORT_AS_MSG'				=> 'Exportovať ako MSG',
	'EXPORT_FOLDER'				=> 'Exportovať toto zobrazenie',

	'FIELD_REQUIRED'					=> 'Pole “%s” musí byť vyplnené.',
	'FIELD_TOO_SHORT'					=> 'Text v poli “%1$s” je príliš krátky, minimálny počet znakov je %2$d.',
	'FIELD_TOO_LONG'					=> 'Text v pole “%1$s” je príliš dlhý, maximálny počet znakov je %2$d.',
	'FIELD_TOO_SMALL'					=> 'Hodnota “%1$s” je príliš malá, minimálne požadovaná hodnota je %2$d.',
	'FIELD_TOO_LARGE'					=> 'Hodnota “%1$s” je príliš veľká, maximálna požadovaná hodnota je %2$d.',
	'FIELD_INVALID_CHARS_NUMBERS_ONLY'	=> 'Pole “%s” obsahuje neplatné znaky, povolené sú len čísla.',
	'FIELD_INVALID_CHARS_ALPHA_ONLY'	=> 'Pole “%s” obsahuje neplatné znaky, povolené sú len alfanumerické znaky.',
	'FIELD_INVALID_CHARS_SPACERS_ONLY'	=> 'Pole “%s” obsahuje neplatné znaky, povolené sú len alfanumerické znaky, medzera alebo znaky -+_[].',
	'FIELD_INVALID_DATE'				=> 'Pole “%s” obsahuje neplatný dátum.',

	'FOE_MESSAGE'				=> 'Správa od nepriateľa',
	'FOES_EXPLAIN'				=> 'Nepriatelia sú používatelia, ktorí budú štandardne ignorovaní. Príspevky od nich nebudú plne zobrazené. Súkromné správy od nich nebudú povolené. Uvedomte si, že nemôžete ignorovať moderátorov alebo administrátorov.',
	'FOES_UPDATED'				=> 'Váš zoznam nepriateľov bol úspešne aktualizovaný.',
	'FOLDER_ADDED'				=> 'Priečinok bol úspešne pridaný.',
	'FOLDER_MESSAGE_STATUS'		=> '%1$d z %2$d uložených správ',
	'FOLDER_NAME_EXIST'			=> 'Priečinok <strong>%s</strong> už existuje.',
	'FOLDER_OPTIONS'			=> 'Možnosti priečinka',
	'FOLDER_RENAMED'			=> 'Priečinok bol úspešne premenovaný.',
	'FOLDER_REMOVED'			=> 'Priečinok bol úspešne odstránený.',
	'FOLDER_STATUS_MSG'			=> 'Priečinok je obsadený na %1$d%% (%2$d z %3$d uložených správ)',
	'FORWARD_PM'				=> 'Odoslať ďalej SS',
	'FORCE_PASSWORD_EXPLAIN'	=> 'Predtým ako budete môcť prehliadať fórum si musíte zmeniť heslo.',
	'FRIEND_MESSAGE'			=> 'Správa od priateľa',
	'FRIENDS'					=> 'Priatelia',
	'FRIENDS_EXPLAIN'			=> 'Priatelia vám umožnia rýchly prístup k členom, s ktorými často komunikujete. Ak to štýl umožňuje, akýkoľvek príspevok odoslaný priateľom môže byť zvýraznený.',
	'FRIENDS_OFFLINE'			=> 'Neprítomný',
	'FRIENDS_ONLINE'			=> 'Prítomný',
	'FRIENDS_UPDATED'			=> 'Váš zoznam priateľov bol úspešne aktualizovaný.',
	'FULL_FOLDER_OPTION_CHANGED'=> 'Akcia, ktorá sa vykoná po zaplnení priečinka, bola úspešne zmenená.',
	'FWD_ORIGINAL_MESSAGE'		=> '-------- Originálna správa --------',
	'FWD_SUBJECT'				=> 'Predmet: %s',
	'FWD_DATE'					=> 'Dátum: %s',
	'FWD_FROM'					=> 'Od: %s',
	'FWD_TO'					=> 'Komu: %s',

	'GLOBAL_ANNOUNCEMENT'		=> 'Globálne oznámenie',

	'HIDE_ONLINE'				=> 'Skryť moju prítomnosť vo fóre',
	'HIDE_ONLINE_EXPLAIN'		=> 'Zmena tohto nastavenia na "Nie" sa prejaví až pri najbližšej návšteve fóra.',
	'HOLD_NEW_MESSAGES'			=> 'Neakceptovať nové správy (Nové správy budú podržané v úzadí dovtedy, kým nebude dostatok priestoru)',
	'HOLD_NEW_MESSAGES_SHORT'	=> 'Nové správy budú podržané v úzadí',

	'IF_FOLDER_FULL'			=> 'Ak je priečinok plný',
	'IMPORTANT_NEWS'			=> 'Dôležité oznamy',
	'INVALID_USER_BIRTHDAY'         => 'Zadaný dátum narodenia nie je platným dátumom.',
	'INVALID_CHARS_USERNAME'	=> 'Používateľské meno obsahuje zakázané znaky.',
	'INVALID_CHARS_NEW_PASSWORD'=> 'Heslo neobsahuje požadované znaky.',
	'ITEMS_REQUIRED'			=> 'Položky označené znakom * sú povinnými položkami a je nutné ich vyplniť.',

	'JOIN_SELECTED'				=> 'Spojiť označené',

	'LANGUAGE'					=> 'Jazyk',
	'LINK_REMOTE_AVATAR'		=> 'Vzdialený odkaz',
	'LINK_REMOTE_AVATAR_EXPLAIN'=> 'Zadajte URL umiestnenia, ktoré obsahuje obrázok postavičky, ktorý chcete pripojiť.',
	'LINK_REMOTE_SIZE'			=> 'Rozmery obrázka',
	'LINK_REMOTE_SIZE_EXPLAIN'	=> 'Zadajte šírku a výšku obrázka. Ak chcete, aby sa systém sám pokúsil zistiť rozmery, nechajte pole prázdne.',
	'LOGIN_EXPLAIN_UCP'			=> 'Ak chcete vstúpiť do Ovládacieho panela používateľa, musíte byť prihlásený.',
	'LOGIN_REDIRECT'			=> 'Prihlásenie bolo úspešné.',
	'LOGOUT_FAILED'				=> 'Neboli ste prihlásený, pretože požiadavka sa nezhodovala s reláciou. Ak tento problém pretrváva, kontaktujte administrátora fóra.',
	'LOGOUT_REDIRECT'			=> 'Boli ste úspešne odhlásený.',

	'MARK_IMPORTANT'				=> 'Označiť/zrušiť označenie ako dôležité',
	'MARKED_MESSAGE'				=> 'Označená správa',
	'MAX_FOLDER_REACHED'			=> 'Bol dosiahnutý maximálny počet povolených používateľom definovaných priečinkov.',
	'MESSAGE_BY_AUTHOR'				=> 'kým',
	'MESSAGE_COLOURS'				=> 'Farby správy',
	'MESSAGE_DELETED'				=> 'Správa bola úspešne odstránená.',
	'MESSAGE_HISTORY'				=> 'História správ',
	'MESSAGE_REMOVED_FROM_OUTBOX'	=> 'Táto správa bola odstránená jej autorom ešte pred jej doručením.',
	'MESSAGE_SENT_ON'				=> 'dňa',
	'MESSAGE_STORED'				=> 'Táto správa bola úspešne odoslaná.',
	'MESSAGE_TO'					=> 'Komu',
	'MESSAGES_DELETED'				=> 'Správy boli úspešne odstránené.',
	'MOVE_DELETED_MESSAGES_TO'		=> 'Presunúť správy z odstráneného priečinka do',
	'MOVE_DOWN'						=> 'Posunúť nadol',
	'MOVE_MARKED_TO_FOLDER'			=> 'Označené presunúť do %s',
	'MOVE_PM_ERROR'					=> 'Počas presúvania správ do nového priečinka nastala chyba, presunulo sa len %1d z %2d správ.',
	'MOVE_TO_FOLDER'				=> 'Presunúť do priečinka',
	'MOVE_UP'						=> 'Posunúť nahor',

	'NEW_EMAIL_ERROR'				=> 'E-mailové adresy, ktoré ste zadali, sa nezhodujú.',
	'NEW_FOLDER_NAME'				=> 'Názov nového priečinka',
	'NEW_PASSWORD'					=> 'Nové heslo',
	'NEW_PASSWORD_ERROR'			=> 'Heslá, ktoré ste zadali, sa nezhodujú.',
	'NOTIFY_METHOD'					=> 'Metóda upozorňovania',
	'NOTIFY_METHOD_BOTH'			=> 'Obidve',
	'NOTIFY_METHOD_EMAIL'			=> 'Len e-mailom',
	'NOTIFY_METHOD_EXPLAIN'			=> 'Metóda na posielanie správ prostredníctvom fóra.',
	'NOTIFY_METHOD_IM'				=> 'Len cez Jabber',
	'NOTIFY_ON_PM'					=> 'Upozorniť ma na nové správy',
	'NOT_ADDED_FRIENDS_ANONYMOUS'	=> 'Nemôžete vložiť do vášho zoznamu priateľov anonymného používateľa.',
	'NOT_ADDED_FRIENDS_FOES'		=> 'Nemôžete vložiť do vášho zoznamu priateľov tých používateľov, ktorí sú na zozname nepriateľov.',
	'NOT_ADDED_FRIENDS_SELF'		=> 'Nemôžete vložiť seba do vášho zoznamu priateľov.',
	'NOT_ADDED_FOES_MOD_ADMIN'		=> 'Nemôžete vložiť administrátorov a moderátorov do vášho zoznamu nepriateľov.',
	'NOT_ADDED_FOES_ANONYMOUS'		=> 'Nemôžete vložiť do vášho zoznamu nepriateľov anonymného používateľa.',
	'NOT_ADDED_FOES_FRIENDS'		=> 'Nemôžete vložiť do vášho zoznamu nepriateľov tých používateľov, ktorí sú na zozname priateľov.',
	'NOT_ADDED_FOES_SELF'			=> 'Nemôžete vložiť seba do vášho zoznamu nepriateľov.',
	'NOT_AGREE'						=> 'Nesúhlasím s týmito podmienkami',
	'NOT_ENOUGH_SPACE_FOLDER'		=> 'Cieľový priečinok “%s” sa zdá byť plný. Požadovaná akcia nebola vykonaná.',
	'NOT_MOVED_MESSAGE'				=> 'Vaše súkromné správy (celkom 1) sú pozdržané, pretože priečinok je plný.',
	'NOT_MOVED_MESSAGES'			=> 'Vaše súkromné správy (celkom %d) sú pozdržané, pretože priečinok je plný.',
	'NO_ACTION_MODE'				=> 'Nie je určená akcia pre správu.',
	'NO_AUTHOR'						=> 'Nie je definovaný autor tejto správu',
	'NO_AVATAR_CATEGORY'			=> 'Žiadny',

	'NO_AUTH_DELETE_MESSAGE'		=> 'Nemáte oprávnenie na odstránenie súkromných správ.',
	'NO_AUTH_EDIT_MESSAGE'			=> 'Nemáte oprávnenie na úpravu súkromných správ.',
	'NO_AUTH_FORWARD_MESSAGE'		=> 'Nemáte oprávnenie na preposielanie súkromných správ.',
	'NO_AUTH_GROUP_MESSAGE'			=> 'Nemáte oprávnenie na posielanie súkromných správ skupinám používateľov.',
	'NO_AUTH_PASSWORD_REMINDER'		=> 'Nemáte oprávnenie na žiadanie nového hesla.',
	'NO_AUTH_READ_HOLD_MESSAGE'		=> 'Nemáte oprávnenie na čítanie súkromných správ, ktoré sú podržané.',
	'NO_AUTH_READ_MESSAGE'			=> 'Nemáte oprávnenie na čítanie súkromných správ.',
	'NO_AUTH_READ_REMOVED_MESSAGE'	=> 'Nie je možné prečítať túto súkromnú správu, pretože bola odstránená jej autorom.',
	'NO_AUTH_SEND_MESSAGE'			=> 'Nemáte oprávnenie na posielanie súkromných správ.',
	'NO_AUTH_SIGNATURE'				=> 'Nemáte oprávnenie na definovanie podpisu.',

	'NO_BCC_RECIPIENT'			=> 'Žiadny',
	'NO_BOOKMARKS'				=> 'Nemáte žiadne záložky.',
	'NO_BOOKMARKS_SELECTED'		=> 'Nevybrali ste žiadne záložky.',
	'NO_EDIT_READ_MESSAGE'		=> 'Súkromná správa nemôže byť upravená, pretože už bola prečítaná.',
	'NO_EMAIL_USER'				=> 'Zadaná e-mailová adresa alebo používateľské meno nemôžu byť nájdené.',
	'NO_FOES'					=> 'Zatiaľ nie sú definovaní žiadni nepriatelia',
	'NO_FRIENDS'				=> 'Zatiaľ nie sú definovaní žiadni priatelia',
	'NO_FRIENDS_OFFLINE'		=> 'Všetci priatelia sú prítomní',
	'NO_FRIENDS_ONLINE'			=> 'Nie sú prítomní žiadni priatelia',
	'NO_GROUP_SELECTED'			=> 'Nie je určená žiadna skupina používateľov.',
	'NO_IMPORTANT_NEWS'			=> 'Nie sú prítomné žiadne dôležité oznamy.',
	'NO_MESSAGE'				=> 'Súkromná správa nemôže byť nájdená.',
	'NO_NEW_FOLDER_NAME'		=> 'Musíte zadať názov nového priečinka.',
	'NO_NEWER_PM'				=> 'Nie sú žiadne novšie správy.',
	'NO_OLDER_PM'				=> 'Nie sú žiadne staršie správy.',
	'NO_PASSWORD_SUPPLIED'		=> 'Nemôžete sa prihlásiť bez zadania hesla.',
	'NO_RECIPIENT'				=> 'Nie je určený žiadny príjemca.',
	'NO_RULES_DEFINED'			=> 'Nie sú určené žiadne pravidlá.',
	'NO_SAVED_DRAFTS'			=> 'Nie sú uložené žiadne koncepty.',
	'NO_TO_RECIPIENT'			=> 'Žiadny',
	'NO_WATCHED_FORUMS'			=> 'Nesledujete žiadne fóra.',
	'NO_WATCHED_SELECTED'		=> 'Nevybrali ste žiadne sledované témy alebo fóra.',
	'NO_WATCHED_TOPICS'			=> 'Nesledujete žiadne témy.',

	'PASS_TYPE_ALPHA_EXPLAIN'	=> 'Heslo musí mať dĺžku od %1$d do %2$d znakov, musí obsahovať malé a veľké písmená a čísla.',
	'PASS_TYPE_ANY_EXPLAIN'		=> 'Musí mať dĺžku od %1$d do %2$d znakov.',
	'PASS_TYPE_CASE_EXPLAIN'	=> 'Heslo musí mať dĺžku od %1$d do %2$d znakov a musí obsahovať malé a veľké písmená.',
	'PASS_TYPE_SYMBOL_EXPLAIN'	=> 'Heslo musí mať dĺžku od %1$d do %2$d znakov a musí obsahovať symboly.',
	'PASSWORD'					=> 'Heslo',
	'PASSWORD_ACTIVATED'		=> 'Vaše nové heslo bolo aktivované.',
	'PASSWORD_UPDATED'			=> 'Vaše heslo bolo úspešne odoslané na vašu pôvodnú e-mailovú adresu.',
	'PERMISSIONS_RESTORED'		=> 'Vaše pôvodné oprávnenia boli úspešne obnovené.',
	'PERMISSIONS_TRANSFERRED'	=> 'Oprávnenia používateľa <strong>%s</strong> boli úspešne prenesené, teraz môžete prehliadať fórum s jeho používateľskými oprávneniami.<br />Pamätajte, že oprávnenia administrátora neboli prenesené. Kedykoľvek sa môžete vrátiť k svojim pôvodným oprávneniam.',
	'PM_DISABLED'				=> 'Posielanie súkromných správ bolo na tomto fóre zablokované.',
	'PM_FROM'					=> 'Od',
	'PM_FROM_REMOVED_AUTHOR'	=> 'Táto správa bola odoslaná používateľom, ktorý už nie je zaregistrovaný.',
	'PM_ICON'					=> 'Ikona SS',
	'PM_INBOX'					=> 'Doručené',
	'PM_NO_USERS'				=> 'Používatelia, ktorých ste chceli pridať, neexistujú.',
	'PM_OUTBOX'					=> 'Neodoslané',
	'PM_SENTBOX'				=> 'Odoslané',
	'PM_SUBJECT'				=> 'Predmet správy',
	'PM_TO'						=> 'Odoslať komu',
	'PM_USERS_REMOVED_NO_PM'	=> 'Niektorí používatelia nemôžu byť pridaní, pretože majú vypnuté prijímanie súkromných správ.',
	'POPUP_ON_PM'				=> 'Zobraziť vyskakovacie okno pri prijatí novej súkromnej správy',
	'POST_EDIT_PM'				=> 'Upraviť správu',
	'POST_FORWARD_PM'			=> 'Preposlať správu',
	'POST_NEW_PM'				=> 'Napísať správu',
	'POST_PM_LOCKED'			=> 'Posielanie súkromných správ je uzamknuté',
	'POST_PM_POST'				=> 'Citovať príspevok',
	'POST_QUOTE_PM'				=> 'Citovať správu',
	'POST_REPLY_PM'				=> 'Odpovedať na správu',
	'PRINT_PM'					=> 'Vytlačiť zobrazené',
	'PREFERENCES_UPDATED'		=> 'Vaše nastavenia boli aktualizované.',
	'PROFILE_INFO_NOTICE'		=> 'Pamätajte, že táto informácia bude viditeľná pre iných členov. Buďte opatrní pri zadávaní akýchkoľvek súkromných údajov. Všetky polia označené * musia byť vyplnené.',
	'PROFILE_UPDATED'			=> 'Váš profil bol aktualizovaný.',

	'RECIPIENT'							=> 'Príjemca',
	'RECIPIENTS'						=> 'Príjemcovia',
	'REGISTRATION'						=> 'Registrácia',
	'RELEASE_MESSAGES'					=> '%sUvoľniť všetky pozdržané správy%s… Tieto budú znova roztriedené do príslušných priečinkov, ak bol vytvorený dostatok priestoru.',
	'REMOVE_ADDRESS'					=> 'Odstrániť adresu',
	'REMOVE_SELECTED_BOOKMARKS'			=> 'Odstrániť vybrané záložky',
	'REMOVE_SELECTED_BOOKMARKS_CONFIRM'	=> 'Naozaj chcete odstrániť všetky vybrané záložky?',
	'REMOVE_BOOKMARK_MARKED'			=> 'Odstrániť označené záložky',
	'REMOVE_FOLDER'						=> 'Odstrániť priečinok',
	'REMOVE_FOLDER_CONFIRM'				=> 'Naozaj chcete odstrániť tento priečinok?',
	'RENAME'							=> 'Premenovať',
	'RENAME_FOLDER'						=> 'Premenovať priečinok',
	'REPLIED_MESSAGE'					=> 'Odpovedané na správu',
	'RESIGN_SELECTED'					=> 'Označiť vybrané',
	'RETURN_FOLDER'						=> '%1$sNaspäť na predchádzajúci priečinok%2$s',
	'RETURN_UCP'						=> '%sNaspäť do Ovládacieho panela používateľa%s',
	'RULE_ADDED'						=> 'Pravidlo bolo úspešne pridané.',
	'RULE_ALREADY_DEFINED'				=> 'Toto pravidlo bolo predtým definované.',
	'RULE_DELETED'						=> 'Pravidlo bolo úspešne odstránené.',
	'RULE_NOT_DEFINED'					=> 'Pravidlo nebolo zadané korektne.',
	'RULE_REMOVED_MESSAGE'				=> 'Jedna súkromná správa bola odstránená z dôvodu uplatnenia filtrov súkromných správ.',
	'RULE_REMOVED_MESSAGES'				=> 'Niekoľko súkromných správ (celkom %d) bolo odstránených z dôvodu uplatnenia filtrov súkromných správ.',

	'SAME_PASSWORD_ERROR'		=> 'Vaše nové heslo je totožné s pôvodným heslom.',
	'SEARCH_YOUR_POSTS'			=> 'Zobraziť vaše príspevky',
	'SEND_PASSWORD'				=> 'Odoslať heslo',
	'SENT_AT'					=> 'Odoslané o',
	'SHOW_EMAIL'				=> 'Používatelia ma môžu kontaktovať prostredníctvom e-mailu',
	'SIGNATURE_EXPLAIN'			=> 'Toto je blok textu, ktorý môže byť vložený do príspevkov, ktoré vytvoríte. Je obmedzený na %d znakov.',
	'SIGNATURE_PREVIEW'			=> 'Váš podpis bude takto zobrazený v príspevkoch',
	'SIGNATURE_TOO_LONG'		=> 'Váš podpis je príliš dlhý.',
	'SORT'						=> 'Usporiadať',
	'SORT_COMMENT'				=> 'Popis súboru',
	'SORT_DOWNLOADS'			=> 'Stiahnutia',
	'SORT_EXTENSION'			=> 'Prípona',
	'SORT_FILENAME'				=> 'Názov súboru',
	'SORT_POST_TIME'			=> 'Čas odoslania',
	'SORT_SIZE'					=> 'Veľkosť súboru',

	'TIMEZONE'					=> 'Časové pásmo',
	'TO'						=> 'Komu',
	'TOO_MANY_RECIPIENTS'		=> 'Príliš veľa príjemcov.',
	'TOO_MANY_REGISTERS'		=> 'Prekročili ste maximálny počet pokusov o registráciu počas tejto relácie. Prosím, skúste to neskôr.',

	'UCP'						=> 'Ovládací panel používateľa',
	'UCP_ACTIVATE'				=> 'Aktivovať účet',
	'UCP_ADMIN_ACTIVATE'		=> 'Uvedomte si, že musíte zadať platnú e-mailovú adresu predtým, než bude váš účet aktivovaný. Administrátor skontroluje váš účet a ak ho povolí, budete o tom informovaný prostredníctvom e-mailovej správy na adrese, ktorú zadáte počas registrácie.',
	'UCP_AIM'					=> 'AOL Instant Messenger',
	'UCP_ATTACHMENTS'			=> 'Prílohy',
	'UCP_COPPA_BEFORE'			=> 'Pred %s',
	'UCP_COPPA_ON_AFTER'		=> 'Presne alebo po %s',
	'UCP_EMAIL_ACTIVATE'		=> 'Uvedomte si, že musíte zadať platnú e-mailovú adresu predtým, než bude váš účet aktivovaný. Na zadanú adresu dostanete e-mailovú správu s aktivačným odkazom.',
	'UCP_ICQ'					=> 'Číslo ICQ',
	'UCP_JABBER'				=> 'Adresa pre Jabber',

	'UCP_MAIN'					=> 'Celkový prehľad',
	'UCP_MAIN_ATTACHMENTS'		=> 'Správa príloh',
	'UCP_MAIN_BOOKMARKS'		=> 'Správa záložiek',
	'UCP_MAIN_DRAFTS'			=> 'Správa konceptov',
	'UCP_MAIN_FRONT'			=> 'Úvodná stránka',
	'UCP_MAIN_SUBSCRIBED'		=> 'Správa sledovaní',

	'UCP_MSNM'					=> 'MSN Messenger',
	'UCP_NO_ATTACHMENTS'		=> 'Neodoslali ste žiadne súbory.',

	'UCP_PREFS'					=> 'Nastavenia fóra',
	'UCP_PREFS_PERSONAL'		=> 'Upraviť všeobecné nastavenia',
	'UCP_PREFS_POST'			=> 'Upraviť predvoľby odosielania príspevkov',
	'UCP_PREFS_VIEW'			=> 'Upraviť možnosti zobrazenia',

	'UCP_PM'					=> 'Súkromné správy',
	'UCP_PM_COMPOSE'			=> 'Napísať správu',
	'UCP_PM_DRAFTS'				=> 'Správa konceptov SS',
	'UCP_PM_OPTIONS'			=> 'Upraviť nastavenia',
	'UCP_PM_POPUP'				=> 'Súkromné správy',
	'UCP_PM_POPUP_TITLE'		=> 'Vyskakovacie okno súkromnej správy',
	'UCP_PM_UNREAD'				=> 'Neprečítané správy',
	'UCP_PM_VIEW'				=> 'Zobraziť správy',

	'UCP_PROFILE'				=> 'Profil',
	'UCP_PROFILE_AVATAR'		=> 'Upraviť obrázok postavičky',
	'UCP_PROFILE_PROFILE_INFO'	=> 'Upraviť profil',
	'UCP_PROFILE_REG_DETAILS'	=> 'Upraviť nastavenia účtu',
	'UCP_PROFILE_SIGNATURE'		=> 'Upraviť podpis',

	'UCP_USERGROUPS'			=> 'Používateľské skupiny',
	'UCP_USERGROUPS_MEMBER'		=> 'Upraviť členstvo v skupine',
	'UCP_USERGROUPS_MANAGE'		=> 'Správa skupín používateľov',

	'UCP_REGISTER_DISABLE'			=> 'Vytvorenie nového účtu nie je momentálne možné.',
	'UCP_REMIND'					=> 'Odoslať heslo',
	'UCP_RESEND'					=> 'Odoslať aktivačnú e-mailovú správu',
	'UCP_WELCOME'					=> 'Vitajte v Ovládacom paneli používateľa. Odtiaľto môžete sledovať, zobraziť a aktualizovať váš profil, nastavenia, upraviť sledovanie tém a fór. Môžete tiež odoslať správy iným používateľom (ak je to povolené). Pred pokračovaním si, prosím, prečítajte oznamy.',
	'UCP_YIM'						=> 'Yahoo Messenger',
	'UCP_ZEBRA'						=> 'Priatelia a nepriatelia',
	'UCP_ZEBRA_FOES'				=> 'Správa nepriateľov',
	'UCP_ZEBRA_FRIENDS'				=> 'Správa priateľov',
	'UNKNOWN_FOLDER'				=> 'Neznámy priečinok',
	'UNWATCH_MARKED'				=> 'Označené nesledovať',
	'UPLOAD_AVATAR_FILE'			=> 'Odoslať z môjho počítača',
	'UPLOAD_AVATAR_URL'				=> 'Odoslať pomocou URL adresy',
	'UPLOAD_AVATAR_URL_EXPLAIN'		=> 'Zadajte URL miesta, kde sa nachádza obrázok, tento bude skopírovaný na túto stránku.',
	'USERNAME_ALPHA_ONLY_EXPLAIN'	=> 'Používateľské meno musí mať dĺžku od %1$d do %2$d znakov a môže obsahovať len alfanumerické znaky',
	'USERNAME_ALPHA_SPACERS_EXPLAIN'=> 'Používateľské meno musí mať dĺžku od %1$d do %2$d znakov a môže obsahovať alfanumerické znaky, medzeru alebo znaky -+_[].',
	'USERNAME_ASCII_EXPLAIN'		=> 'Používateľské meno musí mať dĺžku od %1$d do %2$d znakov a môže obsahovať len znaky ASCII, takže žiadne špeciálne symboly.',
	'USERNAME_LETTER_NUM_EXPLAIN'	=> 'Používateľské meno musí mať dĺžku od %1$d do %2$d znakov a môže obsahovať len písmená a čísla.',
	'USERNAME_LETTER_NUM_SPACERS_EXPLAIN'=> 'Používateľské meno musí mať dĺžku od %1$d do %2$d znakov a môže obsahovať len písmená, čísla, medzeru alebo znaky -+_[].',
	'USERNAME_CHARS_ANY_EXPLAIN'	=> 'Dĺžka musí byť od %1$d do %2$d znakov.',
	'USERNAME_TAKEN_USERNAME'		=> 'Používateľské meno, ktoré ste zadali, sa už používa. Vyberte si, prosím, iné meno.',
	'USERNAME_DISALLOWED_USERNAME'	=> 'Používateľské meno, ktoré ste zadali, je zakázané alebo obsahuje zakázané slovo. Vyberte si, prosím, iné meno.',
	'USER_NOT_FOUND_OR_INACTIVE'	=> 'Používateľské mená, ktoré ste určili, nemôžu byť nájdené alebo ich účty ešte nie sú aktivované.',

	'VIEW_AVATARS'				=> 'Zobrazovať obrázky postavičiek',
	'VIEW_EDIT'					=> 'Zobraziť/Upraviť',
	'VIEW_FLASH'				=> 'Zobrazovať animácie Flash',
	'VIEW_IMAGES'				=> 'Zobrazovať obrázky v príspevkoch',
	'VIEW_NEXT_HISTORY'			=> 'Ďalšia SS v histórii',
	'VIEW_NEXT_PM'				=> 'Ďalšia SS',
	'VIEW_PM'					=> 'Zobraziť správu',
	'VIEW_PM_INFO'				=> 'Detaily správy',
	'VIEW_PM_MESSAGE'			=> '1 správa',
	'VIEW_PM_MESSAGES'			=> '%d správ',
	'VIEW_PREVIOUS_HISTORY'		=> 'Predchádzajúca SS v histórii',
	'VIEW_PREVIOUS_PM'			=> 'Predchádzajúca SS',
	'VIEW_SIGS'					=> 'Zobrazovať podpisy',
	'VIEW_SMILIES'				=> 'Zobrazovať smajlíky ako obrázky',
	'VIEW_TOPICS_DAYS'			=> 'Zobrazovať témy z predchádzajúcich dní',
	'VIEW_TOPICS_DIR'			=> 'Zobrazovať smer usporiadania tém',
	'VIEW_TOPICS_KEY'			=> 'Zobrazovať témy usporiadané podľa',
	'VIEW_POSTS_DAYS'			=> 'Zobrazovať príspevky z predchádzajúcich dní',
	'VIEW_POSTS_DIR'			=> 'Zobrazovať smer usporiadania príspevkov',
	'VIEW_POSTS_KEY'			=> 'Zobrazovať príspevky usporiadané podľa',

	'WATCHED_EXPLAIN'			=> 'Nižšie sa nachádza zoznam fór a tém, ktoré sledujete. Budete informovaní o každom novom príspevku. Ak chcete zrušiť sledovanie, označte fórum alebo tému a kliknite na tlačidlo <em>Označené nesledovať</em>.',
	'WATCHED_FORUMS'			=> 'Sledované fóra',
	'WATCHED_TOPICS'			=> 'Sledované témy',
	'WRONG_ACTIVATION'			=> 'Aktivačný kľúč, ktorý ste použili, sa nezhoduje so žiadnym kľúčom v databáze.',

	'YOUR_DETAILS'				=> 'Vaša aktivita',
	'YOUR_FOES'					=> 'Vaši nepriatelia',
	'YOUR_FOES_EXPLAIN'			=> 'Ak chcete odstrániť používateľské mená, vyberte ich a potvrďte.',
	'YOUR_FRIENDS'				=> 'Vaši priatelia',
	'YOUR_FRIENDS_EXPLAIN'		=> 'Ak chcete odstrániť používateľské mená, vyberte ich a potvrďte',
	'YOUR_WARNINGS'				=> 'Vaša úroveň upozornenia',

	'PM_ACTION' => array(
		'PLACE_INTO_FOLDER'	=> 'Vložiť do priečinka',
		'MARK_AS_READ'		=> 'Označiť ako prečítané',
		'MARK_AS_IMPORTANT'	=> 'Označiť správu',
		'DELETE_MESSAGE'	=> 'Odstrániť správu'
	),
	'PM_CHECK' => array(
		'SUBJECT'	=> 'Predmet',
		'SENDER'	=> 'Odosielateľ',
		'MESSAGE'	=> 'Správa',
		'STATUS'	=> 'Stav správy',
		'TO'		=> 'Odoslané komu'
	),
	'PM_RULE' => array(
		'IS_LIKE'		=> 'je ako',
		'IS_NOT_LIKE'	=> 'nie je ako',
		'IS'			=> 'je',
		'IS_NOT'		=> 'nie je',
		'BEGINS_WITH'	=> 'začína s',
		'ENDS_WITH'		=> 'končí s',
		'IS_FRIEND'		=> 'je priateľ',
		'IS_FOE'		=> 'je nepriateľ',
		'IS_USER'		=> 'je používateľ',
		'IS_GROUP'		=> 'je v skupine používateľov',
		'ANSWERED'		=> 'odpovedané',
		'FORWARDED'		=> 'preposlané',
		'TO_GROUP'		=> 'do mojej predvolenej skupiny používateľov',
		'TO_ME'			=> 'mne'
	),


	'GROUPS_EXPLAIN'	=> 'Skupiny používateľov umožňujú administrátorom fóra lepšie spravovať používateľov. Štandardne budete priradený do konkrétnej skupiny a táto bude vašou predvolenou skupinou. Táto skupina definuje ako sa budete zobrazovať iným používateľom, napr. farbu vášho používateľského mena, obrázok postavičky, hodnotenie, atď. V závislosti od toho, či to administrátor povolí, môžete zmeniť svoju predvolenú skupinu. Môžete byť tiež priradení alebo vám bude umožnené pripojiť sa k iným skupinám. Niektoré skupiny vám poskytnú dodatočné práva na zobrazenie obsahu alebo zvýšia vaše možnosti v iných oblastiach.',
	'GROUP_LEADER'		=> 'Vedúci',
	'GROUP_MEMBER'		=> 'Členstvá',
	'GROUP_PENDING'		=> 'Nevyriešené členstvá',
	'GROUP_NONMEMBER'	=> 'Nečlenstvá',
	'GROUP_DETAILS'		=> 'Detaily skupiny',

	'NO_LEADER'		=> 'Žiadne vodcovstvá v skupinách',
	'NO_MEMBER'		=> 'Žiadne členstvá v skupinách',
	'NO_PENDING'	=> 'Žiadne nevyriešené členstvá',
	'NO_NONMEMBER'	=> 'Žiadne nečlenstvá',
));

?>