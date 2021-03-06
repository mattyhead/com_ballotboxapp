<?php
/**
 * BallotBoxApp table class
 * 
 * @package    Joomla.Tutorials
 * @subpackage Components
 * @link http://docs.joomla.org/Developing_a_Model-View-Controller_Component_-_Part_4
 * @license		GNU/GPL
 */

// No direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

/**
 * Ballotboxapp Table class
 *
 * @package    Joomla.Tutorials
 * @subpackage Components
 */
class TableBallotboxapp extends JTable
{
	/**
	 * Primary Key
	 *
	 * @var int
	 */
	var $id = null;

	/**
	 * @var string
	 */
	var $greeting = null;

	/**
	 * Constructor
	 *
	 * @param object Database connector object
	 */
	function TableBallotboxapp(& $db) {
		parent::__construct('#__election_year', 'id', $db);
	}
}