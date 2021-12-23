<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="{{asset('/layouts/auth.css')}}" />

    <title>SISTERHOODS IDN</title>

    <!--Logo-->
    <link rel="shortcut icon" href="{{asset('/layouts/img/LOGO_SH_FIX.png')}}">
</head>

<body>

    <main class="login-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <center><img class="mb-4" src="{{asset('/layouts/img/LOGO_SH_FIX.png')}}" alt="" width="102"
                            height="97"></center>
                    <div class="card">
                        <h4 class="card-header text-center">Login</h4>
                        <div class="card-body">
                            <form method="POST" action="{{ route('login.custom') }}">
                                @csrf
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Email" id="email" class="form-control" name="email"
                                        required autofocus>
                                    @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>

                                <div class="form-group mb-3">
                                    <input type="password" placeholder="Password" id="password" class="form-control"
                                        name="password" required>
                                    @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <div class="checkbox">
                                        <label><input type="checkbox" name="remember"> Remember Me</label>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <div>
                                        Belum punya akun?<a href="\registration">Sign up</a>
                                    </div>
                                </div>

                                <div class="d-grid mx-auto">
                                    <button type="submit" class="btn btn-dark btn-block">Login</button>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>

</html>