<?php
/**
 * Bootstrap Restler
 * 
 * @category Api
 * @package  Bossabox
 * @author   Valdir Botingnon <valdir.botingnon@gmail.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     http://localhost:3000/doc
 */
require_once '../vendor/autoload.php';

use Luracast\Restler\Restler;
use Luracast\Restler\Resources;

Resources::$useFormatAsExtension = false;
\Luracast\Restler\Defaults::setProperty('cacheDirectory', dirname(__FILE__) . '/../cache');

define('REDBEAN_MODEL_PREFIX', '\\Bossabox\\Models\\');

require '../lib/rb.php';
\R::setup('mysql:host=mariadb;dbname=bossabox', 'root', 'bossabox');

$r = new Restler(true);
$r->addAPIClass('Bossabox\Api\Tool');
$r->addAPIClass('Resources');
$r->handle();
