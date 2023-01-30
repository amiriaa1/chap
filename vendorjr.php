<?php
include('main.php');

switch($_REQUEST['op'])
{

    case "vemon":
        $type= $_REQUEST['type'];
        $fee = new ManageFees();
        $query = "WHERE type=$type AND avtive=1   ORDER BY `nim_product`.`aid` ASC";
        $discountList = $fee->Getproductlist($query);
        $discountListcount = $fee->Getproductlistcount($query);

if ($discountListcount==1){

    $convem='
<div class="col-md-4"> <div class="product-box-item">
<div class="product-box-item-img">
<a href="product?id='.$discountList["0"]['aid'].'">  
<img src="img/product/'.$discountList["0"]['pic'].'" alt="" class="img-fluid one-image">
<img src="img/product/'.$discountList["0"]['pic'].'"" alt="" class="img-fluid two-image">							    
</a></div><a href="product?id=tttt">                             
<div class="product-box-item-desc">                                       
<div class="product-box-item-title"><h6>'.$discountList["0"]['title'].'</h6></div>
 <div class="product-box-price">                                           
 <div class="d-flex justify-content-between align-items-center"></div></div></div></a></div></div>';


}
        if ($discountListcount==2){

            $convem='
<div class="col-md-4"> <div class="product-box-item">
<div class="product-box-item-img">
<a href="product?id='.$discountList["0"]['aid'].'">  
<img src="img/product/'.$discountList["0"]['pic'].'" alt="" class="img-fluid one-image">
<img src="img/product/'.$discountList["0"]['pic'].'"" alt="" class="img-fluid two-image">							    
</a></div><a href="product?id='.$discountList["0"]['aid'].'">                             
<div class="product-box-item-desc">                                       
<div class="product-box-item-title"><h6>'.$discountList["0"]['title'].'</h6></div>
 <div class="product-box-price">                                           
 <div class="d-flex justify-content-between align-items-center"></div></div></div></a></div></div>
 
 <div class="col-md-4"> <div class="product-box-item">
<div class="product-box-item-img">
<a href="product?id='.$discountList["1"]['aid'].'">  
<img src="img/product/'.$discountList["1"]['pic'].'" alt="" class="img-fluid one-image">
<img src="img/product/'.$discountList["1"]['pic'].'"" alt="" class="img-fluid two-image">							    
</a></div><a href="product?id='.$discountList["1"]['aid'].'">                             
<div class="product-box-item-desc">                                       
<div class="product-box-item-title"><h6>'.$discountList["1"]['title'].'</h6></div>
 <div class="product-box-price">                                           
 <div class="d-flex justify-content-between align-items-center"></div></div></div></a></div></div>
 
 
 ';


        }

        if ($discountListcount==3){

            $convem='
<div class="col-md-4"> <div class="product-box-item">
<div class="product-box-item-img">
<a href="product?id='.$discountList["0"]['aid'].'">  
<img src="img/product/'.$discountList["0"]['pic'].'" alt="" class="img-fluid one-image">
<img src="img/product/'.$discountList["0"]['pic'].'"" alt="" class="img-fluid two-image">							    
</a></div><a href="product?id='.$discountList["0"]['aid'].'">                             
<div class="product-box-item-desc">                                       
<div class="product-box-item-title"><h6>'.$discountList["0"]['title'].'</h6></div>
 <div class="product-box-price">                                           
 <div class="d-flex justify-content-between align-items-center"></div></div></div></a></div></div>
 
 <div class="col-md-4"> <div class="product-box-item">
<div class="product-box-item-img">
<a href="product?id='.$discountList["1"]['aid'].'">  
<img src="img/product/'.$discountList["1"]['pic'].'" alt="" class="img-fluid one-image">
<img src="img/product/'.$discountList["1"]['pic'].'"" alt="" class="img-fluid two-image">							    
</a></div><a href="product?id='.$discountList["1"]['aid'].'">                             
<div class="product-box-item-desc">                                       
<div class="product-box-item-title"><h6>'.$discountList["1"]['title'].'</h6></div>
 <div class="product-box-price">                                           
 <div class="d-flex justify-content-between align-items-center"></div></div></div></a></div></div>
 
 
 
 <div class="col-md-4"> <div class="product-box-item">
<div class="product-box-item-img">
<a href="product?id='.$discountList["2"]['aid'].'">  
<img src="img/product/'.$discountList["2"]['pic'].'" alt="" class="img-fluid one-image">
<img src="img/product/'.$discountList["2"]['pic'].'"" alt="" class="img-fluid two-image">							    
</a></div><a href="product?id='.$discountList["2"]['aid'].'">                             
<div class="product-box-item-desc">                                       
<div class="product-box-item-title"><h6>'.$discountList["2"]['title'].'</h6></div>
 <div class="product-box-price">                                           
 <div class="d-flex justify-content-between align-items-center"></div></div></div></a></div></div>
 
 ';


        }

        if ($discountListcount==4) {

            $convem = '
<div class="col-md-4"> <div class="product-box-item">
<div class="product-box-item-img">
<a href="product?id=' . $discountList["0"]['aid'] . '">  
<img src="img/product/' . $discountList["0"]['pic'] . '" alt="" class="img-fluid one-image">
<img src="img/product/' . $discountList["0"]['pic'] . '"" alt="" class="img-fluid two-image">							    
</a></div><a href="product?id='.$discountList["0"]['aid'].'">                             
<div class="product-box-item-desc">                                       
<div class="product-box-item-title"><h6>' . $discountList["0"]['title'] . '</h6></div>
 <div class="product-box-price">                                           
 <div class="d-flex justify-content-between align-items-center"></div></div></div></a></div></div>
 
 <div class="col-md-4"> <div class="product-box-item">
<div class="product-box-item-img">
<a href="product?id=' . $discountList["1"]['aid'] . '">  
<img src="img/product/' . $discountList["1"]['pic'] . '" alt="" class="img-fluid one-image">
<img src="img/product/' . $discountList["1"]['pic'] . '"" alt="" class="img-fluid two-image">							    
</a></div><a href="product?id='.$discountList["1"]['aid'].'">                             
<div class="product-box-item-desc">                                       
<div class="product-box-item-title"><h6>' . $discountList["1"]['title'] . '</h6></div>
 <div class="product-box-price">                                           
 <div class="d-flex justify-content-between align-items-center"></div></div></div></a></div></div>
 
 
 
 <div class="col-md-4"> <div class="product-box-item">
<div class="product-box-item-img">
<a href="product?id=' . $discountList["2"]['aid'] . '">  
<img src="img/product/' . $discountList["2"]['pic'] . '" alt="" class="img-fluid one-image">
<img src="img/product/' . $discountList["2"]['pic'] . '"" alt="" class="img-fluid two-image">							    
</a></div><a href="product?id='.$discountList["2"]['aid'].'">                             
<div class="product-box-item-desc">                                       
<div class="product-box-item-title"><h6>' . $discountList["2"]['title'] . '</h6></div>
 <div class="product-box-price">                                           
 <div class="d-flex justify-content-between align-items-center"></div></div></div></a></div></div>
 
 
 <div class="col-md-4"> <div class="product-box-item">
<div class="product-box-item-img">
<a href="product?id=' . $discountList["3"]['aid'] . '">  
<img src="img/product/' . $discountList["3"]['pic'] . '" alt="" class="img-fluid one-image">
<img src="img/product/' . $discountList["3"]['pic'] . '"" alt="" class="img-fluid two-image">							    
</a></div><a href="product?id='.$discountList["3"]['aid'].'">                             
<div class="product-box-item-desc">                                       
<div class="product-box-item-title"><h6>' . $discountList["3"]['title'] . '</h6></div>
 <div class="product-box-price">                                           
 <div class="d-flex justify-content-between align-items-center"></div></div></div></a></div></div>

 ';
        }
            if ($discountListcount==5) {

                $convem = '
<div class="col-md-4"> <div class="product-box-item">
<div class="product-box-item-img">
<a href="product?id=' . $discountList["0"]['aid'] . '">  
<img src="img/product/' . $discountList["0"]['pic'] . '" alt="" class="img-fluid one-image">
<img src="img/product/' . $discountList["0"]['pic'] . '"" alt="" class="img-fluid two-image">							    
</a></div><a href="product?id='.$discountList["0"]['aid'].'">                             
<div class="product-box-item-desc">                                       
<div class="product-box-item-title"><h6>' . $discountList["0"]['title'] . '</h6></div>
 <div class="product-box-price">                                           
 <div class="d-flex justify-content-between align-items-center"></div></div></div></a></div></div>
 
 <div class="col-md-4"> <div class="product-box-item">
<div class="product-box-item-img">
<a href="product?id=' . $discountList["1"]['aid'] . '">  
<img src="img/product/' . $discountList["1"]['pic'] . '" alt="" class="img-fluid one-image">
<img src="img/product/' . $discountList["1"]['pic'] . '"" alt="" class="img-fluid two-image">							    
</a></div><a href="product?id='.$discountList["1"]['aid'].'">                             
<div class="product-box-item-desc">                                       
<div class="product-box-item-title"><h6>' . $discountList["1"]['title'] . '</h6></div>
 <div class="product-box-price">                                           
 <div class="d-flex justify-content-between align-items-center"></div></div></div></a></div></div>
 
 
 
 <div class="col-md-4"> <div class="product-box-item">
<div class="product-box-item-img">
<a href="product?id=' . $discountList["2"]['aid'] . '">  
<img src="img/product/' . $discountList["2"]['pic'] . '" alt="" class="img-fluid one-image">
<img src="img/product/' . $discountList["2"]['pic'] . '"" alt="" class="img-fluid two-image">							    
</a></div><a href="product?id='.$discountList["2"]['aid'].'">                             
<div class="product-box-item-desc">                                       
<div class="product-box-item-title"><h6>' . $discountList["2"]['title'] . '</h6></div>
 <div class="product-box-price">                                           
 <div class="d-flex justify-content-between align-items-center"></div></div></div></a></div></div>
 
 
 <div class="col-md-4"> <div class="product-box-item">
<div class="product-box-item-img">
<a href="product?id=' . $discountList["3"]['aid'] . '">  
<img src="img/product/' . $discountList["3"]['pic'] . '" alt="" class="img-fluid one-image">
<img src="img/product/' . $discountList["3"]['pic'] . '"" alt="" class="img-fluid two-image">							    
</a></div><a href="product?id='.$discountList["3"]['aid'].'">                             
<div class="product-box-item-desc">                                       
<div class="product-box-item-title"><h6>' . $discountList["3"]['title'] . '</h6></div>
 <div class="product-box-price">                                           
 <div class="d-flex justify-content-between align-items-center"></div></div></div></a></div></div>
 
 
  
 <div class="col-md-4"> <div class="product-box-item">
<div class="product-box-item-img">
<a href="product?id=' . $discountList["4"]['aid'] . '">  
<img src="img/product/' . $discountList["4"]['pic'] . '" alt="" class="img-fluid one-image">
<img src="img/product/' . $discountList["4"]['pic'] . '"" alt="" class="img-fluid two-image">							    
</a></div><a href="product?id='.$discountList["4"]['aid'].'">                             
<div class="product-box-item-desc">                                       
<div class="product-box-item-title"><h6>' . $discountList["4"]['title'] . '</h6></div>
 <div class="product-box-price">                                           
 <div class="d-flex justify-content-between align-items-center"></div></div></div></a></div></div>
 
 ';
            }
                if ($discountListcount==6) {

                    $convem = '
<div class="col-md-4"> <div class="product-box-item">
<div class="product-box-item-img">
<a href="product?id=' . $discountList["0"]['aid'] . '">  
<img src="img/product/' . $discountList["0"]['pic'] . '" alt="" class="img-fluid one-image">
<img src="img/product/' . $discountList["0"]['pic'] . '"" alt="" class="img-fluid two-image">							    
</a></div><a href="product?id='.$discountList["0"]['aid'].'">                             
<div class="product-box-item-desc">                                       
<div class="product-box-item-title"><h6>' . $discountList["0"]['title'] . '</h6></div>
 <div class="product-box-price">                                           
 <div class="d-flex justify-content-between align-items-center"></div></div></div></a></div></div>
 
 <div class="col-md-4"> <div class="product-box-item">
<div class="product-box-item-img">
<a href="product?id=' . $discountList["1"]['aid'] . '">  
<img src="img/product/' . $discountList["1"]['pic'] . '" alt="" class="img-fluid one-image">
<img src="img/product/' . $discountList["1"]['pic'] . '"" alt="" class="img-fluid two-image">							    
</a></div><a href="product?id='.$discountList["1"]['aid'].'">                             
<div class="product-box-item-desc">                                       
<div class="product-box-item-title"><h6>' . $discountList["1"]['title'] . '</h6></div>
 <div class="product-box-price">                                           
 <div class="d-flex justify-content-between align-items-center"></div></div></div></a></div></div>
 
 
 
 <div class="col-md-4"> <div class="product-box-item">
<div class="product-box-item-img">
<a href="product?id=' . $discountList["2"]['aid'] . '">  
<img src="img/product/' . $discountList["2"]['pic'] . '" alt="" class="img-fluid one-image">
<img src="img/product/' . $discountList["2"]['pic'] . '"" alt="" class="img-fluid two-image">							    
</a></div><a href="product?id='.$discountList["2"]['aid'].'">                             
<div class="product-box-item-desc">                                       
<div class="product-box-item-title"><h6>' . $discountList["2"]['title'] . '</h6></div>
 <div class="product-box-price">                                           
 <div class="d-flex justify-content-between align-items-center"></div></div></div></a></div></div>
 
 
 <div class="col-md-4"> <div class="product-box-item">
<div class="product-box-item-img">
<a href="product?id=' . $discountList["3"]['aid'] . '">  
<img src="img/product/' . $discountList["3"]['pic'] . '" alt="" class="img-fluid one-image">
<img src="img/product/' . $discountList["3"]['pic'] . '"" alt="" class="img-fluid two-image">							    
</a></div><a href="product?id='.$discountList["3"]['aid'].'">                             
<div class="product-box-item-desc">                                       
<div class="product-box-item-title"><h6>' . $discountList["3"]['title'] . '</h6></div>
 <div class="product-box-price">                                           
 <div class="d-flex justify-content-between align-items-center"></div></div></div></a></div></div>
 
 
  
 <div class="col-md-4"> <div class="product-box-item">
<div class="product-box-item-img">
<a href="product?id=' . $discountList["4"]['aid'] . '">  
<img src="img/product/' . $discountList["4"]['pic'] . '" alt="" class="img-fluid one-image">
<img src="img/product/' . $discountList["4"]['pic'] . '"" alt="" class="img-fluid two-image">							    
</a></div><a href="product?id='.$discountList["4"]['aid'].'">                             
<div class="product-box-item-desc">                                       
<div class="product-box-item-title"><h6>' . $discountList["4"]['title'] . '</h6></div>
 <div class="product-box-price">                                           
 <div class="d-flex justify-content-between align-items-center"></div></div></div></a></div></div>
 
  
 <div class="col-md-4"> <div class="product-box-item">
<div class="product-box-item-img">
<a href="product?id=' . $discountList["5"]['aid'] . '">  
<img src="img/product/' . $discountList["5"]['pic'] . '" alt="" class="img-fluid one-image">
<img src="img/product/' . $discountList["5"]['pic'] . '"" alt="" class="img-fluid two-image">							    
</a></div><a href="product?id='.$discountList["5"]['aid'].'">                             
<div class="product-box-item-desc">                                       
<div class="product-box-item-title"><h6>' . $discountList["5"]['title'] . '</h6></div>
 <div class="product-box-price">                                           
 <div class="d-flex justify-content-between align-items-center"></div></div></div></a></div></div>
 
 ';
                }

                    if ($discountListcount==7) {

                        $convem = '
<div class="col-md-4"> <div class="product-box-item">
<div class="product-box-item-img">
<a href="product?id=' . $discountList["0"]['aid'] . '">  
<img src="img/product/' . $discountList["0"]['pic'] . '" alt="" class="img-fluid one-image">
<img src="img/product/' . $discountList["0"]['pic'] . '"" alt="" class="img-fluid two-image">							    
</a></div><a href="product?id='.$discountList["0"]['aid'].'">                             
<div class="product-box-item-desc">                                       
<div class="product-box-item-title"><h6>' . $discountList["0"]['title'] . '</h6></div>
 <div class="product-box-price">                                           
 <div class="d-flex justify-content-between align-items-center"></div></div></div></a></div></div>
 
 <div class="col-md-4"> <div class="product-box-item">
<div class="product-box-item-img">
<a href="product?id=' . $discountList["1"]['aid'] . '">  
<img src="img/product/' . $discountList["1"]['pic'] . '" alt="" class="img-fluid one-image">
<img src="img/product/' . $discountList["1"]['pic'] . '"" alt="" class="img-fluid two-image">							    
</a></div><a href="product?id='.$discountList["1"]['aid'].'">                             
<div class="product-box-item-desc">                                       
<div class="product-box-item-title"><h6>' . $discountList["1"]['title'] . '</h6></div>
 <div class="product-box-price">                                           
 <div class="d-flex justify-content-between align-items-center"></div></div></div></a></div></div>
 
 
 
 <div class="col-md-4"> <div class="product-box-item">
<div class="product-box-item-img">
<a href="product?id=' . $discountList["2"]['aid'] . '">  
<img src="img/product/' . $discountList["2"]['pic'] . '" alt="" class="img-fluid one-image">
<img src="img/product/' . $discountList["2"]['pic'] . '"" alt="" class="img-fluid two-image">							    
</a></div><a href="product?id='.$discountList["2"]['aid'].'">                             
<div class="product-box-item-desc">                                       
<div class="product-box-item-title"><h6>' . $discountList["2"]['title'] . '</h6></div>
 <div class="product-box-price">                                           
 <div class="d-flex justify-content-between align-items-center"></div></div></div></a></div></div>
 
 
 <div class="col-md-4"> <div class="product-box-item">
<div class="product-box-item-img">
<a href="product?id=' . $discountList["3"]['aid'] . '">  
<img src="img/product/' . $discountList["3"]['pic'] . '" alt="" class="img-fluid one-image">
<img src="img/product/' . $discountList["3"]['pic'] . '"" alt="" class="img-fluid two-image">							    
</a></div><a href="product?id='.$discountList["3"]['aid'].'">                             
<div class="product-box-item-desc">                                       
<div class="product-box-item-title"><h6>' . $discountList["3"]['title'] . '</h6></div>
 <div class="product-box-price">                                           
 <div class="d-flex justify-content-between align-items-center"></div></div></div></a></div></div>
 
 
  
 <div class="col-md-4"> <div class="product-box-item">
<div class="product-box-item-img">
<a href="product?id=' . $discountList["4"]['aid'] . '">  
<img src="img/product/' . $discountList["4"]['pic'] . '" alt="" class="img-fluid one-image">
<img src="img/product/' . $discountList["4"]['pic'] . '"" alt="" class="img-fluid two-image">							    
</a></div><a href="product?id='.$discountList["4"]['aid'].'">                             
<div class="product-box-item-desc">                                       
<div class="product-box-item-title"><h6>' . $discountList["4"]['title'] . '</h6></div>
 <div class="product-box-price">                                           
 <div class="d-flex justify-content-between align-items-center"></div></div></div></a></div></div>
 
  
 <div class="col-md-4"> <div class="product-box-item">
<div class="product-box-item-img">
<a href="product?id=' . $discountList["5"]['aid'] . '">  
<img src="img/product/' . $discountList["5"]['pic'] . '" alt="" class="img-fluid one-image">
<img src="img/product/' . $discountList["5"]['pic'] . '"" alt="" class="img-fluid two-image">							    
</a></div><a href="product?id='.$discountList["5"]['aid'].'">                             
<div class="product-box-item-desc">                                       
<div class="product-box-item-title"><h6>' . $discountList["5"]['title'] . '</h6></div>
 <div class="product-box-price">                                           
 <div class="d-flex justify-content-between align-items-center"></div></div></div></a></div></div>
 
  
 <div class="col-md-4"> <div class="product-box-item">
<div class="product-box-item-img">
<a href="product?id=' . $discountList["6"]['aid'] . '">  
<img src="img/product/' . $discountList["6"]['pic'] . '" alt="" class="img-fluid one-image">
<img src="img/product/' . $discountList["6"]['pic'] . '"" alt="" class="img-fluid two-image">							    
</a></div><a href="product?id='.$discountList["6"]['aid'].'">                             
<div class="product-box-item-desc">                                       
<div class="product-box-item-title"><h6>' . $discountList["6"]['title'] . '</h6></div>
 <div class="product-box-price">                                           
 <div class="d-flex justify-content-between align-items-center"></div></div></div></a></div></div>
 
 ';
                    }

                        if ($discountListcount==8){

                            $convem='
<div class="col-md-4"> <div class="product-box-item">
<div class="product-box-item-img">
<a href="product?id='.$discountList["0"]['aid'].'">  
<img src="img/product/'.$discountList["0"]['pic'].'" alt="" class="img-fluid one-image">
<img src="img/product/'.$discountList["0"]['pic'].'"" alt="" class="img-fluid two-image">							    
</a></div><a href="product?id='.$discountList["0"]['aid'].'">                             
<div class="product-box-item-desc">                                       
<div class="product-box-item-title"><h6>'.$discountList["0"]['title'].'</h6></div>
 <div class="product-box-price">                                           
 <div class="d-flex justify-content-between align-items-center"></div></div></div></a></div></div>
 
 <div class="col-md-4"> <div class="product-box-item">
<div class="product-box-item-img">
<a href="product?id='.$discountList["1"]['aid'].'">  
<img src="img/product/'.$discountList["1"]['pic'].'" alt="" class="img-fluid one-image">
<img src="img/product/'.$discountList["1"]['pic'].'"" alt="" class="img-fluid two-image">							    
</a></div><a href="product?id='.$discountList["1"]['aid'].'">                             
<div class="product-box-item-desc">                                       
<div class="product-box-item-title"><h6>'.$discountList["1"]['title'].'</h6></div>
 <div class="product-box-price">                                           
 <div class="d-flex justify-content-between align-items-center"></div></div></div></a></div></div>
 
 
 
 <div class="col-md-4"> <div class="product-box-item">
<div class="product-box-item-img">
<a href="product?id='.$discountList["2"]['aid'].'">  
<img src="img/product/'.$discountList["2"]['pic'].'" alt="" class="img-fluid one-image">
<img src="img/product/'.$discountList["2"]['pic'].'"" alt="" class="img-fluid two-image">							    
</a></div><a href="product?id='.$discountList["2"]['aid'].'">                             
<div class="product-box-item-desc">                                       
<div class="product-box-item-title"><h6>'.$discountList["2"]['title'].'</h6></div>
 <div class="product-box-price">                                           
 <div class="d-flex justify-content-between align-items-center"></div></div></div></a></div></div>
 
 
 <div class="col-md-4"> <div class="product-box-item">
<div class="product-box-item-img">
<a href="product?id='.$discountList["3"]['aid'].'">  
<img src="img/product/'.$discountList["3"]['pic'].'" alt="" class="img-fluid one-image">
<img src="img/product/'.$discountList["3"]['pic'].'"" alt="" class="img-fluid two-image">							    
</a></div><a href="product?id='.$discountList["3"]['aid'].'">                             
<div class="product-box-item-desc">                                       
<div class="product-box-item-title"><h6>'.$discountList["3"]['title'].'</h6></div>
 <div class="product-box-price">                                           
 <div class="d-flex justify-content-between align-items-center"></div></div></div></a></div></div>
 
 
  
 <div class="col-md-4"> <div class="product-box-item">
<div class="product-box-item-img">
<a href="product?id='.$discountList["4"]['aid'].'">  
<img src="img/product/'.$discountList["4"]['pic'].'" alt="" class="img-fluid one-image">
<img src="img/product/'.$discountList["4"]['pic'].'"" alt="" class="img-fluid two-image">							    
</a></div><a href="product?id='.$discountList["4"]['aid'].'">                             
<div class="product-box-item-desc">                                       
<div class="product-box-item-title"><h6>'.$discountList["4"]['title'].'</h6></div>
 <div class="product-box-price">                                           
 <div class="d-flex justify-content-between align-items-center"></div></div></div></a></div></div>
 
  
 <div class="col-md-4"> <div class="product-box-item">
<div class="product-box-item-img">
<a href="product?id='.$discountList["5"]['aid'].'">  
<img src="img/product/'.$discountList["5"]['pic'].'" alt="" class="img-fluid one-image">
<img src="img/product/'.$discountList["5"]['pic'].'"" alt="" class="img-fluid two-image">							    
</a></div><a href="product?id='.$discountList["5"]['aid'].'">                             
<div class="product-box-item-desc">                                       
<div class="product-box-item-title"><h6>'.$discountList["5"]['title'].'</h6></div>
 <div class="product-box-price">                                           
 <div class="d-flex justify-content-between align-items-center"></div></div></div></a></div></div>
 
  
 <div class="col-md-4"> <div class="product-box-item">
<div class="product-box-item-img">
<a href="product?id='.$discountList["6"]['aid'].'">  
<img src="img/product/'.$discountList["6"]['pic'].'" alt="" class="img-fluid one-image">
<img src="img/product/'.$discountList["6"]['pic'].'"" alt="" class="img-fluid two-image">							    
</a></div><a href="product?id='.$discountList["6"]['aid'].'">                             
<div class="product-box-item-desc">                                       
<div class="product-box-item-title"><h6>'.$discountList["6"]['title'].'</h6></div>
 <div class="product-box-price">                                           
 <div class="d-flex justify-content-between align-items-center"></div></div></div></a></div></div>
  
 <div class="col-md-4"> <div class="product-box-item">
<div class="product-box-item-img">
<a href="product?id='.$discountList["7"]['aid'].'">  
<img src="img/product/'.$discountList["7"]['pic'].'" alt="" class="img-fluid one-image">
<img src="img/product/'.$discountList["7"]['pic'].'"" alt="" class="img-fluid two-image">							    
</a></div><a href="product?id='.$discountList["7"]['aid'].'">                             
<div class="product-box-item-desc">                                       
<div class="product-box-item-title"><h6>'.$discountList["7"]['title'].'</h6></div>
 <div class="product-box-price">                                           
 <div class="d-flex justify-content-between align-items-center"></div></div></div></a></div></div>
 
 ';
            }

        echo json_encode(array(
            "statusCode"=>200,
            "html1"=>$convem


        ),JSON_UNESCAPED_UNICODE);

        break;


}


?>