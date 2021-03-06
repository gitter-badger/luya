<?php

namespace crawler\commands;

use Goutte\Client;
use crawler\classes\CrawlContainer;
use crawler\classes\CrawlPage;

/**
 * Run:
 * ./vendor/bin/luya command crawler crawl.
 *
 * @author nadar
 */
class CrawlController extends \luya\console\Command
{
    public function actionIndex()
    {
        $client = new Client();
        $pageCrawler = new CrawlPage(['client' => $client, 'baseUrl' => $this->module->baseUrl]);
        $container = new CrawlContainer(['baseUrl' => $this->module->baseUrl, 'pageCrawler' => $pageCrawler]);

        $this->output(print_r($container->getReport(), true));

        return $this->outputSuccess('Index Crawler finished');
    }
}
