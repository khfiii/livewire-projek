<div class="flex flex-col lg:flex-row gap-10 h-screen justify-center items-center">
    <form wire:submit.prevent="submit">
        <div class="mb-6">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                Name</label>
            <input type="text" wire:model="name" id="name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="John Doe">
            @error('name')
                <span class="text-red-500">{{ $message }}</span>
            @enderror

        </div>

        <div class="font-semibold bg-green-400 container text-end leading-8 text-gray-50">
        </div>

        <div class="mb-6">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                email</label>
            <input type="email" wire:model="email" id="email"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="name@flowbite.com">
            @error('email')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-6">
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                password</label>
            <input type="password" wire:model="password" id="password"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            @error('password')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex items-start mb-6">
            <div class="flex items-center h-5">
                <input id="remember" type="checkbox" value=""
                    class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800">
            </div>
            <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember
                me</label>
        </div>
        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </form>

    <div class="overflow-x-auto mt-2 flex flex-col gap-2">
        <div class="inline-flex gap-2">
            <input type="text" placeholder="Type here" class="input input-bordered input-primary w-full max-w-md"
                wire:model.live="search" />
        </div>

        <div class="h-full debug w-full">

           @if (count($users)>0)
           <table class="table">
            <!-- head -->
            <thead>
                <tr>
                    <th></th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody class="debug">
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->name }}</td>
                        <td> {{ $user->email }} </td>
                        <td>
                            <button class="btn btn-sm btn-primary">Update</button>
                            <button class="btn btn-sm btn-warning">Delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        @else

        <div class="mt-4 w-[300px] h-[200px] relative overflow-auto">Nothing Users...</div>

           @endif
        </div>
    </div>
</div>
