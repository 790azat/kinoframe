<?php

namespace App\Http\Controllers;

use App\Models\getfilms;
use Illuminate\Http\Request;

class FilmsController extends Controller
{
    public function show()
    {
        $films = getfilms::paginate(16);

        return view('welcome', ['films' => $films]);
    }

    public function show_film($id)
    {
        $film = getfilms::all()->find($id);

        return view('film', ['film' => $film]);
    }

    public function search(Request $request)
    {
        $search = $request->input('search');

        $result = getfilms::where('name', 'LIKE', "%{$search}%")->orWhere('en_name', 'LIKE', "%{$search}%")->get();

        return view('search', ['films' => $result, 'search' => $search]);

    }

    public function fetch(Request $request)
    {
        if ($request->get('query')) {
            $query = $request->get('query');
            $data = getfilms::where('name', 'LIKE', "%{$query}%")->orWhere('en_name', 'LIKE', "%{$query}%")
                ->take(10)->get();
            $output = '<ul class="dropdown-menu p-0 border rounded shadow" style="display:block; position:relative">';
            foreach ($data as $row) {
                if ($data != ' ') {
                    $output .= '
       <li class="dropdown-item-text p-1 pl-2 border pr-3">
       <a class="mx-auto d-block" href="/film/' . $row->id . '"><img width="30px" class="rounded mr-2" src="' . $row->image . '">' . $row->name . '</a></li>
       ';
                }
            }
            $output .= '</ul>';
            echo $output;
        }
    }

    public function sort($category)
    {
        if ($category == 'сериал') {
            $film = getfilms::where('info', 'LIKE', "%Сезон%")->orWhere('info', 'LIKE', "%Серия%")->paginate(16);

            return view('categories', ['films' => $film, 'category' => $category]);
        }
        elseif ($category == 'американский') {
            $film = getfilms::where('info', 'LIKE', "%США%")->paginate(16);

            return view('categories', ['films' => $film, 'category' => $category]);
        }
        elseif ($category == 'английский') {
            $film = getfilms::where('info', 'LIKE', "%Великобритания%")->paginate(16);

            return view('categories', ['films' => $film, 'category' => $category]);
        }
        elseif ($category == 'индийский') {
            $film = getfilms::where('info', 'LIKE', "%Индия%")->paginate(16);

            return view('categories', ['films' => $film, 'category' => $category]);
        }
        elseif ($category == 'немецкий') {
            $film = getfilms::where('info', 'LIKE', "%Германия%")->paginate(16);

            return view('categories', ['films' => $film, 'category' => $category]);
        }
        elseif ($category == 'французский') {
            $film = getfilms::where('info', 'LIKE', "%Франция%")->paginate(16);

            return view('categories', ['films' => $film, 'category' => $category]);
        }
        else
        $film = getfilms::where('category', 'LIKE', "%{$category}%")->orWhere('category', 'LIKE', "{$category}")->paginate(16);

        return view('categories', ['films' => $film, 'category' => $category]);
    }

    public function new()
    {
        $films = getfilms::where('name', 'LIKE', '%2021%')->orWhere('name', 'LIKE', '%2020%')->paginate(16);

        return view('new', ['films' => $films]);
    }
}
