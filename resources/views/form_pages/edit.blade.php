<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('FormPage') }}
        </h2>
    </x-slot>

    <section class="dash-first">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">

                        <div class="sjaak">
                            <h3>Edit your form.</h3>
                            <br>
                        </div>
                        <form method="POST" action="{{ route('form_pages.update', $formPage->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="error">
                                <x-label for="name" :value="__('What is your name?')"/>

                                <x-input
                                    value="{{ $formPage->name }}"
                                    id="name"
                                    class="block mt-1 w-full"
                                    type="name"
                                    name="name"
                                    required
                                />
                                @if ($errors->has('name'))
                                    <p>{{ $errors->first('name') }}</p>
                                @endif
                                <br>
                            </div>


                            <div class="error">
                                <x-label for="hobby" :value="__('What are your hobbies?')"/>

                                <x-input id="hobby" class="block mt-1 w-full"
                                         value="{{ $formPage->hobby }}"
                                         type="hobby"
                                         name="hobby"
                                         required
                                />
                                @if ($errors->has('hobby'))
                                    <p>{{ $errors->first('hobby') }}</p>
                                @endif
                                <br>
                            </div>

                            <div class="error">
                                <x-label for="holiday" :value="__('What are you gonna do in the holiday?')"/>

                                <x-input id="holiday" class="block mt-1 w-full"
                                         value="{{ $formPage->holiday }}"
                                         type="holiday"
                                         name="holiday"
                                         required
                                />
                                @if ($errors->has('holiday'))
                                    <p>{{ $errors->first('holiday') }}</p>
                                @endif
                                <br>
                            </div>

                            <br>

                            <x-button class="ml-3">
                                {{ __('Submit') }}
                            </x-button>
                        </form>
                    </div>
                </div>
            </div>
    </section>
</x-app-layout>
