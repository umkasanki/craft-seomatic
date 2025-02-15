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
 * Trait for FoodEstablishment.
 *
 * @author    nystudio107
 * @package   Seomatic
 * @see       https://schema.org/FoodEstablishment
 */

trait FoodEstablishmentTrait
{
    
    /**
     * An official rating for a lodging business or food establishment, e.g. from
     * national associations or standards bodies. Use the author property to
     * indicate the rating organization, e.g. as an Organization with name such as
     * (e.g. HOTREC, DEHOGA, WHR, or Hotelstars).
     *
     * @var Rating
     */
    public $starRating;

    /**
     * The cuisine of the restaurant.
     *
     * @var string|Text
     */
    public $servesCuisine;

    /**
     * Indicates whether a FoodEstablishment accepts reservations. Values can be
     * Boolean, an URL at which reservations can be made or (for backwards
     * compatibility) the strings ```Yes``` or ```No```.
     *
     * @var string|bool|Text|Boolean|URL
     */
    public $acceptsReservations;

    /**
     * Either the actual menu as a structured representation, as text, or a URL of
     * the menu.
     *
     * @var string|URL|Text|Menu
     */
    public $hasMenu;

    /**
     * Either the actual menu as a structured representation, as text, or a URL of
     * the menu.
     *
     * @var string|URL|Menu|Text
     */
    public $menu;

}
