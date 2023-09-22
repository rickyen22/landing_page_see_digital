<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SEE Digital</title>
    @vite('resources/css/app.css')
</head>
<body >

  <!-- navbar -->
  <div class="bg-gradient-to-b from-[#97DFFD] to-white">
    <nav class="py-[10px] px-[5px] ">
        <div  class="container mx-auto lg:px-10 ">
           <div class="flex items-center justify-between ">
            <img class="lg:w-[100px] md:w-[70px] " src="{{asset('images/logo.png')}}" alt="" width="50">
            <div class="flex md:gap-[10px] gap-[57px] items-center lg:right-0" >
                <div class="hidden md:block lg:block sm:block">
                    <ul class="flex gap-[57px] sm:gap-[20px]">
                        <li><a href="#beranda" class="text-[20px] lg:hover:text-primary font-semibold ">Beranda</a></li>
                        <li><a href="#layanan kami" class="text-[20px] font-semibold lg:hover:text-primary ">Layanan kami</a></li>
                        <li><a href="#tentang kami" class="text-[20px] font-semibold lg:hover:text-primary ">Tentang Kami</a></li>
                      </ul>
                </div>
              <a href=""  class="md:ml-5 lg:ml-10 lg:rounded-[16px] lg:text-[16px] md:text-[16px] md:px-[50px] md:py-[24px] lg:px-[50px] lg:py-[24px] px-[9px] py-[9px] bg-primary rounded-[7px] text-white font-medium text-[12px] hover:bg-secondary">Hubungi kami</a>
            </div>
           </div>
        </div>

        <div class="container fixed bottom-0 left-0 right-0 px-3 py-3 bg-primary lg:hidden md:hidden sm:hidden">
          <ul class="flex justify-between gap-3">
            <li><a href="" class="text-[12px] font-bold text-white hover:text-secondary ">Beranda</a></li>
            <li><a href="" class="text-[12px] font-semibold text-white hover:text-secondary ">Layanan kami</a></li>
            <li><a href="" class="text-[12px] font-semibold text-white hover:text-secondary ">Tentang kami</a></li>
          </ul>
        </div>
      </nav>


      <!-- Hero section -->
      <section class="beranda">
        <div class="container mx-auto lg:px-10 lg:mt-[90px]">
            <div class="grid grid-cols-12">
                <div class="col-span-12 lg:col-span-6 px-[10px] py-8">
                    <div>
                        <p class="md:text-[50px] lg:text-[50px] text-[20px] font-bold">Mari Berkolabora-see</p>
                        <p class=" md:text-[20px] lg:text-[20px] text-[10px] font-bold">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore dolorum ea non error dolores numquam minus ex architecto. Esse, beatae.
                        </p>
                        <div class="mt-5 lg:mt-[80px] md:mt-[100px]">
                            <a href=""  class="md:text-[20px] md:px-[60px] md:py-[30px] lg:text-[20px] lg:px-[70px] lg:py-[35px] px-[9px] py-[9px] lg:rounded-[16px] bg-primary rounded-[7px] text-white font-medium text-[12px]  hover:bg-secondary">Mulai sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 lg:col-span-6 px-[10px] right-0 lg:mx-auto">
                    <div>
                        <img class="" src="{{asset('images/phone.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
      </section>
  </div>


  <!-- layanan section-->

  <section id="layanan kami">
    <div class="container mx-auto lg:px-[40px] lg:mt-[100px]">
        <p class="lg:text-[55px] flex justify-center font-bold text-[20px] md:text-[30px] mb-[100px]" >Layanan kami</p>
        <div class="grid grid-cols-12 gap-12 ">
            <div class="col-span-6 ">
                <div class="flex items-center gap-7">
                    <div>
                        <img class="w-[250px]" src="{{asset('images/sosmed.png')}}" alt="">
                    </div>
                    <div>
                        <p class="font-bold text-[35px] mb-[20px]">Manajemen Sosial Media</p>
                        <p class="text-[24px]">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error deleniti facilis libero, delectus animi debitis quisquam? </p>
                    </div>
                </div>
                <div class="flex items-center gap-5 mt-[80px]">
                    <div>
                        <img class="w-[250px]" src="{{asset('images/radio.png')}}" alt="">
                    </div>
                    <div>
                        <p class="mb-[20px] font-bold text-[35px]">Iklan Radio</p>
                        <p class="text-[24px]">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error deleniti facilis libero, delectus animi debitis quisquam? </p>
                    </div>
                </div>
                <div class="flex items-center gap-5 mt-[80px]">
                    <div>
                        <img class="w-[250px]" src="{{asset('images/car.png')}}" alt="">
                    </div>
                    <div>
                        <p class="mb-[20px] font-bold text-[35px]">Car Branding</p>
                        <p class="text-[24px]">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error deleniti facilis libero, delectus animi debitis quisquam? </p>
                    </div>
                </div>
            </div>
            <div class="col-span-6 ">
                <div class="flex items-center gap-7">
                    <div>
                        <img class="w-[250px]" src="{{asset('images/mediaweb.png')}}" alt="">
                    </div>

                    <div>
                        <p class="font-bold text-[35px] mb-[20px]">Media Web Online</p>
                        <p class="text-[24px]">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error deleniti facilis libero, delectus animi debitis quisquam? </p>
                    </div>
                </div>

                <div class="flex items-center gap-5 mt-[80px]">
                    <div>
                        <img class="w-[250px]" src="{{asset('images/app.png')}}" alt="">
                    </div>

                    <div>
                        <p class="mb-[20px] font-bold text-[35px]">Web/Landing Page/Apps</p>
                        <p class="text-[24px]">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error deleniti facilis libero, delectus animi debitis quisquam? </p>
                    </div>
                </div>

                <div class="flex items-center gap-5 mt-[80px]">
                    <div>
                        <img class="w-[250px]" src="{{asset('images/videotron.png')}}" alt="">
                    </div>

                    <div>
                        <p class="mb-[20px] font-bold text-[35px]">Videotron</p>
                        <p class="text-[24px]">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error deleniti facilis libero, delectus animi debitis quisquam? </p>
                    </div>
                </div>


            </div>

        </div>
    </div>
  </section>




  <!-- Tentang kami section-->

