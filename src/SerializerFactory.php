<?php
namespace Dream\NavInvoiceData;

use JMS\Serializer\Naming\IdenticalPropertyNamingStrategy;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\Serializer;
use JMS\Serializer\Handler\HandlerRegistryInterface;
use GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\BaseTypesHandler;
use GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\XmlSchemaDateHandler;

class SerializerFactory
{
    /**
     *
     * @return Serializer
     */
    static function create()
    {
        $serializerBuilder = SerializerBuilder::create();

        $cacheDir = realpath(__DIR__ . '/..') . '/temp';
        if (!file_exists($cacheDir)) {
            mkdir($cacheDir, true);
        }

        $serializerBuilder
            ->addMetadataDir(realpath(__DIR__ . '/../metadata'), 'Dream\NavInvoiceExport\Data')
            ->setPropertyNamingStrategy(new IdenticalPropertyNamingStrategy())
            ->setCacheDir($cacheDir)
            ->configureHandlers(function (HandlerRegistryInterface $handler) use ($serializerBuilder) {
                $serializerBuilder->addDefaultHandlers();
                $handler->registerSubscribingHandler(new BaseTypesHandler()); // XMLSchema List handling
                $handler->registerSubscribingHandler(new XmlSchemaDateHandler()); // XMLSchema date handling
            });

        $serializer = $serializerBuilder->build();

        return $serializer;
    }
}