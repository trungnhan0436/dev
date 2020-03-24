<?php

/**
 * Plants API
 * 
 * Access the Metrc Plants API and request the latest data
 * 
 * @category GET
 * @source /items/v1/active
 * @see https://api-ca.metrc.com/Documentation/#Plants.get_plants_v1_flowering
 * 
 */

namespace Kushy\Tests;

require_once '../../../vendor/autoload.php';

/**
 * Import API Client
 */
use Kushy\Metrc\Routes\Items;

$licenseNumber = 'CML17-0000001';

$metrc = new Items;
$items = $metrc->getActive($licenseNumber);

print "<pre>";
print_r($items);
print "</pre>";
