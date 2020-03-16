<?php
namespace BfbnBerufe\BfbnBerufe\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author BFBN-Team <info@bfbn.de>
 */
class BerufeTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \BfbnBerufe\BfbnBerufe\Domain\Model\Berufe
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \BfbnBerufe\BfbnBerufe\Domain\Model\Berufe();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getBezeichnungReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getBezeichnung()
        );
    }

    /**
     * @test
     */
    public function setBezeichnungForStringSetsBezeichnung()
    {
        $this->subject->setBezeichnung('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'bezeichnung',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAusbAbuReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getAusbAbu()
        );
    }

    /**
     * @test
     */
    public function setAusbAbuForBoolSetsAusbAbu()
    {
        $this->subject->setAusbAbu(true);

        self::assertAttributeEquals(
            true,
            'ausbAbu',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAusbGhReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getAusbGh()
        );
    }

    /**
     * @test
     */
    public function setAusbGhForBoolSetsAusbGh()
    {
        $this->subject->setAusbGh(true);

        self::assertAttributeEquals(
            true,
            'ausbGh',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAusbSReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getAusbS()
        );
    }

    /**
     * @test
     */
    public function setAusbSForBoolSetsAusbS()
    {
        $this->subject->setAusbS(true);

        self::assertAttributeEquals(
            true,
            'ausbS',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAusbTReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getAusbT()
        );
    }

    /**
     * @test
     */
    public function setAusbTForBoolSetsAusbT()
    {
        $this->subject->setAusbT(true);

        self::assertAttributeEquals(
            true,
            'ausbT',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAusbWReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getAusbW()
        );
    }

    /**
     * @test
     */
    public function setAusbWForBoolSetsAusbW()
    {
        $this->subject->setAusbW(true);

        self::assertAttributeEquals(
            true,
            'ausbW',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAusbGhSternReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getAusbGhStern()
        );
    }

    /**
     * @test
     */
    public function setAusbGhSternForBoolSetsAusbGhStern()
    {
        $this->subject->setAusbGhStern(true);

        self::assertAttributeEquals(
            true,
            'ausbGhStern',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAusbSSternReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getAusbSStern()
        );
    }

    /**
     * @test
     */
    public function setAusbSSternForBoolSetsAusbSStern()
    {
        $this->subject->setAusbSStern(true);

        self::assertAttributeEquals(
            true,
            'ausbSStern',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAusbWSternReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getAusbWStern()
        );
    }

    /**
     * @test
     */
    public function setAusbWSternForBoolSetsAusbWStern()
    {
        $this->subject->setAusbWStern(true);

        self::assertAttributeEquals(
            true,
            'ausbWStern',
            $this->subject
        );
    }
}
