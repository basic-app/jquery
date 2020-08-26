<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link https://basic-app.com
 */
namespace BasicApp\JQuery;

class JQueryAsset extends \BasicApp\Asset\BaseAsset
{

    public function __construct(string $id, bool $minified = true)
    {
        parent::__construct($id);

        if ($minified)
        {
            $this->js[] = 'assets/jquery/jquery.min.js';
        }
        else
        {
            $this->js[] = 'assets/jquery/jquery.js';
        }
    }

}