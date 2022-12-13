@include('layouts.main')

<main>
    <div class="row ">
        <div class="col-6">
            <img src="images/ayla.png" alt="" height="100%" width="100%">
        </div>

        <div class="col-6">
            <div class="content p-4">
                <h2 class="mb-5">Login</h2>

                <form action="{{ route('login.post') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Kata Sandi</label>
                        <input type="password" class="form-control" id="password" name="password"
                            value="<?= isset($_COOKIE['email']) ? $_COOKIE['email'] : '' ?>">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="remember" name="remember">
                        <label class="form-check-label" for="remember">Remember Me</label>
                    </div>

                    <button type="submit" class="btn btn-primary" name="login">Login</button>
                </form>
                <p class="mt-3">Anda sudah punya akun? <a href="{{ 'register' }}">Daftar</a></p>
            </div>
        </div>
    </div>
</main>
