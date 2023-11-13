@extends('layouts.auth')

@section('container')
<div class="w-full max-h-screen px-[165px] py-[70px] bg-white justify-center items-center inline-flex">
    <div class="w-[950px] h-[580px] relative">
        <div class="w-[950px] h-[580px] left-0 top-0 absolute bg-slate-50 rounded-[13px] shadow">
            <div class="text-zinc-800 ">
                <h1 class="mt-2 text-[22px] text-center font-bold font-['Plus Jakarta Sans']">Welcome back</h1>
                <h2 class="mt-1 text-[15px] text-center font-medium font-['Plus Jakarta Sans']">We are so happy, u come back</h2>    
            </div>
        </div>
        {{-- 
        <div class="w-[450px] h-[74px] left-[73px] top-[465px] absolute">
            <div class="w-[450px] h-[45px] left-0 top-[29px] absolute">
                <div class="w-[450px] h-[45px] left-0 top-0 absolute bg-white rounded-[5px] shadow">
                    <div class="left-[138px] top-[12px] absolute text-black text-base font-medium font-['Plus Jakarta Sans']">Continue using google</div>
                </div>
                <div class="w-6 h-[25px] left-[39px] top-[10px] absolute"></div>
                
            </div>
            <div class="w-[17px] h-3.5 left-[216px] top-0 absolute text-black text-base font-medium font-['Plus Jakarta Sans']">or</div>
            <div class="w-[180px] h-[0px] left-[21px] top-[7px] absolute border border-black"></div>
            <div class="w-[180px] h-[0px] left-[249px] top-[7px] absolute border border-black"></div>
        </div>
        <div class="w-[182px] h-[18px] left-[78px] top-[426px] absolute">
            <div class="left-0 top-0 absolute text-zinc-800 text-sm font-medium font-['Plus Jakarta Sans']">Need an account?</div>
            <div class="left-[126px] top-0 absolute text-blue-500 text-sm font-medium font-['Plus Jakarta Sans']">Register</div>
        </div>
        <div class="w-[450px] h-[52px] p-4 left-[73px] top-[356px] absolute bg-cyan-200 rounded-[5px] justify-center items-center gap-2.5 inline-flex">
            <div class="justify-center items-center gap-2 flex">
                <div class="text-black text-base font-medium font-['Plus Jakarta Sans']">Login</div>
            </div>
        </div>
        <div class="left-[369px] top-[311px] absolute text-blue-500 text-sm font-medium font-['Plus Jakarta Sans']">Forgot your password?</div>
        <div class="w-[450px] h-[81px] left-[73px] top-[209px] absolute">
            <div class="left-0 top-0 absolute text-zinc-800 text-base font-bold font-['Plus Jakarta Sans']">Password</div>
            <div class="w-[450px] h-[45px] left-0 top-[36px] absolute bg-white rounded-[5px] shadow"></div>
        </div>
        <div class="w-[450px] h-[81px] left-[73px] top-[104px] absolute">
            <div class="w-[450px] h-[45px] left-0 top-[36px] absolute bg-white rounded-[5px] shadow"></div>
            <div class="left-0 top-0 absolute text-zinc-800 text-base font-bold font-['Plus Jakarta Sans']">Email Or Username</div>
        </div>
        <div class="w-[273px] h-[335px] left-[585px] top-[144px] absolute">
            <div class="w-12 h-2.5 left-[113px] top-[325px] absolute">
                <div class="w-2.5 h-2.5 left-0 top-0 absolute bg-zinc-300 rounded-full"></div>
                <div class="w-2.5 h-2.5 left-[19px] top-0 absolute bg-zinc-300 rounded-full"></div>
                <div class="w-2.5 h-2.5 left-[38px] top-0 absolute bg-zinc-300 rounded-full"></div>
            </div>
            <div class="left-[101px] top-[288px] absolute text-zinc-800 text-[15px] font-medium font-['Plus Jakarta Sans']">secure login</div>
            <div class="w-[273px] h-[273px] left-0 top-0 absolute justify-center items-center inline-flex">
                <div class="w-[273px] h-[273px] relative">
                    <div class="w-[24.64px] h-[7.40px] left-[42.78px] top-[156.13px] absolute">
                    </div>
                    <div class="w-[25.76px] h-[17.11px] left-[61.31px] top-[146.77px] absolute">
                    </div>
                    <div class="w-[95.82px] h-[90.28px] left-[11.95px] top-[163.88px] absolute">
                        <div class="w-[69.49px] h-[4.27px] left-[5.67px] top-[86.01px] absolute">
                        </div>
                        <div class="w-[69.49px] h-[4.27px] left-[20.66px] top-[86.01px] absolute">
                        </div>
                        <div class="w-[74.77px] h-[16.50px] left-[18.01px] top-[66.09px] absolute">
                        </div>
                    </div>
                    <div class="w-[88.44px] h-[120.78px] left-0 top-[14.41px] absolute">
                    </div>
                    <div class="w-[109.25px] h-[106.30px] left-[134.65px] top-[14.25px] absolute">
                        <div class="w-[15.57px] h-[15.05px] left-[32.76px] top-[46.95px] absolute">
                        </div>
                        <div class="w-[13.34px] h-[15.05px] left-[13.09px] top-[73.81px] absolute">
                        </div>
                    </div>
                    <div class="w-[117.73px] h-[266.41px] left-[148.91px] top-[0.56px] absolute">
                        <div class="w-[56.23px] h-[132.20px] left-[46.26px] top-[134.21px] absolute">
                        </div>
                        <div class="w-[101.70px] h-[154.65px] left-[2.12px] top-[111.31px] absolute">
                        </div>
                        <div class="w-[117.73px] h-[129.57px] left-0 top-0 absolute">
                            <div class="w-[33.78px] h-[54.11px] left-[54.43px] top-0 absolute">
                                <div class="w-[24.35px] h-[25.74px] left-[4.79px] top-[1.72px] absolute">
                                </div>
                            </div>
                            <div class="w-[23.02px] h-[18.68px] left-[51.60px] top-[100.29px] absolute">
                            </div>
                            <div class="w-[66.31px] h-[44.07px] left-0 top-[85.50px] absolute">
                            </div>
                        </div>
                    </div>
                    <div class="w-[133.06px] h-[153.76px] left-[11.95px] top-[-0px] absolute">
                        <div class="w-[112.18px] h-[136.94px] left-[20.88px] top-[-0px] absolute">
                        </div>
                        <div class="w-[15.26px] h-6 left-[12.27px] top-[119.63px] absolute">
                        </div>
                        <div class="w-[86.28px] h-[96.99px] left-[33.83px] top-[16.48px] absolute">
                            <div class="w-[86.28px] h-[19.09px] left-0 top-[51.53px] absolute">
                            </div>
                            <div class="w-[86.28px] h-[19.09px] left-0 top-[77.91px] absolute">
                            </div>
                            <div class="w-[37.23px] h-[38.44px] left-[24.53px] top-[-0px] absolute">
                            </div>
                            <div class="w-[35.80px] h-[36.97px] left-[25.24px] top-[0.74px] absolute">
                            </div>
                            <div class="opacity-40 w-[45.20px] h-[4.49px] left-[4.77px] top-[85.20px] absolute">
                            </div>
                            <div class="opacity-30 w-[35.45px] h-[8.13px] left-[6.31px] top-[57.57px] absolute">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         --}}
    </div>
</div>
@endsection