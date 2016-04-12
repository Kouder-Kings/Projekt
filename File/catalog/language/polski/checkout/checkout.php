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
 * @version     1.5.1.1 $Id: checkout.php 3 2011-08-29 11:09:52Z krzysztof.kardasz $
 * @link        http://opencart-polish.googlecode.com
 * @link        http://opencart-polish.googlecode.com/svn/branches/1.5.x/
 */
// Heading
$_['heading_title']                  = 'Zamówienie';

// Text
$_['text_cart']                      = 'Koszyk';
$_['text_checkout_option']           = 'Krok 1: Opcje zamówienia';
$_['text_checkout_account']          = 'Krok 2: Konto i dane osobiste';
$_['text_checkout_payment_address']  = 'Krok 2: Szczegóły płatności';
$_['text_checkout_shipping_address'] = 'Krok 3: Szczegóły dostawy';
$_['text_checkout_shipping_method']  = 'Krok 4: Opcje dostawy';
$_['text_checkout_payment_method']   = 'Krok 5: Metoda płatności';
$_['text_checkout_confirm']          = 'Krok 6: Potwierdzenie zamówienia';
$_['text_modify']                    = 'Zmień &raquo;';
$_['text_new_customer']              = 'Nowy klient';
$_['text_returning_customer']        = 'Zaloguj się';
$_['text_checkout']                  = 'Opcje zamówienia:';
$_['text_i_am_returning_customer']   = 'Posiadam konto w sklepie';
$_['text_register']                  = 'Załóż nowe konte';
$_['text_guest']                     = 'Nie chcę zakładać konta';
$_['text_register_account']          = 'Zakładając konto będziesz mógł kupować szybciej, śledzić na bieżąco status zamówienia i mieć podgląd do historii zamówionych produktów..';
$_['text_forgotten']                 = 'Zapomniałem hasło';
$_['text_your_details']              = 'Twoje dane osobowe';
$_['text_your_address']              = 'Twój adres';
$_['text_your_password']             = 'Twoje Hasło';
$_['text_agree']                     = 'Przeczytałem i akceptuję <a class="fancybox" href="%s" alt="%s"><b>%s</b></a>';
$_['text_address_new']               = 'Chcę podać nowy adres';
$_['text_address_existing']          = 'Chcę użyć istniejącego adresu';
$_['text_shipping_method']           = 'Proszę wybrać formę dostawy.';
$_['text_payment_method']            = 'Proszę wybrać sposób płatności.';
$_['text_comments']                  = 'Uwagi do zamówienia';

// Column
$_['column_name']                    = 'Nazwa produktu';
$_['column_model']                   = 'Model';
$_['column_quantity']                = 'Ilość';
$_['column_price']                   = 'Cena';
$_['column_total']                   = 'Suma';

// Entry
$_['entry_email_address']            = 'Adres E-Mail:';
$_['entry_email']                    = 'E-Mail:';
$_['entry_password']                 = 'Hasło:';
$_['entry_confirm']                  = 'Powtórz hasło:';
$_['entry_firstname']                = 'Imię:';
$_['entry_lastname']                 = 'Nazwisko:';
$_['entry_telephone']                = 'Telefon:';
$_['entry_fax']                      = 'Fax:';
$_['entry_company']                  = 'Firma:';
$_['entry_address_1']                = 'Adres:';
$_['entry_address_2']                = 'Adres kontynuacja:';
$_['entry_postcode']                 = 'Kod pocztowy:';
$_['entry_city']                     = 'Miasto:';
$_['entry_country']                  = 'Kraj:';
$_['entry_zone']                     = 'Region / Województwo:';
$_['entry_newsletter']               = 'Chcę otrzymywać newsletter';
$_['entry_shipping'] 	             = 'Adres dostawy taki sam jak adres zamieszkania.';

// Error
$_['error_warning']                  = 'Wystąpił problem podczas składania zamówienia! Spróbuj wybrać inną formę płatności lub skontaktuj się z <a href="%s">z obsługą sklepu</a>.';
$_['error_minimum']                  = 'Minimalna wartość zamówienia produktu %s to %s!';
$_['error_login']                    = 'Uwaga: Błędny adres email lub hasło.';
$_['error_exists']                   = 'Uwaga: Adres email już istnieje prosimy wybrać inny!';
$_['error_firstname']                = 'Imię powinno zawierać 1-32 znaków!';
$_['error_lastname']                 = 'Nazwisko powinno zawierać 1-32 znaków!';
$_['error_email']                    = 'Adres E-Mail jest nieprawidłowy!';
$_['error_telephone']                = 'Numer telefonu powinien zawierać 3-32 znaków!';
$_['error_password']                 = 'Hasło powinno zawierać 3-20 znaków!';
$_['error_confirm']                  = 'Hasło i hasło powtórzone nie są takie same!';
$_['error_address_1']                = 'Adres powinien zawierać 3-128 znaków!';
$_['error_city']                     = 'Miasto powinno zawierać 2-128 znaków!';
$_['error_postcode']                 = 'Kod pocztowy powinien zawierać 2-10 znaków!';
$_['error_country']                  = 'Wybierz kraj!';
$_['error_zone']                     = 'Wybierz region / województwo!';
$_['error_agree']                    = 'Uwaga: Musisz wyrażić zgodę: %s!';
$_['error_address']                  = 'Uwaga: Musisz wybrać adres!';
$_['error_shipping']                 = 'Uwaga: Forma dostawy jest wymagana!';
$_['error_no_shipping']              = 'Brak dostępnych form dostawy. Prosimy o <a href="%s">kontakt</a> w celu uzyskania pomocy!';
$_['error_payment']                  = 'Uwaga: Sposób płatości jest wymagany!';
$_['error_no_payment']               = 'Uwaga: Brak dostępnych sposobów płatności. Prosimy o <a href="%s">kontakt</a> w celu uzyskania pomocy!';
?>