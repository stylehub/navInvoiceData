<?php
namespace Dream\NavInvoiceData;

use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\Handler\HandlerRegistryInterface;
use Goetas\Xsd\XsdToPhp\Jms\Handler\BaseTypesHandler;
use Goetas\Xsd\XsdToPhp\Jms\Handler\XmlSchemaDateHandler;

class SerializerFactory
{
    static function create()
    {
        $serializerBuilder = SerializerBuilder::create();

        $serializerBuilder
            ->addMetadataDir(__DIR__ . '../metadata', 'Dream\NavInvoiceExport\Data')
            ->setCacheDir(__DIR__ . '../temp/jmscache')
            ->configureHandlers(function (HandlerRegistryInterface $handler) use ($serializerBuilder) {
                $serializerBuilder->addDefaultHandlers();
                $handler->registerSubscribingHandler(new XmlSchemaDateHandler()); // XMLSchema date handling
                $handler->registerSubscribingHandler(new BaseTypesHandler()); // XMLSchema List handling
            });

        $serializer = $serializerBuilder->build();

        return $serializer;
    }
}