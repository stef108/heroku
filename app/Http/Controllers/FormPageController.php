<?php

namespace App\Http\Controllers;

use App\Models\formPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class FormPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['form_pages'] = formPage::orderBy('id','desc')->paginate(5);
        return view('form_pages.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form_pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validateForm($request);

        $formPage = new formPage;
        $formPage->name = $request->name;
        $formPage->hobby = $request->hobby;
        $formPage->holiday = $request->holiday;
        $formPage->save();

        return redirect()->route('form_pages.index')
            ->with('Nice!','Form has been successfully created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\formPage
     * @return \Illuminate\Http\Response
     */
    public function show(formPage $formPage)
    {
        return view('form_pages.show',compact('formPage'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\formPage $formPage
     * @return \Illuminate\Http\Response
     */
    public function edit(formPage $formPage)
    {
        return view('form_pages.edit',compact('formPage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\formPage  $formPage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validateForm($request);

        $formPage = formPage::find($id);
        $formPage->name = $request->name;
        $formPage->hobby = $request->hobby;
        $formPage->holiday = $request->holiday;
        $formPage->save();

        return redirect()->route('form_pages.index')
            ->with('Nice!','form Has Been successfully updated');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\formPage  $formPage
     * @return \Illuminate\Http\Response
     */
    public function destroy(formPage $formPage)
    {
        $formPage->delete();
        return redirect()->route('form_pages.index')
            ->with('success','Form has been deleted successfully');
    }

    private function validateForm(Request $request)
    {
        return $request->validate([
            'name' => 'required|string|max:30',
            'hobby' => 'required|string|max:30',
            'holiday' => 'required|string|max:30',
        ]);
    }
}
