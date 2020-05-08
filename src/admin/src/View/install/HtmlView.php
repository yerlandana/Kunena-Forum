<?php
/**
 * Kunena Component
 *
 * @package         Kunena.Administrator
 * @subpackage      Views
 *
 * @copyright       Copyright (C) 2008 - 2020 Kunena Team. All rights reserved.
 * @license         https://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link            https://www.kunena.org
 **/

namespace Kunena\Forum\Administrator\View\Install;

defined('_JEXEC') or die();

use Exception;
use Joomla\CMS\Factory;
use Joomla\CMS\Language\Text;
use Joomla\CMS\MVC\View\HtmlView as BaseHtmlView;
use Joomla\CMS\Toolbar\Toolbar;
use Joomla\CMS\Toolbar\ToolbarHelper;
use function defined;

/**
 * About view for Kunena cpanel
 *
 * @since   Kunena 6.0
 */
class HtmlView extends BaseHtmlView
{
	/**
	 * @return  void
	 *
	 * @since   Kunena 6.0
	 *
	 * @throws  Exception
	 */
	public function display($tpl = null)
	{
		$document = Factory::getApplication()->getDocument();
		$document->setTitle(Text::_('COM_KUNENA_A_ICONS_MANAGER'));

		$this->addToolbar();

		return parent::display($tpl);
	}

	/**
	 * Set the toolbar on log manager
	 *
	 * @return  void
	 *
	 * @since   Kunena 6.0
	 */
	protected function addToolbar()
	{
		// Get the toolbar object instance
		$bar = Toolbar::getInstance('toolbar');

		// Set the titlebar text
		ToolbarHelper::title(Text::_('COM_KUNENA') . ': ' . Text::_('COM_KUNENA_A_ICONS_MANAGER'));
	}
}
