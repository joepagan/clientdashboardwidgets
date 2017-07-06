<?php
namespace Craft;

class ClientDashboardWidgets_CmsguideWidget extends BaseWidget
{

	protected $colspan = 3;

	public function getName()
	{
		return Craft::t('CMS Guide');
	}

	public function getBodyHtml()
	{
	    return craft()->templates->render('clientdashboardwidgets/_cmsguide');
	}
}
