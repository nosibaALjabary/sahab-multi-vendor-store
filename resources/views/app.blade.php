<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/homePage.css')}}">
 
    <link rel="stylesheet" href="homePage.css">
</head>
<body>
    <div class="headerLine">

    </div>

    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-white " >
            <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <a class="navbar-brand" href="https://accord.ps">
                 <img src="{{asset('assets/images/rasel-logo.png')}}" alt="" height="50px" width="150px" >
              </a>
              <div class="navbar-collapse collapse show " id="navbarTogglerDemo03">
                 <ul class="navbar-nav me-2 mb-2 mt-lg-0 ms-4  ">
                  <div class="dropdown  ">
                    <a class="btn  dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                     التصنيفات
                    </a>                  
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                      <div class="col-md-12">
                        <div class="row">
                          <div class="col-md-12 pr-0" category="">
                            <div class="col-md-3 pr-0">
                                <span class="dropdown-item-direction" data-source="direction"><i class="fa fa-angle-double-up"></i> </span>
                                <div class="dropdown-item parent checked" data-source="category_name" data-id="1" data-action="getChildrenCategory">الأثاث المنزلي</div>
                            </div>
                            <div class="col-md-12">
                                <div class="row" children="">
                                  <div class="col-md-4">
                                      <a class="dropdown-item child" href="/search?category_id=1&amp;child_id=240" data-id="240">فرشات نوم</a>
                                  </div>
                                  <div class="col-md-4">
                                      <a class="dropdown-item child" href="/search?category_id=1&amp;child_id=274" data-id="274">ملحقات</a>
                                  </div>
                                  <div class="col-md-4">
                                      <a class="dropdown-item child" href="/search?category_id=1&amp;child_id=273" data-id="273">فرش عربي</a>
                                  </div>
                                  <div class="col-md-4">
                                      <a class="dropdown-item child" href="/search?category_id=1&amp;child_id=268" data-id="268">طاولات</a>
                                  </div>
                                  <div class="col-md-4">
                                      <a class="dropdown-item child" href="/search?category_id=1&amp;child_id=229" data-id="229">أطقم كنب</a>
                                  </div>
                                  <div class="col-md-4">
                                      <a class="dropdown-item child" href="/search?category_id=1&amp;child_id=96" data-id="96">أطقم نوم</a>
                                  </div>
                                </div>
                            </div>

                          </div>
                          <div class="col-md-12 pr-0" category="">
                            <div class="col-md-3 pr-0">
                                <span class="dropdown-item-direction" data-source="direction"><i class="fa fa-angle-double-up"></i> </span>
                                <div class="dropdown-item parent checked" data-source="category_name" data-id="2" data-action="getChildrenCategory">الأجهزة الكهربائية</div>
                            </div>
                            <div class="col-md-12">
                                <div class="row" children=""><div class="col-md-4">
            <a class="dropdown-item child" href="/search?category_id=2&amp;child_id=275" data-id="275">جوالات</a>
        </div><div class="col-md-4">
            <a class="dropdown-item child" href="/search?category_id=2&amp;child_id=269" data-id="269">فروش غاز</a>
        </div><div class="col-md-4">
            <a class="dropdown-item child" href="/search?category_id=2&amp;child_id=153" data-id="153">الثلاجات</a>
        </div><div class="col-md-4">
            <a class="dropdown-item child" href="/search?category_id=2&amp;child_id=155" data-id="155">الغسالات</a>
        </div><div class="col-md-4">
            <a class="dropdown-item child" href="/search?category_id=2&amp;child_id=211" data-id="211">شاشات التلفاز</a>
        </div><div class="col-md-4">
            <a class="dropdown-item child" href="/search?category_id=2&amp;child_id=162" data-id="162">مكيفات</a>
        </div><div class="col-md-4">
            <a class="dropdown-item child" href="/search?category_id=2&amp;child_id=146" data-id="146">أفران</a>
        </div><div class="col-md-4">
            <a class="dropdown-item child" href="/search?category_id=2&amp;child_id=148" data-id="148">خلاطات ومفارم</a>
        </div><div class="col-md-4">
            <a class="dropdown-item child" href="/search?category_id=2&amp;child_id=242" data-id="242">دفايات</a>
        </div><div class="col-md-4">
            <a class="dropdown-item child" href="/search?category_id=2&amp;child_id=154" data-id="154">فريزر</a>
        </div><div class="col-md-4">
            <a class="dropdown-item child" href="/search?category_id=2&amp;child_id=156" data-id="156">مكواة</a>
        </div><div class="col-md-4">
            <a class="dropdown-item child" href="/search?category_id=2&amp;child_id=161" data-id="161">مكنسة كهربائية</a>
        </div><div class="col-md-4">
            <a class="dropdown-item child" href="/search?category_id=2&amp;child_id=241" data-id="241">شفاطات</a>
        </div><div class="col-md-4">
            <a class="dropdown-item child" href="/search?category_id=2&amp;child_id=243" data-id="243">كمكم</a>
        </div><div class="col-md-4">
            <a class="dropdown-item child" href="/search?category_id=2&amp;child_id=244" data-id="244">سخان المياه</a>
        </div><div class="col-md-4">
            <a class="dropdown-item child" href="/search?category_id=2&amp;child_id=266" data-id="266">ملحقات</a>
        </div></div>
                            </div>
                        </div>

                        </div>
                      </div>  
                     
                    </ul>
                  </div>
               
                 </ul>
               </div>
                <div class="left-header text-left d-flex pt-2 ">
                    <div class="left_nav d-flex">
                        <button class="btn-success w-100 rounded ms-2 border-0" style="height: 30px;">
                            <i class="fa-solid fa-circle-plus"></i>
                            سجل كمورد
                        </button>    
                        <div class="d-block text-nowrap text-center ms-2">
                           <a href="/search" class="nav-link ">
                           <i class="fa fa-search" aria-hidden="true"></i>
                            <p>
                                البحث
                            </p>
                           </a>
                        </div>
                        <div class="d-block text-nowrap text-center ms-2">
                            <i class="fa-regular fa-heart" aria-hidden="true"></i>
                            <p>
                                المفضلة
                            </p>
                        </div>
                        <div class="d-block text-nowrap text-center ms-2">
                            <i class="fa-solid fa-cart-shopping" aria-hidden="true"></i>
                            <p>
                                سلة المشتريات
                            </p>
                        </div>
                        <div class="d-block text-nowrap text-center ms-2">
                            <i class="fa-regular fa-circle-user" aria-hidden="true"></i>
                            <p>
                                تسجيل الدخول
                            </p>
                        </div>

                    </div>
                    
                       
                       
                   

                </div>
               
             
              
            </div>
            
        </nav>

    </div>

  
    @yield('content')
    <div class="headerLine ">

    </div>
    <div class="container ">
     <div class="footer">
         <div class="row">
             <div class="col-12 col-xl-4 p-4">
                 <div class="footer-contacts">
                     <div>
                       <h5>للاتصال بنا</h5>
                       <p>يسرنا تواصلك معنا من خلال أي من القنوات المتاحة.</p>
                     </div>
                     <div class="row">
                         <div class="col-6">
                             <div class="phone">
                                 <h5>أرقام التواصل</h5>
                                 <p>1700400600</p>
                             </div>
 
                         </div>
                         <div class="col-6">
                             <div class="email">
                                 <h5>البريد الإلكتروني</h5>
                                 <p>info@accord.ps</p>
                             </div>
 
                         </div>
 
                     </div>
                     <div class="row">
                         <div class="col-6">
                             <div class="address">
                                 <h5>العنوان</h5>
                                 <p>فلسطين، غزة، مقابل البوابة الشمالية لجامعة الأزهر، مجمع الرؤيا التجاري</p>
                             </div>
 
                         </div>
                         <div class="col-6">
                             <div class="time">
                                 <h5>ساعات العمل</h5>
                                 <p>السبت - الخميس</p>
                                 <p>9:00 صباحاً - 3:30 مساءً </p>
                             </div>
 
                         </div>
 
                     </div>
 
                 </div>
 
             </div>
             <div class="col-6 col-md-3 col-xl-2 p-4">
                     <div class="info ">
                         <h5>المعلومات</h5>
                         <ul class="nav flex-column p-0 ">
                             <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">من نحن؟</a></li>
                             <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">سياسة الخصوصية</a></li>
                             <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">للاتصال بنا</a></li>
                             <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">الأسئلة الشائعة</a></li>
                             <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">مورد جديد</a></li>
                         </ul>
                     </div>
                 
             </div>
             <div class="col-6 col-md-3 col-xl-2 p-4">
                 <div class="user">
                     <h5 >الملف الشخصي</h5>
                     <ul class="nav flex-column p-0 ">
                         <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">التسجيل</a></li>
                         <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">تسجيل الدخول</a></li>
                         <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">المفضلة</a></li>
                         <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"> سلة المشتريات</a></li>
                         <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">البحث </a></li>
                     </ul>
                 </div>
 
             </div>
             <div class="col-12 col-md-6 col-xl-4 p-4">
                 <div>
                     <h5>قائمة الواتس أب</h5>
                     <p>انضم إلى قائمة الواتس أب الخاصة بالمنصة للبقاء على إطلاع بأحدث الخصومات والعروض الخاصة.</p>
                 </div>
                 <form>
                     <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                         <input id="newsletter1" type="text" class="form-control" placeholder="رقم الواتس أب... ">
                         <button class="btn_s " type="button">الاشتراك</button>
                       </div>
                 </form>
                 <div class="icons">
                     <h3> وسائل التواصل الإجتماعي </h3>
                     <div class="i ">
                         <a href="https://www.facebook.com/Acrdps " class="fac_icon  " >
                             <i class="fa-brands fa-facebook"></i>
                         </a>
                         <a href="https://www.instagram.com/acrdps" class="insta_icon " >
                             <i class="fa-brands fa-instagram"></i>
                         </a>
 
                     </div>
                     
 
                 </div>
             </div>
 
         </div>
         <div class="site-footer__bottom">
             
                 <div class="site-footer__bottom-row">
                     <div class="site-footer__copyright en text-center">
                         Powered by Accord - Accord Group for Marketing &amp; Trade
                     </div>
                 </div>
             
         </div>
 
     </div>
 
    </div>
  
  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script> 

</body>
</html>