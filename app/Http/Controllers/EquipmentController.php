<?php
/**
 * Created by PhpStorm.
 * User: edgar971
 * Date: 10/15/15
 * Time: 2:59 PM
 */

namespace App\Http\Controllers;

use App\Models\Equipment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EquipmentController extends Controller {
    /*
     * List all equipment items
     */
    public function index() {
        $allEquipment = Equipment::all();
        return response()->json($allEquipment);

    }
    /*
     * Retrieve a specific item by its ID
     */
    public function getEquipment($id) {
        $single_equipment = Equipment::find($id);
        return response()->json($single_equipment);
    }
    /*
     * add equipment item
     */
    public function createEquipment(Request $request) {
        $equipment = Equipment::create($request->all());

        return response()->json($equipment);
    }
    /*
     * Delete equipment
     */
    public function deleteEquipment($id) {
        $equipment = Equipment::find($id);

        $equipment->delete();

        return response()->json('success');
    }
    /*
     * Update equipment
     */
    public function updateEquipment(Request $request,$id) {
        $equipment = Equipment::find($id);
        $equipment->title = $request->input('title');
        $equipment->description = $request->input('description');
        $equipment->status = $request->input('status');
        $equipment->save();

        return response()->json($equipment);

    }

}