<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('discuss', 'Discuss::index');
$routes->get('contribute', 'Contribute::index');
$routes->get('download', 'Download::index');
$routes->get('policies', 'Policies::index');
$routes->get('the-fine-print', 'FinePrint::index');
$routes->get('security-disclosures', 'Disclosures::index');

// Api
$routes->get('api/get-download-data', 'Api::getDownloadData');
$routes->get('api/get-contributors', 'Api::getContributors');
$routes->get('api/get-repos', 'Api::getRepos');
