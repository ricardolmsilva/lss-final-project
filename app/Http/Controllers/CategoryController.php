<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private function allCategories(){
        return DB::table('categories')->get();
    }

    public function tutorialsByCategory($id){




            //$tutorial = select * from categories_tutorials where idCategoria=$idCategory
            //para cada um do resultado
            //select * from turorials where id=$tutorial->id

            $category = Category::find($id);

            $tutorials = [];

            foreach ($category->Tutorial as $tutorial) {
                array_push($tutorials, $tutorial);
            }

            return view('frontend.categories.tutorialsByCategory', ['tutorials'=>$tutorials, 'category'=>$category]);



    }



    public function index()
    {
        $categorias = Category::all();

        return $categorias;

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
     * @param  \App\Category  $categoria
     * @return \Illuminate\Http\Response
     */
    public function show(Category $categoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $categoria
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $categoria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $categoria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $categoria)
    {
        //
    }
}
