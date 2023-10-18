@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <table class="table table-sm">
                            <tbody>
                                <tr>
                                    <td colspan="2" class="fw-bolder bg-dark text-light text-capitalize">Human Resource Management</td>
                                </tr>
                                <tr>
                                    <td class="text-nowrap fw-medium">Department</td>
                                    <td>
                                        <div class="d-flex">
                                            <div class="form-check me-3 me-lg-5">
                                                <input class="form-check-input" type="checkbox" id="userManagementRead" />
                                                <label class="form-check-label" for="userManagementRead">
                                                    Create
                                                </label>
                                            </div>
                                            <div class="form-check me-3 me-lg-5">
                                                <input class="form-check-input" type="checkbox" id="userManagementRead" />
                                                <label class="form-check-label" for="userManagementRead">
                                                    Edit
                                                </label>
                                            </div>
                                            <div class="form-check me-3 me-lg-5">
                                                <input class="form-check-input" type="checkbox" id="userManagementRead" />
                                                <label class="form-check-label" for="userManagementRead">
                                                    View
                                                </label>
                                            </div>
                                            <div class="form-check me-3 me-lg-5">
                                                <input class="form-check-input" type="checkbox" id="userManagementRead" />
                                                <label class="form-check-label" for="userManagementRead">
                                                    Status
                                                </label>
                                            </div>
                                            <div class="form-check me-3 me-lg-5">
                                                <input class="form-check-input" type="checkbox" id="userManagementRead" />
                                                <label class="form-check-label" for="userManagementRead">
                                                    Delete
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-nowrap fw-medium">Employee</td>
                                    <td>
                                        <div class="d-flex">
                                            <div class="form-check me-3 me-lg-5">
                                                <input class="form-check-input" type="checkbox" id="userManagementRead" />
                                                <label class="form-check-label" for="userManagementRead">
                                                    Create
                                                </label>
                                            </div>
                                            <div class="form-check me-3 me-lg-5">
                                                <input class="form-check-input" type="checkbox" id="userManagementRead" />
                                                <label class="form-check-label" for="userManagementRead">
                                                    Edit
                                                </label>
                                            </div>
                                            <div class="form-check me-3 me-lg-5">
                                                <input class="form-check-input" type="checkbox" id="userManagementRead" />
                                                <label class="form-check-label" for="userManagementRead">
                                                    View
                                                </label>
                                            </div>
                                            <div class="form-check me-3 me-lg-5">
                                                <input class="form-check-input" type="checkbox" id="userManagementRead" />
                                                <label class="form-check-label" for="userManagementRead">
                                                    Status
                                                </label>
                                            </div>
                                            <div class="form-check me-3 me-lg-5">
                                                <input class="form-check-input" type="checkbox" id="userManagementRead" />
                                                <label class="form-check-label" for="userManagementRead">
                                                    Delete
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="fw-bolder bg-dark text-light text-capitalize">Boradcast</td>
                                </tr>
                                <tr>
                                    <td class="text-nowrap fw-medium">Platform</td>
                                    <td>
                                        <div class="d-flex">
                                            <div class="form-check me-3 me-lg-5">
                                                <input class="form-check-input" type="checkbox" id="userManagementRead" />
                                                <label class="form-check-label" for="userManagementRead">
                                                    Create
                                                </label>
                                            </div>
                                            <div class="form-check me-3 me-lg-5">
                                                <input class="form-check-input" type="checkbox" id="userManagementRead" />
                                                <label class="form-check-label" for="userManagementRead">
                                                    Edit
                                                </label>
                                            </div>
                                            <div class="form-check me-3 me-lg-5">
                                                <input class="form-check-input" type="checkbox" id="userManagementRead" />
                                                <label class="form-check-label" for="userManagementRead">
                                                    View
                                                </label>
                                            </div>
                                            <div class="form-check me-3 me-lg-5">
                                                <input class="form-check-input" type="checkbox" id="userManagementRead" />
                                                <label class="form-check-label" for="userManagementRead">
                                                    Status
                                                </label>
                                            </div>
                                            <div class="form-check me-3 me-lg-5">
                                                <input class="form-check-input" type="checkbox" id="userManagementRead" />
                                                <label class="form-check-label" for="userManagementRead">
                                                    Delete
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
