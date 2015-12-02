

# magento-sslcommerz

Compatible with: 1.5, 1.6, 1.6.1, 1.6.2.0, 1.7, 1.8, 1.8.1, 1.9.2.2

For Live Store Update:

1. Remove testbox  Url  Value ./app/design/frontend/base/default/template/Sslcommerz/redirect.phtml
action="https://www.sslcommerz.com.bd/gwprocess/testbox/" Remove testbox as action='https://www.sslcommerz.com.bd/gwprocess/'>


<input type="hidden" name="store_id" value="testbox"> Change value="yourstoreid" 

2. Remove testbox url and add your store id Passward
/app/design/frontend/base/default/template/checkout/success.phtml 
(or  /site/app/design/frontend/default/yourtheme/template/checkout/success.phtml )

$store_id=urlencode("testbox"); Change"yourstoreid" 
$store_passwd=urlencode("qwerty"); Change"your-store password" 
$requested_url = ("https://www.sslcommerz.com.bd/validator/api/testbox/validationserverAPI.php
Remove  testbox
$requested_url = ("https://www.sslcommerz.com.bd/validator/api/validationserverAPI.php
