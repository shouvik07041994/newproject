<?php
namespace F6\FxEmp\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author shovik <shovik@gmail.com>
 */
class EployeeeTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \F6\FxEmp\Domain\Model\Eployeee
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \F6\FxEmp\Domain\Model\Eployeee();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getName()
        );
    }

    /**
     * @test
     */
    public function setNameForStringSetsName()
    {
        $this->subject->setName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'name',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getSalaryReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getSalary()
        );
    }

    /**
     * @test
     */
    public function setSalaryForFloatSetsSalary()
    {
        $this->subject->setSalary(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'salary',
            $this->subject,
            '',
            0.000000001
        );
    }

    /**
     * @test
     */
    public function getAgeReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getAge()
        );
    }

    /**
     * @test
     */
    public function setAgeForIntSetsAge()
    {
        $this->subject->setAge(12);

        self::assertAttributeEquals(
            12,
            'age',
            $this->subject
        );
    }
}
