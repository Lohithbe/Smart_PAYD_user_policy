<?php
namespace SmartPAYD\UserPolicy\Controller;

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
 * UserController
 */
class UserController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * userRepository
     *
     * @var \SmartPAYD\UserPolicy\Domain\Repository\UserRepository
     * @inject
     */
    protected $userRepository = null;

    /**
     * policyRepository
     *
     * @var \SmartPAYD\UserPolicy\Domain\Repository\PolicyRepository
     * @inject
     */
    protected $policyRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $users = $this->userRepository->findAll();
        $this->view->assign('users', $users);
    }

    /**
     * action show
     *
     * @param \SmartPAYD\UserPolicy\Domain\Model\User $user
     * @return void
     */
    public function showAction(\SmartPAYD\UserPolicy\Domain\Model\User $user)
    {
        $this->view->assign('user', $user);
    }

    /**
     * action new
     *
     * @return void
     */
    public function newAction()
    {
        $policies = $this->policyRepository->findAll();
        $this->view->assign('policies', $policies);
    }

    /**
     * action create
     *
     * @param \SmartPAYD\UserPolicy\Domain\Model\User $newUser
     * @return void
     */
    public function createAction(\SmartPAYD\UserPolicy\Domain\Model\User $newUser)
    {
        $policies = $this->policyRepository->fetchPolicyID($newUser->getPolicyName());
        foreach ($policies as $indx => $pol) {
            $newUser->setPolicyID($pol->getUid());
        }
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->userRepository->add($newUser);
        $this->redirect('list');
    }

    /**
     * action edit
     *
     * @param \SmartPAYD\UserPolicy\Domain\Model\User $user
     * @ignorevalidation $user
     * @return void
     */
    public function editAction(\SmartPAYD\UserPolicy\Domain\Model\User $user)
    {
        $this->view->assign('user', $user);
    }

    /**
     * action update
     *
     * @param \SmartPAYD\UserPolicy\Domain\Model\User $user
     * @return void
     */
    public function updateAction(\SmartPAYD\UserPolicy\Domain\Model\User $user)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->userRepository->update($user);
        $this->redirect('list');
    }

    /**
     * action delete
     *
     * @param \SmartPAYD\UserPolicy\Domain\Model\User $user
     * @return void
     */
    public function deleteAction(\SmartPAYD\UserPolicy\Domain\Model\User $user)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->userRepository->remove($user);
        $this->redirect('list');
    }
}
