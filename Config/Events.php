<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link https://basic-app.com
 */
use BasicApp\Publisher\PublisherEvents;
use BasicApp\Publisher\Events\PublishEvent;
use BasicApp\JQuery\Config\JQuery;

PublisherEvents::onPublish(
    function(PublishEvent $event)
    {
        helper('path');

        $config = config(JQuery::class);

        $publisher = service('publisher');

        if ($event->refresh)
        {
            $publisher->deleteIfExists(fcpath('assets/jquery'));
        }

        $publisher->download(
            'https://code.jquery.com/jquery-' . $config->version . '.min.js', 
            fcpath('assets/jquery/jquery.min.js'), 
            $event->refresh
        );
        
        $publisher->download(
            'https://code.jquery.com/jquery-' . $config->version . '.js', 
            fcpath('assets/jquery/jquery.js'), 
            $event->refresh
        );
    }
);