<?php
namespace Craft;

class ClientDashboardWidgets_StructuresWidget extends BaseWidget
{

	protected $colspan = 1;

	public function getName()
	{
		return Craft::t('Structures list');
	}

	public function getBodyHtml()
	{
	    return craft()->templates->render('clientdashboardwidgets/_structures');
	}
}
