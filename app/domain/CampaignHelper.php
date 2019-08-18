<?php

namespace app\domain;

class CampaignHelper
{
	/**
	 * Get first found link form text
	 *
	 * @param string $text
	 *
	 * @return string|false
	 */
	public static function getTwitterLinkFromText(string $text)
	{
		preg_match('/^https?:\/\/twitter\.com\S+/', $text, $matches);
		if (!empty($matches)){
			return reset($matches);
		}
		return false;
	}
	
	/**
	 * Get first ethereum address form text
	 *
	 * @param string $text
	 *
	 * @return string|false
	 */
	public static function getEthereumAddressFromText(string $text)
	{
		preg_match('/^0x[a-fA-F0-9]{40}/', $text, $matches);
		if (!empty($matches)){
			return reset($matches);
		}
		return false;
	}
	
	/**
	 * Return user referral link
	 *
	 * @param string $bot_name
	 * @param string $unique_id
	 *
	 * @return string
	 */
	public static function getUniqueReferralLink(string $bot_name, string $unique_id = null)
	{
		if (empty($unique_id)){
			$unique_id = uniqid();
		}
		return "http://t.me/$bot_name?start=$unique_id";
	}

}