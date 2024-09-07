<?php
// Text
$_['text_title']				= 'Factura de Klarna: pague en 14 días';
$_['text_terms_fee']			= '<span id="klarna_invoice_toc"></span> (+%s)<script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\', charge: %s});</script></span>';
$_['text_terms_no_fee']			= '<span id="klarna_invoice_toc"></span><script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\'});</script>';
$_['text_additional']			= 'Klarna Invoice requiere información adicional antes de que puedan procesar su pedido.';
$_['text_male']					= 'Masculino';
$_['text_female']				= 'Hembra';
$_['text_year']					= 'Año';
$_['text_month']				= 'Mes';
$_['text_day']					= 'Día';
$_['text_comment']				= 'Klarna\'s Invoice ID: %s.' . "\n" . '%s/%s: %.4f';

// Entry
$_['entry_gender']				= 'Género';
$_['entry_pno']					= 'Número personal';
$_['entry_dob']					= 'Fecha de nacimiento';
$_['entry_phone_no']			= 'Número de teléfono';
$_['entry_street']				= 'Calle';
$_['entry_house_no']			= 'Casa no.';
$_['entry_house_ext']			= 'Casa Ext.';
$_['entry_company']				= 'Número de registro de la compañía';

// Help
$_['help_pno']					= 'Por favor ingrese su número de Seguro Social aquí.';
$_['help_phone_no']				= 'Por favor, introduzca su número de teléfono.';
$_['help_street']				= 'Tenga en cuenta que la entrega solo puede realizarse a la dirección registrada cuando se paga con Klarna.';
$_['help_house_no']				= 'Por favor ingrese su número de casa.';
$_['help_house_ext']			= 'Por favor envíe su extensión de casa aquí. P.ej. A, B, C, rojo, azul ect.';
$_['help_company']				= 'Por favor ingrese el número de registro de su compañía';

// Error
$_['error_deu_terms']			= 'Debes aceptar la política de privacidad de Klarna (Datenschutz)';
$_['error_address_match']		= 'Las direcciones de facturación y envío deben coincidir si desea usar la factura de Klarna.';
$_['error_network']				= 'Se produjo un error al conectarse a Klarna. Por favor, inténtelo de nuevo más tarde.';