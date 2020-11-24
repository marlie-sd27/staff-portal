@extends('layout')

@section('content')
    <div class="container align-content-center">
        <h1 class="title">Staff Portal</h1>
    </div>

    <div class="container">
        <div class="row quick-links">
            <div class="quick-link col-md col-sm-12 d-flex align-items-stretch">
                <a target="_blank" href="https://www.office.com/?auth=2">
                    <p class="icon"><i class="fab fa-windows"></i></p>
                    <p>Office 365 Login</p>
                </a>
            </div>
            <div class="quick-link col-md col-sm-12 d-flex align-items-stretch">
                <a target="_blank" href="https://bc08.atrieveerp.com/cariboo/login.aspx?ReturnUrl=%2fcariboo%2fservlet%2fBroker">
                    <p class="icon"><i class="fas fa-user "></i></p>
                    <p>Human resource Access</p>
                </a>
            </div>
            <div class="quick-link col-md col-sm-12 d-flex align-items-stretch">
                <a target="_blank" href="https://sd27o365.sharepoint.com/departments/it/Lists/Workorders/active.aspx">
                    <p class="icon"><i class="fas fa-laptop"></i></p>
                    <p>IT Work Orders</p>
                </a>
            </div>
            <div class="quick-link col-md col-sm-12 d-flex align-items-stretch">
                <a target="_blank" href="https://dlweb.megamation.com/sd27/DLWEB.php/O4W_LOGIN_DLWEB">
                    <p class="icon"><i class="fas fa-tools"></i></p>
                    <p>Maintenance Work Orders</p>
                </a>
            </div>
            <div class="quick-link col-md col-sm-12 d-flex align-items-stretch">
                <a target="_blank" href="https://www.myeducation.gov.bc.ca/aspen/logon.do">
                    <p class="icon"><i class="fas fa-book-open"></i></p>
                    <p>MyEducation BC</p>
                </a>
            </div>
            <div class="quick-link col-md col-sm-12 d-flex align-items-stretch">
                <a target="_blank" href="http://moodle.sd27.bc.ca/">
                    <p class="icon"><i class="fas fa-graduation-cap"></i></p>
                    <p>Moodle</p>
                </a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md col-sm-12 d-flex align-items-stretch">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('img/hr.jpg') }}" alt="Card image cap" height="190px">
                    <div class="card-body">
                        <h5 class="card-title">Human Resources Department</h5>
                        <p class="card-text">Find resources on WorkSafeBC, IUOE, CCTA, BCTF, benefits, leave forms and
                            more!</p>
                        <a target="_blank" href="https://sd27o365.sharepoint.com/sites/TestDepartment"
                           class="button button-gold">Visit
                            Page</a>
                    </div>
                </div>
            </div>

            <div class="col-md col-sm-12 d-flex align-items-stretch">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('img/transportation.jpg') }}"
                         alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Transportation Department</h5>
                        <p class="card-text">Access the Bus Drivers' Guide Book and department contacts.</p>
                        <a target="_blank" href="https://sd27o365.sharepoint.com/sites/TransportationDepartment"
                           class="button button-gold">Visit Page</a>
                    </div>
                </div>
            </div>

            <div class="col-md col-sm-12 d-flex align-items-stretch">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('img/finance.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Finance and Payroll Department</h5>
                        <p class="card-text">Find travel expense resources and tax forms along with department
                            contacts.</p>
                        <a target="_blank" href="https://sd27o365.sharepoint.com/sites/FinanceandPayrollDepartment"
                           class="button button-gold">Visit Page</a>
                    </div>
                </div>
            </div>

            <div class="col-md col-sm-12 d-flex align-items-stretch">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('img/demo1.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Health and Safety</h5>
                        <p class="card-text">Find travel expense resources and tax forms along with department
                            contacts.</p>
                        <a target="_blank" href="#"
                           class="button button-gold">Visit Page</a>
                    </div>
                </div>
            </div>

            <div class="col-md col-sm-12 d-flex align-items-stretch">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('img/demo2.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Demo Duplicate Department</h5>
                        <p class="card-text">Find travel expense resources and tax forms along with department
                            contacts.</p>
                        <a target="_blank" href="#"
                           class="button button-gold">Visit Page</a>
                    </div>
                </div>
            </div>

            <div class="col-md col-sm-12 d-flex align-items-stretch">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('img/demo3.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Demo Duplicate Department</h5>
                        <p class="card-text">Find travel expense resources and tax forms along with department
                            contacts.</p>
                        <a target="_blank" href="#"
                           class="button button-gold">Visit Page</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
