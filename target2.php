<?php

include_once('main.php');
include_once('header.php');



if((isset($_GET['GS'])))
{
    if (isset($_COOKIE['cid'])) {
        setcookie("cid",'',time()-1200);
    }
    setcookie("cid",$_GET['GS'],time()+1200);
    $unid=$_GET['GS'];
    $fee=new ManageFees();

    $amp = $fee->Getshoplist1($uusername,$unid);
    foreach($amp as $final)
    {$amount=$final['amount'];}
    $amount = (_RIAL==1?str_replace(",", "", $amount)/10:str_replace(",", "", $amount)); //Amount will be based on Toman

    $percentage=9;
    $totalWidth=$amount;
    $amountp9 = ($percentage / 100) * $totalWidth;

    $amount=$amountp9+$amount;
    echo''.$amount.'';

    $_SESSION['course_amount']=str_replace
    (",", "", $amount);
    $_SESSION['gateway']=$unid;
    $amount*=10;
    $key = "XDG4VIrHqsCXFezWODxii03VneQ/6VDs";
    $MerchantId = "140341573";
    $TerminalId = "24102838";
    $OrderId =$unid;
    $LocalDateTime = date("m/d/Y g:i:s a");
    $ReturnUrl = "https://harjachap.com/target2.php";
    $SignData = encrypt_pkcs7("$TerminalId;$OrderId;$amount", "$key");
    $data = array(
        'TerminalId' => $TerminalId,
        'MerchantId' => $MerchantId,
        'Amount' => $amount,
        'SignData' => $SignData,
        'ReturnUrl' => $ReturnUrl,
        'LocalDateTime' => $LocalDateTime,
        'UserId' => $uusername,
        'OrderId' => $OrderId
    );

    $result = CallAPI('https://sadad.shaparak.ir/vpg/api/v0/Request/PaymentRequest', $data);
    if (!$result->ResCode == 0){
        $fee = new ManageFees();
        $Authority=$unid;
        $status="sadad--PaymentRequest-err-'.$result->Description.'";
        $fee->AddUserPaymentlog($Authority,$uusername,$status,$amount);


        return; //your error
    }
    else{
        $_SESSION['order_id']=$unid;
        $_SESSION['pay_amount']=$amount/10;
        $Token = $result->Token;
        $url = "https://sadad.shaparak.ir/VPG/Purchase?Token=$Token";
        $fee = new ManageFees();
        $Authority=$unid;
        $status='sadad--send to getway--'.$Token.'';
        $fee->AddUserPaymentlog($Authority,$uusername,$status,$amount);
        echo "<script>window.location.href='$url';</script>";
        header("Location:$url");
        exit;



    }




}

