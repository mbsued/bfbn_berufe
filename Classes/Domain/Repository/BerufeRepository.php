<?php
namespace BfbnBerufe\BfbnBerufe\Domain\Repository;


/***
 *
 * This file is part of the "BFBN Berufe" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2025 BFBN-Team <info@bfbn.de>, MB-Dienststellen FOSBOS
 *
 ***/
/**
 * The repository for Beruves
 */
class BerufeRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{

    /**
     * @var array
     */
    protected $defaultOrderings = ['bezeichnung' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING];
    /**
     * Gets Berufe following by Suchbegriff
     *
     * @return object
     */

    public function findBerufe(\BfbnBerufe\BfbnBerufe\Domain\Model\Suche $suche= NULL){
        $query = $this->createQuery();
        if ($suche !== NULL) {
            $result =  $query->matching($query->like('bezeichnung', '%' . $suche->getSucheBeruf() . '%'))->execute();
        }
        else {
            $result = $query->execute();
        }
        return $result;
    } 
	
}
