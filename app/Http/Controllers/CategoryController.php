<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $categories = Category::where('status', 1)->get();
    return view('categories.read', $categories);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('categories.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    try {
      Category::create($request->all());
      // echo $request;

      echo json_encode([
        'status' => 200,
        'response' => 'resource created successfully'
      ]);
    } catch (\Throwable $th) {
      throw $th;
    }
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    return Category::where('id', $id)->get();
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $category = Category::where('id', $id)->get();
    return view('categories.update', $category);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    try {
      $category = Category::where('id', $id);

      $category->update($request->all());

      echo json_encode([
        'status' => 204,
        'response' => 'resource updated successfully'
      ]);
    } catch (\Throwable $th) {
      throw $th;
    }
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    try {
      Category::where('id', $id)->delete();
      echo json_encode([
        'status' => 204,
        'response' => 'resource deleted successfully',
        'data' => []
      ]);
    } catch (\Throwable $th) {
      throw $th;
    }
  }
}
