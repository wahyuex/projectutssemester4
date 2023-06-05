<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .preloader {
          display: flex;
          align-items: center;
          justify-content: center;
          height: 100vh;
          background-color: #2c001e;
          color: #e63946;
        }
    
        .preloader .loader {
          position: relative;
          width: 100px;
          height: 100px;
        }
    
        .preloader .loader:before,
        .preloader .loader:after {
          content: "";
          display: block;
          position: absolute;
          border-radius: 50%;
        }
    
        .preloader .loader:before {
          top: 10px;
          left: 10px;
          width: 80px;
          height: 80px;
          border: 6px solid #007bff;
          border-top-color: transparent;
          animation: spin 1s ease-in-out infinite;
        }
    
        .preloader .loader:after {
          top: 30px;
          left: 30px;
          width: 40px;
          height: 40px;
          border: 6px solid #f3f3f3;
          border-top-color: #fff;
          animation: spin-reverse 1s ease-in-out infinite;
        }
    
        @keyframes spin {
          0% {
            transform: rotate(0deg);
          }
          100% {
            transform: rotate(360deg);
          }
        }
    
        @keyframes spin-reverse {
          0% {
            transform: rotate(0deg);
          }
          100% {
            transform: rotate(-360deg);
          }
        }
    
        .preloader .output {
          margin-top: 20px;
          font-weight: bold;
          text-align: center;
        }
      </style>
</head>
<body>
    <div class="preloader">
        <div class="loader"></div>
        <div class="output">
          Loading...
        </div>
      </div>
<script>
setTimeout(function() {
    window.location.href = "{{ route('home') }}";
}, 2000);
</script>      
</body>
</html>