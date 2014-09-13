<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 *
 * Copyright (C) 2005-2013 Leo Feyer
 *
 * @package   fen
 * @author    Frank Hoppe
 * @license   GNU/LGPL
 * @copyright Frank Hoppe 2013
 */

/**
 * Palettes
 */
if($GLOBALS['TL_CONFIG']['fen_everdefault'])
{
	// Die Voreinstellungen haben die höhere Priorität. Deshalb werden einige Felder ausgeblendet.
	$GLOBALS['TL_DCA']['tl_content']['palettes']['fen'] = '{type_legend},type,headline;{fen_legend},fen_code,fen_untertitel;{fendarstellung_legend},fen_brettdrehen;{fentext_legend},fen_text,fen_textfluss;{protected_legend:hide},protected;{expert_legend:hide},guest,cssID,space';
}
else
{
	$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'fen_rand';
	$GLOBALS['TL_DCA']['tl_content']['palettes']['fen'] = '{type_legend},type,headline;{fen_legend},fen_code,fen_untertitel;{fenfig_legend},fen_figurensatz,fen_figurengroesse;{fenbrett_legend},fen_rand;{fenfarbe_legend},fen_farbeweiss,fen_farbeschwarz;{fendarstellung_legend},fen_koordinaten,fen_brettdrehen;{fentext_legend},fen_text,fen_textfluss;{protected_legend:hide},protected;{expert_legend:hide},guest,cssID,space';
	$GLOBALS['TL_DCA']['tl_content']['subpalettes']['fen_rand'] = 'fen_randbreite,fen_randfarbe';
}

/**
 * Fields
 */
$GLOBALS['TL_DCA']['tl_content']['fields']['fen_code'] = array
(
	'label'         => &$GLOBALS['TL_LANG']['tl_content']['fen_code'],
	'default'       => 'rnbqkbnr/pppppppp/8/8/8/8/PPPPPPPP/RNBQKBNR w KQkq - 0 1',
	'inputType'     => 'text',
	'eval'          => array('mandatory'=>true, 'tl_class'=>'long', 'maxlength'=>80),
	'sql'           => "VARCHAR(80) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['fen_untertitel'] = array
(
	'label'         => &$GLOBALS['TL_LANG']['tl_content']['fen_untertitel'],
	'default'       => 'Diagramm',
	'search'        => true,
	'inputType'     => 'text',
	'eval'          => array('tl_class'=>'long', 'maxlength'=>255),
	'sql'           => "VARCHAR(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['fen_figurengroesse'] = array
(
	'label'         => &$GLOBALS['TL_LANG']['tl_content']['fen_figurengroesse'],
	'default'       => $GLOBALS['TL_CONFIG']['fen_figurengroesse'],
	'inputType'     => 'select',
	'options'       => array('25','35'),
	'eval'          => array('tl_class' => 'w50'),
	'sql'           => "INT(10) unsigned NOT NULL default '35'"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['fen_figurensatz'] = array
(
	'label'         => &$GLOBALS['TL_LANG']['tl_content']['fen_figurensatz'],
	'default'       => $GLOBALS['TL_CONFIG']['fen_figurensatz'],
	'inputType'     => 'select',
	'options'       => array('adventurer','alfonso','cases','condal','harlequin','kingdom','leipzig','line','lucena','magnetic','mark','marroquin','maya','mediaeval','merida','motif'),
	'reference'     => &$GLOBALS['TL_LANG']['tl_content']['fen_figurensatz_option'],
	'eval'          => array('tl_class'=>'w50', 'maxlength'=>10),
	'sql'           => "VARCHAR(10) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['fen_rand'] = array
(
	'label'         => &$GLOBALS['TL_LANG']['tl_content']['fen_rand'],
	'default'       => $GLOBALS['TL_CONFIG']['fen_rand'],
	'inputType'     => 'checkbox',
	'eval'          => array('tl_class' => 'w50','isBoolean' => true,'submitOnChange'=>true),
	'sql'           => "CHAR(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['fen_randbreite'] = array
(
	'label'         => &$GLOBALS['TL_LANG']['tl_content']['fen_randbreite'],
	'default'       => $GLOBALS['TL_CONFIG']['fen_randbreite'],
	'inputType'     => 'select',
	'options'       => array('1','2','3','4','5','6'),
	'eval'          => array('tl_class' => 'w50 clr'),
	'sql'           => "INT(1) unsigned NOT NULL default '1'"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['fen_randfarbe'] = array
(
	'label'         => &$GLOBALS['TL_LANG']['tl_content']['fen_randfarbe'],
	'default'       => $GLOBALS['TL_CONFIG']['fen_randfarbe'],
	'inputType'     => 'text',
	'eval'          => array('tl_class' => 'w50','colorpicker'=>true),
	'sql'           => "VARCHAR(6) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['fen_farbeweiss'] = array
(
	'label'         => &$GLOBALS['TL_LANG']['tl_content']['fen_farbeweiss'],
	'default'       => $GLOBALS['TL_CONFIG']['fen_farbeweiss'],
	'inputType'     => 'text',
	'eval'          => array('tl_class' => 'w50','colorpicker'=>true),
	'sql'           => "VARCHAR(6) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['fen_farbeschwarz'] = array
(
	'label'         => &$GLOBALS['TL_LANG']['tl_content']['fen_farbeschwarz'],
	'default'       => $GLOBALS['TL_CONFIG']['fen_farbeschwarz'],
	'inputType'     => 'text',
	'eval'          => array('tl_class' => 'w50','colorpicker'=>true),
	'sql'           => "VARCHAR(6) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['fen_koordinaten'] = array
(
	'label'         => &$GLOBALS['TL_LANG']['tl_content']['fen_koordinaten'],
	'default'       => $GLOBALS['TL_CONFIG']['fen_koordinaten'],
	'inputType'     => 'checkbox',
	'eval'          => array('tl_class' => 'w50'),
	'sql'           => "CHAR(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['fen_brettdrehen'] = array
(
	'label'         => &$GLOBALS['TL_LANG']['tl_content']['fen_brettdrehen'],
	'default'       => false,
	'inputType'     => 'checkbox',
	'eval'          => array('tl_class' => 'w50'),
	'sql'           => "CHAR(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['fen_text'] = array
(
	'label'         => &$GLOBALS['TL_LANG']['tl_content']['fen_text'],
	'exclude'       => true,
	'search'        => true,
	'inputType'     => 'textarea',
	'eval'          => array('rte'=>'tinyMCE','helpwizard'=>true),
	'explanation'   => 'insertTags',
	'sql'           => "TEXT NULL"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['fen_textfluss'] = array
(
	'label'         => &$GLOBALS['TL_LANG']['tl_content']['fen_textfluss'],
	'exclude'       => true,
	'inputType'     => 'radioTable',
	'options'       => array('above', 'left', 'right', 'below'),
	'eval'          => array('cols'=>4, 'tl_class'=>'w50',  'maxlength'=>5),
	'reference'     => &$GLOBALS['TL_LANG']['MSC'],
	'sql'           => "VARCHAR(5) NOT NULL default ''"
);

?>
