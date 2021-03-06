<?php
namespace SmartPAYD\UserPolicy\Domain\Repository;

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
 * The repository for Policies
 */
class PolicyRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
    /**
     * @param string $policyName
     */
    public function fetchPolicyID(string $policyName)
    {
        $query = $this->createQuery();
        $query->matching($query->equals('policy_name', $policyName));
        return $query->execute();
    }
}
