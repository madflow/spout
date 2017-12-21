<?php

namespace Box\Spout\Common\Entity\Style;

use Box\Spout\Common\Exception\InvalidStylePropertyException;

class Alignment
{
    const HORIZONTAL_GENERAL = 'general';
    const HORIZONTAL_LEFT = 'left';
    const HORIZONTAL_RIGHT = 'right';
    const HORIZONTAL_CENTER = 'center';
    const HORIZONTAL_JUSTIFY = 'justify';
    const HORIZONTAL_CENTER_CONTINUOUS = 'centerContinuous';
    const HORIZONTAL_DISTRIBUTED = 'distributed';

    const VERTICAL_TOP = 'top';
    const VERTICAL_BOTTOM = 'bottom';
    const VERTICAL_CENTER = 'center';
    const VERTICAL_JUSTIFY = 'justify';
    const VERTICAL_DISTRIBUTED = 'distributed';

    /**
     * @var string
     */
    protected $verticalAlignment;

    /**
     * @var string
     */
    protected $horizontalAlignment;

    /**
     * @var int
     */
    protected $indention;

    /**
     * @param string $horizontalAlignment
     * @param string $verticalAlignment
     * @param int $indention
     */
    public function __construct($horizontalAlignment, $verticalAlignment, $indention)
    {
        $this->verticalAlignment = $verticalAlignment;
        $this->horizontalAlignment = $horizontalAlignment;
        $this->indention = $indention;
    }

    /**
     * @return string
     */
    public function getVerticalAlignment()
    {
        return $this->verticalAlignment;
    }

    /**
     * @param string $verticalAlignment
     * @return Alignment
     * @throws InvalidStylePropertyException
     */
    public function setVerticalAlignment($verticalAlignment)
    {
        if(!in_array($verticalAlignment, self::getValidVerticalAlignments())) {
            throw new InvalidStylePropertyException(
                sprintf('%s is not valid for a vertical alignment', $verticalAlignment)
            );
        }
        $this->verticalAlignment = $verticalAlignment;
        return $this;
    }

    /**
     * @return string
     */
    public function getHorizontalAlignment()
    {
        return $this->horizontalAlignment;
    }

    /**
     * @param string $horizontalAlignment
     * @return Alignment
     * @throws InvalidStylePropertyException
     */
    public function setHorizontalAlignment($horizontalAlignment)
    {
        if(!in_array($horizontalAlignment, self::getValidVerticalAlignments())) {
            throw new InvalidStylePropertyException(
                sprintf('%s is not valid for an horizontal alignment', $horizontalAlignment)
            );
        }
        $this->horizontalAlignment = $horizontalAlignment;
        return $this;
    }

    /**
     * @return int
     */
    public function getIndention()
    {
        return $this->indention;
    }

    /**
     * @param int $indention
     * @return Alignment
     */
    public function setIndention($indention)
    {
        $this->indention = $indention;
        return $this;
    }

    public static function getValidHorizontalAlignments()
    {
        return [
            self::HORIZONTAL_GENERAL,
            self::HORIZONTAL_LEFT,
            self::HORIZONTAL_RIGHT,
            self::HORIZONTAL_CENTER,
            self::HORIZONTAL_JUSTIFY,
            self::HORIZONTAL_CENTER_CONTINUOUS,
            self::HORIZONTAL_DISTRIBUTED,
        ];
    }

    public static function getValidVerticalAlignments()
    {
        return [
            self::VERTICAL_TOP,
            self::VERTICAL_BOTTOM,
            self::VERTICAL_CENTER,
            self::VERTICAL_JUSTIFY,
            self::VERTICAL_DISTRIBUTED,
        ];
    }

}