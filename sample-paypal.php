<?php
/**
 * Test with PayPal
 * @package PayPal
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
ini_set('memory_limit','512M');
ini_set('display_errors', true);
error_reporting(-1);
/**
 * Load autoload
 */
require_once dirname(__FILE__) . '/PayPalAutoload.php';
/**
 * PayPal Informations
 */
define('PAYPAL_WSDL_URL','https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl');
define('PAYPAL_USER_LOGIN','');
define('PAYPAL_USER_PASSWORD','');
/**
 * Wsdl instanciation infos
 */
$wsdl = array();
$wsdl[PayPalWsdlClass::WSDL_URL] = PAYPAL_WSDL_URL;
$wsdl[PayPalWsdlClass::WSDL_CACHE_WSDL] = WSDL_CACHE_NONE;
$wsdl[PayPalWsdlClass::WSDL_TRACE] = true;
if(PAYPAL_USER_LOGIN !== '')
	$wsdl[PayPalWsdlClass::WSDL_LOGIN] = PAYPAL_USER_LOGIN;
if(PAYPAL_USER_PASSWORD !== '')
	$wsdl[PayPalWsdlClass::WSDL_PASSWD] = PAYPAL_USER_PASSWORD;
// etc....
/**
 * Examples
 */


/*********************************
 * Example for PayPalServiceRefund
 */
$payPalServiceRefund = new PayPalServiceRefund($wsdl);
// sample call for PayPalServiceRefund::setSoapHeaderRequesterCredentials() in order to initialize required SoapHeader
$payPalServiceRefund->setSoapHeaderRequesterCredentials(new PayPalStructCustomSecurityHeaderType(/*** update parameters list ***/));
// sample call for PayPalServiceRefund::RefundTransaction()
if($payPalServiceRefund->RefundTransaction(new PayPalStructRefundTransactionReq(/*** update parameters list ***/)))
	print_r($payPalServiceRefund->getResult());
else
	print_r($payPalServiceRefund->getLastError());

/***********************************
 * Example for PayPalServiceInitiate
 */
$payPalServiceInitiate = new PayPalServiceInitiate($wsdl);
// sample call for PayPalServiceInitiate::setSoapHeaderRequesterCredentials() in order to initialize required SoapHeader
$payPalServiceInitiate->setSoapHeaderRequesterCredentials(new PayPalStructCustomSecurityHeaderType(/*** update parameters list ***/));
// sample call for PayPalServiceInitiate::InitiateRecoup()
if($payPalServiceInitiate->InitiateRecoup(new PayPalStructInitiateRecoupReq(/*** update parameters list ***/)))
	print_r($payPalServiceInitiate->getResult());
else
	print_r($payPalServiceInitiate->getLastError());

/***********************************
 * Example for PayPalServiceComplete
 */
$payPalServiceComplete = new PayPalServiceComplete($wsdl);
// sample call for PayPalServiceComplete::setSoapHeaderRequesterCredentials() in order to initialize required SoapHeader
$payPalServiceComplete->setSoapHeaderRequesterCredentials(new PayPalStructCustomSecurityHeaderType(/*** update parameters list ***/));
// sample call for PayPalServiceComplete::CompleteRecoup()
if($payPalServiceComplete->CompleteRecoup(new PayPalStructCompleteRecoupReq(/*** update parameters list ***/)))
	print_r($payPalServiceComplete->getResult());
else
	print_r($payPalServiceComplete->getLastError());

/*********************************
 * Example for PayPalServiceCancel
 */
$payPalServiceCancel = new PayPalServiceCancel($wsdl);
// sample call for PayPalServiceCancel::setSoapHeaderRequesterCredentials() in order to initialize required SoapHeader
$payPalServiceCancel->setSoapHeaderRequesterCredentials(new PayPalStructCustomSecurityHeaderType(/*** update parameters list ***/));
// sample call for PayPalServiceCancel::CancelRecoup()
if($payPalServiceCancel->CancelRecoup(new PayPalStructCancelRecoupReq(/*** update parameters list ***/)))
	print_r($payPalServiceCancel->getResult());
else
	print_r($payPalServiceCancel->getLastError());

