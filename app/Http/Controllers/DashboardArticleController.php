<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Models\DashboardArticle;

class DashboardArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.articles.index', [
            'articles' => Article::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DashboardArticle  $dashboardArticle
     * @return \Illuminate\Http\Response
     */
    public function show(DashboardArticle $dashboardArticle)
    {
        return $dashboardArticle;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DashboardArticle  $dashboardArticle
     * @return \Illuminate\Http\Response
     */
    public function edit(DashboardArticle $dashboardArticle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DashboardArticle  $dashboardArticle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DashboardArticle $dashboardArticle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DashboardArticle  $dashboardArticle
     * @return \Illuminate\Http\Response
     */
    public function destroy(DashboardArticle $dashboardArticle)
    {
        //
    }
}
