<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style.css">
    <script src="/assets/js/core/jquery.3.2.1.min.js"></script>
    <!-- <link rel="stylesheet" href="/assets/css/bootstrap.min.css"> -->
    <title>Login</title>
</head>
<body>
    <header>
        <div class="logo">
            <h3>HoliRent</h3>
        </div>
        <div class="login-box">
            <h1>Log In</h1>
            <p class="text-form">Holirent, Make ur journey full of intens</a></span></p>
            <!-- Alert Place -->
            @if(session('notlogin'))
            <div class="alert alert-danger">
            <p style="text-align:left">{{ session('notlogin') }}</p>
            </div>
            @endif

            @if(session('fail'))
            <div class="alert alert-danger">
            <p style="text-align:left">{{ session('fail') }}</p>
            </div>
            @endif
            @if(session('notadmin'))
            <div class="alert alert-primary">
            <p style="text-align:left">{{ session('notadmin') }}</p>
            </div>
            @endif

            @if(session('logout'))
            <div class="alert alert-success">
            <p style="text-align:left">{{ session('logout') }}</p>
            </div>
            @endif
            @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li style="text-align:left;margin: 5px 10px;font-size:14px">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <!-- /Alert -->
            <form method="post" action="{{ route('dashboard.login.action') }} ">
                @csrf
                <div class="login-form">
                        <input type="email" name="email" class="form-control" placeholder="Email" 
                        value="@if(session('oldemail')) {{ session('oldemail') }} @endif {{ old('email' )}}">
                </div>
                <div class="login-form">
                        <input type="password" name="pass" class="form-control" placeholder="Password">
                </div>
                <div class="login-form">
                        <input type="submit" class="form-control btn btn-primary" value="Log In">
                </div>
            </form>
        </div>
        <div class="footer">
            <p class="mr-3">Created At 2020 @ By Andryan / Danang</p>
        </div>
    </header>
</body>
</html>
