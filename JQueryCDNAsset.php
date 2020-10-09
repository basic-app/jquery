<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link https://basic-app.com
 */
namespace BasicApp\JQuery;

class JQueryCDNAsset extends \BasicApp\Asset\BaseAsset
{

    public function __construct(string $id, string $cdnUrl, string $version, bool $minified)
    {
        parent::__construct($id);

        if ($minified)
        {
            $url = $cdnUrl . '/' . $version . '/jquery.min.js'; 
        }
        else
        {
            $url = $cdnUrl . '/' . $version . '/jquery.js';
        }

        $this->js[] = $url;
    }

}