<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        body {
            background: linear-gradient(135deg, #fdf2e9, #ffe8d6);
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form-container {
            background-color: #fff7ed;
            padding: 2.5rem;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            max-width: 600px; /* Increased max-width for larger form */
            width: 100%;
            margin: 20px;
            border: 1px solid #e5e7eb;
        }
        .form-title {
            font-size: 1.75rem; /* Increased font size */
            margin-bottom: 1.5rem; /* Increased margin bottom */
            color: #f97316;
            text-align: center;
        }
        .form-label {
            display: block;
            margin-bottom: 0.75rem; /* Increased margin bottom */
            color: #fb923c;
            font-weight: bold;
        }
        .form-input {
            width: 100%;
            padding: 0.75rem; /* Increased padding */
            border: 1px solid #fdba74;
            border-radius: 0.375rem;
            margin-bottom: 1.25rem; /* Increased margin bottom */
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
            font-size: 1rem;
            background-color: #fffdf7;
        }
        .form-input:focus {
            border-color: #f97316;
            outline: none;
            box-shadow: 0 0 0 3px rgba(249, 115, 22, 0.5);
        }
        .form-error {
            color: #f97316;
            font-size: 0.875rem;
            margin-top: -0.5rem;
            margin-bottom: 1rem;
        }
        .form-checkbox {
            margin-right: 0.5rem;
        }
        .form-checkbox-label {
            color: #fb923c;
            font-size: 0.875rem;
        }
        .form-link {
            color: #fb923c;
            text-decoration: underline;
            font-size: 0.875rem;
        }
        .form-link:hover {
            color: #7c2d12;
        }
        .form-button {
            background-color: #f97316;
            color: white;
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 0.375rem;
            font-size: 1rem;
            cursor: pointer;
            margin-left: 0.75rem;
        }
        .form-button:hover {
            background-color: #ea580c;
        }
        .form-button:focus {
            background-color: #ea580c;
            outline: none;
        }
        .form-button:active {
            background-color: #c2410c;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <!-- Session Status -->
        @if (session('status'))
            <div class="form-error mb-4">
                {{ session('status') }}
            </div>
        @endif

        <div class="form-title" style="font-weight: bold"><h2>GYMGIANT</h2></div>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <label for="email" class="form-label">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" class="form-input" />
                @if ($errors->has('email'))
                    <div class="form-error">{{ $errors->first('email') }}</div>
                @endif
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="form-label">Password</label>
                <input id="password" type="password" name="password" required autocomplete="current-password" class="form-input" />
                @if ($errors->has('password'))
                    <div class="form-error">{{ $errors->first('password') }}</div>
                @endif
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="form-checkbox" name="remember">
                    <span class="form-checkbox-label">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="form-link" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <button type="submit" class="form-button">
                    {{ __('Log in') }}
                </button>
            </div>
        </form>
    </div>
</body>
</html>