/******************************
 * Example for PayPalServiceGet
 */
$payPalServiceGet = new PayPalServiceGet($wsdl);
// sample call for PayPalServiceGet::setSoapHeaderRequesterCredentials() in order to initialize required SoapHeader
$payPalServiceGet->setSoapHeaderRequesterCredentials(new PayPalStructCustomSecurityHeaderType(/*** update parameters list ***/));
// sample call for PayPalServiceGet::GetTransactionDetails()
if($payPalServiceGet->GetTransactionDetails(new PayPalStructGetTransactionDetailsReq(/*** update parameters list ***/)))
	print_r($payPalServiceGet->getResult());
else
	print_r($payPalServiceGet->getLastError());
// sample call for PayPalServiceGet::GetBoardingDetails()
if($payPalServiceGet->GetBoardingDetails(new PayPalStructGetBoardingDetailsReq(/*** update parameters list ***/)))
	print_r($payPalServiceGet->getResult());
else
	print_r($payPalServiceGet->getLastError());
// sample call for PayPalServiceGet::GetMobileStatus()
if($payPalServiceGet->GetMobileStatus(new PayPalStructGetMobileStatusReq(/*** update parameters list ***/)))
	print_r($payPalServiceGet->getResult());
else
	print_r($payPalServiceGet->getLastError());
// sample call for PayPalServiceGet::GetBalance()
if($payPalServiceGet->GetBalance(new PayPalStructGetBalanceReq(/*** update parameters list ***/)))
	print_r($payPalServiceGet->getResult());
else
	print_r($payPalServiceGet->getLastError());
// sample call for PayPalServiceGet::GetPalDetails()
if($payPalServiceGet->GetPalDetails(new PayPalStructGetPalDetailsReq(/*** update parameters list ***/)))
	print_r($payPalServiceGet->getResult());
else
	print_r($payPalServiceGet->getLastError());
// sample call for PayPalServiceGet::GetAuthDetails()
if($payPalServiceGet->GetAuthDetails(new PayPalStructGetAuthDetailsReq(/*** update parameters list ***/)))
	print_r($payPalServiceGet->getResult());
else
	print_r($payPalServiceGet->getLastError());
// sample call for PayPalServiceGet::GetAccessPermissionDetails()
if($payPalServiceGet->GetAccessPermissionDetails(new PayPalStructGetAccessPermissionDetailsReq(/*** update parameters list ***/)))
	print_r($payPalServiceGet->getResult());
else
	print_r($payPalServiceGet->getLastError());
// sample call for PayPalServiceGet::GetIncentiveEvaluation()
if($payPalServiceGet->GetIncentiveEvaluation(new PayPalStructGetIncentiveEvaluationReq(/*** update parameters list ***/)))
	print_r($payPalServiceGet->getResult());
else
	print_r($payPalServiceGet->getLastError());
// sample call for PayPalServiceGet::GetExpressCheckoutDetails()
if($payPalServiceGet->GetExpressCheckoutDetails(new PayPalStructGetExpressCheckoutDetailsReq(/*** update parameters list ***/)))
	print_r($payPalServiceGet->getResult());
else
	print_r($payPalServiceGet->getLastError());
// sample call for PayPalServiceGet::GetBillingAgreementCustomerDetails()
if($payPalServiceGet->GetBillingAgreementCustomerDetails(new PayPalStructGetBillingAgreementCustomerDetailsReq(/*** update parameters list ***/)))
	print_r($payPalServiceGet->getResult());
else
	print_r($payPalServiceGet->getLastError());
// sample call for PayPalServiceGet::GetRecurringPaymentsProfileDetails()
if($payPalServiceGet->GetRecurringPaymentsProfileDetails(new PayPalStructGetRecurringPaymentsProfileDetailsReq(/*** update parameters list ***/)))
	print_r($payPalServiceGet->getResult());
else
	print_r($payPalServiceGet->getLastError());

/******************************
 * Example for PayPalServiceBMC
 */
