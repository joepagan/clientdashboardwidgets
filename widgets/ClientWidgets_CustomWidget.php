<?php
namespace Craft;

class ClientWidgets_CustomWidget extends BaseWidget
{

	protected $colspan = 1;

	public function getName()
	{
		return Craft::t('CMS Guide');
	}

	public function getBodyHtml()
	{
	    return craft()->templates->render('clientwidgets/_custom');
	}
}
