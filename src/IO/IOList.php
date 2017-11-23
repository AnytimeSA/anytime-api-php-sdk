<?php

namespace Anytime\ApiClient\IO;

use Anytime\ApiClient\Constant\API;

class IOList
{
    /**
     * @var IOFactory
     */
    protected $IOFactory;

    /**
     * @var IO[]
     */
    private $IOCached = [];

    /**
     * IOList constructor.
     *
     * @param IOFactory $IOFactory
     */
    public function __construct(IOFactory $IOFactory)
    {
        $this->IOFactory = $IOFactory;
    }

    /**
     * @return OAuth2TokenIO
     */
    public function oauth2Token()
    {
        return $this->getIOFromCache(API::OAUTH2_TOKEN);
    }

    /**
     * @return ApiCheckIO
     */
    public function apiCheck()
    {
        return $this->getIOFromCache(API::APICHECK);
    }

    /**
     * @return ApiCheckPostIO
     */
    public function apiCheckPost()
    {
        return $this->getIOFromCache(API::APICHECK_POST);
    }

    /**
     * @return AccountListIO
     */
    public function accountList()
    {
        return $this->getIOFromCache(API::ACCOUNT_LIST);
    }

    /**
     * @return AccountInfoIO
     */
    public function accountInfo()
    {
        return $this->getIOFromCache(API::ACCOUNT_INFO);
    }

    /**
     * @return AccountCardListIO
     */
    public function accountCardList()
    {
        return $this->getIOFromCache(API::ACCOUNT_CARD_LIST);
    }

    /**
     * @return AccountKycIO
     */
    public function accountKyc()
    {
        return $this->getIOFromCache(API::ACCOUNT_KYC);
    }

    /**
     * @return AccountCreditTransferIO
     */
    public function accountCreditTransfer()
    {
        return $this->getIOFromCache(API::ACCOUNT_CREDIT_TRANSFER);
    }

    /**
     * @return AccountBalanceIO
     */
    public function accountBalance()
    {
        return $this->getIOFromCache(API::ACCOUNT_BALANCE);
    }

    /**
     * @return AccountUpdateIO
     */
    public function accountUpdate()
    {
        return $this->getIOFromCache(API::ACCOUNT_UPDATE);
    }

    /**
     * @return AccountCreationIO
     */
    public function accountCreation()
    {
        return $this->getIOFromCache(API::ACCOUNT_CREATION);
    }

    /**
     * @return AccountStatementIO
     */
    public function accountStatement()
    {
        return $this->getIOFromCache(API::ACCOUNT_STATEMENT);
    }

    /**
     * @return AccountStatementDetailsIO
     */
    public function accountStatementDetails()
    {
        return $this->getIOFromCache(API::ACCOUNT_STATEMENT_DETAILS);
    }

    /**
     * @return CardInfoIO
     */
    public function cardInfo()
    {
        return $this->getIOFromCache(API::CARD_INFO);
    }

    /**
     * @return CardTransactionIO
     */
    public function cardTransaction()
    {
        return $this->getIOFromCache(API::CARD_TRANSACTION);
    }

    /**
     * @return CardTransactionDetailsIO
     */
    public function cardTransactionDetails()
    {
        return $this->getIOFromCache(API::CARD_TRANSACTION_DETAILS);
    }

    /**
     * @return CardSendPinIO
     */
    public function cardSendPin()
    {
        return $this->getIOFromCache(API::CARD_SEND_PIN);
    }

    /**
     * @return CardGetPanIO
     */
    public function cardGetPan()
    {
        return $this->getIOFromCache(API::CARD_GET_PAN);
    }

    /**
     * @return CardGetPinIO
     */
    public function cardGetPin()
    {
        return $this->getIOFromCache(API::CARD_GET_PIN);
    }

    /**
     * @return CardSendPanIO
     */
    public function cardSendPan()
    {
        return $this->getIOFromCache(API::CARD_SEND_PAN);
    }

    /**
     * @return CardDetailsDisplayIO
     */
    public function cardDetailsDisplay()
    {
        return $this->getIOFromCache(API::CARD_DETAILS_DISPLAY);
    }

    /**
     * @return CardCreditIO
     */
    public function cardCredit()
    {
        return $this->getIOFromCache(API::CARD_CREDIT);
    }

    /**
     * @return CardDebitIO
     */
    public function cardDebit()
    {
        return $this->getIOFromCache(API::CARD_DEBIT);
    }

    /**
     * @return CardUpdateIO
     */
    public function cardUpdate()
    {
        return $this->getIOFromCache(API::CARD_UPDATE);
    }

    /**
     * @return CardOrderIO
     */
    public function cardOrder()
    {
        return $this->getIOFromCache(API::CARD_ORDER);
    }

    /**
     * @return OrderTrackingIO
     */
    public function orderTracking()
    {
        return $this->getIOFromCache(API::ORDER_TRACKING);
    }

    /**
     * @return AccountIbanCreationIO
     */
    public function accountIbanCreation()
    {
        return $this->getIOFromCache(API::ACCOUNT_IBAN_CREATION);
    }

    /**
     * @return AccountIbanCreationIO
     */
    public function accountVirtualIbanCreation()
    {
        return $this->getIOFromCache(API::ACCOUNT_VIRTUAL_IBAN_CREATION);
    }

    /**
     * @param string $apiName
     * @return IO
     */
    public function getIOFromCache($apiName)
    {
        if(!array_key_exists($apiName, $this->IOCached)) {
            $this->IOCached[$apiName] = $this->IOFactory->create($apiName);
        }
        return $this->IOCached[$apiName];
    }


}