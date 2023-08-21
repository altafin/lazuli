@extends('material.layout.master')

@section('content')

    <div class="card card-frame">
        <div class="card-body">

{{--            <div class="nav-wrapper position-relative end-0 mb-4">--}}
{{--                <ul class="nav nav-pills nav-fill p-1" role="tablist">--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="#profile-tabs-simple" role="tab" aria-controls="profile" aria-selected="true">--}}
{{--                            PESSOA FÍSICA--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#dashboard-tabs-simple" role="tab" aria-controls="dashboard" aria-selected="false">--}}
{{--                            PESSOA JURÍDICA--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </div>--}}

            <div class="row">
                <div class="col-md-1">
                    <div class="input-group input-group-static mb-4">
                        <label for="exampleFormControlSelect1" class="ms-0">TIPO DE PESSOA</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>SELECIONE UMA OPÇÃO</option>
                            <option>FÍSICA</option>
                            <option>JURÍDICA</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="input-group input-group-static mb-4">
                        <label>CPF</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group input-group-static mb-4">
                        <label>NOME</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                </div>
            </div>
{{--            This is some text within a card body.--}}
        </div>
    </div>

    <form>
        <div class="row">
            <div class="col-md-6">
                <div class="input-group input-group-outline my-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control">
                </div>
            </div>
            <div class="col-md-6">
                <div class="input-group input-group-outline my-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" disabled>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="input-group input-group-outline is-valid my-3">
                    <label class="form-label">Success</label>
                    <input type="email" class="form-control">
                </div>
            </div>
            <div class="col-md-6">
                <div class="input-group input-group-outline is-invalid my-3">
                    <label class="form-label">Error</label>
                    <input type="email" class="form-control">
                </div>
            </div>
        </div>

{{--        <div class="row">--}}
{{--            <div class="col-md-6">--}}
{{--                <div class="input-group input-group-static mb-4">--}}
{{--                    <label for="exampleFormControlSelect1" class="ms-0">Example select</label>--}}
{{--                    <select class="form-control" id="exampleFormControlSelect1">--}}
{{--                        <option>1</option>--}}
{{--                        <option>2</option>--}}
{{--                        <option>3</option>--}}
{{--                        <option>4</option>--}}
{{--                        <option>5</option>--}}
{{--                    </select>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="row">--}}
{{--            <div class="form-floating form-floating-outline mb-4">--}}
{{--                <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">--}}
{{--                    <option selected>Open this select menu</option>--}}
{{--                    <option value="1">One</option>--}}
{{--                    <option value="2">Two</option>--}}
{{--                    <option value="3">Three</option>--}}
{{--                </select>--}}
{{--                <label for="exampleFormControlSelect1">Example select</label>--}}
{{--            </div>--}}
{{--        </div>--}}

        <div class="row">
            <div class="input-group input-group-static mb-4">
                <label>Informe seu nome</label>
                <input type="text" class="form-control">
            </div>
        </div>

    </form>
@endsection