<section id="tentang kami">
    <div class="container lg:mt-[300px] mb-20 px-[10px] mt-[100px]">
        <div class="grid grid-cols-12">
            <div class="col-span-12 mx-auto lg:col-span-6 lg:order-1">
                    <div class="mx-auto">
                        <p class="lg:text-left lg:text-[32px] mx-auto text-center text-primary text-[20px] font-semibold md:text-[22] ">Tentang kami</p>
                    <p class="mt-5 font-bold text-center text-black md:text-[24px] lg:text-[45px] lg:text-left lg:mt-[38px]">Lebih dari ratusan client
                        yang sudah berkolabora-see
                        dengan kami</p>
                        <p class="pl-2 text-center lg:text-[24px] lg:text-left lg:mt-[38px]">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus esse labore quos, itaque velit molestiae odio veritatis delectus ipsum quo molestias! Explicabo voluptatibus reiciendis aliquid soluta autem omnis hic dolores.
                        </p>
                    </div>
            </div>
            <div class="col-span-12 lg:col-span-6 ">
                <img class="lg:hover:w-[450px] lg:w-[400px] w-[280px] mx-auto mt-10 md:w-[400px] " src="{{asset('images/tentangKami.png')}}" alt="">
            </div>
        </div>
    </div>
</section>



<!-- projects-->

<section>
    <div class="container px-[50px]  lg:mt-[300px]">
        <div class="grid grid-cols-12 lg:gap-5">
            <div class="col-span-12 mx-auto lg:col-span-6 md:col-span-6 ">
                <p class="font-bold text-[20px] text-center justify-center lg:text-[60px] lg:text-left">Yang sudah selesai kita kerjakan</p>
                <p class="text-center text-[20px] lg:-[24px] lg:text-left lg:mt-[20px]">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi accusantium suscipit consectetur dignissimos incidunt fugiat blanditiis obcaecati unde tempora, illum eos, harum dolor veniam neque quibusdam ullam architecto dolores provident quia animi nobis iusto. Fugit quisquam possimus eius voluptate aut.</p>

                <div class="mt-[40px] sm:hidden md:hidden lg:flex hidden">
                   <img class="w-[98px]" src="{{asset('images/left1.png')}}" alt="">
                   <img class="w-[98px]" src="{{asset('images/right1.png')}}" alt="">
                </div>
            </div>
            <div class="col-span-12 mt-5 lg:overflow-x-auto lg:col-span-6 md:col-span-6 md:flex lg:gap-10">
                <div class="mx-auto  mb-6 container lg:w-[370px] lg:h-[420px] rounded-[40px] bg-slate-200 w-[300px] h-[300px]"></div>
                <div class="mx-auto  mb-6 container lg:w-[370px] lg:h-[420px] rounded-[40px] bg-slate-200"></div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- client kami -->

