<div class="mt-20">
    <h2 class="mb-24 text-3xl font-bold text-center" data-aos="fade-down" data-aos-duration="1000">Apa Yang <span class="text-green-600">Customer Kami</span> Katakan?</h2>
    <div class="grid grid-cols-3 gap-5 px-44" data-aos="fade-down" data-aos-duration="1000">
        @for ($i = 1; $i <=3; $i++)    
        <div class="w-full h-auto mb-20 bg-green-600 rounded -z-10">
            <div class="flex flex-col items-center justify-center">
                <img src="{{ asset('assets/images/landingpage/testimony1.png') }}" alt="Profile" class="z-10 w-1/4 mb-1 -m-10 border-4 border-white rounded-full">
                <h3 class="px-5 mt-3 text-3xl font-bold text-white">Adam Jhonson</h3>
                <p class="text-sm text-slate-100">FullTime Freelancer</p>
                <p class="p-5 text-center text-white">"Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et voluptatum iure nesciunt tempore culpa pariatur sunt unde natus? Nostrum saepe accusamus, aliquid quo alias officia possimus sequi culpa officiis sit."</p>
            </div>
        </div>
        @endfor
    </div>
</div>