$payPalServiceBMC = new PayPalServiceBMC($wsdl);
// sample call for PayPalServiceBMC::setSoapHeaderRequesterCredentials() in order to initialize required SoapHeader
$payPalServiceBMC->setSoapHeaderRequesterCredentials(new PayPalStructCustomSecurityHeaderType(/*** update parameters list ***/));
// sample call for PayPalServiceBMC::BMCreateButton()
if($payPalServiceBMC->BMCreateButton(new PayPalStructBMCreateButtonReq(/*** update parameters list ***/)))
	print_r($payPalServiceBMC->getResult());
else
	print_r($payPalServiceBMC->getLastError());

/******************************
 * Example for PayPalServiceBMU
 */
$payPalServiceBMU = new PayPalServiceBMU($wsdl);
// sample call for PayPalServiceBMU::setSoapHeaderRequesterCredentials() in order to initialize required SoapHeader
$payPalServiceBMU->setSoapHeaderRequesterCredentials(new PayPalStructCustomSecurityHeaderType(/*** update parameters list ***/));
// sample call for PayPalServiceBMU::BMUpdateButton()
if($payPalServiceBMU->BMUpdateButton(new PayPalStructBMUpdateButtonReq(/*** update parameters list ***/)))
	print_r($payPalServiceBMU->getResult());
else
	print_r($payPalServiceBMU->getLastError());

/******************************
 * Example for PayPalServiceBMS
 */
$payPalServiceBMS = new PayPalServiceBMS($wsdl);
// sample call for PayPalServiceBMS::setSoapHeaderRequesterCredentials() in order to initialize required SoapHeader
$payPalServiceBMS->setSoapHeaderRequesterCredentials(new PayPalStructCustomSecurityHeaderType(/*** update parameters list ***/));
// sample call for PayPalServiceBMS::BMSetInventory()
if($payPalServiceBMS->BMSetInventory(new PayPalStructBMSetInventoryReq(/*** update parameters list ***/)))
	print_r($payPalServiceBMS->getResult());
else
	print_r($payPalServiceBMS->getLastError());

/******************************
 * Example for PayPalServiceBMG
 */
$payPalServiceBMG = new PayPalServiceBMG($wsdl);
// sample call for PayPalServiceBMG::setSoapHeaderRequesterCredentials() in order to initialize required SoapHeader
$payPalServiceBMG->setSoapHeaderRequesterCredentials(new PayPalStructCustomSecurityHeaderType(/*** update parameters list ***/));
// sample call for PayPalServiceBMG::BMGetButtonDetails()
if($payPalServiceBMG->BMGetButtonDetails(new PayPalStructBMGetButtonDetailsReq(/*** update parameters list ***/)))
	print_r($payPalServiceBMG->getResult());
else
	print_r($payPalServiceBMG->getLastError());
// sample call for PayPalServiceBMG::BMGetInventory()
if($payPalServiceBMG->BMGetInventory(new PayPalStructBMGetInventoryReq(/*** update parameters list ***/)))
	print_r($payPalServiceBMG->getResult());
else
	print_r($payPalServiceBMG->getLastError());

/******************************
 * Example for PayPalServiceBMM
 */
$payPalServiceBMM = new PayPalServiceBMM($wsdl);
// sample call for PayPalServiceBMM::setSoapHeaderRequesterCredentials() in order to initialize required SoapHeader
$payPalServiceBMM->setSoapHeaderRequesterCredentials(new PayPalStructCustomSecurityHeaderType(/*** update parameters list ***/));
// sample call for PayPalServiceBMM::BMManageButtonStatus()
if($payPalServiceBMM->BMManageButtonStatus(new PayPalStructBMManageButtonStatusReq(/*** update parameters list ***/)))
	print_r($payPalServiceBMM->getResult());
else
	print_r($payPalServiceBMM->getLastError());

/******************************
 * Example for PayPalServiceBMB
 */
$payPalServiceBMB = new PayPalServiceBMB($wsdl);
// sample call for PayPalServiceBMB::setSoapHeaderRequesterCredentials() in order to initialize required SoapHeader
$payPalServiceBMB->setSoapHeaderRequesterCredentials(new PayPalStructCustomSecurityHeaderType(/*** update parameters list ***/));
// sample call for PayPalServiceBMB::BMButtonSearch()
if($payPalServiceBMB->BMButtonSearch(new PayPalStructBMButtonSearchReq(/*** update parameters list ***/)))
	print_r($payPalServiceBMB->getResult());
