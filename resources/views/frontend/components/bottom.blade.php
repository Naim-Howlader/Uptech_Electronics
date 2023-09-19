<div class="bottom-section bg-[#092240] font-jost">
    <div class="bottom pb-14 pt-20 px-5 grid grid-cols-12 gap-y-14">
        <div class="item-1 col-span-6 md:col-span-4 lg:col-span-2">
            <h2 class="text-white uppercase text-xl font-bold pb-5">company info</h2>
            <ul class="text-gray-400 capitalize space-y-3">
                <li class="flex items-center"><span class="material-symbols-outlined">
                        chevron_right
                    </span>about us</li>
                <li class="flex items-center"><span class="material-symbols-outlined">
                        chevron_right
                    </span>contact us</li>
                <li class="flex items-center"><span class="material-symbols-outlined">
                        chevron_right
                    </span>blogs</li>
                <li class="flex items-center"><span class="material-symbols-outlined">
                        chevron_right
                    </span>business with us</li>
                <li class="flex items-center"><span class="material-symbols-outlined">
                        chevron_right
                    </span>find a store</li>
            </ul>
        </div>
        <div class="item-1 col-span-6 md:col-span-4 lg:col-span-2">
            <h2 class="text-white uppercase text-xl font-bold pb-5">let us help you</h2>
            <ul class="text-gray-400 capitalize space-y-3">
                <li class="flex items-center"><span class="material-symbols-outlined">
                        chevron_right
                    </span>orders</li>
                <li class="flex items-center"><span class="material-symbols-outlined">
                        chevron_right
                    </span>downloads</li>
                <li class="flex items-center"><span class="material-symbols-outlined">
                        chevron_right
                    </span>addresses</li>
                <li class="flex items-center"><span class="material-symbols-outlined">
                        chevron_right
                    </span>account details</li>
                <li class="flex items-center"><span class="material-symbols-outlined">
                        chevron_right
                    </span>lost password</li>
            </ul>
        </div>
        <div class="item-1 col-span-6 md:col-span-4 lg:col-span-2">
            <h2 class="text-white uppercase text-xl font-bold pb-5">quick links</h2>
            <ul class="text-gray-400 capitalize space-y-3">
                <li class="flex items-center"><span class="material-symbols-outlined">
                        chevron_right
                    </span>special offers</li>
                <li class="flex items-center"><span class="material-symbols-outlined">
                        chevron_right
                    </span>gift cards</li>
                <li class="flex items-center"><span class="material-symbols-outlined">
                        chevron_right
                    </span>privacy policy</li>
                <li class="flex items-center"><span class="material-symbols-outlined">
                        chevron_right
                    </span>terms of us</li>
                <li class="flex items-center"><span class="material-symbols-outlined">
                        chevron_right
                    </span>portfolio</li>
            </ul>
        </div>
        <div class="item-1 col-span-6 md:col-span-4 lg:col-span-2">
            <h2 class="text-white uppercase text-xl font-bold pb-5">let us help you</h2>
            <ul class="text-gray-400 capitalize space-y-3">
                <li class="flex items-center"><span class="material-symbols-outlined">
                        chevron_right
                    </span>latest products</li>
                <li class="flex items-center"><span class="material-symbols-outlined">
                        chevron_right
                    </span>top rating</li>
                <li class="flex items-center"><span class="material-symbols-outlined">
                        chevron_right
                    </span>best selling</li>
                <li class="flex items-center"><span class="material-symbols-outlined">
                        chevron_right
                    </span>featured products</li>
                <li class="flex items-center"><span class="material-symbols-outlined">
                        chevron_right
                    </span>new collection</li>
            </ul>
        </div>
        <div class="subscribe col-span-12 md:col-span-8 lg:col-span-4">
            <h2 class="text-white font-bold text-xl uppercase">sign up for newletter</h2>
            <p class="text-gray-400 pt-5 pb-5">Subscribe to the weekly newsletter for all the latest updates & get a 10%
                off bill
                offers.</p>
                <form action="{{route('newsletter.subscribe')}}" method="POST">
                    @csrf
                    <div class="flex sm:w-[80%] lg:w-[90%]">
                        <input type="text" name="email" class="w-[70%] lg:w-[60%] h-[55px]" placeholder="Enter Your Email....">
                        <button type="submit" class="bg-[#ff3f34] w-[30%] lg:w-[40%]  text-white capitalize">subscribe</button>
                    </div>
                </form>
            
            <div>
                <div class="social-icon mt-8 flex mb-[30px]">
                    <h2 class="capitalize text-gray-400 pr-5">or follow us :</h2>
                    <div class="flex space-x-1">
                        <div class="single-item flex items-center justify-center bg-[#3867d6] h-7 w-7 rounded-full">
                            <ion-icon name="logo-facebook" class="text-white text-[16px]  mx-auto">
                            </ion-icon>
                        </div>
                        <div class="single-item flex items-center justify-center bg-[#54a0ff] h-7 w-7 rounded-full">
                            <ion-icon name="logo-twitter" class="text-white text-[16px]  mx-auto">
                            </ion-icon>
                        </div>
                        <div class="single-item flex items-center justify-center bg-red-700 h-7 w-7 rounded-full">
                            <ion-icon name="logo-pinterest" class="text-white text-[16px]  mx-auto">
                            </ion-icon>
                        </div>
                        <div class="single-item flex items-center justify-center bg-[#ff6348] h-7 w-7 rounded-full">
                            <ion-icon name="logo-google" class="text-white text-[16px]  mx-auto">
                            </ion-icon>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>
    <div class="w-full bg-white h-[1px]"></div>
    <div class="font-jost px-5 py-10">
        <h2 class="text-gray-400 text-center">Copyright © 2023 Uptech Electronics - All Rights Reserved - Developed by
            <span class="text-white font-medium">Naim Howlader</span>.
        </h2>
    </div>
</div>
