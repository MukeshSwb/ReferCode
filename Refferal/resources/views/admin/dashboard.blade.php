@extends('admin.master')
    @section('content')
    <div class="bottom-container">
        <div class="bottom-container__left">
           
            <div class="box total-box">
                <div class="total-box__left">
                    <div class="header-container">
                        <h3 class="section-header">Total Daily Income</h3>                               
                    </div>
                    <h1 class="price">₹{{( App\Helpers\Helper::TotalDailyEarning())}}<span class="price-currency">(IND)</span></h1>
                    <!-- <p><span class="percentage-increase">20%</span> increase compared to last week</p>                          -->
                </div>
                <div class="total-box__right">
                    <div class="header-container">
                        <h3 class="section-header">Total Income</h3>
                                                                                           
                    </div>
                    <h1 class="price">₹{{( App\Helpers\Helper::TotalEarning())}}<span class="price-currency">(IND)</span></h1>                            
                    <!-- <p><span class="percentage-decrease">10%</span> decrease compared to last week</p> -->
                </div>
            </div>
        </div>
        <div class="bottom-container__right">
            <div class="box">
                <div class="header-container">
                    <h3 class="section-header">Your balance</h3>
                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 10.4166C3.9 10.4166 3 11.3541 3 12.5C3 13.6458 3.9 14.5833 5 14.5833C6.1 14.5833 7 13.6458 7 12.5C7 11.3541 6.1 10.4166 5 10.4166Z" stroke="#1A202C" stroke-width="1.5"/>
                        <path d="M19 10.4166C17.9 10.4166 17 11.3541 17 12.5C17 13.6458 17.9 14.5833 19 14.5833C20.1 14.5833 21 13.6458 21 12.5C21 11.3541 20.1 10.4166 19 10.4166Z" stroke="#1A202C" stroke-width="1.5"/>
                        <path d="M12 10.4166C10.9 10.4166 10 11.3541 10 12.5C10 13.6458 10.9 14.5833 12 14.5833C13.1 14.5833 14 13.6458 14 12.5C14 11.3541 13.1 10.4166 12 10.4166Z" stroke="#1A202C" stroke-width="1.5"/>
                    </svg>                                                           
                </div>
                <h1 class="price">$120,435.00<span class="price-currency">(USD)</span></h1>
                <p>From Jan 01, 2022 to Jan 31, 2022</p>
                <div class="button-box">
                    <button class="btn btn-purple">
                        <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.104 13.1771C9.104 14.1066 9.82277 14.8541 10.7044 14.8541H12.5061C13.2727 14.8541 13.8957 14.2025 13.8957 13.3879C13.8957 12.5158 13.5123 12.1996 12.9469 11.9983L10.0623 10.9921C9.49692 10.7908 9.1136 10.4841 9.1136 9.60248C9.1136 8.79748 9.7365 8.13623 10.5032 8.13623H12.3048C13.1865 8.13623 13.9053 8.88373 13.9053 9.81331" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M11.5 7.1875V15.8125" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M21.0832 11.5C21.0832 16.79 16.7898 21.0833 11.4998 21.0833C6.20984 21.0833 1.9165 16.79 1.9165 11.5C1.9165 6.20996 6.20984 1.91663 11.4998 1.91663" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M16.2915 2.875V6.70833H20.1248" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M21.0832 1.91663L16.2915 6.70829" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span>Top Up</span>    
                    </button>
                    <button class="btn btn-white">
                        <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.104 13.1771C9.104 14.1066 9.82277 14.8541 10.7044 14.8541H12.5061C13.2727 14.8541 13.8957 14.2025 13.8957 13.3879C13.8957 12.5158 13.5123 12.1996 12.9469 11.9983L10.0623 10.9921C9.49692 10.7908 9.1136 10.4841 9.1136 9.60248C9.1136 8.79748 9.7365 8.13623 10.5032 8.13623H12.3048C13.1865 8.13623 13.9053 8.88373 13.9053 9.81331" stroke="#1A202C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M11.5 7.1875V15.8125" stroke="#1A202C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M21.0832 11.5C21.0832 16.79 16.7898 21.0833 11.4998 21.0833C6.20984 21.0833 1.9165 16.79 1.9165 11.5C1.9165 6.20996 6.20984 1.91663 11.4998 1.91663" stroke="#1A202C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M21.0833 5.74996V1.91663H17.25" stroke="#1A202C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M16.2915 6.70829L21.0832 1.91663" stroke="#1A202C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span>Transfer</span>    
                    </button>
                </div>
            </div>
            <div class="box spending-box">
                <div class="header-container">
                    <h3 class="section-header">Spend by category</h3>
                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 10.4166C3.9 10.4166 3 11.3541 3 12.5C3 13.6458 3.9 14.5833 5 14.5833C6.1 14.5833 7 13.6458 7 12.5C7 11.3541 6.1 10.4166 5 10.4166Z" stroke="#1A202C" stroke-width="1.5"/>
                        <path d="M19 10.4166C17.9 10.4166 17 11.3541 17 12.5C17 13.6458 17.9 14.5833 19 14.5833C20.1 14.5833 21 13.6458 21 12.5C21 11.3541 20.1 10.4166 19 10.4166Z" stroke="#1A202C" stroke-width="1.5"/>
                        <path d="M12 10.4166C10.9 10.4166 10 11.3541 10 12.5C10 13.6458 10.9 14.5833 12 14.5833C13.1 14.5833 14 13.6458 14 12.5C14 11.3541 13.1 10.4166 12 10.4166Z" stroke="#1A202C" stroke-width="1.5"/>
                    </svg>                                                           
                </div>
                <div class="pie-chart">
                    <canvas id="myChart2" height="220px" width="220px"></canvas>
                </div>
                <div class="overall-spending">
                    <h4>Overall Spending</h4>
                    <span>$19,760,00</span>
                </div>
                <div class="pie-chart__labels">
                    <div class="pie-chart__labels-item">
                        <div class="label">
                            <div class="label__color first"></div>
                            Employees Salary
                        </div>
                        $8.000.00
                    </div>
                    <div class="pie-chart__labels-item">
                        <div class="label">
                            <div class="label__color second"></div>
                            Material Supplies
                        </div>
                        $2.130.00
                    </div>
                    <div class="pie-chart__labels-item">
                        <div class="label">
                            <div class="label__color third"></div>
                            Company tax
                        </div>
                        $1.510.00
                    </div>
                    <div class="pie-chart__labels-item">
                        <div class="label">
                            <div class="label__color fourth"></div>
                            Maintenance system
                        </div>
                        $2.245.00
                    </div>
                    <div class="pie-chart__labels-item">
                        <div class="label">
                            <div class="label__color fifth"></div>
                            Development System
                        </div>
                        $4.385.00
                    </div>
                    <div class="pie-chart__labels-item">
                        <div class="label">
                            <div class="label__color sixth"></div>
                            Production Tools
                        </div>
                        $1.000.00
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection