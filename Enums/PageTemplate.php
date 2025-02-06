<?php

namespace App\Enums;

enum PageTemplate: string
{
    use BaseEnumTrait;

    case HOME = 'home';
    case MARKET_CURRENCIES = 'market-currencies';
    case MARKET_CDF_CONTRACTS = 'market-cdf-contracts';
    case MARKET_INDICES = 'market-indices';
    case MARKET_STOCK = 'market-stock';
    case MARKET_METALS = 'market-metal';
    case MARKET_ENERGIES = 'market-energies';
    case MARKET_CRYPTOCURRENCIES = 'market-cryptocurrencies';
    case TRADING_CALCULATORS = 'trading-calculators';
    case TRADING_START = 'trading-start';
    case TRADING_ACCOUNT_REPLENISHMENT = 'trading-account-replenishment';
    case TRADING_NEWS = 'trading-news';
    case TARGETING_EXECUTION_TRANSACTIONS = 'targing-execution-transactions';
    case TRADING_ECONOMIC_CALENDAR = 'trading-economic-calendar';
    case ABOUT_COMPANY_ABOUT_US = 'about-about-us';
    case ABOUT_COMPANY_CREDIT_RATING = 'about-company-credit-rating';
    case ABOUT_COMPANY_CONTACT_US = 'about-company-contact-us';
    case DOCUMENTS_LEGAL_INFORMATION = 'documents-legal-information';
    case DOCUMENTS_LEGAL_DOCUMENTS = 'documents-legal-documents';
    case DOCUMENTS_CORPORATE_ACTIONS = 'documents-corporate-actions';
    case DOCUMENTS_INFORMATION_DOCUMENTS = 'documents-information-documents';
    case DOCUMENTS_KEY_COMPLAINTS_HANDLING_PROCEDURE = 'documents-key-complaints-handling-procedure';
    case DOCUMENTS_KEY_PRIVACY_POLICY = 'documents-key-privacy-policy';
    case DOCUMENTS_RISK_DISCLOSURE = 'documents-risk-disclosure';
    case DOCUMENTS_BONUS_RULES = 'documents-bonus-rules';
    case DOCUMENTS_MONEY_LAUNDERING = 'documents-money-laundering';
    case DOCUMENTS_WITHOUT_RISK = 'documents-without-risks';
    case DOCUMENTS_TERMS_AND_CONDITIONS = 'documents-terms-and-conditions';
}
