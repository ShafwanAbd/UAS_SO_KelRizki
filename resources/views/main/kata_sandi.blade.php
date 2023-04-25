@extends('layouts.sidebar')

@section('content') 
    <div class="container_content">
        <div class="container_katasandi">
            <div class="container_isi">

                @if(Session::has('success'))
                    <p class="alert" id="sixSeconds">{{ Session::get('success') }}</p>
                @elseif (Session::has('failed'))
                    <p class="alert failed" id="sixSeconds">{{ Session::get('failed') }}</p>
                @endif 

                <h4>Kata Sandi</h4> 
                <form method="POST" action="{{ url('/kata_sandi/update') }}">
                @csrf
                <div class="container_form flex">
                    <div class="container_form_label">
                        <input id="hashedPassword" type="hidden" value="{{ Auth::user()->password }}"> 
                        <div class="item flex">
                            <p>Kata Sandi Sekarang</p>
                            <div class="input-group">
                                <span id="hideButton1" class="input-group-text"><img src="{{ asset('./image/icon/view_grey.png') }}"></span>
                                <input id="currentPassword" class="form-control" name="current_pw" placeholder="Password Aktif" type="password" required> 
                            </div>
                        </div>
                        <div class="item flex">
                            <p>Kata Sandi Baru</p>
                            <div class="input-group">
                                <span id="hideButton2" class="input-group-text"><img src="{{ asset('./image/icon/view_grey.png') }}"></span>
                                <input id="newPassword" class="form-control" name="new_pw" placeholder="Password Baru" type="password" required> 
                            </div>
                        </div>
                        <div class="item flex">
                            <p>Konfirmasi Kata Sandi</p>
                            <div class="input-group">
                                <span id="hideButton3" class="input-group-text"><img src="{{ asset('./image/icon/view_grey.png') }}"></span>
                                <input id="newPasswordConfirm" class="form-control" name="new_pw_confirm" placeholder="Password Baru" type="password" required> 
                            </div> 
                        </div>
                    </div> 

                    <script>
                        $(document).ready(function() {
                            $('#hideButton1').click(function() {
                                var passwordField = $('#currentPassword');
                                var passwordFieldType = passwordField.attr('type');
                                
                                if (passwordFieldType === 'password') {
                                passwordField.attr('type', 'text');
                                } else {
                                passwordField.attr('type', 'password');
                                }
                            });
                            $('#hideButton2').click(function() {
                                var passwordField = $('#newPassword');
                                var passwordFieldType = passwordField.attr('type');
                                
                                if (passwordFieldType === 'password') {
                                passwordField.attr('type', 'text');
                                } else {
                                passwordField.attr('type', 'password');
                                }
                            });
                            $('#hideButton3').click(function() {
                                var passwordField = $('#newPasswordConfirm');
                                var passwordFieldType = passwordField.attr('type');
                                
                                if (passwordFieldType === 'password') {
                                passwordField.attr('type', 'text');
                                } else {
                                passwordField.attr('type', 'password');
                                }
                            });
                        });
                    </script> 
                </div>
                <button id="submitBtn" type="submit" class="btn btn-primary">Submit</button>
                </form> 

                <script>  
                    const hashedPassword = document.querySelector('#hashedPassword').value;
                    const currentPwField = document.querySelector('#currentPassword');
                    const newPwField = document.querySelector('input[name="new_pw"]');
                    const confirmPwField = document.querySelector('input[name="new_pw_confirm"]');
                    let newPwValue = newPwField.value;
                    let confirmPwValue = confirmPwField.value; 

                    currentPwField.addEventListener('input', () => {
                        let currentPwValue = currentPwField.value; 

                        console.log(currentPwValue);
                        console.log(hashedPassword);

                        if (bcrypt.compareSync(currentPwValue, hashedPassword)) {
                            currentPwField.setCustomValidity('');
                            console.log('success');
                        } else { 
                            currentPwField.setCustomValidity('Passowrd Salah!');
                            console.log('fail');
                        }
                    });

                    newPwField.addEventListener('input', () => {
                        newPwValue = newPwField.value;
                        confirmPwValue = confirmPwField.value;

                        if (newPwValue !== confirmPwValue) {
                            confirmPwField.setCustomValidity('Passowrd Tidak Sesuai!');
                        } else if (newPwValue.length < 8) {    
                            confirmPwField.setCustomValidity('Password minimal berjumlah 8 karakter!');
                        } else if (!/[A-Z]/.test(confirmPwValue)) {
                            confirmPwField.setCustomValidity('Password minimal mempunyai satu huruf besar!');
                        } else if (!/[!@#$%^&*]/.test(confirmPwValue)) {
                            confirmPwField.setCustomValidity('Password minimal mempunyai satu spesial simbol!');
                        } else { 
                            confirmPwField.setCustomValidity('');
                        }
                    });

                    confirmPwField.addEventListener('input', () => {
                        newPwValue = newPwField.value;
                        confirmPwValue = confirmPwField.value;

                        if (newPwValue !== confirmPwValue) {
                            confirmPwField.setCustomValidity('Passowrd Tidak Sesuai!');
                        } else if (newPwValue.length < 8) {    
                            confirmPwField.setCustomValidity('Password minimal berjumlah 8 karakter!');
                        } else if (!/[A-Z]/.test(confirmPwValue)) {
                            confirmPwField.setCustomValidity('Password minimal mempunyai satu huruf besar!');
                        } else if (!/[!@#$%^&*]/.test(confirmPwValue)) {
                            confirmPwField.setCustomValidity('Password minimal mempunyai satu spesial simbol!');
                        } else { 
                            confirmPwField.setCustomValidity('');
                        }
                    });

                    const form = document.querySelector('#submitBtn');
                    form.addEventListener('submit', () => {  
                        if (newPwValue !== confirmPwValue) { 
                            event.preventDefault();
                        }
                    });
                </script>
            </div>
            <div class="container_isi">
                <h4>Perangkat</h4>
            </div>
        </div>
    </div>
    
@endsection