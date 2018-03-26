<?php
/**
 * SEOmatic plugin for Craft CMS 3.x
 *
 * A turnkey SEO implementation for Craft CMS that is comprehensive, powerful,
 * and flexible
 *
 * @link      https://nystudio107.com
 * @copyright Copyright (c) 2017 nystudio107
 */

namespace nystudio107\seomatic\models;

use craft\validators\ArrayValidator;
use nystudio107\seomatic\base\FluentModel;

/**
 * @author    nystudio107
 * @package   Seomatic
 * @since     3.0.0
 */
class Entity extends FluentModel
{
    // Public Properties
    // =========================================================================

    /**
     * @var string The schema.org general type
     */
    public $siteType;

    /**
     * @var string The schema.org sub-type
     */
    public $siteSubType;

    /**
     * @var string The schema.org specific type
     */
    public $siteSpecificType;

    /**
     * @var string The computed most specific schema.org type
     */
    public $computedType = 'Organization';

    /**
     * @var string
     */
    public $genericName;

    /**
     * @var string
     */
    public $genericAlternateName;

    /**
     * @var string
     */
    public $genericDescription;

    /**
     * @var string
     */
    public $genericUrl;

    /**
     * @var array URL for the entity image
     */
    public $genericImage;

    /**
     * @var int The width of the entity image
     */
    public $genericImageWidth;

    /**
     * @var int The height of the entity image
     */
    public $genericImageHeight;

    /**
     * @var array Asset ID array for the entity image
     */
    public $genericImageIds;

    /**
     * @var string
     */
    public $genericTelephone;

    /**
     * @var string
     */
    public $genericEmail;

    /**
     * @var string
     */
    public $genericStreetAddress;

    /**
     * @var string
     */
    public $genericAddressLocality;

    /**
     * @var string
     */
    public $genericAddressRegion;

    /**
     * @var string
     */
    public $genericPostalCode;

    /**
     * @var string
     */
    public $genericAddressCountry;

    /**
     * @var string
     */
    public $genericGeoLatitude;

    /**
     * @var string
     */
    public $genericGeoLongitude;

    /**
     * @var string
     */
    public $personGender;

    /**
     * @var string
     */
    public $personBirthPlace;

    /**
     * @var string
     */
    public $organizationDuns;

    /**
     * @var string
     */
    public $organizationFounder;

    /**
     * @var string
     */
    public $organizationFoundingDate;

    /**
     * @var string
     */
    public $organizationFoundingLocation;

    /**
     * @var array
     */
    public $organizationContactPoints;

    /**
     * @var string
     */
    public $corporationTickerSymbol;

    /**
     * @var string
     */
    public $localBusinessPriceRange;

    /**
     * @var array
     */
    public $localBusinessOpeningHours;

    /**
     * @var string
     */
    public $restaurantServesCuisine;

    /**
     * @var string
     */
    public $restaurantMenuUrl;

    /**
     * @var string
     */
    public $restaurantReservationsUrl;

    // Public Methods
    // =========================================================================

    public function init()
    {
        parent::init();
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [
                [
                    'siteType',
                    'siteSubType',
                    'siteSpecificType',
                    'computedType',
                    'genericName',
                    'genericAlternateName',
                    'genericDescription',
                    'genericUrl',
                    'genericImage',
                    'genericTelephone',
                    'genericEmail',
                    'genericStreetAddress',
                    'genericAddressLocality',
                    'genericAddressRegion',
                    'genericPostalCode',
                    'genericAddressCountry',
                    'genericGeoLatitude',
                    'genericGeoLongitude',
                    'personGender',
                    'personBirthPlace',
                    'organizationDuns',
                    'organizationFounder',
                    'organizationFoundingDate',
                    'organizationFoundingLocation',
                    'corporationTickerSymbol',
                    'localBusinessPriceRange',
                    'restaurantServesCuisine',
                    'restaurantMenuUrl',
                    'restaurantReservationsUrl',
                ],
                'string'
            ],
            [
                [
                    'genericImageWidth',
                    'genericImageHeight',
                ],
                'integer'
            ],
            [
                [
                    'genericImageIds',
                ],
                'each', 'rule' => ['integer'],
            ],
            [
                [
                    'organizationContactPoints',
                    'localBusinessOpeningHours',
                ],
                ArrayValidator::class
            ],
        ];
    }
}
