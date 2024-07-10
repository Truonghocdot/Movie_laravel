<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use App\Models\Movies;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(Request $req){
        if($req['film']){
            $movies = Movies::where('name','LIKE','%' . $req['film'] . "%" )->paginate(7);
            return view('admin.movies',compact('movies'));
        }else{
            $movies = Movies::paginate(7);
            return view('admin.movies',compact('movies'));
        }
    }

    public function detail_movie( Request $req, $slug){
        $client = new Client();
        $url = 'https://ophim1.com/phim/'; // URL của API bạn cần gọi
        try {
            $response = $client->request('GET', $url . $slug);
            $statusCode = $response->getStatusCode();
            $body = $response->getBody();
            $data = json_decode($body, true); // Chuyển đổi dữ liệu JSON sang mảng PHP
            
            $movie['name'] = $data['movie']['name'] ;
            $movie['status'] = $data['movie']['status'] ;
            $movie['origin_name'] = $data['movie']['origin_name'] ;
            $movie['content'] = $data['movie']['content'] ;
            $movie['type_release'] = $data['movie']['type'] ;
            $movie['time'] = $data['movie']['time'] ;
            $movie['episode_current'] = $data['movie']['episode_current'] ;
            $movie['episode_total'] = $data['movie']['episode_total'] ;
            $movie['quality'] = $data['movie']['quality'] ;
            $movie['lang'] = $data['movie']['lang'] ;
            $movie['theater_screen'] = $data['movie']['chieurap'] ;
            $movie['year'] = $data['movie']['year'] ;
            $movie['category'] = $data['movie']['category'] ;
            $movie['thumb_url'] = $data['movie']['thumb_url'] ;
            $movie['poster_url'] = $data['movie']['poster_url'] ;
            $movie['trailer_url'] = $data['movie']['trailer_url'];
            $movie['country'] = $data['movie']['country'] ;
            $movie['director'] = $data['movie']['director'] ;
            $movie['actor'] = $data['movie']['actor'] ;
            $movie['category'] = $data['movie']['category'] ;
            $movie['episodes'] = $data['episodes'][0]['server_data'] ;
            return view('admin.movie',compact('movie','slug'));
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Something went wrong!',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function delete_movie(Request $req){
        $movie = new Movies();
        $movie::where('slug',$req['slug'])->delete();
        return redirect()->back() ;    
        
    }

    public function add_new_film(Request $req){
        $client = new Client();
        $url = 'https://ophim1.com/phim/'; // URL của API bạn cần gọi
        try {
            $response = $client->request('GET', $url . $req['slug']);
            $statusCode = $response->getStatusCode();
            $body = $response->getBody();
            $data = json_decode($body, true); 
            $movie = new Movies();
            $movie->type = $data['movie']['tmdb']['type'] ;
            $movie->name = $data['movie']['name'];
            $movie->slug = $data['movie']['slug'];
            $movie->origin_name = $data['movie']['origin_name'];
            $movie->content = $data['movie']['content'] ;
            $movie->type_release = $data['movie']['type'] ;
            $movie->status = $data['movie']['status'] ;
            $movie->thumb_url = $data['movie']['thumb_url'] ;
            $movie->poster_url = $data['movie']['poster_url'] ;
            $movie->trailer_url = $data['movie']['trailer_url'] ;
            $movie->time = $data['movie']['time'] ;
            $movie->episode_current = $data['movie']['episode_current'] ;
            $movie->episode_total = $data['movie']['episode_total'] ;
            $movie->quality = $data['movie']['quality'] ;
            $movie->theater_screen = $data['movie']['chieurap'] ;
            $movie->lang = $data['movie']['lang'] ;
            $movie->year = $data['movie']['year'] ;
            $movie->actor = $data['movie']['actor'] ;
            $movie->director = $data['movie']['director'] ;
            $movie->view = 0;
            $movie->category = $data['movie']['category'] ;
            $movie->country = $data['movie']['country'] ;
            $movie->episodes = $data['episodes'][0]['server_data'] ;
            $movie->vietsub = $data['episodes'][0]['server_name'] ;

            $movies = new Movies();
            if($movies::where('name',$movie->name)->get()->count()){
                return response()->json(['error' => 'Thêm cái khác deii!']);
            };

            $movie->save();
            return response()->json(['success' =>'Oke r đấy!']);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Something went wrong!',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function movies_list_new(Request $req){
        $client = new Client();
        $url = 'https://ophim1.com/danh-sach/phim-moi-cap-nhat?page='; 
        if($req['page']){
            try{
                $response = $client->request('GET', $url . $req['page']);
                $statusCode = $response->getStatusCode();
                $body = $response->getBody();
                $data = json_decode($body, true)['items'];
                $movies = $data;
                return view('admin.fimn',compact('movies'));
            }catch(RequestException $e){
                return response()->json([
                            'error' => 'Something went wrong!',
                            'message' => $e->getMessage()
                        ], 500);
            }
        }else{
            try{
                $response = $client->request('GET', $url . '1');
                $statusCode = $response->getStatusCode();
                $body = $response->getBody();
                $data = json_decode($body, true)['items'];
            }catch(RequestException $e){
                return response()->json([
                    'error' => 'Something went wrong!',
                    'message' => $e->getMessage()
                ], 500);
            }
            $movies = $data;
            return view('admin.fimn',compact('movies'));
        }
    }
}
