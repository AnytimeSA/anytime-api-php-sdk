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
        return $this->IOFactory->create(API::OAUTH2_TOKEN);
    }

    /**
     * @return ApiCheckIO
     */
    public function apiCheck()
    {
        return $this->IOFactory->create(API::APICHECK);
    }

    /**
     * @return ApiCheckPostIO
     */
    public function apiCheckPost()
    {
        return $this->IOFactory->create(API::APICHECK_POST);
    }

    /**
     * @return AccountListIO
     */
    public function accountList()
    {
        return $this->IOFactory->create(API::ACCOUNT_LIST);
    }

    /**
     * @return AccountInfoIO
     */
    public function accountInfo()
    {
        return $this->IOFactory->create(API::ACCOUNT_INFO);
    }

    /**
     * @return AccountCardListIO
     */
    public function accountCardList()
    {
        return $this->IOFactory->create(API::ACCOUNT_CARD_LIST);
    }

    /**
     * @return AccountKycIO
     */
    public function accountKyc()
    {
        return $this->IOFactory->create(API::ACCOUNT_KYC);
    }

    /**
     * @return AccountCreditTransferIO
     */
    public function accountCreditTransfer()
    {
        return $this->IOFactory->create(API::ACCOUNT_CREDIT_TRANSFER);
    }

    /**
     * @return AccountBalanceIO
     */
    public function accountBalance()
    {
        return $this->IOFactory->create(API::ACCOUNT_BALANCE);
    }

    /**
     * @return AccountUpdateIO
     */
    public function accountUpdate()
    {
        return $this->IOFactory->create(API::ACCOUNT_UPDATE);
    }

    /**
     * @return AccountCreationIO
     */
    public function accountCreation()
    {
        return $this->IOFactory->create(API::ACCOUNT_CREATION);
    }

    /**
     * @return AccountStatementIO
     */
    public function accountStatement()
    {
        return $this->IOFactory->create(API::ACCOUNT_STATEMENT);
    }

    /**
     * @return CardInfoIO
     */
    public function cardInfo()
    {
        return $this->IOFactory->create(API::CARD_INFO);
    }

    /**
     * @return CardTransactionIO
     */
    public function cardTransaction()
    {
        return $this->IOFactory->create(API::CARD_TRANSACTION);
    }

    /**
     * @return CardSendPinIO
     */
    public function cardSendPin()
    {
        return $this->IOFactory->create(API::CARD_SEND_PIN);
    }

    /**
     * @return CardSendPanIO
     */
    public function cardSendPan()
    {
        return $this->IOFactory->create(API::CARD_SEND_PAN);
    }

    /**
     * @return CardDetailsDisplayIO
     */
    public function cardDetailsDisplay()
    {
        return $this->IOFactory->create(API::CARD_DETAILS_DISPLAY);
    }

    /**
     * @return CardCreditIO
     */
    public function cardCredit()
    {
        return $this->IOFactory->create(API::CARD_CREDIT);
    }

    /**
     * @return CardDebitIO
     */
    public function cardDebit()
    {
        return $this->IOFactory->create(API::CARD_DEBIT);
    }

    /**
     * @return CardUpdateIO
     */
    public function cardUpdate()
    {
        return $this->IOFactory->create(API::CARD_UPDATE);
    }

    /**
     * @return CardOrderIO
     */
    public function cardOrder()
    {
        return $this->IOFactory->create(API::CARD_ORDER);
    }


}