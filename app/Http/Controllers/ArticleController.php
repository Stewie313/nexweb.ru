<?php

namespace HD\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use HD\Article;
use HD\User;
use HD\Country;

class ArticleController extends Controller
{
  public function show(){

  $articles=Article::all();

  if(view()->exists('default.articles')) {
    return view('default.articles')->withTitle("Articles")->withArticles($articles);
  }
  abort(404);
  }

  public function showArticle($id){

    //$user = User::find(1);
    //dump($user->articles);

    //$article=Article::find(5);
    //dump($article->user->name);

    //$country = Country::find(1);
    //dump($country->user);



    //$article=Article::findOrFail($id);

    $user=User::find(1);
    $roles=$user->roles;
    dump($roles);

    /*if(view()->exists('default.article')) {
      return view('default.article')->withTitle("Articles")->withArticle($article);
    }
    abort(404);*/
    }

}