else
	print_r($payPalServiceBMB->getLastError());

/*******************************
 * Example for PayPalServiceBill
 */
$payPalServiceBill = new PayPalServiceBill($wsdl);
// sample call for PayPalServiceBill::setSoapHeaderRequesterCredentials() in order to initialize required SoapHeader
$payPalServiceBill->setSoapHeaderRequesterCredentials(new PayPalStructCustomSecurityHeaderType(/*** update parameters list ***/));
// sample call for PayPalServiceBill::BillUser()
if($payPalServiceBill->BillUser(new PayPalStructBillUserReq(/*** update parameters list ***/)))
	print_r($payPalServiceBill->getResult());
else
	print_r($payPalServiceBill->getLastError());
// sample call for PayPalServiceBill::BillAgreementUpdate()
if($payPalServiceBill->BillAgreementUpdate(new PayPalStructBillAgreementUpdateReq(/*** update parameters list ***/)))
	print_r($payPalServiceBill->getResult());
else
	print_r($payPalServiceBill->getLastError());
// sample call for PayPalServiceBill::BillOutstandingAmount()
if($payPalServiceBill->BillOutstandingAmount(new PayPalStructBillOutstandingAmountReq(/*** update parameters list ***/)))
	print_r($payPalServiceBill->getResult());
else
	print_r($payPalServiceBill->getLastError());

/**************************************
 * Example for PayPalServiceTransaction
 */
$payPalServiceTransaction = new PayPalServiceTransaction($wsdl);
// sample call for PayPalServiceTransaction::setSoapHeaderRequesterCredentials() in order to initialize required SoapHeader
$payPalServiceTransaction->setSoapHeaderRequesterCredentials(new PayPalStructCustomSecurityHeaderType(/*** update parameters list ***/));
// sample call for PayPalServiceTransaction::TransactionSearch()
if($payPalServiceTransaction->TransactionSearch(new PayPalStructTransactionSearchReq(/*** update parameters list ***/)))
	print_r($payPalServiceTransaction->getResult());
else
	print_r($payPalServiceTransaction->getLastError());

/*******************************
 * Example for PayPalServiceMass
 */
$payPalServiceMass = new PayPalServiceMass($wsdl);
// sample call for PayPalServiceMass::setSoapHeaderRequesterCredentials() in order to initialize required SoapHeader
$payPalServiceMass->setSoapHeaderRequesterCredentials(new PayPalStructCustomSecurityHeaderType(/*** update parameters list ***/));
// sample call for PayPalServiceMass::MassPay()
if($payPalServiceMass->MassPay(new PayPalStructMassPayReq(/*** update parameters list ***/)))
	print_r($payPalServiceMass->getResult());
else
	print_r($payPalServiceMass->getLastError());

/**********************************
 * Example for PayPalServiceAddress
 */
$payPalServiceAddress = new PayPalServiceAddress($wsdl);
// sample call for PayPalServiceAddress::setSoapHeaderRequesterCredentials() in order to initialize required SoapHeader
$payPalServiceAddress->setSoapHeaderRequesterCredentials(new PayPalStructCustomSecurityHeaderType(/*** update parameters list ***/));
// sample call for PayPalServiceAddress::AddressVerify()
if($payPalServiceAddress->AddressVerify(new PayPalStructAddressVerifyReq(/*** update parameters list ***/)))
	print_r($payPalServiceAddress->getResult());
else
	print_r($payPalServiceAddress->getLastError());

/********************************
 * Example for PayPalServiceEnter
 */
$payPalServiceEnter = new PayPalServiceEnter($wsdl);
// sample call for PayPalServiceEnter::setSoapHeaderRequesterCredentials() in order to initialize required SoapHeader
$payPalServiceEnter->setSoapHeaderRequesterCredentials(new PayPalStructCustomSecurityHeaderType(/*** update parameters list ***/));
// sample call for PayPalServiceEnter::EnterBoarding()
if($payPalServiceEnter->EnterBoarding(new PayPalStructEnterBoardingReq(/*** update parameters list ***/)))
	print_r($payPalServiceEnter->getResult());
