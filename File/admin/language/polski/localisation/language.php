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
 * @version     1.5.1.1 $Id: language.php 3 2011-08-29 11:09:52Z krzysztof.kardasz $
 * @link        http://opencart-polish.googlecode.com
 * @link        http://opencart-polish.googlecode.com/svn/branches/1.5.x/
 */
// Heading
$_['heading_title']     = 'Języki';

// Text
$_['text_success']      = 'Sukces: Zmiany języków zapisane!';

// Column
$_['column_name']       = 'Nazwa';
$_['column_code']       = 'Kod';
$_['column_sort_order'] = 'Kolejność sortowania';
$_['column_action']     = 'Akcja';

// Entry
$_['entry_name']        = 'Język:';
$_['entry_code']        = 'Kod:<br /><span class="help">przykładowo: pl, nie zmieniaj kodu jeżeli jest to twój domyślny język.</span>';
$_['entry_locale']      = 'Lokalizacja:<br /><span class="help">przykładowo: pl_PL.UTF-8,polish,polski</span>';
$_['entry_image']       = 'Zdjęcie:<br /><span class="help">przykładowo: pl.png</span>';
$_['entry_directory']   = 'Katalog:<br /><span class="help">nazwa katalogu języka</span>';
$_['entry_filename']    = 'Nazwa pliku:<br /><span class="help">nazwa pliku głównego języka</span>';
$_['entry_status']      = 'Status:<br /><span class="help">Pokaż/Ukryj język</span>';
$_['entry_sort_order']  = 'Kolejność sortowania:';

// Error
$_['error_permission']  = 'Uwaga: Nie masz uprawnień do modyfikacji języków!';
$_['error_name']        = 'Nazwa powinna zawierać 3-32 znaków!';
$_['error_code']        = 'Kod musi zawierać przynajmniej 2 znaki!';
$_['error_locale']      = 'Lokalizacja wymagana!';
$_['error_image']       = 'Nazwa pliku obrazka powinna zawierać 3-64 znaków!';
$_['error_directory']   = 'Katalog wymagany!';
$_['error_filename']    = 'Nazwa pliku powinna zawierać 3-64 znaków!';
$_['error_default']     = 'Uwaga: This language nie może zostać usunięty ponieważ jest przypisany jako domyślny język!';
$_['error_admin']       = 'Uwaga: This Language nie może zostać usunięty ponieważ jest przypisany jako język administratora!';
$_['error_store']       = 'Uwaga: This language nie może zostać usunięty ponieważ jest przypisany do %s sklepów!';
$_['error_order']       = 'Uwaga: This language nie może zostać usunięty ponieważ jest przypisany do %s zamówień!';
?>