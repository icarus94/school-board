<?php
declare(strict_types=1);

namespace BS\SchoolBoard\Strategy\Response;

use Laminas\Diactoros\Response\XmlResponse;
use Psr\Http\Message\ResponseInterface;

/**
 * Class Xml
 *
 * @package BS\SchoolBoard\Strategy\Response
 */
final class Xml implements GeneratorInterface
{
    /**
     * @var \BS\Common\Helper\XmlConverterInterface
     */
    private $xmlConverter;

    /**
     * Xml constructor.
     *
     * @param \BS\Common\Helper\XmlConverterInterface $xmlConverter
     */
    public function __construct(\BS\Common\Helper\XmlConverterInterface $xmlConverter)
    {
        $this->xmlConverter = $xmlConverter;
    }

    /**
     * Get Response
     *
     * @param \stdClass $formattedObject formatted object
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function getResponse(\stdClass $formattedObject): ResponseInterface
    {
        $xml = $this->xmlConverter->convert($formattedObject);
        return new XmlResponse($xml);
    }
}
