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
 * @version     1.5.1.1 $Id: pp_express.php 3 2011-08-29 11:09:52Z krzysztof.kardasz $
 * @link        http://opencart-polish.googlecode.com
 * @link        http://opencart-polish.googlecode.com/svn/branches/1.5.x/
 */
// Heading
$_['heading_title']      = 'PayPal Express';

// Text 
$_['text_payment']       = 'Payment';
$_['text_success']       = 'Sukces: You have modified PayPal Express Checkout account details!';
$_['text_pp_express']    = '<a onclick="window.open(\'https://www.paypal.com/uk/mrb/pal=W9TBB5DTD6QJW\');"><img src="view/image/payment/paypal.png" alt="PayPal" title="PayPal" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_authorization'] = 'Authorization';
$_['text_sale']          = 'Sale';

// Entry
$_['entry_username']     = 'API Username:';
$_['entry_password']     = 'API Password:';
$_['entry_signature']    = 'API Signature:';
$_['entry_test']         = 'Test Mode:';
$_['entry_method']       = 'Transaction Method:';
$_['entry_total']        = 'Total:<br /><span class="help">The checkout total the order must reach before this payment method becomes active.</span>';
$_['entry_order_status'] = 'Order Status:';
$_['entry_geo_zone']     = 'Geo Zone:';
$_['entry_status']       = 'Status:';
$_['entry_sort_order']   = 'Kolejność sortowania:';

// Error
$_['error_permission']   = 'Uwaga: Nie masz uprawnień do modyfikacji payment PayPal Express Checkout!';
$_['error_username']     = 'API Username Required!'; 
$_['error_password']     = 'API Password Required!'; 
$_['error_signature']    = 'API Signature Required!'; 
?>