<?php
/**
 * @package    Joomla.UnitTest
 *
 * @copyright  Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

include_once JPATH_PLATFORM . '/joomla/document/feed/feed.php';

/**
 * Test class for JFeedItem.
 *
 * @package     Joomla.UnitTest
 * @subpackage  Document
 * @since       11.1
 */
class JFeedItemTest extends PHPUnit_Framework_TestCase
{
	/**
	 * @var JFeedItem
	 */
	protected $object;

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 *
	 * @return void
	 */
	protected function setUp()
	{
		parent::setUp();

		$this->object = new JFeedItem;
	}

	/**
	 * Test...
	 *
	 * @todo Implement testSetEnclosure().
	 *
	 * @return void
	 */
	public function testSetEnclosure()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
			'This test has not been implemented yet.'
		);
	}

}
