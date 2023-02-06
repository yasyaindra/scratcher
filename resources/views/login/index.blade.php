<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="/css/login.styles.css" />

    <!-- ===== BOX ICONS ===== -->
    <link
      href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css"
      rel="stylesheet"
    />

    <title>Sign Up / Sign In</title>
  </head>
  <body>
    <div class="login">
      <div class="login__content">
        <div class="login__img">
          <img src="/img/img-login.svg" alt="" />
        </div>
        <div class="login__forms">
          <form action="/login" method="POST" class="login__registre block" id="login-in">
            @csrf
            <h1 class="login__title">Sign In</h1>
            <div class="login__box">
              <i class="bx bx-user login__icon"></i>
              <input type="text" placeholder="Username" name="username" class="login__input" />
            </div>

            <div class="login__box">
              <i class="bx bx-lock-alt login__icon"></i>
              <input
                type="password" name="password"
                placeholder="Password"
                class="login__input"
                name="password"
              />
            </div>

            <a href="#" class="login__forgot">Forgot password?</a>
            {{-- Alert --}}
            @if(session()->has('loginError'))
            <div>
              <h5 style="color:red">
                {{ session('loginError') }}
              </h5>
            </div>
            @endif
            @if ($errors->any())
              @foreach ($errors->all() as $error)
            <div>
              <h5 style="color:red">
                {{ $error }}
              </h5>
            </div>    
              @endforeach
            @endif
            @if(session()->has('success'))
            <div>
              <h5 style="color:green">You are successfully registered!</h5>
            </div>
            @endif
            {{-- End Alert --}}
            <a href="javascript:{}" class="login__button" onclick="document.getElementById('login-in').submit();">Sign In</a>

            <div>
              <span class="login__account">Don't have an Account ?</span>
              <span class="login__signin" id="sign-up">Sign Up</span>
            </div>
          </form>

          <form action="/register" method="POST" class="login__create none" id="login-up">
            @csrf
            <h1 class="login__title">Create Account</h1>
            <div class="login__box">
              <i class="bx bx-user login__icon"></i>
              <input type="text" placeholder="Full Name" name="name" class="login__input" />
            </div>
            <div class="login__box">
              <i class="bx bx-user login__icon"></i>
              <input type="text" placeholder="Username" name="username" class="login__input" />
            </div>
            <div class="login__box">
              <i class="bx bx-at login__icon"></i>
              <input type="text" placeholder="Email" name="email" class="login__input" />
            </div>
            <div class="login__box">
              <i class="bx bx-lock-alt login__icon"></i>
              <input
                type="password"
                placeholder="Password"
                class="login__input"

                name="password"
              />
            </div> 
            <a href="javascript:{}" class="login__button" onclick="document.getElementById('login-up').submit();">Sign Up</a>
            <div> 
              <span class="login__account">Already have an Account ?</span>
              <span class="login__signup" id="sign-in">Sign In</span>
            </div>

            <div class="login__social">
              <a href="#" class="login__social-icon"
                ><i class="bx bxl-facebook"></i
              ></a>
              <a href="#" class="login__social-icon"
                ><i class="bx bxl-twitter"></i
              ></a>
              <a href="#" class="login__social-icon"
                ><i class="bx bxl-google"></i
              ></a>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!--===== MAIN JS =====-->
    <script src="/js/main.js"></script>
  </body>
</html>
