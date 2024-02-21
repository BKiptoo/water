<div class="page-wrapper">
    <div class="page-content--bge5">
        <div class="container">
            <div class="login-wrap">
                <div class="login-content">
                    <div class="login-logo">
                        <a href="#">
                            <img src="{{ asset('Assets/images/icon/logo.png') }}" alt="CoolAdmin">
                        </a>
                    </div>
                    <div class="login-form">
                        <form wire:submit.prevent="login" novalidate>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input wire:model.defer="username" class="au-input au-input--full" type="text" id="username" name="username" placeholder="Username" required>
                                @error('username') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input wire:model.defer="password" class="au-input au-input--full" type="password" id="password" name="password" placeholder="Password" required>
                                @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>
                            <div class="login-checkbox">
                                <label>
                                    <input wire:model.defer="remember" type="checkbox" name="remember"> Remember Me
                                </label>
                                <label>
                                    <a href="#">Forgotten Password?</a>
                                </label>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary w-100" type="submit">Login</button>
                            </div>
                        </form>
                        <div class="register-link">
                            <p>
                                Don't have an account? <a href="{{ route('register') }}">Sign Up Here</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
