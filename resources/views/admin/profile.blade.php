@extends('cdn.index')
@section('main')
    @include('admin.layouts.header')

    <main>

        <!-- page title area start -->
        <section class="page__title p-relative d-flex align-items-center"
            data-background="{{ asset('cdn/assets/img/page-title/page-title-1.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="page__title-inner text-center">
                            <h1>Login</h1>
                            <div class="page__title-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page"> Login</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- page title area end -->

        <!-- profile area start -->
        <section class="profile__area pt-120 pb-50 grey-bg">
            <div class="container">
                <div class="profile__basic-inner pb-20 bg-white">
                    <div class="row align-items-center">
                        <div class="col-xxl-6 col-md-6">
                            <div class="profile__basic d-md-flex align-items-center">
                                <div class="profile__basic-thumb mr-30">
                                    <img src="{{ !empty($user->image) ? url('upload/profileimage/' . $user->image) : url('upload/my_no_image.png') }}"
                                        alt="">
                                </div>
                                <div class="profile__basic-content">
                                    <h3 class="profile__basic-title">
                                        Welcome Back <span>{{ $user->name }}</span>
                                    </h3>
                                    <p>Can add permissios</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-md-6">
                            <div class="profile__basic-cart d-flex align-items-center justify-content-md-end">
                                <span class="col-md-5">
                                    @if (session()->has('message'))
                                        <div class="alert alert-{{ session()->get('alert-type') }} alert-dismissible"
                                            id="sessionAlert">
                                            {{ session()->get('message') }}
                                        </div>
                                    @endif
                                    @if ($errors->any())
                                        <div class="alert alert-danger d-flex align-items-center alert-dismissible"
                                            id="errorAlert">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li class="text-capitalize mt-3">{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- profile area end -->

        <!-- profile menu area start -->
        <section class="profile__menu pb-70 grey-bg">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-4 col-md-4">
                        <div class="profile__menu-left bg-white mb-50">
                            <h3 class="profile__menu-title"><i class="fa fa-list-alt"></i> Your Menu</h3>
                            <div class="profile__menu-tab">
                                <div class="nav nav-tabs flex-column justify-content-start text-start" id="nav-tab"
                                    role="tablist">
                                    <button class="nav-link active" id="nav-account-tab" data-toggle="tab"
                                        data-target="#nav-account" type="button" role="tab" aria-controls="nav-account"
                                        aria-selected="true"> <i class="fa fa-user"></i> My Account</button>
                                    <button class="nav-link" id="nav-order-tab" data-toggle="tab" data-target="#nav-order"
                                        type="button" role="tab" aria-controls="nav-order" aria-selected="false"><i
                                            class="fa fa-file"></i>Permissions</button>
                                    <button class="nav-link" id="nav-password-tab" data-toggle="tab"
                                        data-target="#nav-password" type="button" role="tab"
                                        aria-controls="nav-password" aria-selected="false"><i class="fa fa-lock"></i>Change
                                        Password</button>
                                    <form action="{{ route('user.logout') }}" method="POST">
                                       @csrf
                                        <button type="submit" class="nav-link"><i class="fa fa-sign-out"></i>
                                            Logout</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-8 col-md-8">
                        <div class="profile__menu-right">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-account" role="tabpanel"
                                    aria-labelledby="nav-account-tab">
                                    <div class="profile__info">
                                        <div class="profile__info-top d-flex justify-content-between align-items-center">
                                            <h3 class="profile__info-title">Profile Information</h3>
                                            <button class="profile__info-btn" type="button" data-toggle="modal"
                                                data-target="#profile_edit_modal"><i
                                                    class="fa-regular fa-pen-to-square"></i> Edit Profile</button>
                                        </div>

                                        <div class="profile__info-wrapper white-bg">
                                            <div class="profile__info-item">
                                                <p>Name</p>
                                                <h4 class="text-capitalize">{{ $user->name }}</h4>
                                            </div>
                                            <div class="profile__info-item">
                                                <p>User Name</p>
                                                <h4>{{ $user->user_name }}</h4>
                                            </div>
                                            <div class="profile__info-item">
                                                <p>Email</p>
                                                <h4>{{ $user->email }}</h4>
                                            </div>
                                            <div class="profile__info-item">
                                                <p>Phone</p>
                                                <h4>{{ $user->phone }}</h4>
                                            </div>
                                            <div class="profile__info-item">
                                                <p>Address</p>
                                                <h4>{{ $user->address }}</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-order" role="tabpanel" aria-labelledby="nav-order-tab">
                                    <div class="order__info">
                                        <div class="order__info-top d-flex justify-content-between align-items-center">
                                            <h3 class="order__info-title">My Permissions</h3>
                                            <button type="button" class="order__info-btn"><i
                                                    class="fa-regular fa-trash-can"></i> Clear</button>
                                        </div>

                                        <div class="order__list white-bg table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">S/N</th>
                                                        <th scope="col">Permission</th>
                                                        <th scope="col">Price</th>
                                                        <th scope="col">Details</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="order__id">#3520</td>
                                                        <td><a href="product-details.html" class="order__title">University
                                                                seminar series global.</a></td>
                                                        <td>$144.00</td>
                                                        <td><a href="product-details.html"
                                                                class="order__view-btn">View</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="order__id">#2441</td>
                                                        <td><a href="product-details.html" class="order__title">Web coding
                                                                and apache basics</a></td>
                                                        <td>$59.54</td>
                                                        <td><a href="product-details.html"
                                                                class="order__view-btn">View</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="order__id">#2357</td>
                                                        <td><a href="product-details.html" class="order__title">Economics
                                                                historical development</a></td>
                                                        <td>$89.90</td>
                                                        <td><a href="product-details.html"
                                                                class="order__view-btn">View</a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-password" role="tabpanel"
                                    aria-labelledby="nav-password-tab">
                                    <div class="password__change">
                                        <div class="password__change-top">
                                            <h3 class="password__change-title">Change Password</h3>
                                        </div>
                                        <div class="password__form white-bg">

                                            {{-- update password  --}}

                                            <form action="{{ route('password.update') }}" method="POST">
                                                @csrf
                                                @method('put')
                                                <div class="password__input">
                                                    <p>Old Password</p>
                                                    <input placeholder="Enter Old Password"
                                                        id="update_password_current_password" name="current_password"
                                                        type="password" autocomplete="current-password">
                                                    <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2 text-danger" />
                                                </div>
                                                <div class="password__input">
                                                    <p>New Password</p>
                                                    <input placeholder="Enter New Password" id="update_password_password"
                                                        name="password" type="password" autocomplete="new-password">
                                                    <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2 text-danger" />
                                                </div>
                                                <div class="password__input">
                                                    <p>Confirm Password</p>
                                                    <input placeholder="Confirm Password"
                                                        id="update_password_password_confirmation"
                                                        name="password_confirmation" type="password"
                                                        autocomplete="new-password">
                                                    <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2 text-danger" />
                                                </div>
                                                <div class="password__input">
                                                    <button type="submit" class="os-btn os-btn-black">Update
                                                        password</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- profile menu area end -->

        <div class="profile__edit-modal">
            <!-- Modal -->
            <div class="modal fade" id="profile_edit_modal" tabindex="-1" aria-labelledby="profile_edit_modal"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="profile__edit-wrapper">
                            <div class="profile__edit-close">
                                <button type="button" class="profile__edit-close-btn" data-dismiss="modal"><i
                                        class="fa fa-times"></i></button>
                            </div>
                            {{-- edit profile  --}}
                            <form action="{{ route('admin.profile.update') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="profile__edit-input">
                                    <p>Name</p>
                                    <input type="text" placeholder="Your Name" name="name"
                                        value="{{ $user->name }}">
                                </div>
                                <div class="profile__edit-input">
                                    <p>User Name <span>(must be unique)</span></p>
                                    <input type="text" placeholder="Your User Name" name="user_name"
                                        value="{{ $user->user_name }}">
                                </div>
                                <div class="profile__edit-input">
                                    <p>Email</p>
                                    <input type="text" placeholder="Your Email" name="email"
                                        value="{{ $user->email }}">
                                </div>
                                <div class="profile__edit-input">
                                    <p>Phone</p>
                                    <input type="text" placeholder="Your Phone" name='phone'
                                        value="{{ $user->phone }}">
                                </div>
                                <div class="profile__edit-input">
                                    <p>Address</p>
                                    <input type="text" placeholder="Your Address" name="address"
                                        value="{{ $user->address }}">
                                </div>
                                <div class="profile__edit-input">
                                    <p>Image</p>
                                    <input type="file" class="form-control" placeholder="Your Image" name="image">
                                </div>
                                <div class="profile__edit-input">
                                    <button type="submit" class="os-btn os-btn-black w-100">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @include('admin.layouts.footer')
@endsection
