<?php
	namespace App\Http\Controllers;
	
	use App\Models\Bil;
	use Illuminate\Http\Request;
	use Illuminate\Validation\Rule;
	
	class BilarController extends Controller {
		
		public function index() {
			
			$posts = Bil::all();
			
			return $posts;
		}
		
		public function read($id) {
            
            $posts = Bil::findOrFail($id);         
            return $posts;
        }
		public function getByRegnr($regnr) {
            
            $posts = Bil::where('regnr', '=', $regnr)->firstOrFail();
            return $posts;
        }
        public function create(Request $request)
        {

            $this->validate($request, [
                    
                'regnr' => 'required|filled',
                'marke' => 'required|alpha_num',
                'modell' => 'alpha_num',
                'arsmodell' => 'integer'
                
                ]);

            Bil::create($request->all());

            //Allt ok, returnera svar
            return ['success' => true];


        }
		
		  public function update(Request $request, $id)
        {
            $post = Bil::findOrFail($id);

            $data = $this->validate($request, [
                    
                'regnr' => 'filled|alpha_num',
                'marke' => 'filled|alpha_num',
                'modell' => 'filled|alpha_num',
                'arsmodell' => 'filled|integer'
                
            ]);

            $post->fill($data);
            $post->save();

            //Allt ok, returnera svar
            return ['success' => true];

        }
		
		public function delete($id) {
            
            $post = Bil::findOrFail($id);
            $post->delete();
              
            return ['success' => true];

        }





	}
?>