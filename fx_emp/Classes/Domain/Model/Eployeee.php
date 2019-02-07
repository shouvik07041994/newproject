<?php
namespace F6\FxEmp\Domain\Model;

/***
 *
 * This file is part of the "Employee Record" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 shovik <shovik@gmail.com>, F6
 *
 ***/

/**
 * Eployeee
 */
class Eployeee extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * name
     *
     * @var string
     */
    protected $name = '';

    /**
     * salary
     *
     * @var float
     */
    protected $salary = 0.0;

    /**
     * age
     *
     * @var int
     */
    protected $age = 0;

    /**
     * Returns the name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     *
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Returns the salary
     *
     * @return float $salary
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * Sets the salary
     *
     * @param float $salary
     * @return void
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    /**
     * Returns the age
     *
     * @return int $age
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Sets the age
     *
     * @param int $age
     * @return void
     */
    public function setAge($age)
    {
        $this->age = $age;
    }
}
