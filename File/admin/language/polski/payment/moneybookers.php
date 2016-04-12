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
 * @version     1.5.1.1 $Id: moneybookers.php 3 2011-08-29 11:09:52Z krzysztof.kardasz $
 * @link        http://opencart-polish.googlecode.com
 * @link        http://opencart-polish.googlecode.com/svn/branches/1.5.x/
 */
// Heading					
$_['heading_title']		      = 'Moneybookers';

// Text 					
$_['text_payment']		      = 'Payment';
$_['text_success']		      = 'Sukces: You have modified the Moneybookers details.';
$_['text_moneybookers']	      = '<a onclick="window.open(\'https://www.moneybookers.com/partners/?p=OpenCart\');"><img src="view/image/payment/moneybookers.png" alt="Moneybookers" title="Moneybookers" style="border: 1px solid #EEEEEE;" /></a>';
	
// Entry					
$_['entry_email']		      = 'E-Mail:';
$_['entry_secret']		      = 'Secret:';
$_['entry_total']             = 'Total:<br /><span class="help">The checkout total the order must reach before this payment method becomes active.</span>';
$_['entry_order_status']      = 'Order Status:';
$_['entry_pending_status']    = 'Pending Status :';
$_['entry_canceled_status']   = 'Canceled Status:';
$_['entry_failed_status']     = 'Failed Status:';
$_['entry_chargeback_status'] = 'Chargeback Status:';
$_['entry_geo_zone']          = 'Geo Zone:';
$_['entry_status']            = 'Status:';
$_['entry_sort_order']        = 'Kolejność sortowania:';

// Error					
$_['error_permission']	      = 'Uwaga: Nie masz uprawnień do modyfikacji Moneybookers!'; 
$_['error_email']		      = 'E-Mail Required!';
$_['error_secret']		      = 'Secret Key Required!';
?>