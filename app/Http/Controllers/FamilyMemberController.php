<?php

namespace App\Http\Controllers;

use App\Models\FamilyMember;
use Illuminate\Http\Request;

class FamilyMemberController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        //
    }

    public function index() {
        $familyMembers = FamilyMember::all();
        return response()->json($familyMembers);
    }

    public function show($id) {
        $familyMember = FamilyMember::find($id);
        return response()->json($familyMember);
    }

    public function create(Request $request) {
        $familyMember = new FamilyMember();
        $familyMember->first_name = $request->first_name;
        $familyMember->price = $request->price;
        $familyMember->description = $request->description;

        $familyMember->save();
        return response()->json($familyMember);
    }

    public function update(Request $request, $id) {
        $product = FamilyMember::find($id);

        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        $product->save();
        return response()->json($product);
    }

    public function destroy($id) {
        $product = FamilyMember::find($id);
        $product->delete();
        return response()->json('product removed successfully');
    }
}