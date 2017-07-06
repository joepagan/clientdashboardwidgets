<?php
namespace Craft;

class ClientDashboardWidgets_SingleEntriesWidget extends BaseWidget
{

	protected $colspan = 1;

	public function getName()
	{
		return Craft::t('Single pages list');
	}

	public function getBodyHtml()
	{
	    return craft()->templates->render('clientdashboardwidgets/_singles');
	}
}
