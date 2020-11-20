@extends('layout')

@section('content')
    <div class="container align-content-center">
        <h1 class="title">Staff Portal</h1>
        <p class="text-center">Here you'll find links to Department sites and resources. If your department has a site
            you'd like to link to from the staff portal, please contact the IT Department. Link back to the main website
            by clicking the logo in the top left corner.
        </p>
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
                    <img class="card-img-top" src="{{ asset('img/finance.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Demo Duplicate Department</h5>
                        <p class="card-text">Find travel expense resources and tax forms along with department
                            contacts.</p>
                        <a target="_blank" href="https://sd27o365.sharepoint.com/sites/FinanceandPayrollDepartment"
                           class="button button-gold">Visit Page</a>
                    </div>
                </div>
            </div>

            <div class="col-md col-sm-12 d-flex align-items-stretch">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('img/transportation.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Demo Duplicate Department</h5>
                        <p class="card-text">Find travel expense resources and tax forms along with department
                            contacts.</p>
                        <a target="_blank" href="https://sd27o365.sharepoint.com/sites/FinanceandPayrollDepartment"
                           class="button button-gold">Visit Page</a>
                    </div>
                </div>
            </div>

            <div class="col-md col-sm-12 d-flex align-items-stretch">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('img/hr.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Demo Duplicate Department</h5>
                        <p class="card-text">Find travel expense resources and tax forms along with department
                            contacts.</p>
                        <a target="_blank" href="https://sd27o365.sharepoint.com/sites/FinanceandPayrollDepartment"
                           class="button button-gold">Visit Page</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
