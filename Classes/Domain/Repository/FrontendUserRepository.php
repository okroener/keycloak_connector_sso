<?php
namespace OK\KeycloakAdapter\Domain\Repository;


/***
 *
 * This file is part of the "Keycloak adapter" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2020 Oliver Kroener <ok@oliver-kroener.de>, Oliver Kroener Digitization
 *
 ***/
/**
 * The repository for FrontendUsers
 */
class FrontendUserRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
    public function getBy() {
        $t = $this;
    }
}
