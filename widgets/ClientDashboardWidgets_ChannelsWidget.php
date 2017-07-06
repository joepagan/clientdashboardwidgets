<?php
namespace Craft;

class ClientDashboardWidgets_ChannelsWidget extends BaseWidget
{

	protected $colspan = 1;

	public function getName()
	{
		return Craft::t('Channels list');
	}

	public function getBodyHtml()
	{
	    return craft()->templates->render('clientdashboardwidgets/_channels');
	}
}
