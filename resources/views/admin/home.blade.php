@extends('layouts.admin')

@section('content')
    <h2 class="fw-bold text-center mt-5">Admin Vu Shop Dashboard</h2>

    <div class="container row d-flex mt-5">
        <div class="col-md-3 mb-4">
            <div class="card border-0 shadow-lg rounded">
                <div class="card-body py-4 px-4 d-flex">
                    <div>
                        <h5 class="card-title fw-bold">Admins</h5>
                        <p class="card-text">{{ $admin }}</p>
                    </div>
                    <div class="ms-auto align-self-center">
                        <i class="fa-solid fa-user-nurse" style="font-size: 25px"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card border-0 shadow-lg rounded">
                <div class="card-body py-4 px-4 d-flex">
                    <div>
                        <h5 class="card-title fw-bold">Users</h5>
                        <p class="card-text">{{ $user }}</p>
                    </div>
                    <div class="ms-auto align-self-center">
                        <i class="fa-solid fa-users" style="font-size: 25px"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card border-0 shadow-lg rounded">
                <div class="card-body py-4 px-4 d-flex">
                    <div>
                        <h5 class="card-title fw-bold">Products</h5>
                        <p class="card-text">{{ $product }}</p>
                    </div>
                    <div class="ms-auto align-self-center">
                        <i class="fa-solid fa-list" style="font-size: 25px"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card border-0 shadow-lg rounded">
                <div class="card-body py-4 px-4 d-flex">
                    <div>
                        <h5 class="card-title fw-bold">Total Orders</h5>
                        <p class="card-text">{{ $order }}</p>
                    </div>
                    <div class="ms-auto align-self-center">
                        <i class="fa-solid fa-cube" style="font-size: 25px"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card border-0 shadow-lg rounded">
                <div class="card-body py-4 px-4 d-flex">
                    <div>
                        <h5 class="card-title fw-bold">Weekly Sales</h5>
                        <p class="card-text">{{ number_format($weeklySale) }} VND</p>
                    </div>
                    <div class="ms-auto align-self-center">
                        <i class="fa-solid fa-coins" style="font-size: 25px"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card border-0 shadow-lg rounded">
                <div class="card-body py-4 px-4 d-flex">
                    <div>
                        <h5 class="card-title fw-bold">Monthly Sales</h5>
                        <p class="card-text">{{ number_format($monthlySale) }} VND</p>
                    </div>
                    <div class="ms-auto align-self-center">
                        <i class="fa-solid fa-coins" style="font-size: 25px"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card border-0 shadow-lg rounded">
                <div class="card-body py-4 px-4 d-flex">
                    <div>
                        <h5 class="card-title fw-bold">Yearly Sales</h5>
                        <p class="card-text">{{ number_format($yearlySale) }} VND</p>
                    </div>
                    <div class="ms-auto align-self-center">
                        <i class="fa-solid fa-coins" style="font-size: 25px"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
