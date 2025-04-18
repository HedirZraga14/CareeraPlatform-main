<?php
/**
 * This file is part of the Cloudinary PHP package.
 *
 * (c) Cloudinary
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Cloudinary\Transformation;

use Cloudinary\ClassUtils;

/**
 * Defines the format of the delivered asset.
 *
 * **Learn more**: <a href=https://cloudinary.com/documentation/image_optimization#how_to_optimize_image_format
 * target="_blank">
 * Image formats</a> |
 * <a href=https://cloudinary.com/documentation/video_manipulation_and_delivery#transcoding_videos_to_other_formats
 * target="_blank">Video formats</a>
 *
 * @api
 */
class Format extends BaseAction implements FormatInterface
{
    use FormatTrait;

    /**
     * Format constructor.
     *
     * @param array $value
     */
    public function __construct(...$value)
    {
        parent::__construct(ClassUtils::verifyVarArgsInstance($value, FormatQualifier::class));
    }

    /**
     * Sets file format.
     *
     * @param string $format The file format.
     *
     */
    public function format(string $format): static
    {
        $this->qualifiers[FormatQualifier::getName()]->format($format);

        return $this;
    }

    /**
     * Automatically use lossy compression when delivering animated GIF files.
     *
     * @param bool $useLossy Indicates whether to use lossy compression.
     *
     *
     * @see Flag::lossy
     */
    public function lossy(bool $useLossy = true): Format
    {
        return $this->setFlag(Flag::lossy(), $useLossy);
    }

    /**
     * Applicable only for JPG file format
     *
     * @param string|null $mode The mode to determine a specific progressive outcome.
     *
     *
     * @see Flag::progressive
     */
    public function progressive(?string $mode = null): Format
    {
        return $this->setFlag(Flag::progressive($mode));
    }

    /**
     * Ensures that images with a transparency channel will be delivered in PNG format.
     *
     *
     * @see Flag::preserveTransparency
     */
    public function preserveTransparency(): Format
    {
        return $this->setFlag(Flag::preserveTransparency());
    }

    /**
     * Ensures that an alpha channel is not applied to a TIFF image if it is a mask channel.
     *
     *
     * @see Flag::ignoreMaskChannels
     */
    public function ignoreMaskChannels(): Format
    {
        return $this->setFlag(Flag::ignoreMaskChannels());
    }
}
