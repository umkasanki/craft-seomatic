<?php
/**
 * SEOmatic plugin for Craft CMS 3
 *
 * A turnkey SEO implementation for Craft CMS that is comprehensive, powerful,
 * and flexible
 *
 * @link      https://nystudio107.com
 * @copyright Copyright (c) 2022 nystudio107
 */

namespace nystudio107\seomatic\models\jsonld;

/**
 * schema.org version: v14.0-release
 * Trait for FoodEstablishmentReservation.
 *
 * @author    nystudio107
 * @package   Seomatic
 * @see       https://schema.org/FoodEstablishmentReservation
 */

trait FoodEstablishmentReservationTrait
{
    
    /**
     * Number of people the reservation should accommodate.
     *
     * @var int|Integer|QuantitativeValue
     */
    public $partySize;

    /**
     * The startTime of something. For a reserved event or service (e.g.
     * FoodEstablishmentReservation), the time that it is expected to start. For
     * actions that span a period of time, when the action was performed. e.g.
     * John wrote a book from *January* to December. For media, including audio
     * and video, it's the time offset of the start of a clip within a larger
     * file.  Note that Event uses startDate/endDate instead of startTime/endTime,
     * even when describing dates with times. This situation may be clarified in
     * future revisions.
     *
     * @var DateTime|Time
     */
    public $startTime;

    /**
     * The endTime of something. For a reserved event or service (e.g.
     * FoodEstablishmentReservation), the time that it is expected to end. For
     * actions that span a period of time, when the action was performed. e.g.
     * John wrote a book from January to *December*. For media, including audio
     * and video, it's the time offset of the end of a clip within a larger file. 
     * Note that Event uses startDate/endDate instead of startTime/endTime, even
     * when describing dates with times. This situation may be clarified in future
     * revisions.
     *
     * @var DateTime|Time
     */
    public $endTime;

}
