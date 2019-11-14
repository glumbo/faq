<?php
namespace Glumbo\Faq\Http\Controllers;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Glumbo\Faq\Models\Faq;

Class FaqController extends Controller {

        public function index(){
            $faqs=Faq::all();
            return view('faq::index',['faqs'=>$faqs]);

        }
        public function create(){
            return view('faq::create');
        }
        public function edit($id){
            $faq=Faq::find($id);
            return view('faq::edit',['faq'=>$faq]);
        }
        public function store(Request $request){
            $validator = Validator::make($request->all(), [
                'question' => 'required',
                'answer' => 'required',
            ],
            [
                'required' => 'The :attribute field is required.',
            ]);
    
            if ($validator->fails()) {
                return redirect()->back()
                            ->withErrors($validator)
                            ->withInput();
            }
            $faq=new Faq;
            $faq->question = isset($request->question)?$request->question:null;
            $faq->answer = isset($request->answer)?$request->answer:null;
            $faq->save();

            return redirect()->route('faqs.index');  
        }
        public function update(Request $request,$id){
            $faq=Faq::find($id);
            $validator = Validator::make($request->all(), [
                'question' => 'required',
                'answer' => 'required',
            ],
            [
                'required' => 'The :attribute field is required.',
            ]);
    
            if ($validator->fails()) {
                return redirect()->back()
                            ->withErrors($validator)
                            ->withInput();
            }
            $faq->question = isset($request->question)?$request->question:null;
            $faq->answer = isset($request->answer)?$request->answer:null;
            $faq->save();

            return redirect()->route('faqs.index');  
        }

        public function delete($id){
            $faq=Faq::find($id);
            if(isset($faq))
                $faq->delete();
            return redirect()->back();
        }

}


?>