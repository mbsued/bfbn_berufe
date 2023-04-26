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
 * Suche nach Beruf
 */
class Suche extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
    * @var string A search word
    **/
    protected $sucheBeruf;

    /**
     * @param string der gesuchte beruf
     * @return void
     */
    public function setSucheBeruf($sucheBeruf) {
            $this->sucheBeruf = $sucheBeruf;
    }

    /**
     * @return string der gesuchte Beruf
     */
    public function getSucheBeruf() {
            return $this->sucheBeruf;
    }
}
