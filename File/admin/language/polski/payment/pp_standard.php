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
 * @version     1.5.1.1 $Id: pp_standard.php 3 2011-08-29 11:09:52Z krzysztof.kardasz $
 * @link        http://opencart-polish.googlecode.com
 * @link        http://opencart-polish.googlecode.com/svn/branches/1.5.x/
 */
// Heading
$_['heading_title']					 = 'PayPal Standard';

// Text
$_['text_payment']					 = 'Payment';
$_['text_success']					 = 'Sukces: You have modified PayPal account details!';
$_['text_pp_standard']				 = '<a onclick="window.open(\'https://www.paypal.com/uk/mrb/pal=W9TBB5DTD6QJW\');"><img src="view/image/payment/paypal.png" alt="PayPal" title="PayPal" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_authorization']			 = 'Authorization';
$_['text_sale']						 = 'Sale';

// Entry
$_['entry_email']					 = 'E-Mail:';
$_['entry_test']					 = 'Sandbox Mode:';
$_['entry_transaction']				 = 'Transaction Method:';
$_['entry_pdt_token']				 = 'PDT Token:<br/><span class="help">Payment Data Transfer Token is used for additional security and reliability. Find out how to enable PDT <a href="https://cms.paypal.com/us/cgi-bin/?&cmd=_render-content&content_ID=developer/howto_html_paymentdatatransfer" alt="">here</a></span>';
$_['entry_debug']					 = 'Debug Mode:<br/><span class="help">Logs additional information to the system log.</span>';
$_['entry_total']                    = 'Total:<br /><span class="help">The checkout total the order must reach before this payment method becomes active.</span>';
$_['entry_canceled_reversal_status'] = 'Canceled Reversal Status:';
$_['entry_completed_status']         = 'Completed Status:';
$_['entry_denied_status']			 = 'Denied Status:';
$_['entry_expired_status']			 = 'Expired Status:';
$_['entry_failed_status']			 = 'Failed Status:';
$_['entry_pending_status']			 = 'Pending Status:';
$_['entry_processed_status']		 = 'Processed Status:';
$_['entry_refunded_status']			 = 'Refunded Status:';
$_['entry_reversed_status']			 = 'Reversed Status:';
$_['entry_voided_status']		     = 'Voided Status:';
$_['entry_geo_zone']				 = 'Geo Zone:';
$_['entry_status']					 = 'Status:';
$_['entry_sort_order']				 = 'Kolejność sortowania:';

// Error
$_['error_permission']				 = 'Uwaga: Nie masz uprawnień do modyfikacji payment PayPal!';
$_['error_email']					 = 'E-Mail required!';
?>