<?php

/**
 * @copyright   Copyright (c) 2015 ublaboo <ublaboo@paveljanda.com>
 * @author      Pavel Janda <me@paveljanda.com>
 * @package     Ublaboo
 */

namespace Ublaboo\DataGrid\Status;

use Nette;
use Ublaboo\DataGrid\Column\ColumnStatus;

class Option extends Nette\Object
{

	/**
	 * @var ColumnStatus
	 */
	protected $columnStatus;

	/**
	 * @var mixed
	 */
	protected $value;

	/**
	 * @var string
	 */
	protected $text;

	/**
	 * @var string|callable
	 */
	protected $title;

	/**
	 * @var string|callable
	 */
	protected $class = 'btn-success';

	/**
	 * @var string
	 */
	protected $class_secondary = 'ajax btn btn-default btn-xs';

	/**
	 * @var string|callable
	 */
	protected $icon;


	/**
	 * [__construct description]
	 * @param ColumnStatus $columnStatus
	 * @param mixed       $value
	 * @param string       $text
	 */
	public function __construct(ColumnStatus $columnStatus, $value, $text)
	{
		$this->columnStatus = $columnStatus;
		$this->value = $value;
		$this->text = (string) $text;
	}


	/**
	 * @return mixed
	 */
	public function getValue()
	{
		return $this->value;
	}


	/**
	 * End option fluent interface and return parent
	 * @return ColumnStatus
	 */
	public function endOption()
	{
		return $this->columnStatus;
	}


	/**
	 * @param string $title
	 * @return static
	 */
	public function setTitle($title)
	{
		$this->title = (string) $title;

		return $this;
	}


	/**
	 * @return string
	 */
	public function getTitle()
	{
		return $this->title;
	}


	/**
	 * @param string $class
	 * @param string $class_secondary
	 * @return static
	 */
	public function setClass($class, $class_secondary = NULL)
	{
		$this->class = (string) $class;

		if ($class_secondary) {
			$this->class_secondary = $class_secondary;
		}

		return $this;
	}


	/**
	 * @return string
	 */
	public function getClass()
	{
		return $this->class;
	}


	/**
	 * @return string
	 */
	public function getClassSecondary()
	{
		return $this->class_secondary;
	}


	/**
	 * @param string $icon
	 * @return static
	 */
	public function setIcon($icon)
	{
		$this->icon = (string) $icon;

		return $this;
	}


	/**
	 * @return string
	 */
	public function getIcon()
	{
		return $this->icon;
	}


	/**
	 * @return string
	 */
	public function getText()
	{
		return $this->text;
	}

}
