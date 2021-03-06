<?php
/**
 * Copyright Zikula Foundation 2010 - Zikula Application Framework
 *
 * This work is contributed to the Zikula Foundation under one or more
 * Contributor Agreements and licensed to You under the following license:
 *
 * @license GNU/LGPLv3 (or at your option, any later version).
 * @package Zikula
 * @subpackage Response
 *
 * Please see the NOTICE file distributed with this source code for further
 * information regarding copyright and licensing.
 */

namespace Zikula\Core\Response\Ajax;

/**
 * Ajax class.
 */
class UnavailableResponse extends AbstractErrorResponse
{
    /**
     * Response code.
     *
     * @var integer
     */
    protected $statusCode = 503;

    /**
     * Flag to create a new nonce.
     *
     * @var boolean
     */
    protected $newCsrfToken = true;
}
