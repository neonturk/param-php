<?php
/**
 * Created by Payfull.
 * Time: 12:03 PM
 */

namespace param\paramBasics;


class KK_Saklama
{
    public $Kart_No;//Card Number Belonging to Member Workplace
    public $KK_Sahibi;//Credit Card Holder
    public $KK_No;//Credit Card Number
    public $KK_SK_Ay;//Last 2 digit Expiration month
    public $KK_SK_Yil;//4 digit Expiration Year
    public $KK_CVC;//CVC Code
    public $Data1;//Extra Space 1, Optional
    public $Data2;//Extra Space 2, Optional
    public $Data3;//Extra Space 3, Optional
    public $GUID;//Key Belonging to Member Workplace
    public $CLIENT_CODE;//Terminal ID, It will be forwarded by param.
    public $CLIENT_USERNAME;//User Name, It will be forwarded by param.
    public $CLIENT_PASSWORD;//Password, It will be forwarded by param.

    public function __construct($CLIENT_CODE, $CLIENT_USERNAME, $CLIENT_PASSWORD, $guid, $Kart_No, $KK_Sahibi, $KK_No, $KK_SK_Ay, $KK_SK_Yil, $KK_CVC, $Data1='', $Data2='', $Data3='')
    {
        $this->Kart_No = $Kart_No;
        $this->KK_Sahibi = $KK_Sahibi;
        $this->KK_No = $KK_No;
        $this->KK_SK_Ay = $KK_SK_Ay;
        $this->KK_SK_Yil = $KK_SK_Yil;
        $this->KK_CVC = $KK_CVC;
        $this->Data1 = $KK_CVC;
        $this->Data2 = $KK_CVC;
        $this->Data3 = $KK_CVC;

        $this->GUID = $guid;
        $this->G = new G($CLIENT_CODE, $CLIENT_USERNAME , $CLIENT_PASSWORD);
    }
}