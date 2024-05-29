<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=5.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('css/registerStyle.css')}}">
</head>
<body class="bg-primary-subtle">

    <div class="contain p-0 w-100vh">
        <div class="form">
            <div class="left">

                <div class="quote">
                    <p>Where Trends Collide and Vibes Unite!</p>
                </div>

                <div class="logo">
                    <img src="image/Formlogo.png" alt="">
                </div>

            </div>

            <div class="right">
                <h2>Register</h2>
                <form action="/register" method="post">
                    @csrf
                    <div class="form-floating mb-2">
                        <input type="text" name="fullname" id="floatingInput" style="background: none;" class="text-light form-control @error('fullname')is-invalid @enderror"  placeholder="Fullname" value="{{old('fullname')}}">
                        <label for="floatingInput" class="bg-none">Fullname</label>
                        @error('fullname')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>

                    <div class="form-floating mb-2">
                        <input type="text" name="username" id="floatingInput" style="background: none;" class="text-light form-control @error('username') is-invalid @enderror" placeholder="Username" value="{{old('username')}}">
                        <label for="floatingInput" class="">Username</label>
                        @error('username')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>

                    <div class="form-floating mb-2">
                        <input type="email" name="email" id="floatingInput" style="background: none;" class="text-light form-control @error('email') is-invalid @enderror" placeholder="name@example.com" value="{{old('email')}}">
                        <label for="floatingInput" class="email">Email</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>

                    <div class="form-floating mb-2">
                        <input type="password" name="password" id="floatingInput" style="background: none;" class="text-light form-control @error('password') is-invalid @enderror" placeholder="password">
                        <label for="floatingInput">Password</label>
                        @error('password')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>

                    <div class="check-box">
                        <input type="checkbox" class="form-check-input" name="terms" id="terms">
                        <label for="form-check-label">I've read and accept the <a href="">terms & conditions</a></label>
                        @error('terms')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>

                    <div class="container text-center">
                        <div class="row">
                            <div class="submit col">
                                <button type="submit" name="submit">Register</button>
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="social-login col">
                                <button id="google-btn"><img src="image/google.png" class="image" alt=""> Continue with Google</button>
                            </div>
                            <div class="social-login col">
                                <button id="google-btn"><img src="image/facebook.png" class="image" alt=""> Continue with Facebook</button>
                            </div>
                        </div>
                    </div>

                    <div class="check-box">
                        <label for="form-check-label">Already have an account? <a href="/login">Login</a></label>
                    </div>



                </form>
            </div>  
        </div>
    </div>

    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>