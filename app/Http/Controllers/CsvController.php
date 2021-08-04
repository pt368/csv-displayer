<?php

namespace App\Http\Controllers;

use App\Models\Csv;
use League\Csv\Reader;
use Illuminate\Http\Request;

class CsvController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'file' => 'required|mimes:csv,txt|max:5000'
            ]);
        if($request->file()){
            $fileName = time().'_'.$request->file->getClientOriginalName();
            $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');
            $newFile =  new Csv;
            $newFile->name = $fileName;
            
            $newFile->path = $filePath;
            $newFile->save();
            return response()->json(
                [
                    'success'=>true,
                    'file'=>$newFile->toArray()
                ]
            );
        }
    }

    public function show( $csv){
        try {
            $csv = Csv::findOrFail($csv);
            $data = Reader::createFromPath(storage_path('app/public/'). ($csv->path), 'r');
            $data->setHeaderOffset(0);
            return response()->json(['success'=>true,'data'=>$data]);
        } catch (\Throwable $th) {
            return response()->json(['success'=>false,'error'=>$th->getMessage()],404);
        }
    }
}
