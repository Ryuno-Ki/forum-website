<?php
/**
*
* search_synonyms [U.S. English]
*
* @package language
* @version $Id: search_synonyms.php 10280 2009-11-19 13:22:55Z bantu $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

// LOCALIZATION DETAILS
//
// Maintainer: Maël Soucaze <http://twitter.com/maelsoucaze> (maelsoucaze@gmail.com)
// Author(s): Seven ALive <http://sevenupdate.sourceforge.net/>

$synonyms = array(
	'abcense'			=> 'absence',
	'abridgement'		=> 'abridgment',
	'accomodate'		=> 'accommodate',
	'acknowledgment'	=> 'acknowledgement',
	'airplane'			=> 'aeroplane',
	'allright'			=> 'alright ',
	'andy'				=> 'andrew',
	'anemia'			=> 'anaemia',
	'anemic'			=> 'anaemic',
	'anesthesia'		=> 'anaesthesia',
	'apologise'			=> 'apologize',
	'archean'			=> 'archaean',
	'archeology'		=> 'archaeology',
	'archeozoic'		=> 'archaeozoic',
	'armour'				=> 'armor',
	'artic'				=> 'arctic',
	'attachement'		=> 'attachment',
	'attendence'		=> 'attendance',

	'barbecue'	=> 'barbeque',
	'behaviour'	=> 'behavior',
	'biassed'	=> 'biased',
	'biol'		=> 'biology',
	'buletin'	=> 'bulletin',

	'calender'	=> 'calendar',
	'canceled'	=> 'cancelled',
	'car'		=> 'automobile',
	'catalog'	=> 'catalogue',
	'cenozoic'	=> 'caenozoic',
	'center'	=> 'centre',
	'check'		=> 'cheque',
	'colour'		=> 'color',
	'comission'	=> 'commission',
	'comittee'	=> 'committee',
	'commitee'	=> 'committee',
	'conceed'	=> 'concede',
	'creating'	=> 'createing',
	'curiculum'	=> 'curriculum',

	'defense'		=> 'defence',
	'develope'		=> 'develop',
	'discription'	=> 'description',
	'dulness'		=> 'dullness',

	'encyclopedia'	=> 'encyclopaedia',
	'enroll'		=> 'enrol',
	'esthetic'		=> 'aesthetic',
	'etiology'		=> 'aetiology',
	'exhorbitant'	=> 'exorbitant',
	'exhuberant'	=> 'exuberant',
	'existance'		=> 'existence',

	'favourite'		=> 'favorite',
	'fetus'			=> 'foetus',
	'ficticious'	=> 'fictitious',
	'flavour'		=> 'flavor',
	'flourescent'	=> 'fluorescent',
	'foriegn'		=> 'foreign',
	'fourty'		=> 'forty',

	'gage'			=> 'guage',
	'geneology'		=> 'genealogy',
	'grammer'		=> 'grammar',
	'gray'			=> 'grey',
	'guerilla'		=> 'guerrilla',
	'gynecology'	=> 'gynaecology',

	'harbour'		=> 'harbor',
	'heighth'		=> 'height',
	'hemaglobin'	=> 'haemaglobin',
	'hematin'		=> 'haematin',
	'hematite'		=> 'haematite',
	'hematology'	=> 'haematology',
	'honour'			=> 'honor',

	'innoculate'	=> 'inoculate',
	'installment'	=> 'instalment',
	'irrelevent'	=> 'irrelevant',
	'irrevelant'	=> 'irrelevant',

	'jeweler'	=> 'jeweller',
	'judgement'	=> 'judgment',

	'labeled'	=> 'labelled',
	'labour'		=> 'labor',
	'labourer'	=> 'laborer',
	'labourers'	=> 'laborers',
	'labouring'	=> 'laboring',
	'licence'	=> 'license',
	'liesure'	=> 'leisure',
	'liquify'	=> 'liquefy',

	'maintainance'	=> 'maintenance',
	'maintenence'	=> 'maintenance',
	'medieval'		=> 'mediaeval',
	'meter'			=> 'metre',
	'milage'		=> 'mileage',
	'millipede'		=> 'millepede',
	'miscelaneous'	=> 'miscellaneous',
	'morgage'		=> 'mortgage',

	'noticable'	=> 'noticeable',

	'occurence'	=> 'occurrence',
	'offense'	=> 'offence',
	'ommision'	=> 'omission',
	'ommission'	=> 'omission',
	'optimise'	=> 'optimize',
	'organise'	=> 'organize',

	'pajamas'			=> 'pyjamas',
	'paleography'		=> 'palaeography',
	'paleolithic'		=> 'palaeolithic',
	'paleontological'	=> 'palaeontological',
	'paleontologist'	=> 'palaeontologist',
	'paleontology'		=> 'palaeontology',
	'paleozoic'			=> 'palaeozoic',
	'pamplet'			=> 'pamphlet',
	'paralell'			=> 'parallel',
	'parl'				=> 'parliament',
	'parlt'				=> 'parliament',
	'pediatric'			=> 'paediatric',
	'pediatrician'		=> 'paediatrician',
	'pediatrics'		=> 'paediatrics',
	'pedodontia'		=> 'paedodontia',
	'pedodontics'		=> 'paedodontics',
	'personel'			=> 'personnel',
	'practise'			=> 'practice',
	'program'			=> 'programme',
	'psych'				=> 'psychology',

	'questionaire'	=> 'questionnaire',

	'rarify'		=> 'rarefy',
	'reccomend'		=> 'recommend',
	'recieve'		=> 'receive',
	'resistence'	=> 'resistance',
	'restaraunt'	=> 'restaurant',

	'saviour'			=> 'savior',
	'sep'				=> 'september',
	'seperate'			=> 'separate',
	'sept'				=> 'september',
	'sieze'				=> 'seize',
	'summarise'			=> 'summarize',
	'summerise'			=> 'summarize',
	'superceed'			=> 'supercede',
	'superintendant'	=> 'superintendent',
	'supersede'			=> 'supercede',
	'suprise'			=> 'surprise',
	'surprise'			=> 'surprize',
	'synchronise'		=> 'synchronize',

	'temperary'		=> 'temporary',
	'theater'		=> 'theatre',
	'threshhold'	=> 'threshold',
	'transfered'	=> 'transferred',
	'truely'		=> 'truly',
	'truley'		=> 'truly',

	'useable'	=> 'usable',

	'valour'	=> 'valor',
	'vigour'	=> 'vigor',
	'vol'	=> 'volume',

	'whack'		=> 'wack',
	'withold'	=> 'withhold',

	'yeild'	=> 'yield',
);
?>
