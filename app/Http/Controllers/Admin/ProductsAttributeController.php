<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Products\ProductAttributeRepositoryInterface;

class ProductsAttributeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $praRepo;

    public function __construct(ProductAttributeRepositoryInterface $praRepo)
    {
        $this->praRepo = $praRepo;
    }

    public function index()
    {
        $productattribute = $this->praRepo->getAll();

        return view('theme_admin.productattribute.list', ['productattribute' => $productattribute]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('theme_admin.productattribute.form_create');
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

            $data = $request->all();
            //... Validation here

            $productattribute = $this->praRepo->create($data);

            return redirect('admin/productattribute/list');

        } catch (\Exception $e) {
             return redirect()->back();
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
        $productattribute = $this->praRepo->find($id);

        return view('theme_admin.productattribute.detail', ['productattribute' => $productattribute]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $productattribute = $this->praRepo->find($id);
        return view("theme_admin.productattribute.form_edit",['productattribute'=>$productattribute]);
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

            $data = $request->all();

            //... Validation here

            $productattribute = $this->praRepo->update($id, $data);

            return redirect('admin/productattribute/list');

        } catch (\Exception $e) {
            return redirect()->back();
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
        $this->praRepo->delete($id);

        return redirect('admin/productattribute/list');
    }
}
