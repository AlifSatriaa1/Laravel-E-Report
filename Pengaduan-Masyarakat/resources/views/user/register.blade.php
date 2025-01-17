@extends('layouts.user')

@section('css')
<link rel="stylesheet" href="{{ asset('css/landing.css') }}">
<style>
    body {
        background: sandybrown;
    }

    .toggle-password {
            position: absolute;
            top: 66%;
            right: 28px;
            transform: translateY(-50%);
            cursor: pointer;
            font-size: 1.2em;
            color: #888; 
        }

        .btn-purple {
            background:sandybrown;
            width:100%;
            color: #fff;
        }

        .btn-purple:hover{
            background: sandybrown;
            width: 100%;
            color: #fff;
            font-weight: 600;
        }
</style>
@endsection

@section('title', 'Register Page' )

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <h2 class="text-center text-white mb-0 mt-5">Rehub</h2>
            <p class="text-center text-white mb-5">E-Report Hub</p>
            <div class="card mt-5">
                <div class="card-body">
                    <h2 class="text-center mb-5">Create Account</h2>
                    <form action="#" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="number" name="nik" placeholder="NIK" class="form-control">
                        </div>

                        <div class="form-group">
                        <input type="text" id="nama" name="nama" placeholder="Full Name" class= "form-control">
                        </div>

                        <div class="form-group">
                        <input type="text" id="username" name="username" placeholder="Username" class="form-control">
                        </div>

                        <div class="form-group">
                        <input type="password" id="password" name="password" placeholder="Password" class="form-control">
                             <span class="toggle-password" onclick="togglePassword()">👁️</span>
                        </div>

                        <div class="form-group">
                        <input type="text" id="telp" name="telp" placeholder="Phone Number" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-purple "> REGISTER</button>
                        </div>
                    </form>
                </div>
           
            @if(Session::has('pesan'))
            <div class="aler alert-danger mt-2">
                {{ Session::get('pesan') }}
            </div>
            @endif
            <a href="{{ route ('ereporthub.index') }}" class="btn btn-warning text-white mt-3" style="width: 100%">Back To Home</a> 
           </div>
        </div>
    </div>
</div>


<script>
        function togglePassword() {
            const passwordField = document.getElementById("password");
            const toggleIcon = document.querySelector(".toggle-password");
            if (passwordField.type === "password") {
                passwordField.type = "text";
                toggleIcon.textContent = "🖕🏻"; 
            } else {
                passwordField.type = "password";
                toggleIcon.textContent = "👁️"; 
            }
        }
    </script>



@endsection