<?php
/**
 * This file is part of OXID eSales GDPR base module.
 *
 * OXID eSales GDPR base module is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * OXID eSales GDPR base module is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with OXID eSales GDPR base module.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @link      http://www.oxid-esales.com
 * @copyright (C) OXID eSales AG 2003-2018
 */

/**
 * @internal
 */
class oeGdprBaseContainer
{
    /**
     * @var oeGdprBaseContainer
     */
    private static $instance;

    /**
     * @var oeGdprBaseReviewServiceFactory
     */
    private $reviewServiceFactory;

    /**
     * oeGdprBaseContainer constructor.
     */
    protected function __construct()
    {
    }

    /**
     * @return oeGdprBaseContainer
     */
    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    /**
     * @return oeGdprBaseUserReviewAndRatingBridge
     */
    public function getUserReviewAndRatingBridge()
    {
        return $this
            ->getReviewServiceFactory()
            ->getUserReviewAndRatingBridge();
    }

    /**
     * @return oeGdprBaseProductRatingBridge
     */
    public function getProductRatingBridge()
    {
        return $this
            ->getReviewServiceFactory()
            ->getProductRatingBridge();
    }

    /**
     * @return oeGdprBaseUserRatingBridge
     */
    public function getUserRatingBridge()
    {
        return $this
            ->getReviewServiceFactory()
            ->getUserRatingBridge();
    }

    /**
     * @return oeGdprBaseUserReviewBridge
     */
    public function getUserReviewBridge()
    {
        return $this
            ->getReviewServiceFactory()
            ->getUserReviewBridge();
    }

    /**
     * @return oeGdprBaseReviewServiceFactory
     */
    private function getReviewServiceFactory()
    {
        if (!$this->reviewServiceFactory) {
            $this->reviewServiceFactory = new oeGdprBaseReviewServiceFactory();
        }

        return $this->reviewServiceFactory;
    }
}
