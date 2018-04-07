<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
	public function index()
	{
		$pages = Page::all();
	    return view('epanel.pages_settings.pages', compact('pages'));
	}

	public function showAddForm()
	{
		return view('epanel.pages_settings.add_page');
	}

	public function store()
	{
		$page = request()->validate([
			'name' => 'required|string',
		]);

		$page['slug'] = makeSlug($page['name']);

		Page::create($page);

		return back()->with('success', 'page was successfully added');
	}

	public function home()
	{
		return view('epanel.pages_settings.page_home');
	}
}
