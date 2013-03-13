<?php
/**
 * @copyright  Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Joomla\Cache\Tests;

use Joomla\Cache;

/**
 * Tests for the Joomla\Cache\Memcached class.
 *
 * @since  1.0
 */
class MemcachedTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * @var    Cache\Memcached
	 * @since  1.0
	 */
	private $instance;

	/**
	 * Tests the Joomla\Cache\Memcached::clear method.
	 *
	 * @return  void
	 *
	 * @covers  Joomla\Cache\Memcached::clear
	 * @since   1.0
	 */
	public function testClear()
	{
		$this->markTestIncomplete();
	}

	/**
	 * Tests the Joomla\Cache\Memcached::exists method.
	 *
	 * @return  void
	 *
	 * @covers  Joomla\Cache\Memcached::exists
	 * @since   1.0
	 */
	public function testExists()
	{
		$this->markTestIncomplete();
	}

	/**
	 * Tests the Joomla\Cache\Memcached::get method.
	 *
	 * @return  void
	 *
	 * @covers  Joomla\Cache\Memcached::get
	 * @since   1.0
	 */
	public function testGet()
	{
		$this->markTestIncomplete();
	}

	/**
	 * Tests the Joomla\Cache\Memcached::remove method.
	 *
	 * @return  void
	 *
	 * @covers  Joomla\Cache\Memcached::remove
	 * @since   1.0
	 */
	public function testRemove()
	{
		$this->markTestIncomplete();
	}

	/**
	 * Tests the Joomla\Cache\Memcached::set method.
	 *
	 * @return  void
	 *
	 * @covers  Joomla\Cache\Memcached::set
	 * @since   1.0
	 */
	public function testSet()
	{
		$this->markTestIncomplete();
	}

	/**
	 * Setup the tests.
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	protected function setUp()
	{
		parent::setUp();

		try
		{
			$this->instance = new Cache\Memcached;
		}
		catch (\Exception $e)
		{
			$this->markTestSkipped();
		}
	}
}
