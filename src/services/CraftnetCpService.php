<?php
/**
 * Craftnet CP plugin for Craft CMS 3.x
 *
 * Create and manage your plugin's licenses in your control panel.
 *
 * @link      https://reboundcreative.com
 * @copyright Copyright (c) 2019 Rebound Creative
 */

namespace reboundcreative\craftnetcp\services;

use reboundcreative\craftnetcp\CraftnetCp;

use Craft;
use craft\base\Component;

/**
 * CraftnetCpService Service
 *
 * All of your plugin’s business logic should go in services, including saving data,
 * retrieving data, etc. They provide APIs that your controllers, template variables,
 * and other plugins can interact with.
 *
 * https://craftcms.com/docs/plugins/services
 *
 * @author    Rebound Creative
 * @package   CraftnetCp
 * @since     1.0.0
 */
class CraftnetCpService extends Component
{
    // Public Methods
    // =========================================================================

    /**
     * This function can literally be anything you want, and you can have as many service
     * functions as you want
     *
     * From any other plugin file, call it like this:
     *
     *     CraftnetCp::$plugin->craftnetCpService->exampleService()
     *
     * @return mixed
     */
    public function exampleService()
    {
        $result = 'something';
        // Check our Plugin's settings for `someAttribute`
        if (CraftnetCp::$plugin->getSettings()->someAttribute) {
        }

        return $result;
    }
}
