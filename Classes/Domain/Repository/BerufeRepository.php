<?php
namespace BfbnBerufe\BfbnBerufe\Domain\Repository;


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
 * The repository for Beruves
 */
class BerufeRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{

    /**
     * @var array
     */
    protected $defaultOrderings = ['sorting' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING];
}
