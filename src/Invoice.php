<?php

namespace Dream\NavInvoiceData;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class representing Invoice
 *
 * @Serializer\XmlRoot(name="Invoice", namespace="http://schemas.nav.gov.hu/OSA/1.0/data")
 */
class Invoice extends InvoiceType
{


}

