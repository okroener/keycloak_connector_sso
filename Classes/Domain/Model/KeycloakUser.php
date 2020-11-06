<?php
declare(strict_types=1);

namespace OK\KeycloakConnectorSso\Domain\Model;


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
 * FrontendUser
 */
class KeycloakUser extends \Evoweb\SfRegister\Domain\Model\FrontendUser
{

    /**
     * The keycloak user id.
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $keycloakUserId = '';

    /**
     * Returns the keycloakUserId
     * 
     * @return string $keycloakUserId
     */
    public function getKeycloakUserId()
    {
        return $this->keycloakUserId;
    }

    /**
     * Sets the keycloakUserId
     * 
     * @param string $keycloakUserId
     * @return void
     */
    public function setKeycloakUserId($keycloakUserId)
    {
        $this->keycloakUserId = $keycloakUserId;
    }
}