<section>
    <div class="container p-[20px] lg:mt-[300px]">
        <p class="text-center text-[60px] font-bold mb-[100px]">Client kami</p>
        <div class="grid grid-cols-12">
            <div class="col-span-3 mx-auto">
                <img class="w-[260px]  mt-[73px] lg:hover:w-[280px]" src="{{asset('images/cocacola.png')}}" alt="">
                <img class="w-[260px]  mt-[73px] lg:hover:w-[280px]" src="{{asset('images/bri1.png')}}" alt="">
            </div>
            <div class="col-span-3 mx-auto">
                <img class="w-[260px]  mt-[73px] lg:hover:w-[280px]" src="{{asset('images/netflix.png')}}" alt="">
                <img class="w-[260px]  mt-[73px] lg:hover:w-[280px]" src="{{asset('images/bca.png')}}" alt="">
            </div>
            <div class="col-span-3 mx-auto">
                <img class="w-[260px]  mt-[73px] lg:hover:w-[280px]" src="{{asset('images/bca.png')}}" alt="">
                <img class="w-[260px]  mt-[73px] lg:hover:w-[280px]" src="{{asset('images/cocacola.png')}}" alt="">
            </div>
            <div class="col-span-3 mx-auto">
                <img class="w-[260px]  mt-[73px] lg:hover:w-[280px]" src="{{asset('images/bri1.png')}}" alt="">
                <img class="w-[260px] mt-[73px] lg:hover:w-[280px]" src="{{asset('images/netflix.png')}}" alt="">
            </div>

        </div>
    </div>
</section>

<!-- ulasan section -->
<section>
    <div class="container px-[25px] mt-[150px]">
        <div class="grid grid-cols-12">
            <div class="col-span-6">
                <p class="text-[28px] font-bold text-secondary">"<br/>100+ ulasan dari<br/>pengguna jasa kami</p>
            </div>
        </div>
    </div>
    <div class="flex">
        <div class="relative flex flex-col text-gray-700 bg-white shadow-lg w-96 rounded-xl bg-clip-border mt-[50px] border-2 mx-[25px]">
            <div class="p-6">
              <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">
                Lorem ipsum dolor sit amet consectetur. Maecenas bibendum blandit pellentesque sit.
              </p>
            </div>
            <div class="flex items-center gap-5 p-6 pt-0">
              <img class="w-[100px]" src="{{asset('images/review.png')}}" alt="">
              <div class="">
                <p class="text-secondary font-medium text-[20]">Taylor Swift</p>
                <p class="text-gray-500 text-[20]">Pengusaha Roti</p>
              </div>
            </div>
          </div>

          <div class="relative flex flex-col text-gray-700 bg-white shadow-lg w-96 rounded-xl bg-clip-border mt-[50px] border-2 mx-[25px]">
            <div class="p-6">
              <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">
                Lorem ipsum dolor sit amet consectetur. Maecenas bibendum blandit pellentesque sit.
              </p>
            </div>
            <div class="flex items-center gap-5 p-6 pt-0">
              <img class="w-[100px]" src="{{asset('images/review.png')}}" alt="">
              <div class="">
                <p class="text-secondary font-medium text-[20]">Taylor Swift</p>
                <p class="text-gray-500 text-[20]">Pengusaha Roti</p>
              </div>
            </div>
          </div>

          <div class="relative flex flex-col text-gray-700 bg-white shadow-lg w-96 rounded-xl bg-clip-border mt-[50px] border-2 mx-[25px]">
            <div class="p-6">
              <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">
                Lorem ipsum dolor sit amet consectetur. Maecenas bibendum blandit pellentesque sit.
              </p>
            </div>
            <div class="flex items-center gap-5 p-6 pt-0">
              <img class="w-[100px]" src="{{asset('images/review.png')}}" alt="">
              <div class="">
                <p class="text-secondary font-medium text-[20]">Taylor Swift</p>
                <p class="text-gray-500 text-[20]">Pengusaha Roti</p>
              </div>
            </div>
          </div>
    </div>

</section>


<!-- footer section -->
<section>
    <div class="mt-[150px]">
        <img class="w-4/6" src="{{asset("images/footer.png")}}" alt="">
    </div>
    <div class="container mt-[100px]">
        <div class="grid grid-cols-12">
            <div class="col-span-6 pl-[250px]">
                <p class="font-medium text-[20px] text-left mb-[80px]">Gg. Jahe III No.3, Tj. Ongih, Kwarasan, <br>
                    Kec. Grogol, Kabupaten Sukoharjo, Jawa Tengah <br>
                    Telepon & WhatsApp : 08122 2555 0676 <br>
                    Email : email.com</p>
            </div>
        </div >
        <div class="flex justify-end ">
            <div class=" w-[800px] h-[100px] bg-[#97DFFD] rounded-tl-full flex justify-between pr-10">
                <div class="flex mt-[20px] ml-[100px] gap-[60px]">
                    <a href=""><img class="w-[60px]" src="{{asset('images/instagram.png')}}" alt=""></a>
                    <a href=""><img class="w-[60px]" src="{{asset('images/linkedin.png')}}" alt=""></a>
                    <a href=""><img class="w-[60px]" src="{{asset('images/facebook.png')}}" alt=""></a>
                </div>
                <div class="mt-[20px]">
                    <div class="flex items-center">
                        <div>
                            <img class="w-[20px]" src="{{asset('images/cr.png')}}" alt="">
                        </div>
                        <p class="text-[20px]">copyright 2023</p>
                    </div>
                    <div>
                        <p class="text-[20px] font-medium">See Digital</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</body>
</html>
