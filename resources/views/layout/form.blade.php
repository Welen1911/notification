<div class="mb-4">
    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
        E-mail
    </label>
    <input
        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        id="username" type="email" name="email" placeholder="Username" value="{{ old('email') }}">
</div>
<div class="mb-6">
    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
        Password
    </label>
    <input
        class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
        id="password" type="password" placeholder="pass" name="password" value="{{ old('password') }}">
    <p class="text-red-500 text-xs italic">Please choose a password.</p>
</div>
<div class="flex items-center justify-between">
    <button
        class="bg-teal-500 hover:bg-teal-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
        type="submit">
        Sign In
    </button>
</div>
