<?php
namespace BfbnBerufe\BfbnBerufe\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author BFBN-Team <info@bfbn.de>
 */
class BerufeControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \BfbnBerufe\BfbnBerufe\Controller\BerufeController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\BfbnBerufe\BfbnBerufe\Controller\BerufeController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllBeruvesFromRepositoryAndAssignsThemToView()
    {

        $allBeruves = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $berufeRepository = $this->getMockBuilder(\BfbnBerufe\BfbnBerufe\Domain\Repository\BerufeRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $berufeRepository->expects(self::once())->method('findAll')->will(self::returnValue($allBeruves));
        $this->inject($this->subject, 'berufeRepository', $berufeRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('beruves', $allBeruves);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenBerufeToView()
    {
        $berufe = new \BfbnBerufe\BfbnBerufe\Domain\Model\Berufe();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('berufe', $berufe);

        $this->subject->showAction($berufe);
    }
}
