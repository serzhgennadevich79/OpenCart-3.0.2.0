<?php
// Heading
$_['heading_title'] = 'Payeer';

// Text 
$_['text_enabled'] = 'Включено';
$_['text_disabled'] = 'Отключено';
$_['text_payment'] = 'Оплата';
$_['text_edit'] = 'Изменить Payeer';
$_['text_success'] = 'Настройки модуля обновлены!';
$_['text_payeer'] = '<a target="_blank" href="https://www.payeer.com"><img src="view/image/payment/payeer.png" alt="Payeer" title="Payeer" /></a>';

// Entry
$_['entry_url'] = 'URL мерчанта';
$_['entry_merchant'] = 'Идентификатор магазина';
$_['entry_security'] = 'Секретный ключ';
$_['entry_geo_zone'] = 'Географическая зона';
$_['entry_status'] = 'Статус';
$_['entry_order_wait'] = 'Статус ожидания оплаты';
$_['entry_order_success'] = 'Статус успешной оплаты';
$_['entry_order_fail'] = 'Статус неудачной оплаты';
$_['entry_sort_order'] = 'Порядок сортировки';
$_['entry_log'] = 'Путь к журналу транзакций';
$_['entry_list_ip'] = 'IP фильтр входящих запросов';
$_['entry_admin_email'] = 'E-mail для оповещения об ошибках:';

// Help
$_['help_url'] = 'URL для оплаты в системе Payeer';
$_['help_merchant'] = 'Идентификатор магазина, зарегистрированного в платежной системе Payeer';
$_['help_security'] = 'Секретный ключ оповещения о выполнении платежа, который используется для проверки целостности полученной информации и однозначной идентификации отправителя. Должен совпадать с секретным ключем, указанным в личном кабинете Payeer';
$_['help_log'] = 'Путь к файлу, где будет сохраняться вся история оплаты в Payeer';
$_['help_list_ip'] = 'Список доверенных IP с поддержкой маски (Например: 123.456.78.90, 123.456.*.*)';
$_['help_admin_email'] = 'E-mail администратора для оповещения об ошибках оплаты';

// Error
$_['error_permission'] = 'У Вас нет прав для управления этим модулем!';
$_['error_url'] = 'Необходимо указать URL мерчанта!';
$_['error_merchant'] = 'Необходимо указать идентификатор магазина!';
$_['error_security'] = 'Необходимо указать секретный код!';