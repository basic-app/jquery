<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link https://basic-app.com
 */
namespace BasicApp\JQuery;

use BasicApp\JQuery\Config\JQuery as JQuery;

class JQueryCDNAsset extends \BasicApp\Asset\BaseAsset
{

    public function __construct(string $id, string $url)
    {
        parent::__construct($id);

        $this->js[] = $config->url;
    }

}