else
	print_r($payPalServiceEnter->getLastError());

/*********************************
 * Example for PayPalServiceCreate
 */
$payPalServiceCreate = new PayPalServiceCreate($wsdl);
// sample call for PayPalServiceCreate::setSoapHeaderRequesterCredentials() in order to initialize required SoapHeader
$payPalServiceCreate->setSoapHeaderRequesterCredentials(new PayPalStructCustomSecurityHeaderType(/*** update parameters list ***/));
// sample call for PayPalServiceCreate::CreateMobilePayment()
if($payPalServiceCreate->CreateMobilePayment(new PayPalStructCreateMobilePaymentReq(/*** update parameters list ***/)))
	print_r($payPalServiceCreate->getResult());
else
	print_r($payPalServiceCreate->getLastError());
// sample call for PayPalServiceCreate::CreateBillingAgreement()
if($payPalServiceCreate->CreateBillingAgreement(new PayPalStructCreateBillingAgreementReq(/*** update parameters list ***/)))
	print_r($payPalServiceCreate->getResult());
else
	print_r($payPalServiceCreate->getLastError());
// sample call for PayPalServiceCreate::CreateRecurringPaymentsProfile()
if($payPalServiceCreate->CreateRecurringPaymentsProfile(new PayPalStructCreateRecurringPaymentsProfileReq(/*** update parameters list ***/)))
	print_r($payPalServiceCreate->getResult());
else
	print_r($payPalServiceCreate->getLastError());

/******************************
 * Example for PayPalServiceSet
 */
$payPalServiceSet = new PayPalServiceSet($wsdl);
// sample call for PayPalServiceSet::setSoapHeaderRequesterCredentials() in order to initialize required SoapHeader
$payPalServiceSet->setSoapHeaderRequesterCredentials(new PayPalStructCustomSecurityHeaderType(/*** update parameters list ***/));
// sample call for PayPalServiceSet::SetMobileCheckout()
if($payPalServiceSet->SetMobileCheckout(new PayPalStructSetMobileCheckoutReq(/*** update parameters list ***/)))
	print_r($payPalServiceSet->getResult());
else
	print_r($payPalServiceSet->getLastError());
// sample call for PayPalServiceSet::SetAuthFlowParam()
if($payPalServiceSet->SetAuthFlowParam(new PayPalStructSetAuthFlowParamReq(/*** update parameters list ***/)))
	print_r($payPalServiceSet->getResult());
else
	print_r($payPalServiceSet->getLastError());
// sample call for PayPalServiceSet::SetAccessPermissions()
if($payPalServiceSet->SetAccessPermissions(new PayPalStructSetAccessPermissionsReq(/*** update parameters list ***/)))
	print_r($payPalServiceSet->getResult());
else
	print_r($payPalServiceSet->getLastError());
// sample call for PayPalServiceSet::SetExpressCheckout()
if($payPalServiceSet->SetExpressCheckout(new PayPalStructSetExpressCheckoutReq(/*** update parameters list ***/)))
	print_r($payPalServiceSet->getResult());
else
	print_r($payPalServiceSet->getLastError());
// sample call for PayPalServiceSet::SetCustomerBillingAgreement()
if($payPalServiceSet->SetCustomerBillingAgreement(new PayPalStructSetCustomerBillingAgreementReq(/*** update parameters list ***/)))
	print_r($payPalServiceSet->getResult());
else
	print_r($payPalServiceSet->getLastError());

/*****************************
 * Example for PayPalServiceDo
 */
$payPalServiceDo = new PayPalServiceDo($wsdl);
// sample call for PayPalServiceDo::setSoapHeaderRequesterCredentials() in order to initialize required SoapHeader
$payPalServiceDo->setSoapHeaderRequesterCredentials(new PayPalStructCustomSecurityHeaderType(/*** update parameters list ***/));
// sample call for PayPalServiceDo::DoMobileCheckoutPayment()
if($payPalServiceDo->DoMobileCheckoutPayment(new PayPalStructDoMobileCheckoutPaymentReq(/*** update parameters list ***/)))
	print_r($payPalServiceDo->getResult());
