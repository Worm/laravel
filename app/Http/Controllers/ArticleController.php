<?php namespace Razor\Http\Controllers;

use Carbon\Carbon;
use Razor\Article;
use Razor\Http\Requests;
use Razor\Http\Requests\CreateArticleRequest;
use Razor\Http\Controllers\Controller;


class ArticleController extends Controller {

	public $article;


	public function __construct(Article $article) {


		$this->article = $article;

	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$articles =  Article::latest('published_at')->published()->get();


		return view('articles.index',compact('articles'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('articles.create');
	}


	/**
	 * @param CreateArticleRequest $request
	 * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
	 */
	public function store(CreateArticleRequest $request)
	{


		$this->article->create($request->all());

		return redirect('articles');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$article = $this->article->findOrFail($id);

		return view('articles.show',compact('article'));

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
