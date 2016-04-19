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
 * @version     1.5.1.1 $Id: worldpay.php 3 2011-08-29 11:09:52Z krzysztof.kardasz $
 * @link        http://opencart-polish.googlecode.com
 * @link        http://opencart-polish.googlecode.com/svn/branches/1.5.x/
 */
// Heading
$_['heading_title']      = 'WorldPay';

// Text 
$_['text_payment']       = 'Payment';
$_['text_success']       = 'Sukces: You have modified WorldPay account details!';
$_['text_successful']    = 'On - Always Successful';
$_['text_declined']      = 'On - Always Declined';
$_['text_off']           = 'Off';
      
// Entry
$_['entry_merchant']     = 'Merchant ID:';
$_['entry_password']     = 'Payment Response password:<br /><span class="help">This has to be set in the WordPay control panel.</span>';
$_['entry_callback']     = 'Relay Response URL:<br /><span class="help">This has to be set in the WordPay control panel. You will also need to check the "Enable the Shopper Response".</span>';
$_['entry_test']         = 'Test Mode:';
$_['entry_total']        = 'Total:<br /><span class="help">The checkout total the order must reach before this payment method becomes active.</span>';
$_['entry_order_status'] = 'Order Status:';
$_['entry_geo_zone']     = 'Geo Zone:';
$_['entry_status']       = 'Status:';
$_['entry_sort_order']   = 'Kolejność sortowania:';

// Error
$_['error_permission']   = 'Uwaga: Nie masz uprawnień do modyfikacji payment WorldPay!';
$_['error_merchant']     = 'Merchant ID Required!';
$_['error_password']     = 'Password Required!';
?>