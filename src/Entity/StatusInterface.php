<?php
/**
 * @package johnpancoast/php-common
 * @copyright (c) 2016 John Pancoast
 * @author John Pancoast <johnpancoaster@gmail.com>
 * @license MIT
 */

namespace Pancoast\Common\Entity;

/**
 * Contract for entities that have statuses
 *
 * @author John Pancoast <johnpancoaster@gmail.com>
 */
interface StatusInterface
{
    /**
     * Set status
     *
     * @param string|bool|int $status
     * @return $this
     */
    public function setStatus($status);

    /**
     * Get status
     * @return string|bool|int
     */
    public function getStatus();

    /**
     * Is passed status valid
     *
     * @param string|bool|int $status
     *
     * @return bool
     */
    public function isValidStatus($status);
}
