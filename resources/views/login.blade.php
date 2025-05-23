<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login - MommyCare</title>
   <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-pink-50 min-h-screen flex items-center justify-center">
    <div class="flex max-w-4xl w-full bg-white rounded-3xl overflow-hidden shadow-lg">
     <div class="w-full md:w-1/2 p-8">
       <h1 class="text-3xl font-extrabold text-pink-600 mb-6">Login Here</h1>
       
       @if ($errors->any())
           <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
               @foreach ($errors->all() as $error)
                   <p>{{ $error }}</p>
               @endforeach
           </div>
       @endif

       <form action="{{ route('login') }}" method="POST" class="space-y-4">
         @csrf
         <div>
           <label for="email" class="block text-sm font-medium text-pink-700">Email</label>
           <input type="email" id="email" name="email" placeholder="Enter your email" value="{{ old('email') }}"
             class="w-full px-4 py-2 border border-pink-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500">
         </div>
         <div>
           <label for="password" class="block text-sm font-medium text-pink-700">Password</label>
           <input type="password" id="password" name="password" placeholder="Enter your password"
             class="w-full px-4 py-2 border border-pink-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500">
         </div>
         <div class="flex items-center justify-between text-sm text-pink-600">
           <label class="flex items-center">
             <input type="checkbox" name="remember" class="form-checkbox text-pink-500 rounded">
             <span class="ml-2">Remember me</span>
           </label>
           <a href="#" class="text-pink-500 hover:underline">Forgot password?</a>
         </div>
         <button type="submit"
           class="w-full bg-pink-500 text-white py-2 rounded-lg hover:bg-pink-600 transition duration-300">
           Login
         </button>
       </form>
       <p class="text-center text-sm text-pink-600 mt-6">
        Don't have an account? <a href="/signup" class="text-pink-500 hover:underline">Signup here</a>
      </p>
       <p class="text-center text-sm text-pink-600 mt-6">or use your account</p>
       <div class="flex items-center justify-center space-x-4 mt-4">
         <button class="w-10 h-10 bg-pink-100 rounded-full flex items-center justify-center hover:bg-pink-200">
           <img src="https://cdn-icons-png.flaticon.com/512/733/733547.png" alt="Facebook" class="w-5 h-5">
         </button>
         <button class="w-10 h-10 bg-pink-100 rounded-full flex items-center justify-center hover:bg-pink-200">
           <img src="https://cdn-icons-png.flaticon.com/512/732/732200.png" alt="Google" class="w-5 h-5">
         </button>
       </div>
     </div>
     <div class="hidden md:block md:w-1/2 bg-cover bg-center"
        style="background-image: url(img/login.gif);"></div>
   </div>
</body>
</html>