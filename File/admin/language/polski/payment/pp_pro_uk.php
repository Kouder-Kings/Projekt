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
 * @version     1.5.1.1 $Id: pp_pro_uk.php 3 2011-08-29 11:09:52Z krzysztof.kardasz $
 * @link        http://opencart-polish.googlecode.com
 * @link        http://opencart-polish.googlecode.com/svn/branches/1.5.x/
 */
// Heading
$_['heading_title']      = 'PayPal Website Payment Pro (UK)';

// Text 
$_['text_payment']       = 'Payment';
$_['text_success']       = 'Sukces: You have modified PayPal Direct (UK) account details!';
$_['text_pp_pro_uk']     = '<a onclick="window.open(\'https://www.paypal.com/uk/mrb/pal=W9TBB5DTD6QJW\');"><img src="view/image/payment/paypal.png" alt="PayPal Website Payment Pro (UK)" title="PayPal Website Payment Pro (UK)" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_authorization'] = 'Authorization';
$_['text_sale']          = 'Sale';

// Entry
$_['entry_vendor']       = 'Vendor:<br /><span class="help">Your merchant login ID that you created when you registered for the Website Payments Pro account.</span>';
$_['entry_user']         = 'User:<br /><span class="help">If you set up one or more additional users on the account, this value is the ID of the user authorised to process transactions. If, however, you have not set up additional users on the account, USER has the same value as VENDOR.</span>';
$_['entry_password']     = 'Password:<br /><span class="help">The 6 to 32 character password that you defined while registering for the account.</span>';
$_['entry_partner']      = 'Partner:<br /><span class="help">The ID provided to you by the authorised PayPal Reseller who registered you for the Payflow SDK. If you purchased your account directly from PayPal, use PayPalUK.</span>';
$_['entry_test']         = 'Test Mode:<br /><span class="help">Use the live or testing (sandbox) gateway server to process transactions?</span>';
$_['entry_transaction']  = 'Transaction Method:';
$_['entry_total']        = 'Total:<br /><span class="help">The checkout total the order must reach before this payment method becomes active.</span>';
$_['entry_order_status'] = 'Order Status:';
$_['entry_geo_zone']     = 'Geo Zone:';
$_['entry_status']       = 'Status:';
$_['entry_sort_order']   = 'Kolejność sortowania:';

// Error
$_['error_permission']   = 'Uwaga: Nie masz uprawnień do modyfikacji payment PayPal Website Payment Pro (UK)!';
$_['error_vendor']       = 'Vendor Required!'; 
$_['error_user']         = 'User Required!'; 
$_['error_password']     = 'Password Required!'; 
$_['error_partner']      = 'Partner Required!'; 
?>