<?php

namespace InsologyStudio\Qrcode\Facades;

use BaconQrCode\Renderer\Color\ColorInterface;
use BaconQrCode\Renderer\Eye\EyeInterface;
use BaconQrCode\Renderer\Image\ImageBackEndInterface;
use BaconQrCode\Renderer\ImageRenderer;
use BaconQrCode\Renderer\Module\ModuleInterface;
use BaconQrCode\Renderer\RendererStyle\Fill;
use BaconQrCode\Renderer\RendererStyle\RendererStyle;
use BaconQrCode\Writer;
use Illuminate\Support\Facades\Facade;
use InsologyStudio\Qrcode\Generator;

/**
 * @method static void|\Illuminate\Support\HtmlString|string generate(string $text, string $filename = null)
 * @method static Generator merge(string $filepath, float $percentage = .2, bool $absolute = false)
 * @method static Generator mergeString(string $content, float $percentage = .2)
 * @method static Generator size(int $pixels)
 * @method static Generator format(string $format)
 * @method static Generator color(int $red, int $green, int $blue, ?int $alpha = null)
 * @method static Generator backgroundColor(int $red, int $green, int $blue, ?int $alpha = null)
 * @method static Generator eyeColor(int $eyeNumber, int $innerRed, int $innerGreen, int $innerBlue, int $outterRed = 0, int $outterGreen = 0, int $outterBlue = 0)
 * @method static Generator gradient($startRed, $startGreen, $startBlue, $endRed, $endGreen, $endBlue, string $type)
 * @method static Generator eye(string $style)
 * @method static Generator style(string $style, float $size = 0.5)
 * @method static Generator encoding(string $encoding)
 * @method static Generator errorCorrection(string $errorCorrection)
 * @method static Generator margin(int $margin)
 * @method static Writer getWriter(ImageRenderer $renderer)
 * @method static ImageRenderer getRenderer()
 * @method static RendererStyle getRendererSytle()
 * @method static ImageBackEndInterface getFormatter()
 * @method static ModuleInterface getModule()
 * @method static EyeInterface getEye()
 * @method static Fill getFill()
 * @method static ColorInterface createColor(int $red, int $green, int $blue, ?int $alpha = null)
 *
 * @see Generator
 */
class QrCode extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        self::clearResolvedInstance(Generator::class);

        return Generator::class;
    }
}
