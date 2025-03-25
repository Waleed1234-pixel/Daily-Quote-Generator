<!-- resources/views/admin-login.blade.php -->
@extends('layout.master1')

@section('content')
    <main>
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header bg-warning">
                            Admin Quote Authentication
                        </div>
                        <div class="card-body">
                            <blockquote class="blockquote mb-4">
                                <p id="quoteText">
                                    "Admin ID is the key to unlocking opportunities."
                                </p>
                                <footer class="blockquote-footer">- Admin Wisdom</footer>
                            </blockquote>

                            <div class="mb-3">
                                <label for="adminId" class="form-label">Admin ID</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="adminId"
                                    name="adminId"
                                    required
                                />
                            </div>
                            <div class="mb-3">
                                <label for="adminPassword" class="form-label">Password</label>
                                <input
                                    type="password"
                                    class="form-control"
                                    id="adminPassword"
                                    name="adminPassword"
                                    required
                                />
                            </div>

                            @if(old('adminId') == 'admin@gmail.com' && old('adminPassword') == 'admin')
                                <a href="{{ route('admin.dashboard') }}" class="btn btn-success">Login</a>
                            <!-- @else
                                <button class="btn btn-warning">Login</button> -->
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
