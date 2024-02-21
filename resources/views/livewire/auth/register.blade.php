<div class="page-wrapper">
    <div class="page-content--bge5">
        <div class="container">
            <div class="login-wrap">
                <div class="login-content">
                    <div class="login-logo">
                        <a href="#">
                            <img src="{{asset('../Assets/images/icon/logo.png')}}" alt="CoolAdmin">
                        </a>
                    </div>
                    <div class="login-form">
                        <form wire:submit.prevent="register" novalidate>
                            <div class="form-group">
                                <label>Name</label>
                                <input wire:model="name" class="au-input au-input--full" type="text" name="name" placeholder="name">
                                @error('name')<span class="error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label>Username</label>
                                <input wire:model="username" class="au-input au-input--full" type="text" name="username" placeholder="Username">
                                @error('username') <span class="error">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label>Email Address</label>
                                <input wire:model="email" class="au-input au-input--full" type="email" name="email" placeholder="Email">
                                @error('email') <span class="error">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input wire:model="password" class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                @error('password') <span class="error">{{ $message }}</span> @enderror
                            </div>
                            <div class="login-checkbox">
                                <label>
                                    <input type="checkbox" name="agree" wire:model="agree">Agree to the terms and policy
                                </label>
                                @error('agree') <span class="error">{{ $message }}</span> @enderror
                            </div>
                            <button class="btn btn-primary w-100" type="submit">Register</button>
                        </form>
                        <div class="register-link">
                            <p>
                                Already have an account?
                                <a href="{{route('login')}}">Sign In</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
