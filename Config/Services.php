<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link https://basic-app.com
 */
namespace BasicApp\JQuery\Config;

use BasicApp\JQuery\JQueryAsset;
use BasicApp\JQuery\JQueryCDNAsset;

class Services extends \CodeIgniter\Config\BaseService
{

    public static function jQueryAsset($getShared = true)
    {
        if (!$getShared)
        {
            $config = config(JQuery::class);

            if ($config->useCdn)
            {
                return new JQueryCDNAsset(__FUNCTION__, $config->cdnUrl, $config->version, $config->minified);
            }
            else
            {
                return new JQueryAsset(__FUNCTION__, $config->minified);
            }
        }

        return static::getSharedInstance(__FUNCTION__);
    }

}