if(isset($_POST["ResCode"])){
    $fee=new ManageFees();
    $unid=$_POST["OrderId"];

    $autvc=count($fee->getcountshoplistpart($uusername,$unid));

    if($autvc!==0){

        $key = "XDG4VIrHqsCXFezWODxii03VneQ/6VDs";
        $OrderId = $_POST["OrderId"];
        $Token = $_POST["token"];
        $ResCode = $_POST["ResCode"];

        $remsityy="11";
        if ($remsityy=="11") {

            $verifyData = array(
                'Token' => $Token,
                'SignData' => encrypt_pkcs7($Token, $key)
            );

            $result = CallAPI('https://sadad.shaparak.ir/vpg/api/v0/Advice/Verify', $verifyData);


            if ($result->ResCode != -1 && $result->ResCode == 0) {
                echo'---req zad result>ResCode -1 nabod  result>ResCode sefr bod ---';

                $comment="$result->RetrivalRefNo--$result->SystemTraceNo--$result->OrderId--$result->Description--$result->CardHolderFullName";
                $RefID=$result->SystemTraceNo;
                $Authority=$unid;
                $fee->updateUserPaymentlog($comment,$RefID,$Authority);
                $fee->Updateshoplistafterpay($unid);
                $getdeloo=$fee->Getshoplist1($uusername,$unid);
                $llvm=$uusername;
                orderpayok($llvm,$unid);

                date_default_timezone_set('Asia/Tehran');
                list($gy, $gm, $gd) = explode('-', date('Y-n-d'));
                $j_date_array = gregorian_to_jalali($gy, $gm, $gd);
                $today_date=implode("/", $j_date_array);

                echo'

<div class="cart">
            <div class="container-fluid">
                <div class="cart-content shadow-box">
                    <div class="payment">
                        <div class="payment-title">
                            <img src="img/default-icon/iconOk.png" alt="" width="100" class="img-fluid">
                            <h2>?????????? <span class="payment-order-code">'.$unid.'</span> ???? ???????????? ???? ?????????? ?????? ????</h2>
                            <p class="text-muted mt-3">?????????? ?????? ???? ?????? ???????????? ?????? ??  ???? ???????? ???????? ???????? ???????? ???? ?????? ?????? ??????????</p>
                        </div>
                    </div>
                    <div class="category-filter">
                        <div class="category-filter-box">
                            <div class="category-filter-box-title">
                                <div class="d-flex justify-content-between align-items-center flex-wrap">
                                    <h4 class="fw-bold">
                                        ???? ?????????? : <span>'.$unid.'</span>
                                    </h4>
                                    <a href="order-detail?unid='.$unid.'" class="btn-main btn-main-primary waves-effect waves-light btn-payment">???????????? ??????????</a>
                                </div>
                                <p class="text-muted my-2 font-14 text-payment">?????????? ?????? ???? ???????????? ???? ?????????? ?????? ???? ?? ???? ?????????? <span
                                        class="success-span">???? ?????? ????????????</span> ?????? ??????
                                        
                                     <a href="order-detail?unid='.$unid.'">
                                    ???????????? ?????? ?????????? ???? ???????????????? ???? ???????? ???? ?????? ????????
                                    
                                          <span class="danger-span-border">???????????? ??????????</span></a> ???????????? ????????????
                                </p>
                            </div>
                            
                        </div>
                    </div>
                    <div class="table-responsive-md d-lg-block d-none">
                        <table class="table main-table">
                            <thead>
                                <tr>
                                    <th scope="col">????????</th>
                                    <th scope="col">????????????</th>
                                    <th scope="col">?????????? ???????????? ??????????</th>
                                    <th scope="col">????????</th>
                                    <th scope="col">??????????</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td>1</td>
                                    <td>????????</td>
                                    <td>'.$reference_code.'</td>
                                  
                                    <td>'.$result->Amount.' ????????</td>
                                    <td><span class="success-span">???????????? ????????</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="table-responsive-mobile d-lg-none d-block">
                        <div class="trm-parent">
                            <div class="trm">
                                <div class="trm-item">????????</div>
                                <div class="trm-item">
                                    1
                                </div>
                            </div>
                            <div class="trm">
                                <div class="trm-item">??????????</div>
                                <div class="trm-item">
                                   ???? ????
                                </div>
                            </div>
                            <div class="trm">
                                <div class="trm-item">?????????? ???????????? ??????????</div>
                                <div class="trm-item">
                                     '.$reference_code.'
                                </div>
                            </div>
                            <div class="trm">
                                <div class="trm-item">??????????</div>
                                <div class="trm-item">
                                    '.$today_date.'
                                </div>
                            </div>
                            <div class="trm">
                                <div class="trm-item">????????</div>
                                <div class="trm-item">
                                    '.$getdeloo["0"]["amount"].'  ?????????? 	
                                </div>
                            </div>
                            <div class="trm">
                                <div class="trm-item">??????????</div>
                                <div class="trm-item">
                                    <span class="success-span">???????????? ????????</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


';




            }
            else{

                $comment="err";
                $RefID="err";
                $Authority=$unid;
                $fee->updateUserPaymentlog($comment,$RefID,$Authority);
                $fee->Updateshoplistafterpay2($unid);



                echo'

<div class="cart">
            <div class="container-fluid">
                <div class="cart-content shadow-box">
                    <div class="payment">
                        <div class="payment-title">
                            <img src="img/default-icon/iconNok.jpg" alt="" width="100" class="img-fluid">
                            <h2>?????????? <span class="payment-order-code">'.$unid.'</span> ???????????? ???????????? ??????</h2>
                            <p class="text-muted mt-3">???????? ???? ?????? ???????????? ?????????? ???? ???????? ?????? ?????? ?????? ?????? ?? ???? 72 ???????? ?????????? ???? ???????? ?????? ?????? ?????????? ??????.</p>
                        </div>
                    </div>
                    <div class="category-filter">
                        <div class="category-filter-box">
                            <div class="category-filter-box-title">
                                <div class="d-flex justify-content-between align-items-center flex-wrap">
                                    <h4 class="fw-bold">
                                       <span class="danger-span">(?????????? ???? ???????? ?????? )</span>
                                    </h4>
                                   
                                </div>
                               
                            </div>
                            
                        </div>
                    </div>
                    <div class="table-responsive-md d-lg-block d-none">
                        <table class="table main-table">
                            <thead>
                                <tr>
                                    <th scope="col">????????</th>
                                    <th scope="col">????????????</th>
                                    <th scope="col">?????????? ???????????? ??????????</th>
                                    <th scope="col">????????</th>
                                    <th scope="col">??????????</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td>1</td>
                                    <td>  ???????? + ?? ???????? ????????????</td>
                                    <td>'.$reference_code.'</td>
                                  
                                    <td>0 ??????????</td>
                                    <td><span class="success-span">???????????? ???? ????????</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="table-responsive-mobile d-lg-none d-block">
                        <div class="trm-parent">
                            <div class="trm">
                                <div class="trm-item">????????</div>
                                <div class="trm-item">
                                    1
                                </div>
                            </div>
                            <div class="trm">
                                <div class="trm-item">????????????</div>
                                <div class="trm-item">
                                  ???????? + ?? ???????? ????????????
                                </div>
                            </div>
                            <div class="trm">
                                <div class="trm-item">?????????? ???????????? ??????????</div>
                                <div class="trm-item">
                                    ?????????? ??????
                                </div>
                            </div>
                            <div class="trm">
                                <div class="trm-item">??????????</div>
                                <div class="trm-item">
                                    '.$today_date.'
                                </div>
                            </div>
                            <div class="trm">
                                <div class="trm-item">????????</div>
                                <div class="trm-item">
                                   ??????????
                                </div>
                            </div>
                            <div class="trm">
                                <div class="trm-item">??????????</div>
                                <div class="trm-item">
                                    <span class="success-span">???????????? ???? ????????</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


';





                return;






            }

        }

    }


}


?>