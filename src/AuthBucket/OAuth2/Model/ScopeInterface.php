<?php

/**
 * This file is part of the authbucket/oauth2-php package.
 *
 * (c) Wong Hoi Sing Edison <hswong3i@pantarei-design.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AuthBucket\OAuth2\Model;

/**
 * OAuth2 scope interface.
 *
 * @author Wong Hoi Sing Edison <hswong3i@pantarei-design.com>
 */
interface ScopeInterface extends ModelInterface
{
    /**
     * Set scope
     *
     * @param string $scope
     *
     * @return Scope
     */
    public function setScope($scope);

    /**
     * Get scope
     *
     * @return string
     */
    public function getScope();
}
