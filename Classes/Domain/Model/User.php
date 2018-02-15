<?php
namespace SmartPAYD\UserPolicy\Domain\Model;

/***
 *
 * This file is part of the "UserPolicy" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018
 *
 ***/

/**
 * User
 */
class User extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * policyName
     *
     * @var string
     */
    protected $policyName = '';

    /**
     * fullName
     *
     * @var string
     */
    protected $fullName = '';

    /**
     * userID
     *
     * @var string
     */
    protected $userID = '';

    /**
     * startDate
     *
     * @var \DateTime
     */
    protected $startDate = null;

    /**
     * endDate
     *
     * @var \DateTime
     */
    protected $endDate = null;

    /**
     * policyID
     *
     * @var string
     */
    protected $policyID = '';

    /**
     * vehicleID
     *
     * @var string
     */
    protected $vehicleID = '';

    /**
     * billID
     *
     * @var string
     */
    protected $billID = '';

    /**
     * vehicle
     *
     * @var \SmartPAYD\UserPolicy\Domain\Model\Vehicle
     */
    protected $vehicle = null;

    /**
     * bill
     *
     * @var \SmartPAYD\UserPolicy\Domain\Model\Bill
     */
    protected $bill = null;

    /**
     * @return string
     */
    public function getPolicyName()
    {
        return $this->policyName;
    }

    /**
     * @param string $policyName
     */
    public function setPolicyName(string $policyName)
    {
        $this->policyName = $policyName;
    }

    /**
     * Returns the fullName
     *
     * @return string $fullName
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * Sets the fullName
     *
     * @param string $fullName
     * @return void
     */
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;
    }

    /**
     * Returns the userID
     *
     * @return string $userID
     */
    public function getUserID()
    {
        return $this->userID;
    }

    /**
     * Sets the userID
     *
     * @param string $userID
     * @return void
     */
    public function setUserID($userID)
    {
        $this->userID = $userID;
    }

    /**
     * Returns the startDate
     *
     * @return \DateTime $startDate
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Sets the startDate
     *
     * @param \DateTime $startDate
     * @return void
     */
    public function setStartDate(\DateTime $startDate)
    {
        $this->startDate = $startDate;
    }

    /**
     * Returns the endDate
     *
     * @return \DateTime $endDate
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Sets the endDate
     *
     * @param \DateTime $endDate
     * @return void
     */
    public function setEndDate(\DateTime $endDate)
    {
        $this->endDate = $endDate;
    }

    /**
     * Returns the vehicle
     *
     * @return \SmartPAYD\UserPolicy\Domain\Model\Vehicle $vehicle
     */
    public function getVehicle()
    {
        return $this->vehicle;
    }

    /**
     * Sets the vehicle
     *
     * @param \SmartPAYD\UserPolicy\Domain\Model\Vehicle $vehicle
     * @return void
     */
    public function setVehicle(\SmartPAYD\UserPolicy\Domain\Model\Vehicle $vehicle)
    {
        $this->vehicle = $vehicle;
    }

    /**
     * Returns the bill
     *
     * @return \SmartPAYD\UserPolicy\Domain\Model\Bill $bill
     */
    public function getBill()
    {
        return $this->bill;
    }

    /**
     * Sets the bill
     *
     * @param \SmartPAYD\UserPolicy\Domain\Model\Bill $bill
     * @return void
     */
    public function setBill(\SmartPAYD\UserPolicy\Domain\Model\Bill $bill)
    {
        $this->bill = $bill;
    }

    /**
     * Returns the policyID
     *
     * @return string $policyID
     */
    public function getPolicyID()
    {
        return $this->policyID;
    }

    /**
     * Sets the policyID
     *
     * @param string $policyID
     * @return void
     */
    public function setPolicyID($policyID)
    {
        $this->policyID = $policyID;
    }

    /**
     * Returns the vehicleID
     *
     * @return string $vehicleID
     */
    public function getVehicleID()
    {
        return $this->vehicleID;
    }

    /**
     * Sets the vehicleID
     *
     * @param string $vehicleID
     * @return void
     */
    public function setVehicleID($vehicleID)
    {
        $this->vehicleID = $vehicleID;
    }

    /**
     * Returns the billID
     *
     * @return string $billID
     */
    public function getBillID()
    {
        return $this->billID;
    }

    /**
     * Sets the billID
     *
     * @param string $billID
     * @return void
     */
    public function setBillID($billID)
    {
        $this->billID = $billID;
    }
}
