-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.6-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.0.0.6029
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura para tabla inv1.active_guests
DROP TABLE IF EXISTS `active_guests`;
CREATE TABLE IF NOT EXISTS `active_guests` (
  `ip` varchar(15) NOT NULL,
  `timestamp` int(11) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.active_guests: ~0 rows (aproximadamente)
DELETE FROM `active_guests`;
/*!40000 ALTER TABLE `active_guests` DISABLE KEYS */;
/*!40000 ALTER TABLE `active_guests` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.active_users
DROP TABLE IF EXISTS `active_users`;
CREATE TABLE IF NOT EXISTS `active_users` (
  `username` varchar(30) NOT NULL,
  `timestamp` int(11) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.active_users: ~0 rows (aproximadamente)
DELETE FROM `active_users`;
/*!40000 ALTER TABLE `active_users` DISABLE KEYS */;
/*!40000 ALTER TABLE `active_users` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.admins
DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `adminid` char(23) NOT NULL DEFAULT 'uuid_short();',
  `userid` char(128) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `superadmin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.admins: ~0 rows (aproximadamente)
DELETE FROM `admins`;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.announcement
DROP TABLE IF EXISTS `announcement`;
CREATE TABLE IF NOT EXISTS `announcement` (
  `Announcement_ID` int(11) unsigned NOT NULL,
  `Is_Active` enum('N','Y') NOT NULL DEFAULT 'N',
  `Topic` varchar(50) NOT NULL,
  `Message` mediumtext NOT NULL,
  `Date_LastUpdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Language` char(2) NOT NULL DEFAULT 'en',
  `Auto_Publish` enum('Y','N') DEFAULT 'N',
  `Date_Start` datetime DEFAULT NULL,
  `Date_End` datetime DEFAULT NULL,
  `Date_Created` datetime DEFAULT NULL,
  `Created_By` varchar(200) DEFAULT NULL,
  `Translated_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.announcement: ~0 rows (aproximadamente)
DELETE FROM `announcement`;
/*!40000 ALTER TABLE `announcement` DISABLE KEYS */;
/*!40000 ALTER TABLE `announcement` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.app_config
DROP TABLE IF EXISTS `app_config`;
CREATE TABLE IF NOT EXISTS `app_config` (
  `setting` char(26) NOT NULL,
  `value` varchar(12000) NOT NULL,
  `sortorder` int(5) DEFAULT NULL,
  `category` varchar(25) NOT NULL,
  `type` varchar(15) NOT NULL,
  `description` varchar(140) DEFAULT NULL,
  `required` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.app_config: ~0 rows (aproximadamente)
DELETE FROM `app_config`;
/*!40000 ALTER TABLE `app_config` DISABLE KEYS */;
/*!40000 ALTER TABLE `app_config` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.balance
DROP TABLE IF EXISTS `balance`;
CREATE TABLE IF NOT EXISTS `balance` (
  `id` int(11) NOT NULL,
  `user_id` char(128) NOT NULL,
  `currency` varchar(50) DEFAULT NULL,
  `balance` varchar(50) DEFAULT NULL,
  `awaiting_deposit` varchar(50) DEFAULT NULL,
  `reserved_in_orders` varchar(50) DEFAULT NULL,
  `est_USD` varchar(50) DEFAULT NULL,
  `deposit` varchar(50) DEFAULT NULL,
  `withdrawal` varchar(50) DEFAULT NULL,
  `history` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.balance: ~0 rows (aproximadamente)
DELETE FROM `balance`;
/*!40000 ALTER TABLE `balance` DISABLE KEYS */;
/*!40000 ALTER TABLE `balance` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.banned_users
DROP TABLE IF EXISTS `banned_users`;
CREATE TABLE IF NOT EXISTS `banned_users` (
  `user_id` char(128) NOT NULL,
  `banned_timestamp` datetime NOT NULL,
  `banned_hours` float NOT NULL,
  `hours_remaining` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.banned_users: ~0 rows (aproximadamente)
DELETE FROM `banned_users`;
/*!40000 ALTER TABLE `banned_users` DISABLE KEYS */;
/*!40000 ALTER TABLE `banned_users` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.breadcrumblinks
DROP TABLE IF EXISTS `breadcrumblinks`;
CREATE TABLE IF NOT EXISTS `breadcrumblinks` (
  `Page_Title` varchar(100) NOT NULL,
  `Page_URL` varchar(100) NOT NULL,
  `Lft` int(4) NOT NULL,
  `Rgt` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.breadcrumblinks: ~0 rows (aproximadamente)
DELETE FROM `breadcrumblinks`;
/*!40000 ALTER TABLE `breadcrumblinks` DISABLE KEYS */;
/*!40000 ALTER TABLE `breadcrumblinks` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.category
DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.category: ~0 rows (aproximadamente)
DELETE FROM `category`;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
/*!40000 ALTER TABLE `category` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.cols_set
DROP TABLE IF EXISTS `cols_set`;
CREATE TABLE IF NOT EXISTS `cols_set` (
  `id` int(11) NOT NULL,
  `table_name` varchar(50) DEFAULT NULL,
  `col_name` varchar(50) DEFAULT NULL,
  `type_input` varchar(50) DEFAULT NULL,
  `list_page` varchar(50) DEFAULT NULL,
  `add_page` varchar(50) DEFAULT NULL,
  `update_page` varchar(50) DEFAULT NULL,
  `view_page` varchar(50) DEFAULT NULL,
  `delete_page` varchar(50) DEFAULT NULL,
  `search_text` varchar(50) DEFAULT NULL,
  `col_set` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.cols_set: ~0 rows (aproximadamente)
DELETE FROM `cols_set`;
/*!40000 ALTER TABLE `cols_set` DISABLE KEYS */;
/*!40000 ALTER TABLE `cols_set` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.comment
DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL,
  `message` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.comment: ~0 rows (aproximadamente)
DELETE FROM `comment`;
/*!40000 ALTER TABLE `comment` DISABLE KEYS */;
/*!40000 ALTER TABLE `comment` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.configuration
DROP TABLE IF EXISTS `configuration`;
CREATE TABLE IF NOT EXISTS `configuration` (
  `config_name` varchar(20) NOT NULL,
  `config_value` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.configuration: ~23 rows (aproximadamente)
DELETE FROM `configuration`;
/*!40000 ALTER TABLE `configuration` DISABLE KEYS */;
INSERT INTO `configuration` (`config_name`, `config_value`) VALUES
	('ACCOUNT_ACTIVATION', '5'),
	('TRACK_VISITORS', '1'),
	('MAX_USERS', '30'),
	('MIN_USERS', '5'),
	('MAX_PASS_CHARTS', '100'),
	('MIN_PASS_CHARTS', '6'),
	('EMAIL_FROM_NAME', 'Jose Mantilla'),
	('EMAIL_FROM_ADDR', 'contact@labemotion.net'),
	('EMAIL_WELCOME', '0'),
	('SITE_NAME', 'Secure Login System'),
	('SITE_DESC', 'Secure login system'),
	('WEB_ROOT', 'http://labemotion.net/'),
	('ENABLE_CAPTCHA', '0'),
	('HOMEPAGE', 'index.php'),
	('ALL_LOWERCASE', '0'),
	('VERSION', '0.0.1'),
	('USER_TIMEOUT', '10'),
	('GUEST_TIMEOUT', '5'),
	('LANGUAGE_1', 'spanish'),
	('LANGUAGE_2', 'english'),
	('URL_PATH', 'Secure-PHP-Login-adminLTE-3/'),
	('MAIL_SUPPORT', 'support@labemotion.net'),
	('SUBJECT_SUPPORT', 'Soporte de fallas');
/*!40000 ALTER TABLE `configuration` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.cookies
DROP TABLE IF EXISTS `cookies`;
CREATE TABLE IF NOT EXISTS `cookies` (
  `cookieid` char(23) NOT NULL,
  `userid` char(128) NOT NULL,
  `tokenid` char(25) NOT NULL,
  `expired` tinyint(1) NOT NULL DEFAULT 0,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.cookies: ~0 rows (aproximadamente)
DELETE FROM `cookies`;
/*!40000 ALTER TABLE `cookies` DISABLE KEYS */;
/*!40000 ALTER TABLE `cookies` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.countries
DROP TABLE IF EXISTS `countries`;
CREATE TABLE IF NOT EXISTS `countries` (
  `id` smallint(5) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.countries: ~0 rows (aproximadamente)
DELETE FROM `countries`;
/*!40000 ALTER TABLE `countries` DISABLE KEYS */;
/*!40000 ALTER TABLE `countries` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.currency
DROP TABLE IF EXISTS `currency`;
CREATE TABLE IF NOT EXISTS `currency` (
  `id` int(11) NOT NULL,
  `coin` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `symbol` varchar(50) DEFAULT NULL,
  `rating` varchar(50) DEFAULT NULL,
  `total_supply` varchar(50) DEFAULT NULL,
  `max_supply` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.currency: ~0 rows (aproximadamente)
DELETE FROM `currency`;
/*!40000 ALTER TABLE `currency` DISABLE KEYS */;
/*!40000 ALTER TABLE `currency` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.customers
DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `Customer_ID` int(11) NOT NULL,
  `Customer_Number` varchar(20) NOT NULL,
  `Customer_Name` varchar(50) NOT NULL,
  `Address` text NOT NULL,
  `City` varchar(50) NOT NULL,
  `Country` varchar(30) NOT NULL,
  `Contact_Person` varchar(50) NOT NULL,
  `Phone_Number` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Mobile_Number` varchar(50) NOT NULL,
  `Notes` varchar(50) NOT NULL,
  `Balance` double DEFAULT 0,
  `Date_Added` datetime DEFAULT NULL,
  `Added_By` varchar(50) DEFAULT NULL,
  `Date_Updated` datetime DEFAULT NULL,
  `Updated_By` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.customers: ~0 rows (aproximadamente)
DELETE FROM `customers`;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.deleted_members
DROP TABLE IF EXISTS `deleted_members`;
CREATE TABLE IF NOT EXISTS `deleted_members` (
  `id` char(128) NOT NULL,
  `username` varchar(65) NOT NULL DEFAULT '',
  `password` varchar(65) NOT NULL DEFAULT '',
  `email` varchar(65) NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT 0,
  `banned` tinyint(1) NOT NULL DEFAULT 0,
  `mod_timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.deleted_members: ~0 rows (aproximadamente)
DELETE FROM `deleted_members`;
/*!40000 ALTER TABLE `deleted_members` DISABLE KEYS */;
/*!40000 ALTER TABLE `deleted_members` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.deposit
DROP TABLE IF EXISTS `deposit`;
CREATE TABLE IF NOT EXISTS `deposit` (
  `id` int(11) NOT NULL,
  `user_id` char(128) NOT NULL DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.deposit: ~0 rows (aproximadamente)
DELETE FROM `deposit`;
/*!40000 ALTER TABLE `deposit` DISABLE KEYS */;
/*!40000 ALTER TABLE `deposit` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.employee
DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(11) NOT NULL COMMENT 'primary key',
  `employee_name` varchar(255) NOT NULL COMMENT 'employee name',
  `employee_lastname` varchar(255) NOT NULL COMMENT 'employee lastname',
  `employee_email` varchar(255) NOT NULL COMMENT 'employee email',
  `employee_phone` int(11) NOT NULL COMMENT 'employee phone',
  `employee_bridge` varchar(255) NOT NULL COMMENT 'employee bridge',
  `employee_comments` varchar(255) NOT NULL COMMENT 'employee comments'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.employee: ~0 rows (aproximadamente)
DELETE FROM `employee`;
/*!40000 ALTER TABLE `employee` DISABLE KEYS */;
/*!40000 ALTER TABLE `employee` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.eventlog
DROP TABLE IF EXISTS `eventlog`;
CREATE TABLE IF NOT EXISTS `eventlog` (
  `id` bigint(20) unsigned NOT NULL,
  `event` varchar(200) NOT NULL,
  `eventRowIdOrRef` varchar(20) DEFAULT NULL,
  `eventDesc` text DEFAULT NULL,
  `eventTable` varchar(20) DEFAULT NULL,
  `staffInCharge` bigint(20) unsigned NOT NULL,
  `eventTime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.eventlog: ~0 rows (aproximadamente)
DELETE FROM `eventlog`;
/*!40000 ALTER TABLE `eventlog` DISABLE KEYS */;
/*!40000 ALTER TABLE `eventlog` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.exchange
DROP TABLE IF EXISTS `exchange`;
CREATE TABLE IF NOT EXISTS `exchange` (
  `id` int(11) NOT NULL,
  `exchange_name` varchar(100) DEFAULT NULL,
  `trading_pairs` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.exchange: ~0 rows (aproximadamente)
DELETE FROM `exchange`;
/*!40000 ALTER TABLE `exchange` DISABLE KEYS */;
/*!40000 ALTER TABLE `exchange` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.exchanges
DROP TABLE IF EXISTS `exchanges`;
CREATE TABLE IF NOT EXISTS `exchanges` (
  `id` int(11) NOT NULL,
  `uid` varchar(128) DEFAULT NULL,
  `wid` int(11) DEFAULT NULL,
  `gateway_send` int(11) DEFAULT NULL,
  `gateway_receive` int(11) DEFAULT NULL,
  `amount_send` varchar(255) DEFAULT NULL,
  `amount_receive` varchar(255) DEFAULT NULL,
  `rate_from` varchar(255) DEFAULT NULL,
  `rate_to` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created` int(11) NOT NULL DEFAULT 0,
  `updated` int(11) NOT NULL DEFAULT 0,
  `expired` int(11) NOT NULL DEFAULT 0,
  `u_field_1` varchar(255) DEFAULT NULL,
  `u_field_2` varchar(255) DEFAULT NULL,
  `u_field_3` varchar(255) DEFAULT NULL,
  `u_field_4` varchar(255) DEFAULT NULL,
  `u_field_5` varchar(255) DEFAULT NULL,
  `u_field_6` varchar(255) DEFAULT NULL,
  `u_field_7` varchar(255) DEFAULT NULL,
  `u_field_8` varchar(255) DEFAULT NULL,
  `u_field_9` varchar(255) DEFAULT NULL,
  `u_field_10` varchar(255) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `transaction_id` text DEFAULT NULL,
  `exchange_id` varchar(255) DEFAULT NULL,
  `referral_id` varchar(255) NOT NULL DEFAULT '0',
  `referral_amount` varchar(255) DEFAULT NULL,
  `referral_currency` varchar(255) DEFAULT NULL,
  `referral_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.exchanges: ~0 rows (aproximadamente)
DELETE FROM `exchanges`;
/*!40000 ALTER TABLE `exchanges` DISABLE KEYS */;
/*!40000 ALTER TABLE `exchanges` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.faq
DROP TABLE IF EXISTS `faq`;
CREATE TABLE IF NOT EXISTS `faq` (
  `id` int(11) NOT NULL,
  `question` varchar(255) DEFAULT NULL,
  `answer` text DEFAULT NULL,
  `created` timestamp NULL DEFAULT current_timestamp(),
  `updated` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.faq: ~0 rows (aproximadamente)
DELETE FROM `faq`;
/*!40000 ALTER TABLE `faq` DISABLE KEYS */;
/*!40000 ALTER TABLE `faq` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.finance
DROP TABLE IF EXISTS `finance`;
CREATE TABLE IF NOT EXISTS `finance` (
  `id` int(11) NOT NULL,
  `user_id` char(128) NOT NULL DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.finance: ~0 rows (aproximadamente)
DELETE FROM `finance`;
/*!40000 ALTER TABLE `finance` DISABLE KEYS */;
/*!40000 ALTER TABLE `finance` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.financial_institution
DROP TABLE IF EXISTS `financial_institution`;
CREATE TABLE IF NOT EXISTS `financial_institution` (
  `id` int(11) NOT NULL,
  `financial_institution` varchar(50) DEFAULT NULL,
  `link` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.financial_institution: ~0 rows (aproximadamente)
DELETE FROM `financial_institution`;
/*!40000 ALTER TABLE `financial_institution` DISABLE KEYS */;
/*!40000 ALTER TABLE `financial_institution` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.follow
DROP TABLE IF EXISTS `follow`;
CREATE TABLE IF NOT EXISTS `follow` (
  `follow_id` int(11) NOT NULL,
  `sender` int(11) NOT NULL,
  `receiver` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.follow: ~0 rows (aproximadamente)
DELETE FROM `follow`;
/*!40000 ALTER TABLE `follow` DISABLE KEYS */;
/*!40000 ALTER TABLE `follow` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.forgot_pass
DROP TABLE IF EXISTS `forgot_pass`;
CREATE TABLE IF NOT EXISTS `forgot_pass` (
  `idFgp` int(11) NOT NULL,
  `username` varchar(128) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(128) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `password_key` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `create` timestamp NULL DEFAULT current_timestamp(),
  `expire` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.forgot_pass: ~0 rows (aproximadamente)
DELETE FROM `forgot_pass`;
/*!40000 ALTER TABLE `forgot_pass` DISABLE KEYS */;
/*!40000 ALTER TABLE `forgot_pass` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.forgot_pin
DROP TABLE IF EXISTS `forgot_pin`;
CREATE TABLE IF NOT EXISTS `forgot_pin` (
  `idFgp` int(11) NOT NULL,
  `username` varchar(128) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(128) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `pin_key` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `create` timestamp NULL DEFAULT current_timestamp(),
  `expire` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.forgot_pin: ~0 rows (aproximadamente)
DELETE FROM `forgot_pin`;
/*!40000 ALTER TABLE `forgot_pin` DISABLE KEYS */;
/*!40000 ALTER TABLE `forgot_pin` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.gateways
DROP TABLE IF EXISTS `gateways`;
CREATE TABLE IF NOT EXISTS `gateways` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `currency` varchar(255) DEFAULT NULL,
  `reserve` varchar(255) DEFAULT NULL,
  `min_amount` varchar(255) DEFAULT NULL,
  `max_amount` varchar(255) DEFAULT NULL,
  `exchange_type` int(11) DEFAULT NULL,
  `include_fee` int(11) DEFAULT NULL,
  `extra_fee` varchar(255) DEFAULT NULL,
  `fee` varchar(255) DEFAULT NULL,
  `allow_send` int(11) DEFAULT NULL,
  `allow_receive` int(11) DEFAULT NULL,
  `default_send` int(11) DEFAULT NULL,
  `default_receive` int(11) DEFAULT NULL,
  `allow_payouts` int(11) DEFAULT NULL,
  `field_1` varchar(255) DEFAULT NULL,
  `field_2` varchar(255) DEFAULT NULL,
  `field_3` varchar(255) DEFAULT NULL,
  `field_4` varchar(255) DEFAULT NULL,
  `field_5` varchar(255) DEFAULT NULL,
  `field_6` varchar(255) DEFAULT NULL,
  `field_7` varchar(255) DEFAULT NULL,
  `field_8` varchar(255) DEFAULT NULL,
  `field_9` varchar(255) DEFAULT NULL,
  `field_10` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `external_gateway` int(11) NOT NULL DEFAULT 0,
  `external_icon` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.gateways: ~0 rows (aproximadamente)
DELETE FROM `gateways`;
/*!40000 ALTER TABLE `gateways` DISABLE KEYS */;
/*!40000 ALTER TABLE `gateways` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.gateways_fields
DROP TABLE IF EXISTS `gateways_fields`;
CREATE TABLE IF NOT EXISTS `gateways_fields` (
  `id` int(11) NOT NULL,
  `gateway_id` int(11) DEFAULT NULL,
  `field_name` varchar(255) DEFAULT NULL,
  `field_number` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.gateways_fields: ~0 rows (aproximadamente)
DELETE FROM `gateways_fields`;
/*!40000 ALTER TABLE `gateways_fields` DISABLE KEYS */;
/*!40000 ALTER TABLE `gateways_fields` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.help
DROP TABLE IF EXISTS `help`;
CREATE TABLE IF NOT EXISTS `help` (
  `Help_ID` int(11) NOT NULL,
  `Language` char(2) NOT NULL,
  `Topic` varchar(255) NOT NULL,
  `Description` longtext NOT NULL,
  `Category` int(11) NOT NULL,
  `Order` int(11) NOT NULL,
  `Display_in_Page` varchar(100) NOT NULL,
  `Updated_By` varchar(20) DEFAULT NULL,
  `Last_Updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.help: ~0 rows (aproximadamente)
DELETE FROM `help`;
/*!40000 ALTER TABLE `help` DISABLE KEYS */;
/*!40000 ALTER TABLE `help` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.help_categories
DROP TABLE IF EXISTS `help_categories`;
CREATE TABLE IF NOT EXISTS `help_categories` (
  `Category_ID` int(11) NOT NULL,
  `Language` char(2) NOT NULL,
  `Category_Description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.help_categories: ~0 rows (aproximadamente)
DELETE FROM `help_categories`;
/*!40000 ALTER TABLE `help_categories` DISABLE KEYS */;
/*!40000 ALTER TABLE `help_categories` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.history
DROP TABLE IF EXISTS `history`;
CREATE TABLE IF NOT EXISTS `history` (
  `id` int(11) NOT NULL,
  `user_id` char(128) NOT NULL DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.history: ~0 rows (aproximadamente)
DELETE FROM `history`;
/*!40000 ALTER TABLE `history` DISABLE KEYS */;
/*!40000 ALTER TABLE `history` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.info
DROP TABLE IF EXISTS `info`;
CREATE TABLE IF NOT EXISTS `info` (
  `id` char(128) NOT NULL,
  `username` varchar(128) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `password` varchar(128) DEFAULT NULL,
  `mktoken` varchar(128) DEFAULT NULL,
  `mkkey` varchar(128) DEFAULT NULL,
  `mkhash` varchar(128) DEFAULT NULL,
  `mkpin` char(6) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `banned` tinyint(1) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.info: ~0 rows (aproximadamente)
DELETE FROM `info`;
/*!40000 ALTER TABLE `info` DISABLE KEYS */;
/*!40000 ALTER TABLE `info` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.items
DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) unsigned NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.items: ~0 rows (aproximadamente)
DELETE FROM `items`;
/*!40000 ALTER TABLE `items` DISABLE KEYS */;
/*!40000 ALTER TABLE `items` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.languages
DROP TABLE IF EXISTS `languages`;
CREATE TABLE IF NOT EXISTS `languages` (
  `Language_Code` char(2) NOT NULL,
  `Language_Name` varchar(20) NOT NULL,
  `Default` enum('Y','N') DEFAULT 'N',
  `Site_Logo` varchar(100) NOT NULL,
  `Site_Title` varchar(100) NOT NULL,
  `Default_Thousands_Separator` varchar(5) DEFAULT NULL,
  `Default_Decimal_Point` varchar(5) DEFAULT NULL,
  `Default_Currency_Symbol` varchar(10) DEFAULT NULL,
  `Default_Money_Thousands_Separator` varchar(5) DEFAULT NULL,
  `Default_Money_Decimal_Point` varchar(5) DEFAULT NULL,
  `Terms_And_Condition_Text` text NOT NULL,
  `Announcement_Text` text NOT NULL,
  `About_Text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.languages: ~0 rows (aproximadamente)
DELETE FROM `languages`;
/*!40000 ALTER TABLE `languages` DISABLE KEYS */;
/*!40000 ALTER TABLE `languages` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.last_transaction
DROP TABLE IF EXISTS `last_transaction`;
CREATE TABLE IF NOT EXISTS `last_transaction` (
  `id` int(11) NOT NULL,
  `user_id` char(128) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(50) NOT NULL,
  `send_amount` varchar(50) NOT NULL,
  `received_amount` varchar(50) NOT NULL,
  `bonus_amount` varchar(50) NOT NULL,
  `rate` varchar(50) NOT NULL,
  `total` varchar(50) NOT NULL,
  `fee` varchar(50) NOT NULL,
  `acctions` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.last_transaction: ~0 rows (aproximadamente)
DELETE FROM `last_transaction`;
/*!40000 ALTER TABLE `last_transaction` DISABLE KEYS */;
/*!40000 ALTER TABLE `last_transaction` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.lk_sess
DROP TABLE IF EXISTS `lk_sess`;
CREATE TABLE IF NOT EXISTS `lk_sess` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT 0,
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.lk_sess: ~0 rows (aproximadamente)
DELETE FROM `lk_sess`;
/*!40000 ALTER TABLE `lk_sess` DISABLE KEYS */;
/*!40000 ALTER TABLE `lk_sess` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.loginattempts
DROP TABLE IF EXISTS `loginattempts`;
CREATE TABLE IF NOT EXISTS `loginattempts` (
  `IP` varchar(20) NOT NULL,
  `Attempts` int(11) NOT NULL,
  `LastLogin` datetime NOT NULL,
  `Username` varchar(65) DEFAULT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.loginattempts: ~0 rows (aproximadamente)
DELETE FROM `loginattempts`;
/*!40000 ALTER TABLE `loginattempts` DISABLE KEYS */;
/*!40000 ALTER TABLE `loginattempts` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.login_attempts
DROP TABLE IF EXISTS `login_attempts`;
CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id` int(11) NOT NULL,
  `username` varchar(65) DEFAULT NULL,
  `ip` varchar(20) NOT NULL,
  `attempts` int(11) NOT NULL,
  `lastlogin` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.login_attempts: ~0 rows (aproximadamente)
DELETE FROM `login_attempts`;
/*!40000 ALTER TABLE `login_attempts` DISABLE KEYS */;
/*!40000 ALTER TABLE `login_attempts` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.mail
DROP TABLE IF EXISTS `mail`;
CREATE TABLE IF NOT EXISTS `mail` (
  `mail_id` int(80) NOT NULL,
  `Deleted` tinyint(1) NOT NULL DEFAULT 0,
  `UserTo` tinytext NOT NULL,
  `UserFrom` tinytext NOT NULL,
  `Subject` mediumtext NOT NULL,
  `Message` longtext NOT NULL,
  `status` text NOT NULL,
  `SentDate` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.mail: ~0 rows (aproximadamente)
DELETE FROM `mail`;
/*!40000 ALTER TABLE `mail` DISABLE KEYS */;
/*!40000 ALTER TABLE `mail` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.mail_log
DROP TABLE IF EXISTS `mail_log`;
CREATE TABLE IF NOT EXISTS `mail_log` (
  `id` int(11) NOT NULL,
  `type` varchar(45) NOT NULL DEFAULT 'generic',
  `status` varchar(45) DEFAULT NULL,
  `recipient` varchar(5000) DEFAULT NULL,
  `response` mediumtext NOT NULL,
  `isread` tinyint(1) NOT NULL DEFAULT 0,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.mail_log: ~0 rows (aproximadamente)
DELETE FROM `mail_log`;
/*!40000 ALTER TABLE `mail_log` DISABLE KEYS */;
/*!40000 ALTER TABLE `mail_log` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.members
DROP TABLE IF EXISTS `members`;
CREATE TABLE IF NOT EXISTS `members` (
  `id` char(128) NOT NULL,
  `username` varchar(65) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(65) NOT NULL DEFAULT '',
  `verified` tinyint(1) NOT NULL DEFAULT 0,
  `banned` tinyint(1) NOT NULL DEFAULT 0,
  `mod_timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `admin` tinyint(1) NOT NULL DEFAULT 0,
  `recovery_password` varchar(128) NOT NULL DEFAULT '0',
  `mktoken` varchar(128) NOT NULL DEFAULT '',
  `mkkey` varchar(128) NOT NULL,
  `mkhash` varchar(128) NOT NULL,
  `mkiv` varchar(128) NOT NULL,
  `mkpin` char(6) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.members: ~0 rows (aproximadamente)
DELETE FROM `members`;
/*!40000 ALTER TABLE `members` DISABLE KEYS */;
/*!40000 ALTER TABLE `members` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.member_info
DROP TABLE IF EXISTS `member_info`;
CREATE TABLE IF NOT EXISTS `member_info` (
  `userid` char(128) NOT NULL,
  `firstname` varchar(60) NOT NULL,
  `lastname` varchar(60) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address1` varchar(45) DEFAULT NULL,
  `address2` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `state` varchar(30) DEFAULT NULL,
  `country` varchar(45) DEFAULT NULL,
  `bio` varchar(20000) DEFAULT NULL,
  `userimage` varchar(255) DEFAULT NULL,
  UNIQUE KEY `userid_UNIQUE` (`userid`),
  KEY `fk_userid_idx` (`userid`),
  CONSTRAINT `fk_userid` FOREIGN KEY (`userid`) REFERENCES `members` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.member_info: ~0 rows (aproximadamente)
DELETE FROM `member_info`;
/*!40000 ALTER TABLE `member_info` DISABLE KEYS */;
/*!40000 ALTER TABLE `member_info` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.member_jail
DROP TABLE IF EXISTS `member_jail`;
CREATE TABLE IF NOT EXISTS `member_jail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` char(128) NOT NULL,
  `banned_hours` float NOT NULL DEFAULT 24,
  `reason` varchar(2000) DEFAULT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id_UNIQUE` (`user_id`),
  KEY `fk_userid_idx` (`user_id`),
  CONSTRAINT `fk_userid_jail` FOREIGN KEY (`user_id`) REFERENCES `members` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.member_jail: ~0 rows (aproximadamente)
DELETE FROM `member_jail`;
/*!40000 ALTER TABLE `member_jail` DISABLE KEYS */;
/*!40000 ALTER TABLE `member_jail` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.member_roles
DROP TABLE IF EXISTS `member_roles`;
CREATE TABLE IF NOT EXISTS `member_roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` char(128) NOT NULL,
  `role_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uq_unique_idx` (`member_id`,`role_id`),
  KEY `member_id_idx` (`member_id`),
  KEY `fk_role_id_idx` (`role_id`),
  CONSTRAINT `fk_member_id` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_role_id` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.member_roles: ~0 rows (aproximadamente)
DELETE FROM `member_roles`;
/*!40000 ALTER TABLE `member_roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `member_roles` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.menu
DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `idMenu` int(11) NOT NULL AUTO_INCREMENT,
  `sort` int(11) DEFAULT NULL,
  `page_id` int(11) DEFAULT NULL,
  `title_page` varchar(100) DEFAULT NULL,
  `link_page` varchar(100) DEFAULT NULL,
  `parent_id` int(11) DEFAULT 0,
  PRIMARY KEY (`idMenu`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.menu: ~0 rows (aproximadamente)
DELETE FROM `menu`;
/*!40000 ALTER TABLE `menu` DISABLE KEYS */;
/*!40000 ALTER TABLE `menu` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.page
DROP TABLE IF EXISTS `page`;
CREATE TABLE IF NOT EXISTS `page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `language` int(11) NOT NULL DEFAULT 1,
  `position` int(11) NOT NULL DEFAULT 0,
  `title` varchar(50) DEFAULT 'Title',
  `link` varchar(150) DEFAULT '#',
  `url` varchar(150) DEFAULT '#',
  `keyword` varchar(150) DEFAULT NULL,
  `classification` varchar(150) DEFAULT NULL,
  `description` varchar(160) DEFAULT NULL,
  `image` varchar(150) DEFAULT '#',
  `type` int(11) DEFAULT NULL,
  `menu` int(11) DEFAULT 1,
  `template` varchar(150) DEFAULT NULL,
  `base_template` varchar(150) DEFAULT NULL,
  `content` longtext DEFAULT NULL,
  `style` longtext DEFAULT NULL,
  `starpage` int(11) DEFAULT 0,
  `level` int(11) DEFAULT 1,
  `parent` int(11) DEFAULT 0,
  `sort` int(11) DEFAULT 0,
  `active` int(11) DEFAULT 1,
  `update` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.page: ~0 rows (aproximadamente)
DELETE FROM `page`;
/*!40000 ALTER TABLE `page` DISABLE KEYS */;
/*!40000 ALTER TABLE `page` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.payment_transactions
DROP TABLE IF EXISTS `payment_transactions`;
CREATE TABLE IF NOT EXISTS `payment_transactions` (
  `Payment_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Ref_ID` varchar(20) DEFAULT NULL,
  `Type` enum('sales','purchase') DEFAULT NULL,
  `Customer` varchar(20) DEFAULT NULL,
  `Supplier` varchar(20) DEFAULT NULL,
  `Sub_Total` double NOT NULL DEFAULT 0,
  `Payment` double NOT NULL DEFAULT 0,
  `Balance` double NOT NULL DEFAULT 0,
  `Due_Date` date DEFAULT NULL,
  `Date_Transaction` date DEFAULT NULL,
  `Date_Added` datetime DEFAULT NULL,
  `Added_By` varchar(50) DEFAULT NULL,
  `Date_Updated` datetime DEFAULT NULL,
  `Updated_By` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Payment_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.payment_transactions: ~0 rows (aproximadamente)
DELETE FROM `payment_transactions`;
/*!40000 ALTER TABLE `payment_transactions` DISABLE KEYS */;
/*!40000 ALTER TABLE `payment_transactions` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.permissions
DROP TABLE IF EXISTS `permissions`;
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `category` varchar(50) NOT NULL DEFAULT 'General',
  `required` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.permissions: ~15 rows (aproximadamente)
DELETE FROM `permissions`;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` (`id`, `name`, `description`, `category`, `required`) VALUES
	(1, 'Verify Users', 'Administration permission allowing for the verification of new users', 'Users', 1),
	(2, 'Delete Unverified Users', 'Administration permission allowing the deletion of unverified users', 'Users', 1),
	(3, 'Ban Users', 'Moderation permission allowing the banning of users', 'Users', 1),
	(4, 'Assign Roles to Users', 'Administration permission allowing the assignment of roles to users', 'Users', 1),
	(5, 'Assign Users to Roles', 'Administration permission allowing the assignment of users to roles', 'Roles', 1),
	(6, 'Create Roles', 'Administration permission allowing for the creation of new roles', 'Roles', 1),
	(7, 'Delete Roles', 'Administration permission allowing for the deletion of roles', 'Roles', 1),
	(8, 'Create Permissions', 'Administration permission allowing for the creation of new permissions', 'Permissions', 1),
	(9, 'Delete Permissions', 'Administration permission allowing for the deletion of permissions', 'Permissions', 1),
	(10, 'Assign Permissions to Roles', 'Administration permission allowing the assignment of permissions to roles', 'Roles', 1),
	(11, 'Edit Site Config', 'Administration permission allowing the editing of core site configuration (dangerous)', 'Administration', 1),
	(12, 'View Permissions', 'Administration permission allowing the viewing of all permissions', 'Permissions', 1),
	(13, 'View Roles', 'Administration permission allowing for the viewing of all roles', 'Roles', 1),
	(14, 'View Users', 'Administration permission allowing for the viewing of all users', 'Users', 1),
	(15, 'Delete Users', 'Administration permission allowing for the deletion of users', 'Users', 1);
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.profiles
DROP TABLE IF EXISTS `profiles`;
CREATE TABLE IF NOT EXISTS `profiles` (
  `idp` char(128) NOT NULL,
  `mkhash` char(128) NOT NULL,
  `firstname` varchar(128) DEFAULT NULL,
  `lastname` varchar(128) DEFAULT NULL,
  `gender` enum('Woman','Male','With doubt') DEFAULT NULL,
  `age` tinyint(3) DEFAULT NULL,
  `avatar` varchar(250) DEFAULT NULL,
  `birthday` date NOT NULL,
  `phone` varchar(128) DEFAULT NULL,
  `website` varchar(128) DEFAULT NULL,
  `social_media` varchar(350) DEFAULT NULL,
  `profession` varchar(128) DEFAULT NULL,
  `occupation` varchar(128) DEFAULT NULL,
  `public_email` varchar(128) DEFAULT NULL,
  `address` varchar(128) DEFAULT NULL,
  `followers_count` int(11) DEFAULT NULL,
  `profile_image` varchar(128) DEFAULT NULL,
  `profile_cover` varchar(128) DEFAULT NULL,
  `profile_bio` text DEFAULT NULL,
  `language` varchar(128) DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `banned` tinyint(1) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`idp`) USING BTREE,
  UNIQUE KEY `id` (`idp`) USING BTREE,
  UNIQUE KEY `phone` (`phone`),
  CONSTRAINT `fk_users_ids` FOREIGN KEY (`idp`) REFERENCES `uverify` (`iduv`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.profiles: ~0 rows (aproximadamente)
DELETE FROM `profiles`;
/*!40000 ALTER TABLE `profiles` DISABLE KEYS */;
/*!40000 ALTER TABLE `profiles` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.purchases
DROP TABLE IF EXISTS `purchases`;
CREATE TABLE IF NOT EXISTS `purchases` (
  `Purchase_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Purchase_Number` varchar(20) NOT NULL,
  `Purchase_Date` datetime NOT NULL,
  `Supplier_ID` varchar(20) NOT NULL,
  `Notes` varchar(50) DEFAULT NULL,
  `Total_Amount` double(20,0) DEFAULT 0,
  `Total_Payment` double(20,0) DEFAULT 0,
  `Total_Balance` double(20,0) DEFAULT 0,
  `Date_Added` datetime DEFAULT NULL,
  `Added_By` varchar(50) DEFAULT NULL,
  `Date_Updated` datetime DEFAULT NULL,
  `Updated_By` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Purchase_ID`),
  KEY `TSupplierTBeli` (`Supplier_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.purchases: ~0 rows (aproximadamente)
DELETE FROM `purchases`;
/*!40000 ALTER TABLE `purchases` DISABLE KEYS */;
/*!40000 ALTER TABLE `purchases` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.purchases_detail
DROP TABLE IF EXISTS `purchases_detail`;
CREATE TABLE IF NOT EXISTS `purchases_detail` (
  `Purchase_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Purchase_Number` varchar(20) NOT NULL,
  `Supplier_Number` varchar(20) NOT NULL,
  `Stock_Item` varchar(15) NOT NULL,
  `Purchasing_Quantity` double(20,0) NOT NULL DEFAULT 0,
  `Purchasing_Price` double(20,0) NOT NULL DEFAULT 0,
  `Selling_Price` double(20,0) NOT NULL DEFAULT 0,
  `Purchasing_Total_Amount` double(20,0) NOT NULL DEFAULT 0,
  PRIMARY KEY (`Purchase_ID`),
  KEY `TBarangTDBeli` (`Stock_Item`),
  KEY `TBeliTDBeli` (`Purchase_Number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.purchases_detail: ~0 rows (aproximadamente)
DELETE FROM `purchases_detail`;
/*!40000 ALTER TABLE `purchases_detail` DISABLE KEYS */;
/*!40000 ALTER TABLE `purchases_detail` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.roles
DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `required` tinyint(1) NOT NULL DEFAULT 0,
  `default_role` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`),
  UNIQUE KEY `default_role_UNIQUE` (`default_role`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.roles: ~3 rows (aproximadamente)
DELETE FROM `roles`;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` (`id`, `name`, `description`, `required`, `default_role`) VALUES
	(1, 'Superadmin', 'Master administrator of site', 1, NULL),
	(2, 'Admin', 'Site administrator', 1, NULL),
	(3, 'Standard User', 'Default site role for standard users', 1, 1);
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.role_permissions
DROP TABLE IF EXISTS `role_permissions`;
CREATE TABLE IF NOT EXISTS `role_permissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Role_Id_idx` (`role_id`),
  KEY `fk_Permission_Id_idx` (`permission_id`),
  CONSTRAINT `fk_Permission_Id` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_Role_Id_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.role_permissions: ~24 rows (aproximadamente)
DELETE FROM `role_permissions`;
/*!40000 ALTER TABLE `role_permissions` DISABLE KEYS */;
INSERT INTO `role_permissions` (`id`, `role_id`, `permission_id`) VALUES
	(1, 1, 1),
	(2, 1, 2),
	(3, 1, 3),
	(4, 1, 4),
	(5, 1, 5),
	(6, 1, 6),
	(7, 1, 7),
	(8, 1, 8),
	(9, 1, 9),
	(10, 1, 10),
	(11, 1, 11),
	(12, 1, 12),
	(13, 1, 13),
	(14, 1, 14),
	(15, 1, 15),
	(16, 2, 1),
	(17, 2, 2),
	(18, 2, 3),
	(19, 2, 4),
	(20, 2, 5),
	(21, 2, 12),
	(22, 2, 13),
	(23, 2, 14),
	(24, 2, 15);
/*!40000 ALTER TABLE `role_permissions` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.sales
DROP TABLE IF EXISTS `sales`;
CREATE TABLE IF NOT EXISTS `sales` (
  `Sales_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Sales_Number` varchar(20) NOT NULL,
  `Sales_Date` datetime NOT NULL,
  `Customer_ID` varchar(20) NOT NULL,
  `Notes` varchar(50) DEFAULT NULL,
  `Total_Amount` double DEFAULT 0,
  `Total_Payment` double DEFAULT 0,
  `Total_Balance` double DEFAULT 0,
  `Discount_Type` char(1) DEFAULT NULL,
  `Discount_Percentage` double DEFAULT 0,
  `Discount_Amount` double DEFAULT 0,
  `Tax_Percentage` double DEFAULT 0,
  `Tax_Amount` double DEFAULT 0,
  `Tax_Description` varchar(50) DEFAULT NULL,
  `Final_Total_Amount` double DEFAULT 0,
  `Date_Added` datetime DEFAULT NULL,
  `Added_By` varchar(50) DEFAULT NULL,
  `Date_Updated` datetime DEFAULT NULL,
  `Updated_By` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Sales_ID`),
  UNIQUE KEY `NoFaktur` (`Sales_Number`),
  KEY `TCustomerTJual` (`Customer_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.sales: ~0 rows (aproximadamente)
DELETE FROM `sales`;
/*!40000 ALTER TABLE `sales` DISABLE KEYS */;
/*!40000 ALTER TABLE `sales` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.sales_detail
DROP TABLE IF EXISTS `sales_detail`;
CREATE TABLE IF NOT EXISTS `sales_detail` (
  `Sales_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Sales_Number` varchar(20) NOT NULL,
  `Supplier_Number` varchar(20) NOT NULL,
  `Stock_Item` varchar(15) NOT NULL,
  `Sales_Quantity` double NOT NULL DEFAULT 0,
  `Purchasing_Price` double NOT NULL DEFAULT 0,
  `Sales_Price` double NOT NULL DEFAULT 0,
  `Sales_Total_Amount` double NOT NULL DEFAULT 0,
  PRIMARY KEY (`Sales_ID`),
  KEY `TBarangTDJual` (`Stock_Item`),
  KEY `TJualTDJual` (`Sales_Number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.sales_detail: ~0 rows (aproximadamente)
DELETE FROM `sales_detail`;
/*!40000 ALTER TABLE `sales_detail` DISABLE KEYS */;
/*!40000 ALTER TABLE `sales_detail` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.secrets
DROP TABLE IF EXISTS `secrets`;
CREATE TABLE IF NOT EXISTS `secrets` (
  `secretid` char(128) NOT NULL DEFAULT '',
  `userid` char(128) NOT NULL,
  `tokenusr` varchar(256) DEFAULT NULL,
  `hashusr` varchar(256) DEFAULT NULL,
  `keyusr` varchar(256) DEFAULT NULL,
  `ivusr` varchar(256) DEFAULT NULL,
  `codeusr` char(8) DEFAULT NULL,
  PRIMARY KEY (`secretid`),
  UNIQUE KEY `secretid` (`secretid`),
  UNIQUE KEY `userid` (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.secrets: ~0 rows (aproximadamente)
DELETE FROM `secrets`;
/*!40000 ALTER TABLE `secrets` DISABLE KEYS */;
/*!40000 ALTER TABLE `secrets` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.sessions
DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(128) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `set_time` int(11) NOT NULL,
  `data` varchar(128) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `session_key` varchar(128) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.sessions: ~0 rows (aproximadamente)
DELETE FROM `sessions`;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.settings
DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `Option_ID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `Option_Default` enum('Y','N') DEFAULT 'N',
  `Default_Theme` varchar(30) DEFAULT NULL,
  `Menu_Horizontal` enum('Y','N') DEFAULT 'Y',
  `Vertical_Menu_Width` int(3) DEFAULT 150,
  `Show_Border_Layout` enum('N','Y') DEFAULT 'Y',
  `Show_Shadow_Layout` enum('N','Y') DEFAULT 'Y',
  `Show_Announcement` enum('Y','N') DEFAULT 'N',
  `Demo_Mode` enum('N','Y') DEFAULT 'N',
  `Show_Page_Processing_Time` enum('Y','N') DEFAULT 'N',
  `Allow_User_Preferences` enum('N','Y') DEFAULT 'Y',
  `SMTP_Server` varchar(50) DEFAULT NULL,
  `SMTP_Server_Port` varchar(5) DEFAULT NULL,
  `SMTP_Server_Username` varchar(50) DEFAULT NULL,
  `SMTP_Server_Password` varchar(50) DEFAULT NULL,
  `Sender_Email` varchar(50) DEFAULT NULL,
  `Recipient_Email` varchar(50) DEFAULT NULL,
  `Use_Default_Locale` enum('Y','N') DEFAULT 'Y',
  `Default_Language` varchar(5) DEFAULT NULL,
  `Default_Timezone` varchar(50) DEFAULT NULL,
  `Default_Thousands_Separator` varchar(5) DEFAULT NULL,
  `Default_Decimal_Point` varchar(5) DEFAULT NULL,
  `Default_Currency_Symbol` varchar(10) DEFAULT NULL,
  `Default_Money_Thousands_Separator` varchar(5) DEFAULT NULL,
  `Default_Money_Decimal_Point` varchar(5) DEFAULT NULL,
  `Maintenance_Mode` enum('N','Y') DEFAULT 'N',
  `Maintenance_Finish_DateTime` datetime DEFAULT NULL,
  `Auto_Normal_After_Maintenance` enum('Y','N') DEFAULT 'Y',
  `Allow_User_To_Register` enum('Y','N') DEFAULT 'Y',
  `Suspend_New_User_Account` enum('N','Y') DEFAULT 'N',
  `User_Need_Activation_After_Registered` enum('Y','N') DEFAULT 'Y',
  `Show_Captcha_On_Registration_Page` enum('Y','N') DEFAULT 'N',
  `Show_Terms_And_Conditions_On_Registration_Page` enum('Y','N') DEFAULT 'Y',
  `Show_Captcha_On_Login_Page` enum('N','Y') DEFAULT 'N',
  `Show_Captcha_On_Forgot_Password_Page` enum('N','Y') DEFAULT 'N',
  `Show_Captcha_On_Change_Password_Page` enum('N','Y') DEFAULT 'N',
  `User_Auto_Login_After_Activation_Or_Registration` enum('Y','N') DEFAULT 'Y',
  `User_Auto_Logout_After_Idle_In_Minutes` int(3) DEFAULT 20,
  `User_Login_Maximum_Retry` int(3) DEFAULT 3,
  `User_Login_Retry_Lockout` int(3) DEFAULT 5,
  `Redirect_To_Last_Visited_Page_After_Login` enum('Y','N') DEFAULT 'Y',
  `Enable_Password_Expiry` enum('Y','N') DEFAULT 'Y',
  `Password_Expiry_In_Days` int(3) DEFAULT 90,
  `Show_Entire_Header` enum('Y','N') DEFAULT 'Y',
  `Logo_Width` int(3) DEFAULT 170,
  `Show_Site_Title_In_Header` enum('Y','N') DEFAULT 'Y',
  `Show_Current_User_In_Header` enum('Y','N') DEFAULT 'Y',
  `Text_Align_In_Header` enum('left','center','right') DEFAULT 'left',
  `Site_Title_Text_Style` enum('normal','capitalize','uppercase') DEFAULT 'normal',
  `Language_Selector_Visibility` enum('inheader','belowheader','hidethemall') DEFAULT 'inheader',
  `Language_Selector_Align` enum('autoadjust','left','center','right') DEFAULT 'autoadjust',
  `Show_Entire_Footer` enum('Y','N') DEFAULT 'Y',
  `Show_Text_In_Footer` enum('Y','N') DEFAULT 'Y',
  `Show_Back_To_Top_On_Footer` enum('N','Y') DEFAULT 'Y',
  `Show_Terms_And_Conditions_On_Footer` enum('Y','N') DEFAULT 'Y',
  `Show_About_Us_On_Footer` enum('N','Y') DEFAULT 'Y',
  `Pagination_Position` enum('1','2','3') DEFAULT '3',
  `Pagination_Style` enum('1','2') DEFAULT '2',
  `Selectable_Records_Per_Page` varchar(50) DEFAULT '1,2,3,5,10,15,20,50',
  `Selectable_Groups_Per_Page` varchar(50) DEFAULT '1,2,3,5,10',
  `Default_Record_Per_Page` int(3) DEFAULT 10,
  `Default_Group_Per_Page` int(3) DEFAULT 3,
  `Maximum_Selected_Records` int(3) DEFAULT 50,
  `Maximum_Selected_Groups` int(3) DEFAULT 50,
  `Show_PageNum_If_Record_Not_Over_Pagesize` enum('Y','N') DEFAULT 'Y',
  `Table_Width_Style` enum('1','2','3') DEFAULT '2' COMMENT '1 = Scroll, 2 = Normal, 3 = 100%',
  `Scroll_Table_Width` int(4) DEFAULT 800,
  `Scroll_Table_Height` int(4) DEFAULT 300,
  `Show_Record_Number_On_List_Page` enum('N','Y') DEFAULT 'Y',
  `Show_Empty_Table_On_List_Page` enum('N','Y') DEFAULT 'Y',
  `Search_Panel_Collapsed` enum('Y','N') DEFAULT 'Y',
  `Filter_Panel_Collapsed` enum('Y','N') DEFAULT 'Y',
  `Rows_Vertical_Align_Top` enum('N','Y') DEFAULT 'Y',
  `Show_Add_Success_Message` enum('N','Y') DEFAULT 'Y',
  `Show_Edit_Success_Message` enum('N','Y') DEFAULT 'Y',
  `jQuery_Auto_Hide_Success_Message` enum('N','Y') DEFAULT 'N',
  `Show_Record_Number_On_Detail_Preview` enum('N','Y') DEFAULT 'Y',
  `Show_Empty_Table_In_Detail_Preview` enum('N','Y') DEFAULT 'Y',
  `Detail_Preview_Table_Width` int(3) DEFAULT 100,
  `Password_Minimum_Length` int(2) DEFAULT 6,
  `Password_Maximum_Length` int(2) DEFAULT 20,
  `Password_Must_Comply_With_Minumum_Length` enum('N','Y') DEFAULT 'Y',
  `Password_Must_Comply_With_Maximum_Length` enum('N','Y') DEFAULT 'Y',
  `Password_Must_Contain_At_Least_One_Lower_Case` enum('N','Y') DEFAULT 'Y',
  `Password_Must_Contain_At_Least_One_Upper_Case` enum('N','Y') DEFAULT 'Y',
  `Password_Must_Contain_At_Least_One_Numeric` enum('N','Y') DEFAULT 'Y',
  `Password_Must_Contain_At_Least_One_Symbol` enum('N','Y') DEFAULT 'Y',
  `Password_Must_Be_Difference_Between_Old_And_New` enum('N','Y') DEFAULT 'Y',
  `Export_Record_Options` enum('selectedrecords','currentpage','allpages') DEFAULT 'selectedrecords',
  `Show_Record_Number_On_Exported_List_Page` enum('N','Y') DEFAULT 'Y',
  `Use_Table_Setting_For_Export_Field_Caption` enum('N','Y') DEFAULT 'Y',
  `Use_Table_Setting_For_Export_Original_Value` enum('N','Y') DEFAULT 'Y',
  `Font_Name` varchar(50) DEFAULT 'tahoma',
  `Font_Size` varchar(4) DEFAULT '11px',
  `Use_Javascript_Message` enum('1','0') DEFAULT '1',
  `Login_Window_Type` enum('popup','default') DEFAULT 'popup',
  `Forgot_Password_Window_Type` enum('popup','default') DEFAULT 'popup',
  `Change_Password_Window_Type` enum('popup','default') DEFAULT 'popup',
  `Registration_Window_Type` enum('popup','default') DEFAULT 'popup',
  `Reset_Password_Field_Options` enum('EmailOrUsername','Username','Email') DEFAULT 'EmailOrUsername',
  `Action_Button_Alignment` enum('Right','Left') DEFAULT 'Right',
  PRIMARY KEY (`Option_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.settings: ~0 rows (aproximadamente)
DELETE FROM `settings`;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.sl_permissions
DROP TABLE IF EXISTS `sl_permissions`;
CREATE TABLE IF NOT EXISTS `sl_permissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `category` varchar(50) NOT NULL DEFAULT 'General',
  `required` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.sl_permissions: ~15 rows (aproximadamente)
DELETE FROM `sl_permissions`;
/*!40000 ALTER TABLE `sl_permissions` DISABLE KEYS */;
INSERT INTO `sl_permissions` (`id`, `name`, `description`, `category`, `required`) VALUES
	(1, 'Verify Users', 'Administration permission allowing for the verification of new users', 'Users', 1),
	(2, 'Delete Unverified Users', 'Administration permission allowing the deletion of unverified users', 'Users', 1),
	(3, 'Ban Users', 'Moderation permission allowing the banning of users', 'Users', 1),
	(4, 'Assign Roles to Users', 'Administration permission allowing the assignment of roles to users', 'Users', 1),
	(5, 'Assign Users to Roles', 'Administration permission allowing the assignment of users to roles', 'Roles', 1),
	(6, 'Create Roles', 'Administration permission allowing for the creation of new roles', 'Roles', 1),
	(7, 'Delete Roles', 'Administration permission allowing for the deletion of roles', 'Roles', 1),
	(8, 'Create Permissions', 'Administration permission allowing for the creation of new permissions', 'Permissions', 1),
	(9, 'Delete Permissions', 'Administration permission allowing for the deletion of permissions', 'Permissions', 1),
	(10, 'Assign Permissions to Roles', 'Administration permission allowing the assignment of permissions to roles', 'Roles', 1),
	(11, 'Edit Site Config', 'Administration permission allowing the editing of core site configuration (dangerous)', 'Administration', 1),
	(12, 'View Permissions', 'Administration permission allowing the viewing of all permissions', 'Permissions', 1),
	(13, 'View Roles', 'Administration permission allowing for the viewing of all roles', 'Roles', 1),
	(14, 'View Users', 'Administration permission allowing for the viewing of all users', 'Users', 1),
	(15, 'Delete Users', 'Administration permission allowing for the deletion of users', 'Users', 1);
/*!40000 ALTER TABLE `sl_permissions` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.sl_roles
DROP TABLE IF EXISTS `sl_roles`;
CREATE TABLE IF NOT EXISTS `sl_roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `required` tinyint(1) NOT NULL DEFAULT 0,
  `default_role` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`),
  UNIQUE KEY `default_role_UNIQUE` (`default_role`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.sl_roles: ~3 rows (aproximadamente)
DELETE FROM `sl_roles`;
/*!40000 ALTER TABLE `sl_roles` DISABLE KEYS */;
INSERT INTO `sl_roles` (`id`, `name`, `description`, `required`, `default_role`) VALUES
	(1, 'Superadmin', 'Master administrator of site', 1, NULL),
	(2, 'Admin', 'Site administrator', 1, NULL),
	(3, 'Standard User', 'Default site role for standard users', 1, 1);
/*!40000 ALTER TABLE `sl_roles` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.social_link
DROP TABLE IF EXISTS `social_link`;
CREATE TABLE IF NOT EXISTS `social_link` (
  `social_name` varchar(20) DEFAULT NULL,
  `social_url` varchar(150) DEFAULT NULL,
  KEY `social_name` (`social_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.social_link: ~0 rows (aproximadamente)
DELETE FROM `social_link`;
/*!40000 ALTER TABLE `social_link` DISABLE KEYS */;
/*!40000 ALTER TABLE `social_link` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.stats_counter
DROP TABLE IF EXISTS `stats_counter`;
CREATE TABLE IF NOT EXISTS `stats_counter` (
  `Type` varchar(50) NOT NULL DEFAULT '',
  `Variable` varchar(50) NOT NULL DEFAULT '',
  `Counter` int(10) unsigned NOT NULL DEFAULT 0,
  PRIMARY KEY (`Type`,`Variable`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.stats_counter: ~0 rows (aproximadamente)
DELETE FROM `stats_counter`;
/*!40000 ALTER TABLE `stats_counter` DISABLE KEYS */;
/*!40000 ALTER TABLE `stats_counter` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.stats_counterlog
DROP TABLE IF EXISTS `stats_counterlog`;
CREATE TABLE IF NOT EXISTS `stats_counterlog` (
  `IP_Address` varchar(50) NOT NULL DEFAULT '',
  `Hostname` varchar(50) DEFAULT NULL,
  `First_Visit` datetime NOT NULL,
  `Last_Visit` datetime NOT NULL,
  `Counter` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`IP_Address`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.stats_counterlog: ~0 rows (aproximadamente)
DELETE FROM `stats_counterlog`;
/*!40000 ALTER TABLE `stats_counterlog` DISABLE KEYS */;
/*!40000 ALTER TABLE `stats_counterlog` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.stats_date
DROP TABLE IF EXISTS `stats_date`;
CREATE TABLE IF NOT EXISTS `stats_date` (
  `Year` smallint(6) NOT NULL DEFAULT 0,
  `Month` tinyint(4) NOT NULL DEFAULT 0,
  `Date` tinyint(4) NOT NULL DEFAULT 0,
  `Hits` bigint(20) NOT NULL DEFAULT 0,
  PRIMARY KEY (`Date`,`Month`,`Year`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.stats_date: ~0 rows (aproximadamente)
DELETE FROM `stats_date`;
/*!40000 ALTER TABLE `stats_date` DISABLE KEYS */;
/*!40000 ALTER TABLE `stats_date` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.stats_hour
DROP TABLE IF EXISTS `stats_hour`;
CREATE TABLE IF NOT EXISTS `stats_hour` (
  `Year` smallint(6) NOT NULL DEFAULT 0,
  `Month` tinyint(4) NOT NULL DEFAULT 0,
  `Date` tinyint(4) NOT NULL DEFAULT 0,
  `Hour` tinyint(4) NOT NULL DEFAULT 0,
  `Hits` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`Date`,`Hour`,`Month`,`Year`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.stats_hour: ~0 rows (aproximadamente)
DELETE FROM `stats_hour`;
/*!40000 ALTER TABLE `stats_hour` DISABLE KEYS */;
/*!40000 ALTER TABLE `stats_hour` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.stats_month
DROP TABLE IF EXISTS `stats_month`;
CREATE TABLE IF NOT EXISTS `stats_month` (
  `Year` smallint(6) NOT NULL DEFAULT 0,
  `Month` tinyint(4) NOT NULL DEFAULT 0,
  `Hits` bigint(20) NOT NULL DEFAULT 0,
  PRIMARY KEY (`Year`,`Month`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.stats_month: ~0 rows (aproximadamente)
DELETE FROM `stats_month`;
/*!40000 ALTER TABLE `stats_month` DISABLE KEYS */;
/*!40000 ALTER TABLE `stats_month` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.stats_year
DROP TABLE IF EXISTS `stats_year`;
CREATE TABLE IF NOT EXISTS `stats_year` (
  `Year` smallint(6) NOT NULL DEFAULT 0,
  `Hits` bigint(20) NOT NULL DEFAULT 0,
  PRIMARY KEY (`Year`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.stats_year: ~0 rows (aproximadamente)
DELETE FROM `stats_year`;
/*!40000 ALTER TABLE `stats_year` DISABLE KEYS */;
/*!40000 ALTER TABLE `stats_year` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.stock_categories
DROP TABLE IF EXISTS `stock_categories`;
CREATE TABLE IF NOT EXISTS `stock_categories` (
  `Category_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Category_Name` varchar(20) NOT NULL,
  PRIMARY KEY (`Category_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.stock_categories: ~0 rows (aproximadamente)
DELETE FROM `stock_categories`;
/*!40000 ALTER TABLE `stock_categories` DISABLE KEYS */;
/*!40000 ALTER TABLE `stock_categories` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.stock_items
DROP TABLE IF EXISTS `stock_items`;
CREATE TABLE IF NOT EXISTS `stock_items` (
  `Stock_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Supplier_Number` varchar(20) NOT NULL,
  `Stock_Number` varchar(15) NOT NULL,
  `Stock_Name` varchar(50) NOT NULL,
  `Unit_Of_Measurement` varchar(20) NOT NULL,
  `Category` int(11) NOT NULL,
  `Purchasing_Price` double(20,0) NOT NULL DEFAULT 0,
  `Selling_Price` double(20,0) NOT NULL DEFAULT 0,
  `Notes` varchar(50) NOT NULL,
  `Quantity` double(20,0) NOT NULL DEFAULT 0,
  `Date_Added` datetime DEFAULT NULL,
  `Added_By` varchar(50) DEFAULT NULL,
  `Date_Updated` datetime DEFAULT NULL,
  `Updated_By` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Stock_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.stock_items: ~0 rows (aproximadamente)
DELETE FROM `stock_items`;
/*!40000 ALTER TABLE `stock_items` DISABLE KEYS */;
/*!40000 ALTER TABLE `stock_items` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.suppliers
DROP TABLE IF EXISTS `suppliers`;
CREATE TABLE IF NOT EXISTS `suppliers` (
  `Supplier_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Supplier_Number` varchar(20) NOT NULL,
  `Supplier_Name` varchar(50) NOT NULL,
  `Address` text NOT NULL,
  `City` varchar(20) NOT NULL,
  `Country` varchar(50) NOT NULL,
  `Contact_Person` varchar(50) NOT NULL,
  `Phone_Number` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Mobile_Number` varchar(50) NOT NULL,
  `Notes` text NOT NULL,
  `Balance` double DEFAULT 0,
  `Is_Stock_Available` enum('N','Y') NOT NULL DEFAULT 'N',
  `Date_Added` datetime DEFAULT NULL,
  `Added_By` varchar(50) DEFAULT NULL,
  `Date_Updated` datetime DEFAULT NULL,
  `Updated_By` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Supplier_ID`),
  UNIQUE KEY `KodeCust` (`Supplier_Number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.suppliers: ~0 rows (aproximadamente)
DELETE FROM `suppliers`;
/*!40000 ALTER TABLE `suppliers` DISABLE KEYS */;
/*!40000 ALTER TABLE `suppliers` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.table_config
DROP TABLE IF EXISTS `table_config`;
CREATE TABLE IF NOT EXISTS `table_config` (
  `tcon_Id` int(11) NOT NULL AUTO_INCREMENT,
  `table_name` text DEFAULT NULL,
  PRIMARY KEY (`tcon_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.table_config: ~0 rows (aproximadamente)
DELETE FROM `table_config`;
/*!40000 ALTER TABLE `table_config` DISABLE KEYS */;
/*!40000 ALTER TABLE `table_config` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.table_queries
DROP TABLE IF EXISTS `table_queries`;
CREATE TABLE IF NOT EXISTS `table_queries` (
  `tque_Id` int(11) NOT NULL AUTO_INCREMENT,
  `name_table` varchar(50) DEFAULT NULL,
  `col_name` varchar(50) DEFAULT NULL,
  `col_type` varchar(50) DEFAULT NULL,
  `input_type` int(11) DEFAULT NULL,
  `joins` varchar(50) DEFAULT NULL,
  `j_table` varchar(50) DEFAULT NULL,
  `j_id` varchar(50) DEFAULT NULL,
  `j_value` varchar(50) DEFAULT NULL,
  `j_as` varchar(50) DEFAULT NULL,
  `query` varchar(250) DEFAULT NULL,
  `jvpos` int(11) DEFAULT NULL,
  PRIMARY KEY (`tque_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.table_queries: ~0 rows (aproximadamente)
DELETE FROM `table_queries`;
/*!40000 ALTER TABLE `table_queries` DISABLE KEYS */;
/*!40000 ALTER TABLE `table_queries` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.themes
DROP TABLE IF EXISTS `themes`;
CREATE TABLE IF NOT EXISTS `themes` (
  `Theme_ID` varchar(25) NOT NULL,
  `Theme_Name` varchar(25) NOT NULL,
  `Default` enum('Y','N') NOT NULL DEFAULT 'N',
  PRIMARY KEY (`Theme_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.themes: ~0 rows (aproximadamente)
DELETE FROM `themes`;
/*!40000 ALTER TABLE `themes` DISABLE KEYS */;
/*!40000 ALTER TABLE `themes` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.timezone
DROP TABLE IF EXISTS `timezone`;
CREATE TABLE IF NOT EXISTS `timezone` (
  `Timezone` varchar(50) NOT NULL,
  `Default` enum('Y','N') NOT NULL DEFAULT 'N',
  PRIMARY KEY (`Timezone`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.timezone: ~0 rows (aproximadamente)
DELETE FROM `timezone`;
/*!40000 ALTER TABLE `timezone` DISABLE KEYS */;
/*!40000 ALTER TABLE `timezone` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.tokens
DROP TABLE IF EXISTS `tokens`;
CREATE TABLE IF NOT EXISTS `tokens` (
  `tokenid` char(25) NOT NULL,
  `userid` char(128) NOT NULL,
  `expired` tinyint(1) NOT NULL DEFAULT 0,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`tokenid`),
  UNIQUE KEY `tokenid_UNIQUE` (`tokenid`),
  UNIQUE KEY `userid_UNIQUE` (`userid`),
  CONSTRAINT `userid_t` FOREIGN KEY (`userid`) REFERENCES `members` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.tokens: ~0 rows (aproximadamente)
DELETE FROM `tokens`;
/*!40000 ALTER TABLE `tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `tokens` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.unit_of_measurement
DROP TABLE IF EXISTS `unit_of_measurement`;
CREATE TABLE IF NOT EXISTS `unit_of_measurement` (
  `UOM_ID` varchar(10) NOT NULL,
  `UOM_Description` varchar(20) NOT NULL,
  PRIMARY KEY (`UOM_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.unit_of_measurement: ~0 rows (aproximadamente)
DELETE FROM `unit_of_measurement`;
/*!40000 ALTER TABLE `unit_of_measurement` DISABLE KEYS */;
/*!40000 ALTER TABLE `unit_of_measurement` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.userlevelpermissions
DROP TABLE IF EXISTS `userlevelpermissions`;
CREATE TABLE IF NOT EXISTS `userlevelpermissions` (
  `User_Level_ID` int(11) NOT NULL,
  `Table_Name` varchar(255) NOT NULL,
  `Permission` int(11) NOT NULL,
  PRIMARY KEY (`User_Level_ID`,`Table_Name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.userlevelpermissions: ~0 rows (aproximadamente)
DELETE FROM `userlevelpermissions`;
/*!40000 ALTER TABLE `userlevelpermissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `userlevelpermissions` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.userlevels
DROP TABLE IF EXISTS `userlevels`;
CREATE TABLE IF NOT EXISTS `userlevels` (
  `User_Level_ID` int(11) NOT NULL,
  `User_Level_Name` varchar(255) NOT NULL,
  PRIMARY KEY (`User_Level_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.userlevels: ~0 rows (aproximadamente)
DELETE FROM `userlevels`;
/*!40000 ALTER TABLE `userlevels` DISABLE KEYS */;
/*!40000 ALTER TABLE `userlevels` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `idUser` char(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `ip` char(50) NOT NULL,
  `signup_time` text NOT NULL,
  `email_verified` varchar(128) NOT NULL DEFAULT '',
  `document_verified` int(11) NOT NULL DEFAULT 0,
  `mobile_verified` int(11) NOT NULL DEFAULT 0,
  `mkpin` char(6) DEFAULT NULL,
  `create_user` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_user` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`idUser`),
  UNIQUE KEY `ID_user` (`idUser`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  CONSTRAINT `FK_users_uverify` FOREIGN KEY (`idUser`) REFERENCES `uverify` (`iduv`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.users: ~0 rows (aproximadamente)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.users_mk
DROP TABLE IF EXISTS `users_mk`;
CREATE TABLE IF NOT EXISTS `users_mk` (
  `id` char(128) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `password_recovery` text DEFAULT NULL,
  `email_verified` int(11) DEFAULT NULL,
  `email_hash` text DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `last_login` int(11) DEFAULT NULL,
  `signup_time` int(11) DEFAULT NULL,
  `document_verified` int(11) DEFAULT NULL,
  `document_1` text DEFAULT NULL,
  `document_2` text DEFAULT NULL,
  `mobile_verified` int(11) DEFAULT NULL,
  `mobile_number` text DEFAULT NULL,
  `mktoken` varchar(128) DEFAULT NULL,
  `mkkey` varchar(128) DEFAULT NULL,
  `mkhash` varchar(128) DEFAULT NULL,
  `mkpin` int(6) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `password` (`password`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.users_mk: ~0 rows (aproximadamente)
DELETE FROM `users_mk`;
/*!40000 ALTER TABLE `users_mk` DISABLE KEYS */;
/*!40000 ALTER TABLE `users_mk` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.users_shop
DROP TABLE IF EXISTS `users_shop`;
CREATE TABLE IF NOT EXISTS `users_shop` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(65) NOT NULL,
  `password1` varchar(255) NOT NULL,
  `password2` varchar(255) NOT NULL,
  `firstname` char(60) NOT NULL,
  `lastname` char(60) NOT NULL,
  `who` char(10) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.users_shop: ~0 rows (aproximadamente)
DELETE FROM `users_shop`;
/*!40000 ALTER TABLE `users_shop` DISABLE KEYS */;
/*!40000 ALTER TABLE `users_shop` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.users_sys
DROP TABLE IF EXISTS `users_sys`;
CREATE TABLE IF NOT EXISTS `users_sys` (
  `Username` varchar(65) NOT NULL,
  `Password` varchar(64) NOT NULL,
  `First_Name` varchar(60) DEFAULT NULL,
  `Last_Name` varchar(60) DEFAULT NULL,
  `Email` varchar(256) NOT NULL,
  `User_Level` int(11) DEFAULT NULL,
  `Report_To` int(11) DEFAULT NULL,
  `Activated` enum('N','Y') NOT NULL DEFAULT 'N',
  `Locked` enum('Y','N') DEFAULT 'N',
  `Profile` text DEFAULT NULL,
  `Current_URL` text DEFAULT NULL,
  `Theme` varchar(30) DEFAULT 'theme-default.css',
  `Menu_Horizontal` enum('N','Y') DEFAULT 'Y',
  `Table_Width_Style` enum('3','2','1') DEFAULT '2' COMMENT '1 = Scroll, 2 = Normal, 3 = 100%',
  `Scroll_Table_Width` int(11) DEFAULT 1100,
  `Scroll_Table_Height` int(11) DEFAULT 300,
  `Rows_Vertical_Align_Top` enum('Y','N') DEFAULT 'Y',
  `Language` char(2) DEFAULT 'en',
  `Redirect_To_Last_Visited_Page_After_Login` enum('Y','N') DEFAULT 'N',
  `Font_Name` varchar(50) DEFAULT 'arial',
  `Font_Size` varchar(4) DEFAULT '13px',
  PRIMARY KEY (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.users_sys: ~0 rows (aproximadamente)
DELETE FROM `users_sys`;
/*!40000 ALTER TABLE `users_sys` DISABLE KEYS */;
/*!40000 ALTER TABLE `users_sys` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.user_groups
DROP TABLE IF EXISTS `user_groups`;
CREATE TABLE IF NOT EXISTS `user_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(150) NOT NULL,
  `group_level` int(11) NOT NULL,
  `group_status` int(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `group_level` (`group_level`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.user_groups: ~0 rows (aproximadamente)
DELETE FROM `user_groups`;
/*!40000 ALTER TABLE `user_groups` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_groups` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.user_info
DROP TABLE IF EXISTS `user_info`;
CREATE TABLE IF NOT EXISTS `user_info` (
  `userid` char(128) NOT NULL,
  `firstname` varchar(60) NOT NULL,
  `lastname` varchar(60) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address1` varchar(45) DEFAULT NULL,
  `address2` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `state` varchar(30) DEFAULT NULL,
  `country` varchar(45) DEFAULT NULL,
  `bio` varchar(20000) DEFAULT NULL,
  `userimage` varchar(255) DEFAULT NULL,
  UNIQUE KEY `userid_UNIQUE` (`userid`),
  KEY `fk_userids_idx` (`userid`),
  CONSTRAINT `fk_userids` FOREIGN KEY (`userid`) REFERENCES `users` (`idUser`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.user_info: ~0 rows (aproximadamente)
DELETE FROM `user_info`;
/*!40000 ALTER TABLE `user_info` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_info` ENABLE KEYS */;

-- Volcando estructura para tabla inv1.uverify
DROP TABLE IF EXISTS `uverify`;
CREATE TABLE IF NOT EXISTS `uverify` (
  `iduv` char(128) NOT NULL,
  `username` varchar(65) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `mktoken` varchar(256) NOT NULL,
  `mkkey` varchar(256) NOT NULL,
  `mkhash` varchar(256) NOT NULL,
  `mkpin` varchar(6) NOT NULL,
  `level` char(50) NOT NULL DEFAULT 'Guest',
  `recovery_phrase` varchar(128) NOT NULL,
  `activation_code` varchar(128) NOT NULL,
  `password_key` varchar(256) NOT NULL,
  `pin_key` varchar(256) NOT NULL,
  `rp_active` tinyint(1) NOT NULL DEFAULT 0,
  `is_activated` tinyint(1) NOT NULL DEFAULT 0,
  `banned` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`iduv`),
  UNIQUE KEY `iduv` (`iduv`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.uverify: ~0 rows (aproximadamente)
DELETE FROM `uverify`;
/*!40000 ALTER TABLE `uverify` DISABLE KEYS */;
/*!40000 ALTER TABLE `uverify` ENABLE KEYS */;

-- Volcando estructura para vista inv1.view_purchases_details
DROP VIEW IF EXISTS `view_purchases_details`;
-- Creando tabla temporal para superar errores de dependencia de VIEW
CREATE TABLE `view_purchases_details` (
	`Purchase_ID` INT(11) NOT NULL,
	`Purchase_Number` VARCHAR(20) NOT NULL COLLATE 'utf8_general_ci',
	`Supplier_Number` VARCHAR(20) NOT NULL COLLATE 'utf8_general_ci',
	`Stock_Item` VARCHAR(15) NOT NULL COLLATE 'utf8_general_ci',
	`Purchasing_Quantity` DOUBLE(20,0) NOT NULL,
	`Purchasing_Price` DOUBLE(20,0) NOT NULL,
	`Selling_Price` DOUBLE(20,0) NOT NULL,
	`Purchasing_Total_Amount` DOUBLE(20,0) NOT NULL
) ENGINE=MyISAM;

-- Volcando estructura para vista inv1.view_purchases_outstandings
DROP VIEW IF EXISTS `view_purchases_outstandings`;
-- Creando tabla temporal para superar errores de dependencia de VIEW
CREATE TABLE `view_purchases_outstandings` (
	`Purchase_ID` INT(11) NOT NULL,
	`Purchase_Number` VARCHAR(20) NOT NULL COLLATE 'utf8_general_ci',
	`Purchase_Date` DATETIME NOT NULL,
	`Supplier_ID` VARCHAR(20) NOT NULL COLLATE 'utf8_general_ci',
	`Notes` VARCHAR(50) NULL COLLATE 'utf8_general_ci',
	`Total_Amount` DOUBLE(20,0) NULL,
	`Total_Payment` DOUBLE(20,0) NULL,
	`Total_Balance` DOUBLE(20,0) NULL
) ENGINE=MyISAM;

-- Volcando estructura para vista inv1.view_sales_details
DROP VIEW IF EXISTS `view_sales_details`;
-- Creando tabla temporal para superar errores de dependencia de VIEW
CREATE TABLE `view_sales_details` (
	`Sales_ID` INT(11) NOT NULL,
	`Sales_Number` VARCHAR(20) NOT NULL COLLATE 'utf8_general_ci',
	`Supplier_Number` VARCHAR(20) NOT NULL COLLATE 'utf8_general_ci',
	`Stock_Item` VARCHAR(15) NOT NULL COLLATE 'utf8_general_ci',
	`Sales_Quantity` DOUBLE NOT NULL,
	`Purchasing_Price` DOUBLE NOT NULL,
	`Sales_Price` DOUBLE NOT NULL,
	`Sales_Total_Amount` DOUBLE NOT NULL
) ENGINE=MyISAM;

-- Volcando estructura para vista inv1.view_sales_outstandings
DROP VIEW IF EXISTS `view_sales_outstandings`;
-- Creando tabla temporal para superar errores de dependencia de VIEW
CREATE TABLE `view_sales_outstandings` (
	`Sales_ID` INT(11) NOT NULL,
	`Sales_Number` VARCHAR(20) NOT NULL COLLATE 'utf8_general_ci',
	`Sales_Date` DATETIME NOT NULL,
	`Customer_ID` VARCHAR(20) NOT NULL COLLATE 'utf8_general_ci',
	`Notes` VARCHAR(50) NULL COLLATE 'utf8_general_ci',
	`Total_Amount` DOUBLE NULL,
	`Total_Payment` DOUBLE NULL,
	`Total_Balance` DOUBLE NULL,
	`Discount_Type` CHAR(1) NULL COLLATE 'utf8_general_ci',
	`Discount_Percentage` DOUBLE NULL,
	`Discount_Amount` DOUBLE NULL,
	`Tax_Percentage` DOUBLE NULL,
	`Tax_Description` VARCHAR(50) NULL COLLATE 'utf8_general_ci',
	`Final_Total_Amount` DOUBLE NULL
) ENGINE=MyISAM;

-- Volcando estructura para tabla inv1.volunteer
DROP TABLE IF EXISTS `volunteer`;
CREATE TABLE IF NOT EXISTS `volunteer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `gender` enum('Woman','Male') DEFAULT NULL,
  `birthday` datetime DEFAULT NULL,
  `age` tinyint(2) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `social_media` varchar(50) DEFAULT NULL,
  `web_blog` varchar(150) DEFAULT NULL,
  `address` varchar(150) DEFAULT NULL,
  `address_line_2` varchar(150) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `state_province_region` varchar(50) DEFAULT NULL,
  `zip_code` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `profession` varchar(50) DEFAULT NULL,
  `personal_interest` varchar(50) DEFAULT NULL,
  `skills` varchar(50) DEFAULT NULL,
  `allergies` varchar(50) DEFAULT NULL,
  `allergy_description` text DEFAULT NULL,
  `diseases` varchar(50) DEFAULT NULL,
  `disease_description` text DEFAULT NULL,
  `comments` varchar(50) DEFAULT NULL,
  `contact_person_name` varchar(50) DEFAULT NULL,
  `contact_person_phone` varchar(50) DEFAULT NULL,
  `contact_person_email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla inv1.volunteer: ~0 rows (aproximadamente)
DELETE FROM `volunteer`;
/*!40000 ALTER TABLE `volunteer` DISABLE KEYS */;
/*!40000 ALTER TABLE `volunteer` ENABLE KEYS */;

-- Volcando estructura para vista inv1.vw_banned_users
DROP VIEW IF EXISTS `vw_banned_users`;
-- Creando tabla temporal para superar errores de dependencia de VIEW
CREATE TABLE `vw_banned_users` (
	`user_id` CHAR(128) NOT NULL COLLATE 'utf8_general_ci',
	`banned_timestamp` DATETIME NOT NULL,
	`banned_hours` FLOAT NOT NULL,
	`hours_remaining` DOUBLE NULL
) ENGINE=MyISAM;

-- Volcando estructura para disparador inv1.assign_default_role
DROP TRIGGER IF EXISTS `assign_default_role`;
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER assign_default_role AFTER
                                                INSERT ON members FOR EACH ROW
                                                BEGIN
                                                  SET @default_role = (SELECT id FROM roles WHERE default_role = 1 LIMIT 1);
                                                  INSERT INTO member_roles (member_id, role_id) VALUES (NEW.id, @default_role);
                                                END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Volcando estructura para disparador inv1.move_to_deleted_members
DROP TRIGGER IF EXISTS `move_to_deleted_members`;
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER move_to_deleted_members AFTER
                                                  DELETE ON members FOR EACH ROW
                                                  BEGIN
                                                    DELETE FROM deleted_members
                                                      WHERE deleted_members.id = OLD.id;
                                                    INSERT INTO deleted_members (id, username, password, email, verified)
                                                    VALUES ( OLD.id, OLD.username, OLD.password, OLD.email, OLD.verified );
                                                  END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Volcando estructura para disparador inv1.prevent_deletion_of_required_perms
DROP TRIGGER IF EXISTS `prevent_deletion_of_required_perms`;
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER prevent_deletion_of_required_perms
                                                          BEFORE DELETE
                                                          ON permissions
                                                          FOR EACH ROW
                                                          BEGIN
                                                            IF OLD.required = 1 THEN
                                                              SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'Cannot delete required permissions';
                                                            END IF;
                                                        END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Volcando estructura para disparador inv1.prevent_deletion_of_required_roles
DROP TRIGGER IF EXISTS `prevent_deletion_of_required_roles`;
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER prevent_deletion_of_required_roles
                                                          BEFORE DELETE
                                                          ON roles
                                                          FOR EACH ROW
                                                          BEGIN
                                                            IF OLD.required = 1 THEN
                                                              SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'Cannot delete required roles';
                                                            END IF;
                                                        END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Volcando estructura para disparador inv1.prevent_deletion_of_superadmin
DROP TRIGGER IF EXISTS `prevent_deletion_of_superadmin`;
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER prevent_deletion_of_superadmin
                                                            BEFORE DELETE
                                                            ON members
                                                            FOR EACH ROW
                                                            BEGIN
                                                            	IF
                                                              (SELECT count(m.id)
                                                            	FROM members m
                                                            	INNER JOIN member_roles mr on mr.member_id = m.id
                                                            	INNER JOIN roles r on mr.role_id = r.id
                                                            	WHERE
                                                            	 m.verified = 1
                                                            	AND m.banned = 0
                                                            	AND r.name = 'Superadmin'
                                                                AND m.id = OLD.id) > 0
                                                              THEN
                                                                SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'Cannot delete superadmin user';
                                                              END IF;
                                                            END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Volcando estructura para vista inv1.view_purchases_details
DROP VIEW IF EXISTS `view_purchases_details`;
-- Eliminando tabla temporal y crear estructura final de VIEW
DROP TABLE IF EXISTS `view_purchases_details`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `view_purchases_details` AS SELECT
purchases_detail.Purchase_ID,
purchases_detail.Purchase_Number,
purchases_detail.Supplier_Number,
purchases_detail.Stock_Item,
purchases_detail.Purchasing_Quantity,
purchases_detail.Purchasing_Price,
purchases_detail.Selling_Price,
purchases_detail.Purchasing_Total_Amount
FROM
purchases_detail ;

-- Volcando estructura para vista inv1.view_purchases_outstandings
DROP VIEW IF EXISTS `view_purchases_outstandings`;
-- Eliminando tabla temporal y crear estructura final de VIEW
DROP TABLE IF EXISTS `view_purchases_outstandings`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `view_purchases_outstandings` AS SELECT
purchases.Purchase_ID,
purchases.Purchase_Number,
purchases.Purchase_Date,
purchases.Supplier_ID,
purchases.Notes,
purchases.Total_Amount,
purchases.Total_Payment,
purchases.Total_Balance
FROM
purchases 
WHERE purchases.Total_Balance <> 0 ;

-- Volcando estructura para vista inv1.view_sales_details
DROP VIEW IF EXISTS `view_sales_details`;
-- Eliminando tabla temporal y crear estructura final de VIEW
DROP TABLE IF EXISTS `view_sales_details`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `view_sales_details` AS SELECT
sales_detail.Sales_ID,
sales_detail.Sales_Number,
sales_detail.Supplier_Number,
sales_detail.Stock_Item,
sales_detail.Sales_Quantity,
sales_detail.Purchasing_Price,
sales_detail.Sales_Price,
sales_detail.Sales_Total_Amount
FROM
sales_detail ;

-- Volcando estructura para vista inv1.view_sales_outstandings
DROP VIEW IF EXISTS `view_sales_outstandings`;
-- Eliminando tabla temporal y crear estructura final de VIEW
DROP TABLE IF EXISTS `view_sales_outstandings`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `view_sales_outstandings` AS SELECT
sales.Sales_ID,
sales.Sales_Number,
sales.Sales_Date,
sales.Customer_ID,
sales.Notes,
sales.Total_Amount,
sales.Total_Payment,
sales.Total_Balance,
sales.Discount_Type,
sales.Discount_Percentage,
sales.Discount_Amount,
sales.Tax_Percentage,
sales.Tax_Description,
sales.Final_Total_Amount
FROM
sales 
WHERE sales.Total_Balance <> 0 ;

-- Volcando estructura para vista inv1.vw_banned_users
DROP VIEW IF EXISTS `vw_banned_users`;
-- Eliminando tabla temporal y crear estructura final de VIEW
DROP TABLE IF EXISTS `vw_banned_users`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `vw_banned_users` AS SELECT
                                        member_jail.user_id AS `user_id`,
                                        member_jail.timestamp AS `banned_timestamp`,
                                        member_jail.banned_hours AS `banned_hours`,
                                        ( member_jail.banned_hours - (TIME_TO_SEC(TIMEDIFF(NOW(), member_jail.timestamp)) / 3600)) AS `hours_remaining`
                                    FROM
                                        member_jail ;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
