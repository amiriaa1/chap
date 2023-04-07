<?php
include('main.php');

echo'
<script type="text/javascript">
function addemalkhabar(item)
							{
                 $("#replyResult2").html(\'<img src="img/default-icon/wait.gif">\');  
                 var email = $(email33).attr("value");             
                            $.ajax({
							
								    url: "aj.php",
								    type: "POST",
								    data: {op:"mailadd",email:email},
									dataType: "json",
								    success: function(data){  
                                        	
							     
							}
  });
	</script>
	
 <footer class="shadow-md">
        <div class="container-fluid">
            <div class="footer-feature">
                <div class="row justify-content-center">
                    <div class="col-md-3 col-6 text-center">
                        <div class="footer-feature-item">
                            <a href="#">
                                <img src="img/product-feature/delivery.png" alt="">
                            </a>
                            <h6>تحویل اکسپرس</h6>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 text-center">
                        <div class="footer-feature-item">
                            <a href="#">
                                <img src="img/product-feature/contact-us.png" alt="">
                            </a>
                            <h6>پشتیبانی</h6>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 text-center">
                        <div class="footer-feature-item">
                            <a href="#">
                                <img src="img/product-feature/payment-terms.png" alt="">
                            </a>
                            <h6>ضمانت کیفیت</h6>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 text-center">
                        <div class="footer-feature-item">
                            <a href="#">
                                <img src="img/product-feature/return-policy.png" alt="">
                            </a>
                            <h6>خرید با فاکتور رسمی
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="info-bar">
                    <div class="row justify-content-center">
                     
                      
                    </div>
                </div>
            </div>
            <div class="footer">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="footer-item">
                            <h5>لینک های مفید</h5>
                            <ul class="footer-item-link">
                                <li><a href="">راهنمای ثبت سفارش</a></li>
                                <li><a href="privacy">قوانین و مقررات</a></li>
                                 <li><a href="contact-us">ارتباط با ما</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3">
                       
                            
                          
                   
                        <div class="col-12">
                            <div class="footer-desc-item">
                                <h3>هرجا چاپ ، بررسی ، انتخاب ، سفارش آنلاین</h3>
                             هرجا چاپ به عنوان یک شرکت استارتاپ در عرصه خدمات چاپ و ماشین های اداری 
                             <br>
                             توانسته با حضور افراد متخصص و مجرب تحول عظیمی در کشور ایجاد نماید 
                             
                             <p class="font-14">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                                <path
                                                    d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                                                <path
                                                    d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                            </svg>
                                            تهران خیابان شهید بهشتی، مرکز تجاری گلدیس واحد: 205
                                        </p>
                            </div>
                        </div>
                      
                            
                               
                                    
                                    
                               
                            
                            
                       
              
                            
                      
                    </div>
                    <div class="col-lg-3">

                    </div>
                    <div class="col-lg-3">
                        <div class="footer-item">
                            <div class="feed">
                                <h6>از تخفیف‌ها هرجا چاپ باخبر شوید:
                                </h6>
                              <form action="">
                                    <div class="form-group">
                                        <input type="text" name="email33" id="email33" class="form-control feed-inp"
                                            placeholder="آدرس ایمیل خود را وارد کنید">
                                            
                                        <button class="feed-btn waves-effect waves-light" onclick="addemalkhabar(this)">ارسال</button>
                                    </div>
                               </form>
                                <div class="social-link justify-content-md-end justify-content-center">
                            <a href="https://instagram.com/Harjachap" class="bi bi-instagram"></a>
                            <a href="https://wa.me/982191001702" class="bi bi-whatsapp"></a>
                            
<div class="footer-desc-item">
                                <ul class="d-flex justify-content-md-end justify-content-center">
                                                                        <li><a referrerpolicy="origin" target="_blank" href="https://trustseal.enamad.ir/?id=294336&amp;Code=Hiv92OATSF8tMo4cITZy"><img referrerpolicy="origin" src="https://Trustseal.eNamad.ir/logo.aspx?id=294336&amp;Code=Hiv92OATSF8tMo4cITZy" alt="" style="cursor:pointer" id="Hiv92OATSF8tMo4cITZy"></a></li>

                                </ul>
                                
                            </div>
                            
                                     
                                 
                                 
                                        <ul class="nav justify-content-lg-end justify-content-start mt-lg-0 mt-3">
                                            <li class="nav-item"><a href="tel:1702" class="nav-link font-14 ps-0"
                                                    style="color:#525252">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                                    </svg>
                                                     1702  
                                                </a></li>
                                                <li class="nav-item"><a href="tel:02191001702" class="nav-link font-14 ps-0"
                                                    style="color:#525252">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                                    </svg>
                                                     021-91001702  
                                                </a></li>
                                            <li class="nav-item"><a href="email:info@harjachap.com" class="nav-link font-14 ps-sm-1 ps-0"
                                                    style="color:#525252">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                                        <path
                                                            d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                                                    </svg>
                                                    info@harjachap.com
                                                </a></li>
                                        </ul>
                        </div>

                            </div>
                                
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </footer>
    <!-- end footer -->


    <!-- end copyright -->

';


?>