@extends('layouts.app')

@section('content')



<style>
    ul {
         list-style: none;
    }
    .nav__list {
       
        margin: 0;
        padding: 25px 0 0;
        text-align: center;
}
     
     li {
        margin-bottom: 40px;
    }
    section {
        display: grid;
        width: 100%;
        height: 100vh;
        grid-template-columns: 77px auto;
    }

    aside {
        background: #F7F9FC;
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 100%;
        padding: 0;
        justify-content: space-between;
    } 
    main {
        background: #fff;
        width: 100%;
    }
    ::placeholder {
        color: #E5E5E5;
    }
    .box {
        position: relative;
        display: flex;
        align-items: center;
        height: 100% !important;
        width: 100% !important;
    }
    .box_item {
        width: 185px;
        height: 80px;
        border-radius: 8px;
    }
    .box:nth-child(1) {
        width: 32px;
        height: 32px;
    }
    .box:nth-child(2) {
        width: 32px;
        height: 32px;
    }
    .card_summary {
        border: 1px solid #F0F0F0 !important;
        border-radius: 8px;
    }
    </style>
<section>
    <aside>
        <ul class="nav__list">
            <li>
                <a href="{{ route('home') }}">
                    <img src="{{ asset('assets/admin_logo.png')}}" alt="">
                </a>
            </li>
            <li style="padding: 10px; background: rgba(51, 102, 255, 0.2); border-radius: 8px;">
                <a href="#">
                    <img src="{{ asset('assets/element-equal.svg')}}" alt="">
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="{{ asset('assets/book.png')}}" alt="">
                </a>
            </li>
            <li>
                <a href="{{ route('crud')}}">
                    <img src="{{ asset('assets/teacher.png')}}" alt="">
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="{{ asset('assets/calendar.png')}}" alt="">
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="{{ asset('assets/messages-2.png')}}" alt="">
                </a>
            </li>
            
        </ul>
        <ul class="text-center p-0">
            <li>
                <a href="#">
                    <img src="{{ asset('assets/setting.svg')}}" alt="">
                </a>
            </li>
            <li>
                <a href="{{route('logout')}}">
                    <img src="{{ asset('assets/logout.svg')}}" alt="">
                </a>
            </li>
        </ul>
    </aside>
    <main style="padding: 10px 50px">
        <div style="display: flex; justify-content: space-between; position: relative; align-items: center;">
            <div style="flex-basis: 400px; flex-grow: 1; position: relative;">
                <a href="#" style="position: absolute; top: -11px; left: 233px;">
                    <img src="{{ asset('assets/play.svg')}}" alt="">
                </a>
            </div>
            <div class="search" style="position: relative;">
            <input type="text" placeholder="Search..." style="border-radius: 5px; padding: 5px 20px; width:212px; border: 1px solid #E5E5E5; outline: none !important; background: transparent">
            <img style="position: absolute; top: 11px; right: 59px;" src="{{asset('assets/search.svg')}}" alt="">
            <img style="margin-left: 27px;" src="{{asset('assets/bell.svg')}}" alt="">
          </div>
        </div>
      <div style="padding: 70px 80px 10px 80px;">
       <div class="row">
           <div class="col-md-7">
               <h1 style="font-size: 20px; font-weight: 700;color: #2E3A59; letter-spacing: 1px;">Knowledge base</h1>

               <div class="mt-4">
                    <div class="owl-carousel owl-theme">
                        <div class="item box_item" style="background: rgba(51, 102, 255, 0.2);">
                            <div class="box" style="justify-content: center;">
                                <img src="{{ asset('assets/folder-open.svg')}}" alt="" style="width: 32px;">
                                <span style="color:#3366FF; font-weight: 700; padding: 0 20px;
                                ">Student</span>
                            
                            <img src="{{asset('assets/Icon.svg')}}" alt="" style="width: 6px; height: 10px; color: #2E3A59;">
                               
                            </div>
                        </div>
                        <div class="item box_item" style="background: rgba(255, 51, 63, 0.2);">
                            <div class="box" style="justify-content: center;">
                                <img src="{{ asset('assets/folder-open_1.svg')}}" alt="" style="width: 32px;">
                                <span style="color:#FF333F
                                ; font-weight: 700; padding: 0 20px;
                                ">Drop Out</span>
                            
                            <img src="{{asset('assets/Icon.svg')}}" alt="" style="width: 6px; height: 10px; color: #2E3A59;">
                               
                        </div>
                        </div>
                        <div class="item box_item" style="background: rgba(255, 149, 51, 0.2);">
                            <div class="box" style="justify-content: center;">
                                <img src="{{ asset('assets/folder-open_2.svg')}}" alt="" style="width: 32px;">
                                <span style="color:#FF9533; font-weight: 700; padding: 0 20px;
                                ">Pending</span>
                            
                            <img src="{{asset('assets/Icon.svg')}}" alt="" style="width: 6px; height: 10px; color: #2E3A59;">
                            
                            </div>
                        </div>
                        <div class="item box_item" style="background: rgb(213, 246, 219)">
                            <div class="box" style="justify-content: center;">
                                <img src="{{ asset('assets/folder.png')}}" alt="" style="width: 32px;">
                                <span style="color:#39DE54; font-weight: 700; padding: 0 20px;
                                ">Absent</span>
                            
                            <img src="{{asset('assets/Icon.svg')}}" alt="" style="width: 6px; height: 10px; color: #2E3A59;">
                            
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Chart --}}
                <div class="card mt-5" style="padding: 20px 35px; margin-right: 34px; border: 1px solid #F0F0F0 !important; border-radius: 8px;">
                    <div style="display: flex; justify-content: space-between; align-items:center;">
                        <h1 class="m-0" style="color: #2E3A59; font-size: 20px; font-weight: bold;">Statistic</h1>
                        <div style="display: flex; align-items: center;">
                            <img src="{{ asset('assets/cheveron-left.svg')}}" alt="">
                            <span style="font-size: 14px; color: #2E3A59; margin: 0 10px;">Aug 2021</span>
                            <img src="{{ asset('assets/Icon.svg')}}" alt="">
                        </div>
                    </div>
                    <div style="display: flex; justify-content: space-between; margin: 20px 0;">
                        <span style="font-size: 14px; font-weight: bold; color: #2E3A59
