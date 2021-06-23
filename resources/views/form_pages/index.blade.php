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
                            <h3>Form table.</h3>
                            <br>
                        </div>
                        <table class="table3">
                            <thead class="thead">
                            <tr>
                                <th scope="col" class="sort" data-sort="name">Name</th>
                                <th scope="col" class="sort" data-sort="hobby">Hobbies</th>
                                <th scope="col" class="sort" data-sort="holiday">Holiday</th>
                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($form_pages as $formPage)
                                <tr>
                                    <td scope="row" class="name"> {{$formPage->name}} </td>
                                    <td class="hobby"> {{$formPage->hobby}} </td>
                                    <td class="holiday">{{$formPage->holiday}}</td>
                                    <td>
                                        <form action="{{ route('form_pages.destroy',$formPage->id) }}" method="Post">
                                            <a class="btn btn-primary" href="{{ route('form_pages.edit',$formPage->id) }}">Edit</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </section>
</x-app-layout>
