<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link https://basic-app.com
 */
use BasicApp\Publisher\PublisherEvents;
use BasicApp\Publisher\Events\PublishEvent;
use BasicApp\JQuery\Config\JQuery;

PublisherEvents::onPublish(function(PublishEvent $event) {

    $config = config(JQuery::class);

    $url = 'https://code.jquery.com/jquery-' . $config->version . '.min.js';

    $target = FCPATH . 'assets/jquery/jquery.min.js';

    $event->download($url, $target, $event->refresh ? true : false);
}); 