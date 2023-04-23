@extends('layouts.sidebar')

@section('content') 
    <div class="container_katasandi">
        <div class="container_isi">
            <h4>Kata Sandi</h4>  
            <form method="POST" action="{{ url('') }}">
            @csrf
            <div class="container_form flex">
                <div class="container_form_label">
                    <p>Kata Sandi Sekarang</p>
                    <p>Kata Sandi Baru</p>
                    <p>Konfirmasi Kata Sandi</p> 
                </div>
                <div class="container_form_input"> 
                    <input class="form-control" name="current_pw" placeholder="Password Aktif" type="password" required> 
                    <input class="form-control" name="new_pw" placeholder="Password Baru" type="text" required> 
                    <input class="form-control" name="new_pw_confirm" placeholder="Password Baru" type="text" required> 
                </div>  
            </div>
            <button id="submitBtn" type="submit" class="btn btn-primary">Submit</button>
            </form>

            <script>
                const newPwField = document.querySelector('input[name="new_pw"]');
                const confirmPwField = document.querySelector('input[name="new_pw_confirm"]');
                let newPwValue = newPwField.value;
                let confirmPwValue = confirmPwField.value;

                confirmPwField.addEventListener('input', () => {
                    newPwValue = newPwField.value;
                    confirmPwValue = confirmPwField.value;

                    if (newPwValue.length < 8) {    
                        newPwField.setCustomValidity('Password minimal berjumlah 8 karakter!');
                    } else if (!/[A-Z]/.test(newPwValue)) {
                        newPwField.setCustomValidity('Password minimal mempunyai satu huruf besar!');
                    } else if (!/[!@#$%^&*]/.test(newPwValue)) {
                        newPwField.setCustomValidity('Password minimal mempunyai satu spesial simbol!');
                    } else if (newPwValue !== confirmPwValue) {
                        confirmPwField.setCustomValidity('Passowrd Tidak Sesuai!');
                    } else {
                        newPwField.setCustomValidity('');
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
@endsection