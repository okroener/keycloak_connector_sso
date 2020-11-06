<?php
namespace OK\KeycloakAdapter\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Oliver Kroener <ok@oliver-kroener.de>
 */
class FrontendUserTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \OK\KeycloakAdapter\Domain\Model\FrontendUser
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \OK\KeycloakAdapter\Domain\Model\FrontendUser();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getKeycloakUserIdReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getKeycloakUserId()
        );
    }

    /**
     * @test
     */
    public function setKeycloakUserIdForStringSetsKeycloakUserId()
    {
        $this->subject->setKeycloakUserId('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'keycloakUserId',
            $this->subject
        );
    }
}