;                        ">Progress score</span>
                        <div>
                            <span style="color: #2E3A59; font-size: 16px;position: relative;"><div style="width: 8px; height: 8px; border-radius: 50%; background:#3366FF; position: absolute; top: 6px; left: -12px; "></div> Average grade</span>
                            <span style="color: #2E3A59;font-size: 16px; position: relative;margin-left: 15px;"><div style="width: 8px; height: 8px; border-radius: 50%; background:#00D68F; position: absolute; top: 6px; left: -11px; "></div> Exams</span>
                        </div>
                    </div>

                    <canvas id="mychart"></canvas>
                </div>
            </div>
            <div class="col-md-5" >
                <div style="display: flex; justify-content: space-between;">
                    
                    <h1 style="font-size: 20px; font-weight: 700;color: #2E3A59; letter-spacing: 1px;">User profile</h1>
                    <img src="{{ asset('assets/Icon.svg')}}" width="6" height="10" alt="">
                </div>
                <div class="user_info mt-3">
                    <div class="user_card" style="display: flex;width: 100%; background: #F7F9FC; border-radius: 8px; padding: 16px 24px; align-item: center;">
                        
                        <div style="flex-grow: 1; display: flex;">
                            <img src="{{ asset('assets/user.png')}}" alt="" style="width: 48px;height: 48px;">
                            <div style="padding-left: 8px;">
                                <span style="font-size: 16px;font-weight: bold;">Maharrm Hasanli</span>
                                <p class="m-0 p-0" style="color: #8F9BB3;font-weight: 400;">maga.hasenli@gmail.com</p>
                            </div>
                            
                        </div>
                        <div>
                            <span style="color: #2E3A59 !important; font-size: 14px;">Terms: &nbsp; <strong style="color: #000; font-size: 16px;">5</strong></span>
                            <hr class="m-0">
                            <span style="color: #2E3A59 !important; font-size: 14px;">Lessons: &nbsp;<strong style="font-size:16px; color: #000;">98</strong></span>
                        </div>
                    </div>
                </div>
                <div class="quarterly mt-4">
                    <h1 style="font-size: 20px; font-weight: bold">Quarterly Exam</h1>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="card card_summary p-5">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="left">
                                            <div style="background:#FFB978; width: 48px; height: 48px; border-radius: 8px; display: flex; align-items: center;justify-content: center; margin-bottom: 16px;">
                                                <img src="{{ asset('assets/headphone.svg')}}" alt="" style="width: 20px; height:  19px;">
                                            </div>
                                            <p class="" style="font-size: 16px; color: #2E3A59; font-weight: bold; ">15%</p>
                                            <p class="m-0" style="font-size: 16px; color: #2E3A59; font-weight: bold;">Listening</p>
                                            <p class="m-0" style="color:#2E3A59; font-size: 12px;
                                            ">20 Student</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="right" style="float: right;">
                                            <img src="{{ asset('assets/dotdot.svg')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card card_summary p-5">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="left">
                                            <div style="background:#F86060
                                            ; width: 48px; height: 48px; border-radius: 8px; display: flex; align-items: center;justify-content: center; margin-bottom: 16px;">
                                                <img src="{{ asset('assets/ruler&pen.svg')}}" alt="" style="width: 20px; height:  19px;">
                                            </div>
                                            <p class="" style="font-size: 16px; color: #2E3A59; font-weight: bold; ">32%</p>
                                            <p class="m-0" style="font-size: 16px; color: #2E3A59; font-weight: bold;">Grammar</p>
                                            <p class="m-0" style="color:#2E3A59; font-size: 12px;
                                            ">80 Student</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="right" style="float: right;">
                                            <img src="{{ asset('assets/dotdot.svg')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-4">
                            <div class="card card_summary p-5">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="left">
                                            <div style="background:#778DFF
                                            ; width: 48px; height: 48px; border-radius: 8px; display: flex; align-items: center;justify-content: center; margin-bottom: 16px;">
                                                <img src="{{ asset('assets/microphone.svg')}}" alt="" style="width: 20px; height:  19px;">
                                            </div>
                                            <p class="" style="font-size: 16px; color: #2E3A59; font-weight: bold; ">21%</p>
                                            <p class="m-0" style="font-size: 16px; color: #2E3A59; font-weight: bold;">Prounancation</p>
                                            <p class="m-0" style="color:#2E3A59; font-size: 12px;
                                            ">20 Student</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="right" style="float: right;">
                                            <img src="{{ asset('assets/dotdot.svg')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-4">
                            <div class="card card_summary p-5">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="left">
                                            <div style="background:#64E562; width: 48px; height: 48px; border-radius: 8px; display: flex; align-items: center;justify-content: center; margin-bottom: 16px;">
                                                <img src="{{ asset('assets/book.svg')}}" alt="" style="width: 20px; height:  19px;">
                                            </div>
                                            <p class="" style="font-size: 16px; color: #2E3A59; font-weight: bold; ">64%</p>
                                            <p class="m-0" style="font-size: 16px; color: #2E3A59; font-weight: bold;">Dictionary</p>
                                            <p class="m-0" style="color:#2E3A59; font-size: 12px;
                                            ">50 Student</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="right" style="float: right;">
                                            <img src="{{ asset('assets/dotdot.svg')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       </div>
      </div>
    </main>
