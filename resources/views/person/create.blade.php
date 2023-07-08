@extends('material.layout.master')

@section('content')
{{--    <div class="row mb-4">--}}
{{--        <div class="col-lg-8 col-md-6 mb-md-0 mb-4">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header pb-0">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-lg-6 col-7">--}}
{{--                            <h6>Projects</h6>--}}
{{--                            <p class="text-sm mb-0">--}}
{{--                                <i class="fa fa-check text-info" aria-hidden="true"></i>--}}
{{--                                <span class="font-weight-bold ms-1">30 done</span> this month--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-6 col-5 my-auto text-end">--}}
{{--                            <div class="dropdown float-lg-end pe-4">--}}
{{--                                <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown"--}}
{{--                                   aria-expanded="false">--}}
{{--                                    <i class="fa fa-ellipsis-v text-secondary" aria-hidden="true"></i>--}}
{{--                                </a>--}}
{{--                                <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5" aria-labelledby="dropdownTable">--}}
{{--                                    <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a></li>--}}
{{--                                    <li><a class="dropdown-item border-radius-md" href="javascript:;">Another action</a>--}}
{{--                                    </li>--}}
{{--                                    <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else here</a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="card-body px-0 pb-2"></div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <div class="card card-frame">
        <div class="card-body">

            <div class="row">
                <div class="col-md-2">

                    <div class="input-group input-group-static mb-4">
                        <label for="exampleFormControlSelect1" class="ms-0">Pessoa</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>Física</option>
                            <option>Jurídica</option>
                            <option>Não possui</option>
                        </select>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="input-group input-group-static mb-4">
                        <label>Label</label>
                        <input type="text" class="form-control">
                    </div>
{{--                    <div class="input-group input-group-static my-3">--}}
{{--                        <label class="form-label">Email</label>--}}
{{--                        <input type="email" class="form-control">--}}
{{--                    </div>--}}
                </div>
                <div class="col-md-6">
                    <div class="input-group input-group-static my-3">
                        <label>Email</label>
                        <input type="email" class="form-control" disabled>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="input-group input-group-static is-valid my-3">
                        <label>Success</label>
                        <input type="email" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group input-group-static is-invalid my-3">
                        <label>Error</label>
                        <input type="email" class="form-control">
                    </div>
                </div>
            </div>


            {{--            <div class="row">--}}

{{--                <div class="col-4 input-group input-group-outline mb-4">--}}
{{--                    <label class="form-label">Label</label>--}}
{{--                    <input type="text" class="form-control">--}}
{{--                </div>--}}

{{--                <div class="col-4 input-group input-group-dynamic mb-4">--}}
{{--                    <label class="form-label">Label</label>--}}
{{--                    <input type="text" class="form-control">--}}
{{--                </div>--}}

{{--                <div class="col-4 input-group input-group-static mb-4">--}}
{{--                    <label>Label</label>--}}
{{--                    <input type="text" class="form-control">--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>

@endsection
