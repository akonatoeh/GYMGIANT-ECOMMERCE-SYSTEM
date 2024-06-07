<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
            max-width: 600px;
            width: 100%;
            margin: 20px;
            border: 1px solid #e5e7eb;
        }
        .form-title {
            font-size: 1.75rem;
            margin-bottom: 1.5rem;
            color: #f97316;
            text-align: center;
        }
        .form-label {
            display: block;
            margin-bottom: 0.75rem;
            color: #fb923c;
            font-weight: bold;
        }
        .form-input {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #fdba74;
            border-radius: 0.375rem;
            margin-bottom: 1.25rem;
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
        .form-footer {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            margin-top: 1.5rem;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <div class="form-title" style="font-weight: bold"><h3>Register</h3></div>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <label for="name" class="form-label">{{ __('Name') }}</label>
                <input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" class="form-input" />
                @if ($errors->has('name'))
                    <div class="form-error">{{ $errors->first('name') }}</div>
                @endif
            </div>

            <!-- Email Address -->
            <div>
                <label for="email" class="form-label">{{ __('Email') }}</label>
                <input id="email" type="email" name="email" :value="old('email')" required autocomplete="username" class="form-input" />
                @if ($errors->has('email'))
                    <div class="form-error">{{ $errors->first('email') }}</div>
                @endif
            </div>

            <!-- Phone -->
            <div>
                <label for="phone" class="form-label">{{ __('Phone') }}</label>
                <input id="phone" type="text" name="phone" :value="old('phone')" required autocomplete="phone" class="form-input" />
                @if ($errors->has('phone'))
                    <div class="form-error">{{ $errors->first('phone') }}</div>
                @endif
            </div>

            <!-- Address -->
            <div>
                <label for="address" class="form-label">{{ __('Address') }}</label>
                <input id="address" type="text" name="address" :value="old('address')" required autocomplete="address" class="form-input" />
                @if ($errors->has('address'))
                    <div class="form-error">{{ $errors->first('address') }}</div>
                @endif
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="form-label">{{ __('Password') }}</label>
                <input id="password" type="password" name="password" required autocomplete="new-password" class="form-input" />
                @if ($errors->has('password'))
                    <div class="form-error">{{ $errors->first('password') }}</div>
                @endif
            </div>

            <!-- Confirm Password -->
            <div>
                <label for="password_confirmation" class="form-label">{{ __('Confirm Password') }}</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" class="form-input" />
                @if ($errors->has('password_confirmation'))
                    <div class="form-error">{{ $errors->first('password_confirmation') }}</div>
                @endif
            </div>

            <div class="form-footer">
                <a class="form-link" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
                <button type="submit" class="form-button">
                    {{ __('Register') }}
                </button>
            </div>
        </form>
    </div>
</body>
</html>
