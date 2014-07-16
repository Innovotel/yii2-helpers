<?php

namespace app\helpers;

use Yii;
use yii\helpers\BaseHtml;

class Html extends \kartik\helpers\Html
{
	public static function lbl($label, $helpText = '')
	{
		$l = empty($helpText) ? $label : self::abbr($label, $helpText);
		return static::tag('label', $l, ['class' => 'control-label']);
	}

	/**
	 * Generates panel title for heading and footer.
	 *
	 * @param array $content the panel content components.
	 * @param string $type whether 'heading' or 'footer'
	 */
	protected static function generatePanelTitle($content, $type)
	{
		if (!empty($content[$type])) {
			$title = $content[$type];
			$title = static::tag("h3", $title, ["class" => "panel-title"]);
			return static::tag("div", $title, ["class" => "panel-{$type}"]) . "\n";
		} else {
			return '';
		}
	}
}

