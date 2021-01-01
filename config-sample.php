<?php

return [
	/**
	 * Bot's API token
	 */
	'bot_token' => '1309504600:AAEeBquYnfrdKOqGd_1kBUwsPengw42bTHo',
	/**
	 * Bot's username without @ symbol
	 */
	'bot_username' => 'Airdropp_Bounty_bot',
	/**
	 * Bot's extended name/title
	 */
	'bot_title' => 'Airdrop Bounty Bot',
	/**
	 * Array of users which will have admin access to bot's private chat
	 */
	'bot_admins' =>[
		000000000,
		123456789
	],
	/**
	 * Webhook url. Not needed if you will use any of getUpdates() method
	 */
	'webhook_url' => 'https://example.com/',
	/**
	 * MySQL database credentials. Always necessary.
	 */
	'db' => [
		'host'     => 'localhost',
		'port'     => 3306,
		'user'     => 'example_user',
		'password' => 'example_password',
		'database' => 'example_database',
	],
	/**
	 * Enable or disable logs (/app/logs dir needs to be at least 755 accesses)
	 */
	'enable_logs' => false,
	/**
	 * All campaign stuff
	 *
	 * All positions in this section is optional, you can add your own if your campaign path is another
	 * The only thing you need - to change \app\commands\GenericmessageCommand class
	 * This campaign stuff and GenericmessageCommand class is only example ones. Your campaign can be different.
	 *
	 * Token name
	 */
	'token_name' => 'Atron Token',
	/**
	 * Tokens count, which user will get after complete campaign goals
	 */
	'campaign_complete_reward_tokens_count' => 10,
	'referrer_invite_reward_tokens_count' => 5,
	/**
	 * Telegram group which user need to join after campaign start
	 */
	'telegram_group_to_follow_id' => '-111111111',
	'telegram_group_to_follow_link_url' => 'https://t.me/',
	/**
	 * Telegram channel which user need to join after campaign start
	 */
	'telegram_channel_to_follow_id' => '-2222222222222',
	'telegram_channel_to_follow_link_url' => 'https://t.me/IndianTradingLTD',
	/**
	 * Link to twitter profile which lase tweet user must to retweet
	 */
	'twitter_profile_url' => 'https://twitter.com/example_profile',
	/**
	 * Link to support contacts
	 */
	'support_link' => '@example_group',
	/**
	 * Max open campaigns count. After reaching this point - campaigns for new users will not start
	 */
	'max_campaigns_count' => '32000',
	/**
	 * Array of commands aliases.
	 * If bot will find any of command alias in user input - associated command will executed
	 */
	'commands_aliases' => [
		'/startcampaign' => 'Start campaign',
		'/checkme' => 'Check me',
		'/balance' => 'Balance',
		'/referrallink' => 'Referral link',
		'/socialmedia' => 'Social media',
		'/support' => 'Support'
	],
	/**
	 * Bot's reaction on keywords
	 * Bot will reply on messages containing any of keywords from all users in telegram_group_to_follow_id group except admins
	 */
	'keywords_reaction' => true,
	/**
	 * Array of keywords
	 * Keys of array items is keywords by itself, values of array items is bot's replies messages text
	 */
	'keywords_vocabulary' => [
		'distribution' => 'Distribution word reply',
		'price'  => 'Price word reply message',
		'exchange'  => 'Exchange word reply message'
	],
	/**
	 * Bot's reaction on spam entities
	 */
	'spam_reaction' => true,
	/**
	 * Array of spam entities types
	 * Bot will delete messages containing any of spam types from all users in telegram_group_to_follow_id group except admins
	 * Options:
	 * 'links' - all messages containing links will be deleted
	 * 'user_nicknames' - all messages containing called (with @ symbol) nicknames
	 * 'stop_words' - all messages containing any word in specified array
	 * 'forwards' - all forwards from another chats
	 * 'stickers' - all messages containing stickers
	 * 'photo' - all messages containing images
	 */
	'spam_types' => [
		'links' => true,
		'user_nicknames' => true,
		'forwards' => true,
		'stickers' => true,
		'photo' => true,
		'stop_words'  => [
			'bounty',
			'crypto',
			'group'
		],
	]
];
