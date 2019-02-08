<?php
namespace F6\Fxspeaker\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author shouvik <s@gmail.com>
 */
class SpeakerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \F6\Fxspeaker\Domain\Model\Speaker
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \F6\Fxspeaker\Domain\Model\Speaker();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getSpeakernameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getSpeakername()
        );
    }

    /**
     * @test
     */
    public function setSpeakernameForStringSetsSpeakername()
    {
        $this->subject->setSpeakername('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'speakername',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getSpeakerimageReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getSpeakerimage()
        );
    }

    /**
     * @test
     */
    public function setSpeakerimageForFileReferenceSetsSpeakerimage()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setSpeakerimage($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'speakerimage',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getSpeakerdesReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getSpeakerdes()
        );
    }

    /**
     * @test
     */
    public function setSpeakerdesForStringSetsSpeakerdes()
    {
        $this->subject->setSpeakerdes('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'speakerdes',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getFlagReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getFlag()
        );
    }

    /**
     * @test
     */
    public function setFlagForFileReferenceSetsFlag()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setFlag($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'flag',
            $this->subject
        );
    }
}
