<?php
namespace BfbnBerufe\BfbnBerufe\Domain\Model;


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
 * Tabelle der Ausbildungsberufe  und der möglichen Ausbildungsrichtungen
 */
class Berufe extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * keep it as string as it should be only used during imports
     *
     * @var string
     */
    protected $feGroup;
	
    /**
     * Bezeichnung des Berufes
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $bezeichnung = '';

    /**
     * Ausbildungsrichtung ABU
     * 
     * @var bool
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $ausbAbu = false;

    /**
     * Ausbildungsrichtung Gesundheit
     * 
     * @var bool
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $ausbGh = false;

    /**
     * Ausbildungsrichtung Sozialwesen
     * 
     * @var bool
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $ausbS = false;

    /**
     * Ausbildungsrichtung Technik
     * 
     * @var bool
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $ausbT = false;

    /**
     * Ausbildungsrichtung Wirtschaft und Internationale Wirtschaft
     * 
     * @var bool
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $ausbW = false;

    /**
     * Ist Gesundheit Stern-Beruf?
     * 
     * @var bool
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $ausbGhStern = false;

    /**
     * Ist Sozialwesen Stern-Beruf?
     * 
     * @var bool
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $ausbSStern = false;

    /**
     * Ist Wirtschaft Stern-Beruf?
     * 
     * @var bool
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $ausbWStern = false;

    /**
     * Returns the bezeichnung
     * 
     * @return string $bezeichnung
     */
    public function getBezeichnung()
    {
        return $this->bezeichnung;
    }

    /**
     * Sets the bezeichnung
     * 
     * @param string $bezeichnung
     * @return void
     */
    public function setBezeichnung($bezeichnung)
    {
        $this->bezeichnung = $bezeichnung;
    }

    /**
     * Returns the ausbAbu
     * 
     * @return bool $ausbAbu
     */
    public function getAusbAbu()
    {
        return $this->ausbAbu;
    }

    /**
     * Sets the ausbAbu
     * 
     * @param bool $ausbAbu
     * @return void
     */
    public function setAusbAbu($ausbAbu)
    {
        $this->ausbAbu = $ausbAbu;
    }

    /**
     * Returns the boolean state of ausbAbu
     * 
     * @return bool
     */
    public function isAusbAbu()
    {
        return $this->ausbAbu;
    }

    /**
     * Returns the ausbGh
     * 
     * @return bool $ausbGh
     */
    public function getAusbGh()
    {
        return $this->ausbGh;
    }

    /**
     * Sets the ausbGh
     * 
     * @param bool $ausbGh
     * @return void
     */
    public function setAusbGh($ausbGh)
    {
        $this->ausbGh = $ausbGh;
    }

    /**
     * Returns the boolean state of ausbGh
     * 
     * @return bool
     */
    public function isAusbGh()
    {
        return $this->ausbGh;
    }

    /**
     * Returns the ausbS
     * 
     * @return bool $ausbS
     */
    public function getAusbS()
    {
        return $this->ausbS;
    }

    /**
     * Sets the ausbS
     * 
     * @param bool $ausbS
     * @return void
     */
    public function setAusbS($ausbS)
    {
        $this->ausbS = $ausbS;
    }

    /**
     * Returns the boolean state of ausbS
     * 
     * @return bool
     */
    public function isAusbS()
    {
        return $this->ausbS;
    }

    /**
     * Returns the ausbT
     * 
     * @return bool $ausbT
     */
    public function getAusbT()
    {
        return $this->ausbT;
    }

    /**
     * Sets the ausbT
     * 
     * @param bool $ausbT
     * @return void
     */
    public function setAusbT($ausbT)
    {
        $this->ausbT = $ausbT;
    }

    /**
     * Returns the boolean state of ausbT
     * 
     * @return bool
     */
    public function isAusbT()
    {
        return $this->ausbT;
    }

    /**
     * Returns the ausbW
     * 
     * @return bool $ausbW
     */
    public function getAusbW()
    {
        return $this->ausbW;
    }

    /**
     * Sets the ausbW
     * 
     * @param bool $ausbW
     * @return void
     */
    public function setAusbW($ausbW)
    {
        $this->ausbW = $ausbW;
    }

    /**
     * Returns the boolean state of ausbW
     * 
     * @return bool
     */
    public function isAusbW()
    {
        return $this->ausbW;
    }

    /**
     * Returns the ausbGhStern
     * 
     * @return bool $ausbGhStern
     */
    public function getAusbGhStern()
    {
        return $this->ausbGhStern;
    }

    /**
     * Sets the ausbGhStern
     * 
     * @param bool $ausbGhStern
     * @return void
     */
    public function setAusbGhStern($ausbGhStern)
    {
        $this->ausbGhStern = $ausbGhStern;
    }

    /**
     * Returns the boolean state of ausbGhStern
     * 
     * @return bool
     */
    public function isAusbGhStern()
    {
        return $this->ausbGhStern;
    }

    /**
     * Returns the ausbSStern
     * 
     * @return bool $ausbSStern
     */
    public function getAusbSStern()
    {
        return $this->ausbSStern;
    }

    /**
     * Sets the ausbSStern
     * 
     * @param bool $ausbSStern
     * @return void
     */
    public function setAusbSStern($ausbSStern)
    {
        $this->ausbSStern = $ausbSStern;
    }

    /**
     * Returns the boolean state of ausbSStern
     * 
     * @return bool
     */
    public function isAusbSStern()
    {
        return $this->ausbSStern;
    }

    /**
     * Returns the ausbWStern
     * 
     * @return bool $ausbWStern
     */
    public function getAusbWStern()
    {
        return $this->ausbWStern;
    }

    /**
     * Sets the ausbWStern
     * 
     * @param bool $ausbWStern
     * @return void
     */
    public function setAusbWStern($ausbWStern)
    {
        $this->ausbWStern = $ausbWStern;
    }

    /**
     * Returns the boolean state of ausbWStern
     * 
     * @return bool
     */
    public function isAusbWStern()
    {
        return $this->ausbWStern;
    }
	
    /**
     * Get fe groups
     *
     * @return string
     */
    public function getFeGroup()
    {
        return $this->feGroup;
    }

    /**
     * Set fe group
     *
     * @param string $feGroup comma separated list
     */
    public function setFeGroup($feGroup)
    {
        $this->feGroup = $feGroup;
    }	
}
