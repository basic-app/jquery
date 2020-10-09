<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link https://basic-app.com
 */
namespace BasicApp\JQuery\Config;

class JQuery extends \CodeIgniter\Config\BaseConfig
{

    public $version = '3.5.1';

    public $cdnUrl = 'https://ajax.googleapis.com/ajax/libs/jquery';

    public $useCdn = false;

    public $minified = true;

}