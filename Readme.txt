

# magento-sslcommerz
#Abdul Matin


For Live Store Update:

1. Remove testbox  Url  Value ./app/design/frontend/base/default/template/Sslcommerz/redirect.phtml
action="https://www.sslcommerz.com.bd/testbox/process/index.php" Change to 
action="https://www.sslcommerz.com.bd/process/index.php">


<input type="hidden" name="store_id" value="test"> Change value="dailybazar24test001" 

2. Remove testbox url and add your store vai

/site/app/design/frontend/default/your_theme/template/checkout/success.phtml 

[not mandatory: ./app/design/frontend/default/default/template/checkout/success.phtml if use another/change theme not mendatory]


$c = new soapclient('https://www.sslcommerz.com.bd/testbox/validator/validationserver.php?wsdl');  Remove testbox
$c = new soapclient('https://www.sslcommerz.com.bd/validator/validationserver.php?wsdl');