<?php
/**
 * OpenCart 1.5.1.1 Polskie Tłumaczenie
 *
 * This script is protected by copyright. It's use, copying, modification
 * and distribution without written consent of the author is prohibited.
 *
 *
 * @category    OpenCart
 * @package     OpenCart
 * @author      Krzysztof Kardasz <krzysztof.kardasz@gmail.com>
 * @copyright   Copyright (c) 2011 Krzysztof Kardasz
 * @license     http://www.gnu.org/licenses/lgpl-3.0.txt  GNU Lesser General Public
 * @version     1.5.1.1 $Id: country.php 3 2011-08-29 11:09:52Z krzysztof.kardasz $
 * @link        http://opencart-polish.googlecode.com
 * @link        http://opencart-polish.googlecode.com/svn/branches/1.5.x/
 */
// Heading
$_['heading_title']           = 'Kraj';

// Text
$_['text_success']            = 'Sukces: Zmiany kraju zostały zapisane!';

// Column
$_['column_name']             = 'Nazwa kraju';
$_['column_iso_code_2']       = 'Kod ISO (2)';
$_['column_iso_code_3']       = 'Kod ISO (3)';
$_['column_action']           = 'Akcja';

// Entry
$_['entry_name']              = 'Nazwa kraju:';
$_['entry_iso_code_2']        = 'Kod ISO (2):';
$_['entry_iso_code_3']        = 'Kod ISO (3):';
$_['entry_address_format']    = 'Format adresu:<br /><span class="help">
Imię = {firstname}<br />
Nazwisko = {lastname}<br />
Firma = {company}<br />
Adres 1 = {address_1}<br />
Adres 2 = {address_2}<br />
Miasto = {city}<br />
Kod pocztowy = {postcode}<br />
Strefa = {zone}<br />
Kod strefy = {zone_code}<br />
Kraj = {country}</span>';
$_['entry_postcode_required'] = 'Kod pocztowy wymagany:';
$_['entry_status']            = 'Status:';

// Error
$_['error_permission']        = 'Uwaga: Nie masz uprawnień do modyfikacji krajów!';
$_['error_name']              = 'Nazwa kraju powinna zawierać 3-128 znaków!';
$_['error_default']           = 'Uwaga: Kraj nie może zostać usunięty ponieważ jest przypisany jako domyślny dla sklepu!';
$_['error_store']             = 'Uwaga: Kraj nie może zostać usunięty ponieważ jest przypisany do %s sklepów!';
$_['error_address']           = 'Uwaga: Kraj nie może zostać usunięty ponieważ jest przypisany do %s kontaktów!';
$_['error_affiliate']         = 'Uwaga: Kraj nie może zostać usunięty ponieważ jest przypisany do %s partnerów!';
$_['error_zone']              = 'Uwaga: Kraj nie może zostać usunięty ponieważ jest przypisany do %s stref!';
$_['error_zone_to_geo_zone']  = 'Uwaga: Kraj nie może zostać usunięty ponieważ jest przypisany do %s stref geograficznych!';
?>