<?php
namespace Craft;

class ClientWidgets_ChannelsWidget extends BaseWidget
{

	protected $colspan = 1;

	public function getName()
	{
		return Craft::t('Channels list');
	}

	public function getBodyHtml()
	{
	    return craft()->templates->render('clientwidgets/_channels');
	}
}
