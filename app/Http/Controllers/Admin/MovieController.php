<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Models\Movies;
use GuzzleHttp\Exception\RequestException;

class MovieController extends Controller
{
    public function index(){
        $movies = Movies::paginate(10);
        return view('admin.movies',compact('movies'));    
        // $client = new Client();
        // $url = 'https://api.example.com/data'; // URL của API bạn cần gọi

        // try {
        //     $response = $client->request('GET', $url);
        //     $statusCode = $response->getStatusCode();
        //     $body = $response->getBody();
        //     $data = json_decode($body, true); // Chuyển đổi dữ liệu JSON sang mảng PHP

        //     return response()->json($data);
        // } catch (\Exception $e) {
        //     return response()->json([
        //         'error' => 'Something went wrong!',
        //         'message' => $e->getMessage()
        //     ], 500);
        // }
    }

    public function detail_movie($slug){
        return view('admin.movie');
    }

    public function add_new_film(Request $req){
        $client = new Client();
        $url = 'https://ophim1.com/phim/'; // URL của API bạn cần gọi

        try {
            $response = $client->request('GET', $url . $req['slug']);
            $statusCode = $response->getStatusCode();
            $body = $response->getBody();
            $data = json_decode($body, true); // Chuyển đổi dữ liệu JSON sang mảng PHP
            
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
            $movie->lang = $data['movie']['lang'] ;
            $movie->year = $data['movie']['year'] ;
            $movie->actor = $data['movie']['actor'] ;
            $movie->director = $data['movie']['director'] ;
            $movie->view = 0;
            $movie->category = $data['movie']['category'] ;
            $movie->country = $data['movie']['country'] ;
            $movie->episodes = $data['episodes'][0]['server_data'] ;
            $movie->vietsub = $data['episodes'][0]['server_name'] ;
            $movie->save();
            return redirect()->route('admin.movies');
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Something went wrong!',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function movies_list_new(Request $req){
        $client = new Client();
        $url = 'https://ophim1.com/danh-sach/phim-moi-cap-nhat?page='; // URL của API bạn cần gọi
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
