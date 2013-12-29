-- ********************************************************
-- *                                                      *
-- * IMPORTANT NOTE                                       *
-- *                                                      *
-- * Do not import this file manually but use the Contao  *
-- * install tool to create and maintain database tables! *
-- *                                                      *
-- ********************************************************


-- --------------------------------------------------------

--
-- Table `tl_content`
--

CREATE TABLE `tl_content` (
  `fen_code` varchar(255) NOT NULL default '',
  `fen_figurensatz` varchar(255) NOT NULL default '',
  `fen_figurengroesse` int(10) unsigned NOT NULL default '35',
  `fen_untertitel` varchar(255) NOT NULL default '',
  `fen_koordinaten` char(1) NOT NULL default '',
  `fen_brettdrehen` char(1) NOT NULL default '',
  `fen_rand` char(1) NOT NULL default '',
  `fen_randbreite` int(1) unsigned NOT NULL default '1',
  `fen_randfarbe` varchar(6) NOT NULL default '',
  `fen_farbeweiss` varchar(6) NOT NULL default '',
  `fen_farbeschwarz` varchar(6) NOT NULL default '',
  `fen_text` text NULL, 
  `fen_textfluss` varchar(255) NOT NULL default '',
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