</section>
@endsection

@push('scripts')
<script>
    $(document).ready(function(){
        $('.owl-carousel').owlCarousel({
    center: false,
    items:2,
    loop:false,
    margin:10,
    autoWidth:false,
    responsive:{
        600:{
            items:4
        }
    }
});

const ctx = document.getElementById('mychart').getContext('2d');
const labels = [
    'Jan',
    'Feb',
    'Mar',
    'Apr',
    'May',
    'Jun',
    'Jul',
    'Aug',
    'Sep',
    'Oct',
    'Nov',
    'Dec',
];

const data = {
    labels,
    datasets: [
        {
            data: [400, 455, 600, 900, 1300, 1500, 1000, 800, 750, 900, 1300, 2500],
            borderColor: '#3366FF',
            backgroundColor: '#3366FF',
            borderWidth: 1,
        },
        {
            data: [400, 700, 1000, 1500, 900, 1000, 1300, 1500, 1600, 1400, 2000, 3000],
            label: 'Exams',
            borderColor: '#00D68F',
            backgroundColor: '#00D68F',
            borderWidth: 1,

        },
    ]
}
const config = {
    type: 'line',
    data: data,
    options: {
        plugins: {
            legend: {
                display: false,
                labels: {
                    usePointStyle: true,
                    pointStyle: 'circle',
                }
            }
        },
        tension: 0.4,
        responsive: true,
        scales: {
        y: {
            ticks: {
                display: false,
            },
        },
        x: {
            display: true,
        },
       
    },
    pointStyle: 'circle',

    },
}

const myChart = new Chart(ctx, config);

});
</script>
@endpush