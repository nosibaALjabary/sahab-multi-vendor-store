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
  

   @extends('app')
  
   @section('content')
   <div class="row position-relative">
        <div class="img  ">
            <img src="slider-2.jpg" alt="" height="370px" width="100%">

        </div>
        <div class="form  bg-white rounded position-absolute p-2 "  >
            <h2 class="text-center pt-2">كل المراحب والله</h2>
            <p class="text-center">ضيفوا البيانات مشان تتمتعوا بالعديد من الميزات</p>
            <div class="form-group m-2 ">
                <label>رقم الجوال</label>
                <input type="number " class="form-control mt-2 rounded fw-bold" placeholder="أدخل رقم الجوال الخاص بك">

            </div>
            <div class="form-group m-2">
                <label>الاسم بالكامل</label>
               <input type="text" class="form-control mt-2 rounded fw-bold" placeholder="أدخل اسمك بالكامل">

            </div>
            <button type="button" class="btn_su rounded w-100 mt-2  fw-bold">ارسال</button>


        </div>


    </div>
    <div class="home_content">
        <div class="container ">
            <div class="categories pt-4">
                <div class="category_text">
                    <h4 class="fw-bold">اكتشف أصنافنا</h4>
                    <p class="d-none d-sm-block text-start">كل التصنيفات </p>
                </div>
                <div class="categories-block  pt-2">
                  <div class="items d-flex scrollbar-primary">
                      <div class="item text-nowrap m-2 text-center fontweight-bold ">
                        <img src="c0.png" height="75px" width="75px" class="rounded-circle " >
                        <p>الأثاث المنزلي</p>
                      </div>
                      <div class="item text-nowrap m-2 text-center fontweight-bold">
                        <img src="c1.png" height="75px" width="75px" class="rounded-circle" >
                        <p>الأجهزة الكهربائية</p>
                    </div>
                    <div class="item text-nowrap m-2 text-center fontweight-bold">
                      <img src="c2.png" height="75px" width="75px" class="rounded-circle" >
                      <p>صالات الأفراح</p>
                    </div>
                    <div class="item text-nowrap m-2 text-center fontweight-bold">
                      <img src="c3.png" height="75px" width="75px"  class="rounded-circle">
                      <p>بدل الزفاف</p>
                    </div>
                    <div class="item text-nowrap m-2 text-center fontweight-bold">
                          <img src="c4.png" height="75px" width="75px"  class="rounded-circle" >
                          <p>الكوافيرات</p>
                    </div>
                    <div class="item text-nowrap m-2 text-center fontweight-bold">
                          <img src="c5.png" height="75px" width="75px"  class="rounded-circle" >
                          <p>بطاقات الأفراح</p>
                    </div>
                    <div class="item text-nowrap m-2 text-center fontweight-bold">
                        <img src="c6.png" height="75px" width="75px" class="rounded-circle" >
                        <p>تزيين الورود</p>
                      </div>
                    <div class="item text-nowrap m-2 text-center fontweight-bold">
                          <img src="c7.png" height="75px" width="75px"  class="rounded-circle">
                          <p>تأجير الباصات</p>
                    </div>
                    <div class="item text-nowrap m-2 text-center fontweight-bold">
                          <img src="c8.png" height="75px" width="75px"  class="rounded-circle">
                          <p>استوديوهات التصوير</p>
                    </div>
                    <div class="item text-nowrap m-2 text-center fontweight-bold">
                          <img src="c9.png" height="75px" width="75px" class="rounded-circle" >
                          <p> المطابخ</p>
                    </div>
                    <div class="item text-nowrap m-2 text-center fontweight-bold">
                          <img src="c10.png" height="75px" width="75px"  class="rounded-circle">
                          <p> الفنادق</p>
                    </div>
                    <div class="item text-nowrap m-2 text-center fontweight-bold">
                        <img src="c11.png" height="75px" width="75px"  class="rounded-circle">
                        <p> فنون استعراضية</p>
                    </div>
                    <div class="item text-nowrap m-2 text-center fontweight-bold">
                          <img src="c12.png" height="75px" width="75px"  class="rounded-circle">
                          <p> المسارح</p>
                    </div>
                    <div class="item text-nowrap m-2 text-center fontweight-bold" >
                        <img src="c13.png" height="75px" width="75px"  class="rounded-circle">
                        <p>بدل رجالي</p>
                    </div>
                    <div class="item text-nowrap m-2 text-center fontweight-bold">
                        <img src="c14.png" height="75px" width="75px"  class="rounded-circle" >
                        <p> حلويات الأفراح</p>
                    </div>
                    <div class="item text-nowrap m-2 text-center fontweight-bold">
                        <img src="c15.png" height="75px" width="75px"  class="rounded-circle" >
                        <p> مفروشات</p>
                    </div>
                    <div class="item text-nowrap m-2 text-center fontweight-bold" >
                        <img src="c16.png" height="75px" width="75px"  class="rounded-circle">
                        <p> أدوات منزلية</p>
                    </div>
                    <div class="item text-nowrap m-2 text-center fontweight-bold">
                        <img src="categories.png" height="75px" width="75px" class="rounded-circle" >
                        <p> كل التصنيفات</p>
                    </div>
                  </div>
            
                </div>
            
            </div>
            <div class="row pt-4">
                <div class="col-lg-4">
                    <div class="card">
                        <img src="adv1-2.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">أكورد، القصة، وبناء الثقة</h5>
                          <p class="card-text">ن، تمتلك أكورد مئات الموردين وآلاف المنتجات التي تملأ المنصة الآن من جميع التصنيفات التي تهم المقبلين على الزواج بالإضافة ...
                          </p>
                          
                        </div>
                      </div>

                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <img src="adv2 (2).jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">الشراكات، الطريق للراحة والتحكم</h5>
                          <p class="card-text">
                            من خلال إضافة خيار التقسيط إلى خيارات الدفع الكاش المتوفر لدينا ، يمكننا توفير تجربة تسوق أكثر شمولية، ومنح عملائنا مزيداً من الراحة والتحكم والوصول إلى خيارات ...
                          </p>
                          
                        </div>
                      </div>


                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <img src="adv3 (1).jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">المنتجات وقوة موردينا</h5>
                          <p class="card-text">
                            الأفضل أمام عينك، مع وجود خطة تمكن الفريق من جلب منتجات عديدة بمواصفات حقيقية، كان لابد من وجود العديد من الاعتبارات التي نأخذها ليكون أحدهم من موردينا ...
                          </p>
                       
                          
                        </div>
                      </div>


                </div>

            </div>
            <div class="row pt-4  ">
                <img src="adv-1.jpg" alt="" class="w-100">

            </div>
            <div class="row pt-4">
                <div class="col-lg-4">
                    <div class="card">
                        <img src="art1 (1).jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">كيف تخطط لحفل زفاف بأفضل التكاليف</h5>
                          <p class="card-text">نيحلم الكثير من الشباب بإقامة فرحٍ جميل لا يُنسى، لكن ليس كثيراً منا يستطيع بسبب السيولة المالية. فالحل الأفضل هو إلقاء نظرة جادة على جميع النفقات المرتبطة بيوم ...
                          </p>
                          
                        </div>
                      </div>

                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <img src="art2 (1).jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">كيف تدفع لحفل زفافك؟</h5>
                          <p class="card-text">
                            ممن المهم أن تفهم كيف سيتم تقسيم ميزانيتك. التوفير في حفل الزفاف ليس بالمهمة المستعصية. إليك كيفية التوفير والدفع مقابل يوم الفرح عن طريق الإنفاق بذكاء والاقتطاع قليلاً على طول الطريق ...
                          </p>
                          
                        </div>
                      </div>


                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <img src="art3 (1).jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">10 نصائح لشراء منتجات واختيار الخدمات لفرحك</h5>
                          <p class="card-text">
                            اإذا كنت ترغب في شراء عفش لمنزلك او إختيار صالة او مسرح لسهرة الشباب،فهناك بعض الأشياء التي يجب مراعاتها قبل الإقدام على عملية الشراء ...
                          </p>
                       
                          
                        </div>
                      </div>


                </div>

            </div>
            <div class="row pt-4 pb-2">
                <div class="col-lg-4">
                    <div class="card">
                        <img src="temporary-2.png" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">باقات أفراح صيف 2023</h5>
                        </div>
                      </div>

                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <img src="permanent-2.png" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">أحدث العروض</h5>                         
                        </div>
                      </div>


                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <img src="individual-offers.png" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">العروض الفردية </h5>
                        </div>
                      </div>


                </div>

            </div>   
        </div>

    </div>
  
    @endsection

  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script> 

</body>
</html>