@extends('layouts.app')

@section('content')

<style>
    .table{
        width: 100%;
        min-width: 1000px;
        table-layout: fixed;
        text-align: center;
    }
</style>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <form action="{{route('add')}}" method="post">
                    {!! csrf_field() !!}
                    <div class="row">
                        <div class="col">
                        <table class="table">
                            <tr>
                                <th>Название обменника</th>
                                <th>Какие валюты принимает</th>
                                <th>На какие валюты меняет</th>
                                <th>Ссылка на обменник</th>
                                <th>Умножить курс на %</th>
                                <th>Резерв</th>
                                <th>Кол-во отзывов</th>
                                <th>Кол-во отзывов начиная с: </th>
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" name="name" require>
                                </td>
                                <td>
                                    <select multiple size="100" name="startCurr[]" require>
 <option value="s_BTC"  >Bitcoin (BTC)</option>
 <option value="s_BCH"  >Bitcoin Cash (BCH)</option>
 <option value="s_BSV"  >Bitcoin SV (BSV)</option>
 <option value="s_BTG"  >Bitcoin Gold (BTG)</option>
 <option value="s_ETH"  >Ethereum (ETH)</option>
 <option value="s_ETC"  >Ether Classic (ETC)</option>
 <option value="s_LTC"  >Litecoin (LTC)</option>
 <option value="s_XRP"  >Ripple (XRP)</option>
 <option value="s_XMR"  >Monero (XMR)</option>
 <option value="s_DOGE"  >Dogecoin (DOGE)</option>
 <option value="s_PPC"  >Peercoin (PPC)</option>
 <option value="s_DASH"  >Dash (DASH)</option>
 <option value="s_ZEC"  >Zcash (ZEC)</option>
 <option value="s_USDT"  >Tether (USDT)</option>
 <option value="s_USDC"  >USD Coin (USDC)</option>
 <option value="s_TUSD"  >TrueUSD (TUSD)</option>
 <option value="s_XEM"  >NEM (XEM)</option>
 <option value="s_REP"  >Augur (REP)</option>
 <option value="s_NEO"  >NEO (NEO)</option>
 <option value="s_EOS"  >EOS (EOS)</option>
 <option value="s_IOTA"  >IOTA (MIOTA)</option>
 <option value="s_LSK"  >Lisk (LSK)</option>
 <option value="s_ADA"  >Cardano (ADA)</option>
 <option value="s_XLM"  >Stellar (XLM)</option>
 <option value="s_BCN"  >Bytecoin (BCN)</option>
 <option value="s_TRX"  >TRON (TRX)</option>
 <option value="s_WAVES"  >Waves (WAVES)</option>
 <option value="s_OMG"  >OmiseGO (OMG)</option>
 <option value="s_XVG"  >Verge (XVG)</option>
 <option value="s_ZRX"  >0x (ZRX)</option>
 <option value="s_BNB"  >Binance Coin (BNB)</option>
 <option value="s_ICX"  >ICON (ICX)</option>
 <option value="s_KMD"  >Komodo (KMD)</option>
 <option value="s_BTT"  >BitTorrent (BTT)</option>
 <option value="s_QWRUB"  >QIWI RUB</option>
 <option value="s_QWUSD"  >QIWI USD</option>
 <option value="s_QWEUR"  >QIWI EUR</option>
 <option value="s_QWKZT"  >QIWI KZT</option>
 <option value="s_YAMRUB"  >Яндекс.Деньги</option>
 <option value="s_WMZ"  >WMZ</option>
 <option value="s_WMR"  >WMR</option>
 <option value="s_WME"  >WME</option>
 <option value="s_WMU"  >WMU</option>
 <option value="s_WMB"  >WMB</option>
 <option value="s_WMK"  >WMK</option>
 <option value="s_WMG"  >WMG</option>
 <option value="s_WMX"  >WMX</option>
 <option value="s_PMRUSD"  >Paymer USD</option>
 <option value="s_PMRRUB"  >Paymer RUB</option>
 <option value="s_PMUSD"  >Perfect Money USD</option>
 <option value="s_PMEUR"  >Perfect Money EUR</option>
 <option value="s_PMBTC"  >Perfect Money BTC</option>
 <option value="s_PMVUSD"  >PM e-Voucher USD</option>
 <option value="s_PPUSD"  >PayPal USD</option>
 <option value="s_PPRUB"  >PayPal RUB</option>
 <option value="s_PPEUR"  >PayPal EUR</option>
 <option value="s_PPGBP"  >PayPal GBP</option>
 <option value="s_ADVCUSD"  >Advanced Cash USD</option>
 <option value="s_ADVCRUB"  >Advanced Cash RUB</option>
 <option value="s_ADVCEUR"  >Advanced Cash EUR</option>
 <option value="s_ADVCUAH"  >Advanced Cash UAH</option>
 <option value="s_PRUSD"  >Payeer USD</option>
 <option value="s_PRRUB"  >Payeer RUB</option>
 <option value="s_PREUR"  >Payeer EUR</option>
 <option value="s_SKLUSD"  >Skrill USD</option>
 <option value="s_SKLEUR"  >Skrill EUR</option>
 <option value="s_SKLGBP"  >Skrill GBP</option>
 <option value="s_WOUSD"  >W1 USD</option>
 <option value="s_WORUB"  >W1 RUB</option>
 <option value="s_IDAMD"  >Idram</option>
 <option value="s_PAXUMUSD"  >Paxum</option>
 <option value="s_CPTSUSD"  >Capitalist USD</option>
 <option value="s_CPTSRUB"  >Capitalist RUB</option>
 <option value="s_EPSUSD"  >Epese</option>
 <option value="s_NTLRUSD"  >Neteller USD</option>
 <option value="s_NTLREUR"  >Neteller EUR</option>
 <option value="s_PSRUSD"  >PaySera</option>
 <option value="s_PSCEUR"  >PaySafeCard</option>
 <option value="s_STPUSD"  >SolidTrust Pay</option>
 <option value="s_EPMUSD"  >ePayments USD</option>
 <option value="s_EPMEUR"  >ePayments EUR</option>
 <option value="s_NIXUSD"  >NixMoney USD</option>
 <option value="s_NIXEUR"  >NixMoney EUR</option>
 <option value="s_GMUAH"  >GlobalMoney</option>
 <option value="s_EPAYUSD"  >Epay USD</option>
 <option value="s_EPAYEUR"  >Epay EUR</option>
 <option value="s_ALPCNY"  >Alipay</option>
 <option value="s_WCTCNY"  >WeChat</option>
 <option value="s_LQUSD"  >LiqPay</option>
 <option value="s_EKZT"  >E-kzt</option>
 <option value="s_MWRUB"  >Счет телефона RUB</option>
 <option value="s_MWUAH"  >Счет телефона UAH</option>
 <option value="s_TRDUSD"  >Криптобиржи USD</option>
 <option value="s_TRDEUR"  >Криптобиржи EUR</option>
 <option value="s_EXMUSD"  >Exmo USD</option>
 <option value="s_EXMRUB"  >Exmo RUB</option>
 <option value="s_EXMEUR"  >Exmo EUR</option>
 <option value="s_EXMUAH"  >Exmo UAH</option>
 <option value="s_EXMBTC"  >Exmo BTC</option>
 <option value="s_LVCNUSD"  >LiveCoin USD</option>
 <option value="s_LVCNRUB"  >LiveCoin RUB</option>
 <option value="s_ECNEXUSD"  >eCoin</option>
 <option value="s_CCXUSD"  >C-Cex</option>
 <option value="s_KUNAUAH"  >Kuna</option>
 <option value="s_SBERRUB"  >Сбербанк</option>
 <option value="s_ACRUB"  >Альфа-Банк</option>
 <option value="s_ACCUSD"  >Альфа cash-in USD</option>
 <option value="s_ACCRUB"  >Альфа cash-in RUB</option>
 <option value="s_TCSBRUB"  >Тинькофф</option>
 <option value="s_TCSBCRUB"  >ТКС cash-in</option>
 <option value="s_TBRUB"  >ВТБ24</option>
 <option value="s_RUSSTRUB"  >Русский Стандарт</option>
 <option value="s_AVBRUB"  >Авангард</option>
 <option value="s_PSBRUB"  >Промсвязьбанк</option>
 <option value="s_GPBRUB"  >Газпромбанк</option>
 <option value="s_KUKRUB"  >Кукуруза</option>
 <option value="s_RFBRUB"  >Райффайзен</option>
 <option value="s_RNKBRUB"  >РНКБ</option>
 <option value="s_BINBRUB"  >Бинбанк</option>
 <option value="s_RKTBRUB"  >Рокетбанк</option>
 <option value="s_P24USD"  >Приват 24 USD</option>
 <option value="s_P24UAH"  >Приват 24 UAH</option>
 <option value="s_RFBUAH"  >Райффайзен UAH</option>
 <option value="s_OSDBUAH"  >Ощадбанк</option>
 <option value="s_USBUAH"  >УкрСиббанк</option>
 <option value="s_PMBBUAH"  >ПУМБ</option>
 <option value="s_MONOBUAH"  >Монобанк</option>
 <option value="s_BLRBBYN"  >Беларусбанк</option>
 <option value="s_KKBKZT"  >Казкоммерцбанк</option>
 <option value="s_HLKBKZT"  >HalykBank</option>
 <option value="s_SBERKZT"  >Сбербанк KZT</option>
 <option value="s_FRTBKZT"  >ForteBank</option>
 <option value="s_KSPBKZT"  >Kaspi Bank</option>
 <option value="s_CARDUSD"  >Visa/MasterCard USD</option>
 <option value="s_CARDRUB"  >Visa/MasterCard RUB</option>
 <option value="s_CARDEUR"  >Visa/MasterCard EUR</option>
 <option value="s_CARDUAH"  >Visa/MasterCard UAH</option>
 <option value="s_CARDBYN"  >Visa/MasterCard BYN</option>
 <option value="s_CARDKZT"  >Visa/MasterCard KZT</option>
 <option value="s_CARDAMD"  >Visa/MasterCard AMD</option>
 <option value="s_CARDGBP"  >Visa/MasterCard GBP</option>
 <option value="s_CARDCNY"  >Visa/MasterCard CNY</option>
 <option value="s_CARDJPY"  >Visa/MasterCard JPY</option>
 <option value="s_AMEXUSD"  >Карта AmEx</option>
 <option value="s_MIRCRUB"  >Карта Мир</option>
 <option value="s_UPCNY"  >Карта UnionPay</option>
 <option value="s_UZCUZS"  >Карта UZCARD</option>
 <option value="s_WIREUSD"  >Любой банк USD</option>
 <option value="s_WIRERUB"  >Любой банк RUB</option>
 <option value="s_WIREEUR"  >Любой банк EUR</option>
 <option value="s_WIREUAH"  >Любой банк UAH</option>
 <option value="s_WIREKZT"  >Любой банк KZT</option>
 <option value="s_WIREGBP"  >Любой банк GBP</option>
 <option value="s_WIRECNY"  >Любой банк CNY</option>
 <option value="s_WIREPLN"  >Любой банк PLN</option>
 <option value="s_WIRETHB"  >Любой банк THB</option>
 <option value="s_WIREINR"  >Любой банк INR</option>
 <option value="s_WIRENGN"  >Любой банк NGN</option>
 <option value="s_SEPAEUR"  >Sepa EUR</option>
 <option value="s_ERIPBYN"  >ЕРИП Расчет</option>
 <option value="s_STLMRUB"  >Счет ИП или ООО</option>
 <option value="s_WUUSD"  >WU USD</option>
 <option value="s_WUEUR"  >WU EUR</option>
 <option value="s_MGUSD"  >MoneyGram USD</option>
 <option value="s_MGEUR"  >MoneyGram EUR</option>
 <option value="s_CNTUSD"  >Contact USD</option>
 <option value="s_CNTRUB"  >Contact RUB</option>
 <option value="s_GCMTUSD"  >Золотая Корона USD</option>
 <option value="s_GCMTRUB"  >Золотая Корона RUB</option>
 <option value="s_USTMUSD"  >Юнистрим USD</option>
 <option value="s_USTMRUB"  >Юнистрим RUB</option>
 <option value="s_RMTFUSD"  >Ria USD</option>
 <option value="s_RMTFEUR"  >Ria EUR</option>
 <option value="s_CASHUSD"  >Наличные USD</option>
 <option value="s_CASHRUB"  >Наличные RUB</option>
 <option value="s_CASHEUR"  >Наличные EUR</option>
 <option value="s_CASHUAH"  >Наличные UAH</option>
 <option value="s_CASHBYN"  >Наличные BYN</option>
 <option value="s_CASHKZT"  >Наличные KZT</option>
 
                                     </select>
                                 </td>
                                 <td>
                                     <select multiple size="100" name="finishCurr[]" require>
 
                                     <option value="f_BTC"  >Bitcoin (BTC)</option>
 <option value="f_BCH"  >Bitcoin Cash (BCH)</option>
 <option value="f_BSV"  >Bitcoin SV (BSV)</option>
 <option value="f_BTG"  >Bitcoin Gold (BTG)</option>
 <option value="f_ETH"  >Ethereum (ETH)</option>
 <option value="f_ETC"  >Ether Classic (ETC)</option>
 <option value="f_LTC"  >Litecoin (LTC)</option>
 <option value="f_XRP"  >Ripple (XRP)</option>
 <option value="f_XMR"  >Monero (XMR)</option>
 <option value="f_DOGE"  >Dogecoin (DOGE)</option>
 <option value="f_PPC"  >Peercoin (PPC)</option>
 <option value="f_DASH"  >Dash (DASH)</option>
 <option value="f_ZEC"  >Zcash (ZEC)</option>
 <option value="f_USDT"  >Tether (USDT)</option>
 <option value="f_USDC"  >USD Coin (USDC)</option>
 <option value="f_TUSD"  >TrueUSD (TUSD)</option>
 <option value="f_XEM"  >NEM (XEM)</option>
 <option value="f_REP"  >Augur (REP)</option>
 <option value="f_NEO"  >NEO (NEO)</option>
 <option value="f_EOS"  >EOS (EOS)</option>
 <option value="f_IOTA"  >IOTA (MIOTA)</option>
 <option value="f_LSK"  >Lisk (LSK)</option>
 <option value="f_ADA"  >Cardano (ADA)</option>
 <option value="f_XLM"  >Stellar (XLM)</option>
 <option value="f_BCN"  >Bytecoin (BCN)</option>
 <option value="f_TRX"  >TRON (TRX)</option>
 <option value="f_WAVES"  >Waves (WAVES)</option>
 <option value="f_OMG"  >OmiseGO (OMG)</option>
 <option value="f_XVG"  >Verge (XVG)</option>
 <option value="f_ZRX"  >0x (ZRX)</option>
 <option value="f_BNB"  >Binance Coin (BNB)</option>
 <option value="f_ICX"  >ICON (ICX)</option>
 <option value="f_KMD"  >Komodo (KMD)</option>
 <option value="f_BTT"  >BitTorrent (BTT)</option>
 <option value="f_QWRUB"  >QIWI RUB</option>
 <option value="f_QWUSD"  >QIWI USD</option>
 <option value="f_QWEUR"  >QIWI EUR</option>
 <option value="f_QWKZT"  >QIWI KZT</option>
 <option value="f_YAMRUB"  >Яндекс.Деньги</option>
 <option value="f_WMZ"  >WMZ</option>
 <option value="f_WMR"  >WMR</option>
 <option value="f_WME"  >WME</option>
 <option value="f_WMU"  >WMU</option>
 <option value="f_WMB"  >WMB</option>
 <option value="f_WMK"  >WMK</option>
 <option value="f_WMG"  >WMG</option>
 <option value="f_WMX"  >WMX</option>
 <option value="f_PMRUSD"  >Paymer USD</option>
 <option value="f_PMRRUB"  >Paymer RUB</option>
 <option value="f_PMUSD"  >Perfect Money USD</option>
 <option value="f_PMEUR"  >Perfect Money EUR</option>
 <option value="f_PMBTC"  >Perfect Money BTC</option>
 <option value="f_PMVUSD"  >PM e-Voucher USD</option>
 <option value="f_PPUSD"  >PayPal USD</option>
 <option value="f_PPRUB"  >PayPal RUB</option>
 <option value="f_PPEUR"  >PayPal EUR</option>
 <option value="f_PPGBP"  >PayPal GBP</option>
 <option value="f_ADVCUSD"  >Advanced Cash USD</option>
 <option value="f_ADVCRUB"  >Advanced Cash RUB</option>
 <option value="f_ADVCEUR"  >Advanced Cash EUR</option>
 <option value="f_ADVCUAH"  >Advanced Cash UAH</option>
 <option value="f_PRUSD"  >Payeer USD</option>
 <option value="f_PRRUB"  >Payeer RUB</option>
 <option value="f_PREUR"  >Payeer EUR</option>
 <option value="f_SKLUSD"  >Skrill USD</option>
 <option value="f_SKLEUR"  >Skrill EUR</option>
 <option value="f_SKLGBP"  >Skrill GBP</option>
 <option value="f_WOUSD"  >W1 USD</option>
 <option value="f_WORUB"  >W1 RUB</option>
 <option value="f_IDAMD"  >Idram</option>
 <option value="f_PAXUMUSD"  >Paxum</option>
 <option value="f_CPTSUSD"  >Capitalist USD</option>
 <option value="f_CPTSRUB"  >Capitalist RUB</option>
 <option value="f_EPSUSD"  >Epese</option>
 <option value="f_NTLRUSD"  >Neteller USD</option>
 <option value="f_NTLREUR"  >Neteller EUR</option>
 <option value="f_PSRUSD"  >PaySera</option>
 <option value="f_PSCEUR"  >PaySafeCard</option>
 <option value="f_STPUSD"  >SolidTrust Pay</option>
 <option value="f_EPMUSD"  >ePayments USD</option>
 <option value="f_EPMEUR"  >ePayments EUR</option>
 <option value="f_NIXUSD"  >NixMoney USD</option>
 <option value="f_NIXEUR"  >NixMoney EUR</option>
 <option value="f_GMUAH"  >GlobalMoney</option>
 <option value="f_EPAYUSD"  >Epay USD</option>
 <option value="f_EPAYEUR"  >Epay EUR</option>
 <option value="f_ALPCNY"  >Alipay</option>
 <option value="f_WCTCNY"  >WeChat</option>
 <option value="f_LQUSD"  >LiqPay</option>
 <option value="f_EKZT"  >E-kzt</option>
 <option value="f_MWRUB"  >Счет телефона RUB</option>
 <option value="f_MWUAH"  >Счет телефона UAH</option>
 <option value="f_TRDUSD"  >Криптобиржи USD</option>
 <option value="f_TRDEUR"  >Криптобиржи EUR</option>
 <option value="f_EXMUSD"  >Exmo USD</option>
 <option value="f_EXMRUB"  >Exmo RUB</option>
 <option value="f_EXMEUR"  >Exmo EUR</option>
 <option value="f_EXMUAH"  >Exmo UAH</option>
 <option value="f_EXMBTC"  >Exmo BTC</option>
 <option value="f_LVCNUSD"  >LiveCoin USD</option>
 <option value="f_LVCNRUB"  >LiveCoin RUB</option>
 <option value="f_ECNEXUSD"  >eCoin</option>
 <option value="f_CCXUSD"  >C-Cex</option>
 <option value="f_KUNAUAH"  >Kuna</option>
 <option value="f_SBERRUB"  >Сбербанк</option>
 <option value="f_ACRUB"  >Альфа-Банк</option>
 <option value="f_ACCUSD"  >Альфа cash-in USD</option>
 <option value="f_ACCRUB"  >Альфа cash-in RUB</option>
 <option value="f_TCSBRUB"  >Тинькофф</option>
 <option value="f_TCSBCRUB"  >ТКС cash-in</option>
 <option value="f_TBRUB"  >ВТБ24</option>
 <option value="f_RUSSTRUB"  >Русский Стандарт</option>
 <option value="f_AVBRUB"  >Авангард</option>
 <option value="f_PSBRUB"  >Промсвязьбанк</option>
 <option value="f_GPBRUB"  >Газпромбанк</option>
 <option value="f_KUKRUB"  >Кукуруза</option>
 <option value="f_RFBRUB"  >Райффайзен</option>
 <option value="f_RNKBRUB"  >РНКБ</option>
 <option value="f_BINBRUB"  >Бинбанк</option>
 <option value="f_RKTBRUB"  >Рокетбанк</option>
 <option value="f_P24USD"  >Приват 24 USD</option>
 <option value="f_P24UAH"  >Приват 24 UAH</option>
 <option value="f_RFBUAH"  >Райффайзен UAH</option>
 <option value="f_OSDBUAH"  >Ощадбанк</option>
 <option value="f_USBUAH"  >УкрСиббанк</option>
 <option value="f_PMBBUAH"  >ПУМБ</option>
 <option value="f_MONOBUAH"  >Монобанк</option>
 <option value="f_BLRBBYN"  >Беларусбанк</option>
 <option value="f_KKBKZT"  >Казкоммерцбанк</option>
 <option value="f_HLKBKZT"  >HalykBank</option>
 <option value="f_SBERKZT"  >Сбербанк KZT</option>
 <option value="f_FRTBKZT"  >ForteBank</option>
 <option value="f_KSPBKZT"  >Kaspi Bank</option>
 <option value="f_CARDUSD"  >Visa/MasterCard USD</option>
 <option value="f_CARDRUB"  >Visa/MasterCard RUB</option>
 <option value="f_CARDEUR"  >Visa/MasterCard EUR</option>
 <option value="f_CARDUAH"  >Visa/MasterCard UAH</option>
 <option value="f_CARDBYN"  >Visa/MasterCard BYN</option>
 <option value="f_CARDKZT"  >Visa/MasterCard KZT</option>
 <option value="f_CARDAMD"  >Visa/MasterCard AMD</option>
 <option value="f_CARDGBP"  >Visa/MasterCard GBP</option>
 <option value="f_CARDCNY"  >Visa/MasterCard CNY</option>
 <option value="f_CARDJPY"  >Visa/MasterCard JPY</option>
 <option value="f_AMEXUSD"  >Карта AmEx</option>
 <option value="f_MIRCRUB"  >Карта Мир</option>
 <option value="f_UPCNY"  >Карта UnionPay</option>
 <option value="f_UZCUZS"  >Карта UZCARD</option>
 <option value="f_WIREUSD"  >Любой банк USD</option>
 <option value="f_WIRERUB"  >Любой банк RUB</option>
 <option value="f_WIREEUR"  >Любой банк EUR</option>
 <option value="f_WIREUAH"  >Любой банк UAH</option>
 <option value="f_WIREKZT"  >Любой банк KZT</option>
 <option value="f_WIREGBP"  >Любой банк GBP</option>
 <option value="f_WIRECNY"  >Любой банк CNY</option>
 <option value="f_WIREPLN"  >Любой банк PLN</option>
 <option value="f_WIRETHB"  >Любой банк THB</option>
 <option value="f_WIREINR"  >Любой банк INR</option>
 <option value="f_WIRENGN"  >Любой банк NGN</option>
 <option value="f_SEPAEUR"  >Sepa EUR</option>
 <option value="f_ERIPBYN"  >ЕРИП Расчет</option>
 <option value="f_STLMRUB"  >Счет ИП или ООО</option>
 <option value="f_WUUSD"  >WU USD</option>
 <option value="f_WUEUR"  >WU EUR</option>
 <option value="f_MGUSD"  >MoneyGram USD</option>
 <option value="f_MGEUR"  >MoneyGram EUR</option>
 <option value="f_CNTUSD"  >Contact USD</option>
 <option value="f_CNTRUB"  >Contact RUB</option>
 <option value="f_GCMTUSD"  >Золотая Корона USD</option>
 <option value="f_GCMTRUB"  >Золотая Корона RUB</option>
 <option value="f_USTMUSD"  >Юнистрим USD</option>
 <option value="f_USTMRUB"  >Юнистрим RUB</option>
 <option value="f_RMTFUSD"  >Ria USD</option>
 <option value="f_RMTFEUR"  >Ria EUR</option>
 <option value="f_CASHUSD"  >Наличные USD</option>
 <option value="f_CASHRUB"  >Наличные RUB</option>
 <option value="f_CASHEUR"  >Наличные EUR</option>
 <option value="f_CASHUAH"  >Наличные UAH</option>
 <option value="f_CASHBYN"  >Наличные BYN</option>
 <option value="f_CASHKZT"  >Наличные KZT</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="text" name="href" require>
                                </td>
                                <td>
                                  <input type="number" step="0.01" name="coef" min='1' max="100" require>
                                </td>
                                <td>
                                  <input type="number" name="rezerv" step="10" min='10'  require>
                                </td>
                                <td>
                                  <input type="number" name="review" step="10" min='10'  require>
                                </td>
                                <td>
                                  <input type="number" name="reviewStart" step="10" min='10'  require>
                                </td>
                            </tr>
                        </table>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">
                        add
                    </button>
                </form>
            </div>
        </div>
    </div>

@endsection
