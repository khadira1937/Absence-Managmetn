{{-- <!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<style>
  .background{
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
  }
  .background::before {
    content: '';
    background-image: url(/images/22.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    opacity: 0.35;
  }
  .form-container {
  background-color: rgba(255, 255, 255, 0.8); /* Fond semi-transparent */
  padding: 2rem;
  border-radius: 15px; /* Bordures arrondies */
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Ombre légère pour le contraste */
  margin-bottom: 2rem; /* Espace en dessous du formulaire */
}
.btn-custom {
  background-color: rgb(127, 188, 225);
  border: none;
  border-radius: 12px;
}
</style>
<body>
  <div class="background">
    <section class="form-container">
      <div class="container-fluid h-custom" style="height: 700px;margin-top: -100px">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-md-9 col-lg-6 col-xl-5">
            <img src="https://damt7w3yoa0t2.cloudfront.net/img/svg/blocks/highspot/website_safety_first.svg"
              class="img-fluid" style="height: 450px;" alt="Sample image">
          </div>
          <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1" style="margin-left:-2px">
            <form action="/Login" method="POST">
              @csrf
  
              <div class="divider d-flex align-items-center my-4">
                    <h3 class="fw-bold mt-2 pt-1 mb-0"><b>SIGN IN</b></h3>
              </div>
    
              <div class="form-outline mb-4">
                <label class="form-label" for="Nom">Nom</label>
                <input type="text" id="Nom" name="Nom" class="form-control form-control-lg"
                  placeholder="Enter a valid Name " />
              </div>
    
              <div class="form-outline mb-3">
                <label class="form-label" for="password">Password</label>
                <input type="password" name="password" class="form-control form-control-lg"
                  placeholder="Enter password" />
              </div>
              @if(session('erreur'))
                  <div class="alert alert-danger">
                    <span style="font-weight: bold; color: red">{{ session('erreur') }}</span> 
                  </div>
              @endif
  
              <div class="text-center text-lg-start mt-4 pt-2">
                <button type="submit" class="btn" style="margin-left: 10px;background-color: rgb(127, 188, 225); height: 46px;padding-left: 2.5rem; padding-right: 2.5rem;border:none;border-raduis:12px"
                ><span style="font-weight: bold">Login</span></button>                  
              </div>
    
            </form>
          </div>
        </div>
      </div>
  
  </div>
  </body>

 --}}
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Document</title>
     <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
     <style>
         @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap");
 
         * {
             margin: 0;
             padding: 0;
             box-sizing: border-box;
             font-family: "Poppins", sans-serif;
         }
         body {
             display: flex;
             justify-content: center;
             align-items: center;
             min-height: 100vh;
             background: url(/images/24.jpg) no-repeat;
             background-size: cover;
             background-position: center;
         }
         body::before {
             content: '';
             position: absolute;
             top: 0;
             left: 0;
             right: 0;
             bottom: 0;
             opacity: 1;
             background: rgba(0, 0, 0, 0.5);
             z-index: 0;
         }
         .wrapper {
             width: 420px;
             background: transparent;
             border: 2px solid rgba(255, 255, 255, .2);
             backdrop-filter: blur(20px);
             box-shadow: 0 0 10px rgba(0, 0, 0, .2);
             color: #fff;
             border-radius: 10px;
             padding: 30px 40px;
             position: relative;
         }
         .wrapper h1 {
             font-size: 36px;
             text-align: center;
         }
         .wrapper .input-box {
             width: 100%;
             height: 50px;
             margin: 30px 0;
             position: relative;
         }
         .input-box input {
             width: 100%;
             height: 100%;
             background: transparent;
             border: none;
             outline: none;
             border: 2px solid rgba(255, 255, 255, .2);
             border-radius: 40px;
             font-size: 16px;
             color: #fff;
             padding: 0 45px;
         }
         .input-box input::placeholder {
             color: #fff;
         }
         .input-box i {
             position: absolute;
             right: 20px;
             top: 50%;
             transform: translateY(-50%);
             font-size: 20px;
             color: #fff;
         }
         .wrapper .btn {
             width: 100%;
             height: 45px;
             background: #fff;
             border: none;
             outline: none;
             border-radius: 40px;
             box-shadow: 0 0 10px rgba(0, 0, 0, .1);
             cursor: pointer;
             font-size: 16px;
             color: #333;
             font-weight: 600;
         }
         .alert {
             position: absolute;
             top: 10px;
             left: 50%;
             transform: translateX(-50%);
             background: #ffcccc;
             color: #cc0000;
             padding: 10px 20px;
             border-radius: 5px;
             font-weight: bold;
             width: 30%;
             text-align: center;
             opacity: 0;
             transition: opacity 0.5s, top 0.5s;
         }
         .alert.show {
             top: 20px;
             opacity: 1;
         }
     </style>
 </head>
 <body>
  @if(session('erreur'))
                 <div class="alert show" id="error-message">
                     {{ session('erreur') }}
                 </div>
             @endif
     <div class="wrapper">
         <form action="/Login" method="POST">
             @csrf
             <h1>Login</h1>
             
             <div class="input-box p-2">
                 <input type="text" id="Nom" name="Nom" placeholder="Username" required>
                 <i class='bx bxs-user'></i>
             </div>
             <div class="input-box">
                 <input type="password" name="password" placeholder="Password" required>
                 <i class='bx bxs-lock-alt'></i>
             </div>
             <button type="submit" class="btn">Login</button>
         </form>
     </div>
 
     <script>
         document.addEventListener("DOMContentLoaded", function() {
             const errorMessage = document.getElementById("error-message");
             if (errorMessage) {
                 setTimeout(() => {
                     errorMessage.classList.remove("show");
                 }, 3000);
             }
         });
     </script>
 </body>
 </html>
 