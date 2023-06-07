<?php
namespace BfbnBerufe\BfbnBerufe\Controller;

use BfbnBerufe\BfbnBerufe\Domain\Repository\BerufeRepository;
use Psr\Http\Message\ResponseInterface;

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
     * 
     */
    protected $berufeRepository = null;

    /**
     * Inject the Berufe repository
     *
     * @param \BfbnBerufe\BfbnBerufe\Domain\Repository\BerufeRepository $BerufeRepository
     */
    public function injectBerufeRepository(BerufeRepository $BerufeRepository)
    {
        $this->berufeRepository = $BerufeRepository;
    }

    /**
     * action list
     * 
     * @return void
     */
    public function listAction(\BfbnBerufe\BfbnBerufe\Domain\Model\Suche $suche = NULL): ResponseInterface
    {
		$this->view->assign('suche', $suche);		
		$this->view->assign('beruves', $this->berufeRepository->findBerufe($suche));
		return $this->htmlResponse($this->view->render());		

    }

    /**
     * action show
     * 
     * @param \BfbnBerufe\BfbnBerufe\Domain\Model\Berufe $berufe
     * @return void
     */
    public function showAction(\BfbnBerufe\BfbnBerufe\Domain\Model\Berufe $berufe): ResponseInterface
    {
        $this->view->assign('berufe', $berufe);
		return $this->htmlResponse($this->view->render());		
    }
}
