<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>
            <center>
                @if(session()->has('message'))
                    <div id="message" class="alert alert-success alert-dismissible fade show" role="alert">
                      <strong>{{ session()->get('message') }}</strong>
                  <button type="button" class="close" data-dismiss="alert" aria-label="close" style="color: red">
                    <span aria-hidden="true">&times;</span>
                    </div>
                    <script>
                        setTimeout(function() {
                            document.getElementById('message').style.display = 'none';
                        }, 2000);
                    </script>
                     @endif
                </center>
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
