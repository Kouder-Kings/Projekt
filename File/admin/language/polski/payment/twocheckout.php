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
 * @version     1.5.1.1 $Id: twocheckout.php 3 2011-08-29 11:09:52Z krzysztof.kardasz $
 * @link        http://opencart-polish.googlecode.com
 * @link        http://opencart-polish.googlecode.com/svn/branches/1.5.x/
 */
// Heading
$_['heading_title']      = '2Checkout';

// Text 
$_['text_payment']       = 'Payment';
$_['text_success']       = 'Sukces: You have modified 2Checkout account details!';

// Entry
$_['entry_account']      = '2Checkout Account ID:';
$_['entry_secret']       = 'Secret Word:<br /><span class="help">The secret word to confirm transactions with (must be the same as defined on the merchat account configuration page.</span>';
$_['entry_test']         = 'Test Mode:';
$_['entry_total']        = 'Total:<br /><span class="help">The checkout total the order must reach before this payment method becomes active.</span>';
$_['entry_order_status'] = 'Order Status:';
$_['entry_geo_zone']     = 'Geo Zone:';
$_['entry_status']       = 'Status:';
$_['entry_sort_order']   = 'Kolejność sortowania:';

// Error
$_['error_permission']   = 'Uwaga: Nie masz uprawnień do modyfikacji payment 2Checkout!';
$_['error_account']      = 'Account No. Required!';
$_['error_secret']       = 'Secret Word Required!';
?>