else
	print_r($payPalServiceDo->getLastError());
// sample call for PayPalServiceDo::DoExpressCheckoutPayment()
if($payPalServiceDo->DoExpressCheckoutPayment(new PayPalStructDoExpressCheckoutPaymentReq(/*** update parameters list ***/)))
	print_r($payPalServiceDo->getResult());
else
	print_r($payPalServiceDo->getLastError());
// sample call for PayPalServiceDo::DoUATPExpressCheckoutPayment()
if($payPalServiceDo->DoUATPExpressCheckoutPayment(new PayPalStructDoUATPExpressCheckoutPaymentReq(/*** update parameters list ***/)))
	print_r($payPalServiceDo->getResult());
else
	print_r($payPalServiceDo->getLastError());
// sample call for PayPalServiceDo::DoDirectPayment()
if($payPalServiceDo->DoDirectPayment(new PayPalStructDoDirectPaymentReq(/*** update parameters list ***/)))
	print_r($payPalServiceDo->getResult());
else
	print_r($payPalServiceDo->getLastError());
// sample call for PayPalServiceDo::DoCancel()
if($payPalServiceDo->DoCancel(new PayPalStructDoCancelReq(/*** update parameters list ***/)))
	print_r($payPalServiceDo->getResult());
else
	print_r($payPalServiceDo->getLastError());
// sample call for PayPalServiceDo::DoCapture()
if($payPalServiceDo->DoCapture(new PayPalStructDoCaptureReq(/*** update parameters list ***/)))
	print_r($payPalServiceDo->getResult());
else
	print_r($payPalServiceDo->getLastError());
// sample call for PayPalServiceDo::DoReauthorization()
if($payPalServiceDo->DoReauthorization(new PayPalStructDoReauthorizationReq(/*** update parameters list ***/)))
	print_r($payPalServiceDo->getResult());
else
	print_r($payPalServiceDo->getLastError());
// sample call for PayPalServiceDo::DoVoid()
if($payPalServiceDo->DoVoid(new PayPalStructDoVoidReq(/*** update parameters list ***/)))
	print_r($payPalServiceDo->getResult());
else
	print_r($payPalServiceDo->getLastError());
// sample call for PayPalServiceDo::DoAuthorization()
if($payPalServiceDo->DoAuthorization(new PayPalStructDoAuthorizationReq(/*** update parameters list ***/)))
	print_r($payPalServiceDo->getResult());
else
	print_r($payPalServiceDo->getLastError());
// sample call for PayPalServiceDo::DoUATPAuthorization()
if($payPalServiceDo->DoUATPAuthorization(new PayPalStructDoUATPAuthorizationReq(/*** update parameters list ***/)))
	print_r($payPalServiceDo->getResult());
else
	print_r($payPalServiceDo->getLastError());
// sample call for PayPalServiceDo::DoReferenceTransaction()
if($payPalServiceDo->DoReferenceTransaction(new PayPalStructDoReferenceTransactionReq(/*** update parameters list ***/)))
	print_r($payPalServiceDo->getResult());
else
	print_r($payPalServiceDo->getLastError());
// sample call for PayPalServiceDo::DoNonReferencedCredit()
if($payPalServiceDo->DoNonReferencedCredit(new PayPalStructDoNonReferencedCreditReq(/*** update parameters list ***/)))
	print_r($payPalServiceDo->getResult());
else
	print_r($payPalServiceDo->getLastError());

/*********************************
 * Example for PayPalServiceUpdate
 */
$payPalServiceUpdate = new PayPalServiceUpdate($wsdl);
// sample call for PayPalServiceUpdate::setSoapHeaderRequesterCredentials() in order to initialize required SoapHeader
$payPalServiceUpdate->setSoapHeaderRequesterCredentials(new PayPalStructCustomSecurityHeaderType(/*** update parameters list ***/));
// sample call for PayPalServiceUpdate::UpdateAccessPermissions()
if($payPalServiceUpdate->UpdateAccessPermissions(new PayPalStructUpdateAccessPermissionsReq(/*** update parameters list ***/)))
	print_r($payPalServiceUpdate->getResult());
