<?php
namespace BfbnBerufe\BfbnBerufe\Controller;


/***
 *
 * This file is part of the "BFBN Berufe" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2020 BFBN-Team <info@bfbn.de>, MB-Dienststellen FOSBOS
 *
 ***/
/**
 * BerufeController
 */
class BerufeController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * berufeRepository
     * 
     * @var \BfbnBerufe\BfbnBerufe\Domain\Repository\BerufeRepository
     * @inject
     */
    protected $berufeRepository = null;

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $beruves = $this->berufeRepository->findAll();
        $this->view->assign('beruves', $beruves);
    }

    /**
     * action show
     * 
     * @param \BfbnBerufe\BfbnBerufe\Domain\Model\Berufe $berufe
     * @return void
     */
    public function showAction(\BfbnBerufe\BfbnBerufe\Domain\Model\Berufe $berufe)
    {
        $this->view->assign('berufe', $berufe);
    }

    /**
     * action suchen
     * 
     * @return void
     */
    public function suchenAction()
    {
    }
}
