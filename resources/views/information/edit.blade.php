
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Information') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                   <!-- {{$user->address}} -->
                    <form method="post" enctype="multipart/form-data" class="mt-6 space-y-6">
                         @csrf
                         <div>
                            <x-input-label for="phone" :value="__('Phone')" />
                            <x-text-input id="phone" name="phone" type="text" class="mt-1 block w-full" :value="old('phone', $user->phone)"  autofocus autocomplete="phone" />
                            <x-input-error class="mt-2" :messages="$errors->get('phone')" />
                         </div>
                         <div>
                            <x-input-label for="address" :value="__('Address')" />
                            <x-text-input id="address" name="address" type="text" class="mt-1 block w-full" :value="old('address', $user->address)"  autofocus autocomplete="address" />
                            <x-input-error class="mt-2" :messages="$errors->get('address')" />
                         </div>
                         <div>
                            <x-input-label for="bio" :value="__('Bio')" />
                            <textarea name="bio" class='w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm' > 
                                {{old('bio', $user->bio)}}

                            </textarea>
                            <x-input-error class="mt-2" :messages="$errors->get('bio')" />
                         </div>
                         <div>
                            <x-input-label for="avatar" :value="__('Avatar')" />
                            <input name='avatar'
                                class="relative m-0 block w-full min-w-0 flex-auto cursor-pointer rounded border border-solid border-secondary-500 bg-transparent bg-clip-padding px-3 py-[0.32rem] text-base font-normal leading-[2.15] text-surface transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:me-3 file:cursor-pointer file:overflow-hidden file:rounded-none file:border-0 file:border-e file:border-solid file:border-inherit file:bg-transparent file:px-3  file:py-[0.32rem] file:text-surface focus:border-primary focus:text-gray-700 focus:shadow-inset focus:outline-none  file:dark:text-white"
                                id="formFileLg"
                                type="file" />
                            <x-input-error class="mt-2" :messages="$errors->get('avatar')" />
                         </div>
                        <div class="flex items-center gap-4">
                             <x-primary-button>{{ __('Save') }}</x-primary-button>

                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