else
	print_r($payPalServiceUpdate->getLastError());
// sample call for PayPalServiceUpdate::UpdateAuthorization()
if($payPalServiceUpdate->UpdateAuthorization(new PayPalStructUpdateAuthorizationReq(/*** update parameters list ***/)))
	print_r($payPalServiceUpdate->getResult());
else
	print_r($payPalServiceUpdate->getLastError());
// sample call for PayPalServiceUpdate::UpdateRecurringPaymentsProfile()
if($payPalServiceUpdate->UpdateRecurringPaymentsProfile(new PayPalStructUpdateRecurringPaymentsProfileReq(/*** update parameters list ***/)))
	print_r($payPalServiceUpdate->getResult());
else
	print_r($payPalServiceUpdate->getLastError());

/**********************************
 * Example for PayPalServiceExecute
 */
$payPalServiceExecute = new PayPalServiceExecute($wsdl);
// sample call for PayPalServiceExecute::setSoapHeaderRequesterCredentials() in order to initialize required SoapHeader
$payPalServiceExecute->setSoapHeaderRequesterCredentials(new PayPalStructCustomSecurityHeaderType(/*** update parameters list ***/));
// sample call for PayPalServiceExecute::ExecuteCheckoutOperations()
if($payPalServiceExecute->ExecuteCheckoutOperations(new PayPalStructExecuteCheckoutOperationsReq(/*** update parameters list ***/)))
	print_r($payPalServiceExecute->getResult());
else
	print_r($payPalServiceExecute->getLastError());

/*********************************
 * Example for PayPalServiceManage
 */
$payPalServiceManage = new PayPalServiceManage($wsdl);
// sample call for PayPalServiceManage::setSoapHeaderRequesterCredentials() in order to initialize required SoapHeader
$payPalServiceManage->setSoapHeaderRequesterCredentials(new PayPalStructCustomSecurityHeaderType(/*** update parameters list ***/));
// sample call for PayPalServiceManage::ManagePendingTransactionStatus()
if($payPalServiceManage->ManagePendingTransactionStatus(new PayPalStructManagePendingTransactionStatusReq(/*** update parameters list ***/)))
	print_r($payPalServiceManage->getResult());
else
	print_r($payPalServiceManage->getLastError());
// sample call for PayPalServiceManage::ManageRecurringPaymentsProfileStatus()
if($payPalServiceManage->ManageRecurringPaymentsProfileStatus(new PayPalStructManageRecurringPaymentsProfileStatusReq(/*** update parameters list ***/)))
	print_r($payPalServiceManage->getResult());
else
	print_r($payPalServiceManage->getLastError());

/**********************************
 * Example for PayPalServiceReverse
 */
$payPalServiceReverse = new PayPalServiceReverse($wsdl);
// sample call for PayPalServiceReverse::setSoapHeaderRequesterCredentials() in order to initialize required SoapHeader
$payPalServiceReverse->setSoapHeaderRequesterCredentials(new PayPalStructCustomSecurityHeaderType(/*** update parameters list ***/));
// sample call for PayPalServiceReverse::ReverseTransaction()
if($payPalServiceReverse->ReverseTransaction(new PayPalStructReverseTransactionReq(/*** update parameters list ***/)))
	print_r($payPalServiceReverse->getResult());
else
	print_r($payPalServiceReverse->getLastError());

/***********************************
 * Example for PayPalServiceExternal
 */
$payPalServiceExternal = new PayPalServiceExternal($wsdl);
// sample call for PayPalServiceExternal::setSoapHeaderRequesterCredentials() in order to initialize required SoapHeader
$payPalServiceExternal->setSoapHeaderRequesterCredentials(new PayPalStructCustomSecurityHeaderType(/*** update parameters list ***/));
// sample call for PayPalServiceExternal::ExternalRememberMeOptOut()
if($payPalServiceExternal->ExternalRememberMeOptOut(new PayPalStructExternalRememberMeOptOutReq(/*** update parameters list ***/)))
	print_r($payPalServiceExternal->getResult());
else
	print_r($payPalServiceExternal->getLastError());
?>