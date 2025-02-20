<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function create()
    {
        $menu = menu('faq');
        return view('admin.faqs.create', compact('menu'));

    }

    public function store(Request $request)
    {
        $attributes = $this->getValidAttributes($request, true);

        Faq::create($attributes);

        return redirect()->route('faq')->with('success', 'FAQ created successfully!');
    }

    public function destroy(Faq $faq)
    {
        $faq->delete();
        return redirect()->route('faq')->with('success', 'FAQ deleted successfully!');
    }

    public function edit(Faq $faq)
    {
        $menu = menu('faq');
        return view('admin.faqs.edit', compact('menu', 'faq'));
    }

    public function update(Request $request, faq $faq)
    {
        $attributes = $this->getValidAttributes($request);

        $faq->update($attributes);

        return redirect()->route('faq')->with('success', 'FAQ updated successfully!');
    }

    private function getValidAttributes(Request $request, $checkUnique = false)
    {
        $uniqueRequired = $checkUnique ? '|unique:faqs' : '';
        return $request->validate([
            'question' => 'required|min:10|max:100' . $uniqueRequired,
            'answer' => 'required|min:10|max:65000',
        ]);
    }
}
