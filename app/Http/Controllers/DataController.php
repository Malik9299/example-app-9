<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;
use Illuminate\Support\Facades\DB;
use App\Services\MyService;

class DataController extends Controller
{
    public function index()
    {
        // $data = Data::all();
        // return response()->json($data);
        // return Data::paginate(5);
        // return DB::table('data')->paginate(5);
        // return DB::table('data')->simplePaginate(5);

        // return view('data', [
        //     'data' => DB::table('data')->paginate(5)
        // ]);
        $data = Data::paginate(10); // 10 items per page

        //return view('data', ['data' => $data]);
        return view('data', ['data' => $data]);
    }


    public function showServices(MyService $myService)
    {
        $result = $myService->doSomething();
        return view('showServices', ['result' => $result]);
    }

    public function show($id)
    {
        $data =  Data::find($id);
        if (!empty($data)) {
            return response()->json($data);
        } else {
            return response()->json(["meaasge" => "Data not found"], 404);
        }
    }

    public function test()
    {
        echo "Working fine";
    }
    public function store(Request $request)
    {
        $data = new Data();
        $data->name = $request->name;
        $data->author = $request->author;
        $data->publish_date = $request->publish_date;
        $data->save();
        return response()->json(["meaasge" => "Data added"], 204);
    }

    public function update(Request $request, $id)
    {
        if (DB::table('data')->where('id', $id)->exists()) {
            $data =  Data::find($id);
            $data->name = is_null($request->name) ? $data->name : $request->name;
            $data->author = is_null($request->author) ? $data->author : $request->author;
            $data->publish_date = is_null($request->publish_date) ? $data->publish_date : $request->publish_date;
            $data->save();
            return response()->json(["meaasge" => "data updated"], 204);
        } else {
            return response()->json(["meaasge" => "Data not found"], 404);
        }
    }
    public function destroy(Request $request, $id)
    {
        if (DB::table('data')->where('id', $id)->exists()) {
            $data =  Data::find($id);
            $data->delete();
            return response()->json(["meaasge" => "Data deleted"], 204);
        } else {
            return response()->json(["meaasge" => "Data not found"], 404);
        }
    }


    public function viewData(Request $request)
    {
        return view('data', [
            'data' => Data::all(),
        ]);
    }
}
